<?php
/* Smarty version 4.3.0, created on 2023-01-05 06:45:52
  from 'C:\xampp\htdocs\heavenonearth\Script\content\themes\default\templates\ajax.live.conversations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b67220cdf5a4_57984857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f2761aef245493553942bd31c6ae1be279b5bd7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\heavenonearth\\Script\\content\\themes\\default\\templates\\ajax.live.conversations.tpl',
      1 => 1647975803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_conversation.tpl' => 1,
  ),
),false)) {
function content_63b67220cdf5a4_57984857 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['conversations']->value, 'conversation');
$_smarty_tpl->tpl_vars['conversation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conversation']->value) {
$_smarty_tpl->tpl_vars['conversation']->do_else = false;
?>
  <?php $_smarty_tpl->_subTemplateRender('file:__feeds_conversation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
