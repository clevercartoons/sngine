<?php
/* Smarty version 4.3.0, created on 2023-01-03 16:20:08
  from 'C:\xampp\htdocs\heavenonearth\Script\content\themes\default\templates\_announcements.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b455b84577a3_14934852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92fc1aa48cebc40bcb0c13b8a139da7cb9e12c54' => 
    array (
      0 => 'C:\\xampp\\htdocs\\heavenonearth\\Script\\content\\themes\\default\\templates\\_announcements.tpl',
      1 => 1656669724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b455b84577a3_14934852 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'announcement');
$_smarty_tpl->tpl_vars['announcement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->do_else = false;
?>
  <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['announcement']->value['type'];?>
 text-with-list">
    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
      <button type="button" class="close float-right js_announcment-remover" data-id="<?php echo $_smarty_tpl->tpl_vars['announcement']->value['announcement_id'];?>
"><span>&times;</span></button>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['announcement']->value['title']) {?><div class="title"><?php echo $_smarty_tpl->tpl_vars['announcement']->value['title'];?>
</div><?php }?>
    <?php echo $_smarty_tpl->tpl_vars['announcement']->value['code'];?>

  </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
