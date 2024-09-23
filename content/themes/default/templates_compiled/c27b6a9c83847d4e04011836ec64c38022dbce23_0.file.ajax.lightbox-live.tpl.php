<?php
/* Smarty version 4.3.2, created on 2023-10-12 01:08:56
  from '/www/wwwroot/m.kidhod.la/content/themes/default/templates/ajax.lightbox-live.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65274728320524_68241980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c27b6a9c83847d4e04011836ec64c38022dbce23' => 
    array (
      0 => '/www/wwwroot/m.kidhod.la/content/themes/default/templates/ajax.lightbox-live.tpl',
      1 => 1694155595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post_live.tpl' => 1,
  ),
),false)) {
function content_65274728320524_68241980 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="lightbox-post" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
  <div class="js_scroller" data-slimScroll-height="100%">
    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post_live.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>
</div><?php }
}
