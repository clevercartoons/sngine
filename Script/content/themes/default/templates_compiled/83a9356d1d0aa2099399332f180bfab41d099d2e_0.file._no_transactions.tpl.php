<?php
/* Smarty version 4.3.0, created on 2023-01-02 09:43:03
  from 'C:\xampp\htdocs\sngineplatform\Script\content\themes\default\templates\_no_transactions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b2a727dcc134_29901647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83a9356d1d0aa2099399332f180bfab41d099d2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sngineplatform\\Script\\content\\themes\\default\\templates\\_no_transactions.tpl',
      1 => 1667148467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_63b2a727dcc134_29901647 (Smarty_Internal_Template $_smarty_tpl) {
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
