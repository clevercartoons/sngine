<?php
/* Smarty version 4.3.0, created on 2023-01-01 16:20:12
  from 'C:\xampp\htdocs\sngineplatform\Script\content\themes\default\templates\_header.notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b1b2bcb41961_01724503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f279174157157c226ad3bd0961f1d1fe1f8f4fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sngineplatform\\Script\\content\\themes\\default\\templates\\_header.notifications.tpl',
      1 => 1647975624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:__feeds_notification.tpl' => 1,
  ),
),false)) {
function content_63b1b2bcb41961_01724503 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="dropdown js_live-notifications">
  <a href="#" data-toggle="dropdown" data-display="static">
    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"header-notifications",'width'=>"20px",'height'=>"20px",'style'=>"fill: #fff"), 0, false);
?>
    <span class="counter red shadow-sm <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_live_notifications_counter'] == 0) {?>x-hidden<?php }?>">
      <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_live_notifications_counter'];?>

    </span>
  </a>
  <div class="dropdown-menu dropdown-menu-right dropdown-widget js_dropdown-keepopen">
    <div class="dropdown-widget-header">
      <span class="title"><?php echo __("Notifications");?>
</span>

      <label class="switch sm float-right" for="notifications_sound">
        <input type="checkbox" class="js_notifications-sound-toggle" name="notifications_sound" id="notifications_sound" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['notifications_sound']) {?>checked<?php }?>>
        <span class="slider round"></span>
      </label>
      <div class="float-right mr5">
        <?php echo __("Alert Sound");?>

      </div>
    </div>
    <div class="dropdown-widget-body">
      <div class="js_scroller">
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['notifications']) {?>
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['notifications'], 'notification');
$_smarty_tpl->tpl_vars['notification']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notification']->value) {
$_smarty_tpl->tpl_vars['notification']->do_else = false;
?>
              <?php $_smarty_tpl->_subTemplateRender('file:__feeds_notification.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        <?php } else { ?>
          <p class="text-center text-muted mt10">
            <?php echo __("No notifications");?>

          </p>
        <?php }?>
      </div>
    </div>
    <a class="dropdown-widget-footer" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/notifications"><?php echo __("See All");?>
</a>
  </div>
</li><?php }
}
