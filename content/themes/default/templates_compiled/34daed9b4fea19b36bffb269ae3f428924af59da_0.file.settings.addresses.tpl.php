<?php
/* Smarty version 4.3.2, created on 2023-09-10 23:49:28
  from '/www/wwwroot/m.kidhod.la/content/themes/default/templates/settings.addresses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64fe5608145ca1_91458317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34daed9b4fea19b36bffb269ae3f428924af59da' => 
    array (
      0 => '/www/wwwroot/m.kidhod.la/content/themes/default/templates/settings.addresses.tpl',
      1 => 1694155608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:_addresses.tpl' => 1,
  ),
),false)) {
function content_64fe5608145ca1_91458317 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card-header with-icon">
  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), 0, false);
?>
  <?php echo __("Your Addresses");?>

</div>
<div class="card-body">
  <?php $_smarty_tpl->_subTemplateRender('file:_addresses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div><?php }
}
