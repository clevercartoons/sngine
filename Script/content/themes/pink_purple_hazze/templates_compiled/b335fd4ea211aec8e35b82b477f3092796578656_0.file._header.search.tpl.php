<?php
/* Smarty version 4.3.0, created on 2023-01-03 16:20:08
  from 'C:\xampp\htdocs\heavenonearth\Script\content\themes\default\templates\_header.search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63b455b817f8e2_35063428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b335fd4ea211aec8e35b82b477f3092796578656' => 
    array (
      0 => 'C:\\xampp\\htdocs\\heavenonearth\\Script\\content\\themes\\default\\templates\\_header.search.tpl',
      1 => 1647975624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ajax.search.tpl' => 1,
  ),
),false)) {
function content_63b455b817f8e2_35063428 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="search-wrapper d-none d-md-block">
  <form>
    <div class="search-input-icon">
      <i class="fa fa-search"></i>
    </div>
    <input id="search-input" type="text" class="form-control" placeholder='<?php echo __("Search");?>
' autocomplete="off">
    <div id="search-results" class="dropdown-menu dropdown-widget dropdown-search js_dropdown-keepopen">
      <div class="dropdown-widget-header">
        <span class="title"><?php echo __("Search Results");?>
</span>
      </div>
      <div class="dropdown-widget-body">
        <div class="loader loader_small ptb10"></div>
      </div>
      <a class="dropdown-widget-footer" id="search-results-all" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/"><?php echo __("See All Results");?>
</a>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['search_log']) {?>
      <div id="search-history" class="dropdown-menu dropdown-widget dropdown-search js_dropdown-keepopen">
        <div class="dropdown-widget-header">
          <span class="text-link float-right js_clear-searches">
            <?php echo __("Clear");?>

          </span>
          <span class="title"><i class="fa fa-clock mr5"></i><?php echo __("Recent Searches");?>
</span>
        </div>
        <div class="dropdown-widget-body">
          <?php $_smarty_tpl->_subTemplateRender('file:ajax.search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('results'=>$_smarty_tpl->tpl_vars['user']->value->_data['search_log']), 0, false);
?>
        </div>
        <a class="dropdown-widget-footer" id="search-results-all" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/"><?php echo __("Advanced Search");?>
</a>
      </div>
    <?php }?>
  </form>
</div><?php }
}
