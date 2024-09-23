<?php
/* Smarty version 4.3.2, created on 2023-09-10 23:39:10
  from '/www/wwwroot/m.kidhod.la/content/themes/default/templates/_no_transactions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64fe539e261949_05472195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35ed418ccb1af22aba26c709a17f24e712412e75' => 
    array (
      0 => '/www/wwwroot/m.kidhod.la/content/themes/default/templates/_no_transactions.tpl',
      1 => 1694155569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_64fe539e261949_05472195 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- no transaction -->
<div class="text-center text-muted">
  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"transaction",'class'=>"mb20",'width'=>"56px",'height'=>"56px"), 0, false);
?>
  <div class="text-md">
    <span class="no-data"><?php echo __("Looks like you don't have any transaction yet");?>
</span>
  </div>
</div>
<!-- no transaction --><?php }
}
