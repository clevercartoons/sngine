<?php
/* Smarty version 4.3.0, created on 2023-01-02 14:15:16
  from 'C:\xampp\htdocs\sngineplatform\Script\content\themes\default\templates\ajax.chat.messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b2e6f4115e38_06058840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e2e1e504a37a73e535f3fa261e4509d51baf0a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sngineplatform\\Script\\content\\themes\\default\\templates\\ajax.chat.messages.tpl',
      1 => 1647975787,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_message.tpl' => 1,
  ),
),false)) {
function content_63b2e6f4115e38_06058840 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
  <?php $_smarty_tpl->_subTemplateRender('file:__feeds_message.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
