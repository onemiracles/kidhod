<?php
/* Smarty version 4.3.2, created on 2023-09-15 18:27:42
  from '/www/wwwroot/m.kidhod.la/content/themes/default/templates/__feeds_funding.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6504a21e3c6403_19716270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e03d8c619efceaf1661c362f0f3d1a2f1b0c04dc' => 
    array (
      0 => '/www/wwwroot/m.kidhod.la/content/themes/default/templates/__feeds_funding.tpl',
      1 => 1694155585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_need_subscription.tpl' => 1,
  ),
),false)) {
function content_6504a21e3c6403_19716270 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/m.kidhod.la/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<div class="<?php if ($_smarty_tpl->tpl_vars['_iteration']->value == 1) {?>col-sm-12 col-md-8 col-lg-6<?php } else { ?>col-sm-6 col-md-4 col-lg-3<?php }?>">
  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['funding']->value['post_id'];?>
" class="blog-container <?php if ($_smarty_tpl->tpl_vars['_iteration']->value == 1) {?>primary<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['funding']->value['needs_subscription']) {?>
      <div class="ptb20 plr20">
        <?php $_smarty_tpl->_subTemplateRender('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </div>
    <?php } else { ?>
      <div class="blog-image">
        <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['funding']->value['funding']['cover_image'];?>
">
      </div>
      <div class="blog-source">
        <strong><?php echo print_money($_smarty_tpl->tpl_vars['funding']->value['funding']['raised_amount']);?>
 <?php echo __("Raised of");?>
 <?php echo print_money($_smarty_tpl->tpl_vars['funding']->value['funding']['amount']);?>
</strong>
      </div>
      <div class="blog-content">
        <h3><?php echo $_smarty_tpl->tpl_vars['funding']->value['funding']['title'];?>
</h3>
        <div class="text"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['funding']->value['text'],400);?>
</div>
        <div>
          <div class="post-avatar">
            <div class="post-avatar-picture small" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['funding']->value['post_author_picture'];?>
');">
            </div>
          </div>
          <div class="post-meta">
            <span class="text-link">
              <?php echo $_smarty_tpl->tpl_vars['funding']->value['post_author_name'];?>

            </span>
            <div class="post-time">
              <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['funding']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['funding']->value['time'];?>
</span>
            </div>
          </div>
        </div>
      </div>
    <?php }?>
    <div class="blog-more">
      <span><?php echo __("More");?>
</span>
    </div>
  </a>
</div><?php }
}
