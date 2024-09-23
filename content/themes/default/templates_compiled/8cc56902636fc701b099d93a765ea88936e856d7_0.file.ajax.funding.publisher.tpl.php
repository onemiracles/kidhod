<?php
/* Smarty version 4.3.2, created on 2023-10-03 04:16:24
  from '/www/wwwroot/m.kidhod.la/content/themes/default/templates/ajax.funding.publisher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_651b9598b03ec7_34015594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cc56902636fc701b099d93a765ea88936e856d7' => 
    array (
      0 => '/www/wwwroot/m.kidhod.la/content/themes/default/templates/ajax.funding.publisher.tpl',
      1 => 1694155588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_651b9598b03ec7_34015594 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"funding",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, false);
?>
    <?php echo __("Create New Funding Request");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="js_ajax-forms" data-url="posts/funding.php?do=publish">
  <div class="modal-body">
    <!-- funding title -->
    <div class="form-group">
      <label class="form-label"><?php echo __("Title");?>
</label>
      <input name="title" type="text" class="form-control">
    </div>
    <!-- funding title -->
    <!-- funding amount -->
    <div class="form-group">
      <label class="form-label"><?php echo __("Amount You Would Like To Receive");?>
</label>
      <div class="input-money <?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_dir'];?>
">
        <span><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
</span>
        <input type="text" class="form-control" placeholder="0.00" name="amount">
      </div>
    </div>
    <!-- funding amount -->
    <!-- funding description -->
    <div class="form-group">
      <label class="form-label"><?php echo __("Description");?>
</label>
      <textarea name="description" rows="5" dir="auto" class="form-control"></textarea>
    </div>
    <!-- funding description -->
    <!-- cover image -->
    <div class="form-group">
      <label class="form-label"><?php echo __("Cover Image");?>
</label>
      <div class="x-image">
        <div class="x-image-loader">
          <div class="progress x-progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
        <input type="hidden" class="js_x-image-input" name="cover_image" value="">
      </div>
    </div>
    <!-- cover image -->
    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary"><?php echo __("Publish");?>
</button>
  </div>
</form><?php }
}
