<?php
/* Smarty version 4.3.2, created on 2023-09-10 23:49:30
  from '/www/wwwroot/m.kidhod.la/content/themes/default/templates/ajax.addresses.add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64fe560a835850_16533892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '639f8a26fab125d17acd096bdec5fa62292f9750' => 
    array (
      0 => '/www/wwwroot/m.kidhod.la/content/themes/default/templates/ajax.addresses.add.tpl',
      1 => 1694155615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_64fe560a835850_16533892 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"map",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, false);
?>
    <?php echo __("Add New Address");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="js_ajax-forms" data-url="users/addresses.php?do=insert">
  <div class="modal-body">
    <!-- title -->
    <div class="form-group">
      <label class="form-label"><?php echo __("Title");?>
</label>
      <input name="title" type="text" class="form-control">
    </div>
    <!-- title -->
    <div class="row">
      <!-- country -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo __("Country");?>
</label>
        <input name="country" type="text" class="form-control">
      </div>
      <!-- country -->
      <!-- city -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo __("City");?>
</label>
        <input name="city" type="text" class="form-control">
      </div>
      <!-- city -->
    </div>
    <div class="row">
      <!-- zip code -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo __("Zip Code");?>
</label>
        <input name="zip_code" type="text" class="form-control">
      </div>
      <!-- zip code -->
      <!-- phone -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo __("Phone");?>
</label>
        <input name="phone" type="text" class="form-control">
      </div>
      <!-- phone -->
    </div>
    <!-- address -->
    <div class="form-group">
      <label class="form-label"><?php echo __("Address");?>
</label>
      <textarea name="address" rows="5" dir="auto" class="form-control"></textarea>
    </div>
    <!-- address -->
    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary"><?php echo __("Add");?>
</button>
  </div>
</form><?php }
}
