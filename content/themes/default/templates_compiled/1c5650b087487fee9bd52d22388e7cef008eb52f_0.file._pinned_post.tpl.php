<?php
/* Smarty version 4.3.2, created on 2023-10-14 04:00:46
  from '/www/wwwroot/m.kidhod.la/content/themes/default/templates/_pinned_post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652a126eac9335_10674386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c5650b087487fee9bd52d22388e7cef008eb52f' => 
    array (
      0 => '/www/wwwroot/m.kidhod.la/content/themes/default/templates/_pinned_post.tpl',
      1 => 1694155624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.tpl' => 1,
  ),
),false)) {
function content_652a126eac9335_10674386 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- posts-filter -->
<div class="posts-filter">
  <span><?php echo __("Pinned Post");?>
</span>
</div>
<!-- posts-filter -->

<?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('standalone'=>true,'pinned'=>true), 0, false);
}
}
