<?php
/* Smarty version 4.3.2, created on 2023-09-10 08:25:32
  from '/www/wwwroot/m.kidhod.la/content/themes/default/templates/__categories.recursive_options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64fd7d7c125892_95590962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1336db9783b6f73cf3b2c8fadb2b9b23a78d3604' => 
    array (
      0 => '/www/wwwroot/m.kidhod.la/content/themes/default/templates/__categories.recursive_options.tpl',
      1 => 1694155622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__categories.recursive_options.tpl' => 2,
  ),
),false)) {
function content_64fd7d7c125892_95590962 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/m.kidhod.la/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<option <?php if ($_smarty_tpl->tpl_vars['data_category']->value == $_smarty_tpl->tpl_vars['category']->value['category_id']) {?>selected style="font-weight: 600;" class="bg-info" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
">
  <?php echo str_repeat("- - ",$_smarty_tpl->tpl_vars['category']->value['iteration']);
echo __(smarty_modifier_truncate($_smarty_tpl->tpl_vars['category']->value['category_name'],30));?>

</option>
<?php if ($_smarty_tpl->tpl_vars['category']->value['sub_categories']) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['sub_categories'], '_category');
$_smarty_tpl->tpl_vars['_category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_category']->value) {
$_smarty_tpl->tpl_vars['_category']->do_else = false;
?>
    <?php $_smarty_tpl->_subTemplateRender('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('category'=>$_smarty_tpl->tpl_vars['_category']->value), 0, true);
?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
