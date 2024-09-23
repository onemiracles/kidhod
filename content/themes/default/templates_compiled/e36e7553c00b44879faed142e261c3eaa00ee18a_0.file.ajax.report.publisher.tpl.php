<?php
/* Smarty version 4.3.2, created on 2023-10-06 07:16:11
  from '/www/wwwroot/m.kidhod.la/content/themes/default/templates/ajax.report.publisher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_651fb43b8c5473_78611122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e36e7553c00b44879faed142e261c3eaa00ee18a' => 
    array (
      0 => '/www/wwwroot/m.kidhod.la/content/themes/default/templates/ajax.report.publisher.tpl',
      1 => 1694155603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:__categories.recursive_options.tpl' => 1,
  ),
),false)) {
function content_651fb43b8c5473_78611122 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"report",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, false);
?>
    <?php echo __("Report");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="js_ajax-forms" data-url="data/report.php?do=submit&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&handle=<?php echo $_smarty_tpl->tpl_vars['handle']->value;?>
">
  <div class="modal-body">

    <div class="form-group">
      <label class="form-label"><?php echo __("Why you want to report this?");?>
</label>
      <select class="form-select" name="category" id="category">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
          <?php $_smarty_tpl->_subTemplateRender('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label class="form-label"><?php echo __("Reason");?>
</label>
          <textarea name="reason" rows="3" dir="auto" class="form-control"></textarea>
        </div>
      </div>
    </div>

    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary"><?php echo __("Report");?>
</button>
  </div>
</form><?php }
}
