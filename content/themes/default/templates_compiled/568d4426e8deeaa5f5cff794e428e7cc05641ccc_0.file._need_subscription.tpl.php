<?php
/* Smarty version 4.3.2, created on 2023-09-10 22:45:53
  from '/www/wwwroot/m.kidhod.la/content/themes/default/templates/_need_subscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64fe4721df59b1_23475683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '568d4426e8deeaa5f5cff794e428e7cc05641ccc' => 
    array (
      0 => '/www/wwwroot/m.kidhod.la/content/themes/default/templates/_need_subscription.tpl',
      1 => 1694155586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_64fe4721df59b1_23475683 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/m.kidhod.la/vendor/smarty/smarty/libs/plugins/modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>
<!-- need subscription -->
<div class="text-center text-muted">
  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"locked",'class'=>"main-icon mb20",'width'=>"56px",'height'=>"56px"), 0, false);
?>
  <div class="text-md">
    <span style="padding: 8px 20px; background: #ececec; border-radius: 18px; font-weight: bold; font-size: 13px;">
      <?php if ($_smarty_tpl->tpl_vars['price']->value) {?>
        <?php echo __("SUBSCRIBE TO SEE THIS");?>
 <?php echo __(mb_strtoupper((string) $_smarty_tpl->tpl_vars['node_type']->value ?? '', 'UTF-8'));?>
 <?php echo __("CONTENT");?>

      <?php } else { ?>
        <?php echo __("PAID CONTENT");?>

      <?php }?>
    </span>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['price']->value) {?>
    <div class="d-grid">
      <button class="btn btn-info rounded rounded-pill mt20" data-toggle="modal" data-url="monetization/controller.php?do=get_plans&node_id=<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
&node_type=<?php echo $_smarty_tpl->tpl_vars['node_type']->value;?>
" data-size="large">
        <i class="fa fa-money-check-alt mr5"></i><?php echo __("SUBSCRIBE");?>
 <?php echo __("STARTING FROM");?>
 (<?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['price']->value,2));?>
)
      </button>
    </div>
  <?php }?>
</div>
<!-- need subscription --><?php }
}
