<?php
/* Smarty version 4.3.0, created on 2023-01-05 14:55:07
  from 'C:\xampp\htdocs\heavenonearth\Script\content\themes\default\templates\_no_transactions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b6e4cbb1bc03_15099003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8c4cbfe49c88e61f5d766debbb7194d5a60e627' => 
    array (
      0 => 'C:\\xampp\\htdocs\\heavenonearth\\Script\\content\\themes\\default\\templates\\_no_transactions.tpl',
      1 => 1667148467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_63b6e4cbb1bc03_15099003 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- no transaction -->
<div class="text-center text-muted">
  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"transaction",'class'=>"mb20",'width'=>"96px",'height'=>"96px"), 0, false);
?>
  <div class="text-md">
    <span style="padding: 8px 20px; background: #ececec; border-radius: 18px; font-weight: bold;"><?php echo __("Looks like you don't have any transaction yet");?>
</span>
  </div>
</div>
<!-- no transaction --><?php }
}
