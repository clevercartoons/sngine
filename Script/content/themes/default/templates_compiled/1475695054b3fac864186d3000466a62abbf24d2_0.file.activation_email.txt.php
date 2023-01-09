<?php
/* Smarty version 4.3.0, created on 2023-01-02 09:58:53
  from 'C:\xampp\htdocs\sngineplatform\Script\content\themes\default\templates\emails\activation_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b2aadd80e599_58148796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1475695054b3fac864186d3000466a62abbf24d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sngineplatform\\Script\\content\\themes\\default\\templates\\emails\\activation_email.txt',
      1 => 1648040155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b2aadd80e599_58148796 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>
 <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
,

<?php echo __("To complete the activation process, please follow this link");?>
:
<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/activation/<?php echo $_smarty_tpl->tpl_vars['email_verification_code']->value;?>


<?php echo __("Welcome to");?>
 <?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>


<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
 <?php echo __("Team");
}
}
