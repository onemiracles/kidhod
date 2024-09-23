<?php
/* Smarty version 4.3.2, created on 2023-09-10 16:13:26
  from '/www/wwwroot/m.kidhod.la/content/themes/default/templates/__feeds_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64fdeb26a7eee2_01310661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '318ce57f1380136039469274676de2231d2d1d8f' => 
    array (
      0 => '/www/wwwroot/m.kidhod.la/content/themes/default/templates/__feeds_product.tpl',
      1 => 1694155606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_need_subscription.tpl' => 1,
    'file:__svg_icons.tpl' => 2,
  ),
),false)) {
function content_64fdeb26a7eee2_01310661 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-6 col-lg-4">
  <div class="card product <?php if ($_smarty_tpl->tpl_vars['_boosted']->value) {?>boosted<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['_boosted']->value) {?>
      <div class="boosted-icon" data-bs-toggle="tooltip" title="<?php echo __("Promoted");?>
">
        <i class="fa fa-bullhorn"></i>
      </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['post']->value['needs_subscription']) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
        <div class="ptb20 plr20">
          <?php $_smarty_tpl->_subTemplateRender('file:_need_subscription.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
      </a>
    <?php } else { ?>
      <div class="product-image">
        <div class="product-price">
          <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['price'] > 0) {?>
            <?php echo print_money($_smarty_tpl->tpl_vars['post']->value['product']['price'],$_smarty_tpl->tpl_vars['post']->value['product']['symbol'],$_smarty_tpl->tpl_vars['post']->value['product']['dir']);?>

          <?php } else { ?>
            <?php echo __("Free");?>

          <?php }?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['post']->value['photos_num'] > 0) {?>
          <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['photos'][0]['source'];?>
">
        <?php } else { ?>
          <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/blank_product.png">
        <?php }?>
        <div class="product-overlay">
          <a class="btn btn-sm btn-outline-secondary rounded-pill" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
            <?php echo __("More");?>

          </a>
        </div>
      </div>
      <div class="product-info">
        <div class="product-meta title">
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['post']->value['product']['name'];?>
</a>
          <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['status'] == "new") {?>
            <span class="badge bg-info"><?php echo __("New");?>
</span>
          <?php } else { ?>
            <span class="badge bg-info"><?php echo __("Used");?>
</span>
          <?php }?>
        </div>
        <div class="product-meta">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"market",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, false);
?>
          <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['available']) {?>
            <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['quantity'] > 0) {?>
              <span class="badge badge-lg bg-light text-success"><?php echo __("In stock");?>
</span>
            <?php } else { ?>
              <span class="badge badge-lg bg-light text-danger"><?php echo __("Out of stock");?>
</span>
            <?php }?>
          <?php } else { ?>
            <span class="badge badge-lg bg-light text-danger"><?php echo __("SOLD");?>
</span>
          <?php }?>
        </div>
        <div class="product-meta">
          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon mr5",'width'=>"24px",'height'=>"24px"), 0, true);
?>
          <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['location']) {
echo $_smarty_tpl->tpl_vars['post']->value['product']['location'];
} else {
echo __("N/A");
}?>
        </div>
      </div>
    <?php }?>
  </div>
</div><?php }
}
