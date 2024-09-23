<?php
/* Smarty version 4.3.2, created on 2023-09-15 18:27:42
  from '/www/wwwroot/m.kidhod.la/content/themes/default/templates/funding.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6504a21e3702d4_52443018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d2d1be5b85697a60d2632ffc72d8a7918518b5a' => 
    array (
      0 => '/www/wwwroot/m.kidhod.la/content/themes/default/templates/funding.tpl',
      1 => 1694155618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_funding.tpl' => 1,
    'file:_no_data.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_6504a21e3702d4_52443018 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
  <!-- page header -->
  <div class="page-header">
    <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_transfer_money_rywa.svg">
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="inner">
      <h2><?php echo __("Funding");?>
</h2>
      <p class="text-xlg"><?php echo __($_smarty_tpl->tpl_vars['system']->value['system_description_funding']);?>
</p>
    </div>
  </div>
  <!-- page header -->
<?php }?>


<!-- page content -->
<div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> mt20 sg-offcanvas">
  <div class="row">

    <!-- side panel -->
    <div class="col-12 d-block d-md-none sg-offcanvas-sidebar">
      <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <!-- side panel -->

    <!-- content panel -->
    <div class="col-12 sg-offcanvas-mainbar">
      <div class="blogs-wrapper">
        <?php if ($_smarty_tpl->tpl_vars['fundings']->value) {?>
          <ul class="row">
            <!-- fundings -->
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fundings']->value, 'funding');
$_smarty_tpl->tpl_vars['funding']->iteration = 0;
$_smarty_tpl->tpl_vars['funding']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['funding']->value) {
$_smarty_tpl->tpl_vars['funding']->do_else = false;
$_smarty_tpl->tpl_vars['funding']->iteration++;
$__foreach_funding_0_saved = $_smarty_tpl->tpl_vars['funding'];
?>
              <?php $_smarty_tpl->_subTemplateRender('file:__feeds_funding.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_iteration'=>$_smarty_tpl->tpl_vars['funding']->iteration), 0, true);
?>
            <?php
$_smarty_tpl->tpl_vars['funding'] = $__foreach_funding_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <!-- fundings -->
          </ul>

          <!-- see-more -->
          <div class="alert alert-post see-more js_see-more" data-get="fundings">
            <span><?php echo __("More Funding");?>
</span>
            <div class="loader loader_small x-hidden"></div>
          </div>
          <!-- see-more -->
        <?php } else { ?>
          <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
      </div>
    </div>
    <!-- content panel -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
