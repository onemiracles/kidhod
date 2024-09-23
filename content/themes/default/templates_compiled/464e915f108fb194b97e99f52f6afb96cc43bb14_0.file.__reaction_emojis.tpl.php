<?php
/* Smarty version 4.3.2, created on 2023-09-10 05:13:01
  from '/www/wwwroot/m.kidhod.la/content/themes/default/templates/__reaction_emojis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64fd505dd85f57_13653788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '464e915f108fb194b97e99f52f6afb96cc43bb14' => 
    array (
      0 => '/www/wwwroot/m.kidhod.la/content/themes/default/templates/__reaction_emojis.tpl',
      1 => 1694155596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fd505dd85f57_13653788 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- reaction -->
<div class="emoji">
  <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['reactions']->value[$_smarty_tpl->tpl_vars['_reaction']->value]['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['reactions']->value[$_smarty_tpl->tpl_vars['_reaction']->value]['title'];?>
" />
</div>
<!-- reaction --><?php }
}
