<?php
/* Smarty version 4.3.2, created on 2023-09-10 23:49:15
  from '/www/wwwroot/m.kidhod.la/content/themes/default/templates/settings.apps.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64fe55fb819433_89848461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5b9668cbae9659c626ce649fd27355aab70c59d' => 
    array (
      0 => '/www/wwwroot/m.kidhod.la/content/themes/default/templates/settings.apps.tpl',
      1 => 1694155596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:_no_data.tpl' => 1,
  ),
),false)) {
function content_64fe55fb819433_89848461 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card-header with-icon">
  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"apps",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), 0, false);
?>
  <?php echo __("Apps");?>

</div>
<div class="card-body">
  <div class="alert alert-info">
    <div class="text">
      <strong><?php echo __("Apps");?>
</strong><br>
      <?php echo __("These are apps you've used to log into. They can receive information you chose to share with them.");?>

    </div>
  </div>

  <?php if ($_smarty_tpl->tpl_vars['apps']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['apps']->value, 'app', true);
$_smarty_tpl->tpl_vars['app']->iteration = 0;
$_smarty_tpl->tpl_vars['app']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['app']->value) {
$_smarty_tpl->tpl_vars['app']->do_else = false;
$_smarty_tpl->tpl_vars['app']->iteration++;
$_smarty_tpl->tpl_vars['app']->last = $_smarty_tpl->tpl_vars['app']->iteration === $_smarty_tpl->tpl_vars['app']->total;
$__foreach_app_0_saved = $_smarty_tpl->tpl_vars['app'];
?>
      <div class="form-table-row <?php if ($_smarty_tpl->tpl_vars['app']->last) {?>mb0<?php }?>">
        <div class="avatar">
          <img class="tbl-image app-icon" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['app']->value['app_icon'];?>
">
        </div>
        <div>
          <div class="form-label h6 mb5"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_name'];?>
</div>
          <div class="form-text d-none d-sm-block"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_description'];?>
</div>
        </div>
        <div class="text-end">
          <button class="btn btn-sm btn-danger js_delete-user-app" data-id="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_auth_id'];?>
">
            <i class="fas fa-trash mr5"></i><?php echo __("Remove");?>

          </button>
        </div>
      </div>
    <?php
$_smarty_tpl->tpl_vars['app'] = $__foreach_app_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }?>
</div><?php }
}
