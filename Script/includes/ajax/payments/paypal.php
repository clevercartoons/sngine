<?php

/**
 * ajax -> payments -> paypal
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// user access
user_access(true, true);

// check if PayPal enabled
if (!$system['paypal_enabled']) {
  modal("MESSAGE", __("Error"), __("This feature has been disabled by the admin"));
}

try {

  switch ($_POST['handle']) {
    case 'packages':
      // valid inputs
      if (!isset($_POST['package_id']) || !is_numeric($_POST['package_id'])) {
        _error(400);
      }

      // get package
      $package = $user->get_package($_POST['package_id']);
      if (!$package) {
        _error(400);
      }
      /* check if user already subscribed to this package */
      if ($user->_data['user_subscribed'] && $user->_data['user_package'] == $package['package_id']) {
        modal("SUCCESS", __("Subscribed"), __("You already subscribed to this package, Please select different package"));
      }

      // get paypal link
      $link = paypal("packages", $package['price'], $package['package_id']);
      break;

    case 'wallet':
      // valid inputs
      if (!isset($_POST['price']) || !is_numeric($_POST['price'])) {
        _error(400);
      }

      // get paypal link
      $link = paypal("wallet", $_POST['price']);
      break;

    case 'donate':
      // valid inputs
      if (!isset($_POST['post_id']) || !is_numeric($_POST['post_id'])) {
        _error(400);
      }

      // get post
      $post = $user->get_post($_POST['post_id']);
      if (!$post) {
        _error(400);
      }

      // get paypal link
      $link = paypal("donate", $_POST['price'], $_POST['post_id']);
      break;

    case 'subscribe':
      // valid inputs
      if (!isset($_POST['node_id']) || !is_numeric($_POST['node_id'])) {
        _error(400);
      }

      // get node
      switch ($_POST['node_type']) {
        case 'user':
          // get user
          $node = $user->get_user($_POST['node_id']);
          if (!$node) {
            _error(400);
          }
          $price = $node['user_monetization_price'];
          break;

        case 'page':
          // get page
          $node = $user->get_page($_POST['node_id']);
          if (!$node) {
            _error(400);
          }
          $price = $node['page_monetization_price'];
          break;

        case 'group':
          // get group
          $node = $user->get_group($_POST['node_id']);
          if (!$node) {
            _error(400);
          }
          $price = $node['group_monetization_price'];
          break;

        default:
          _error(400);
          break;
      }
      /* check if user already subscribed to this node */
      if ($user->is_subscribed($_POST['node_id'], $_POST['node_type'])) {
        modal("SUCCESS", __("Subscribed"), __("You already subscribed to this") . " " . __($_POST['node_type']));
      }

      // get paypal link
      $link = paypal("subscribe", $price, $_POST['node_id'], $_POST['node_type']);
      break;

    default:
      _error(400);
      break;
  }

  // return & exit
  return_json(array('callback' => 'window.location.href = "' . $link . '";'));
} catch (Exception $e) {
  modal("ERROR", __("Error"), $e->getMessage());
}
