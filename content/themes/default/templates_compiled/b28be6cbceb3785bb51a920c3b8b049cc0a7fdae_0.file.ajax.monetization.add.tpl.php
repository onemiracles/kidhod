<?php
/* Smarty version 4.3.2, created on 2023-10-10 08:31:52
  from '/www/wwwroot/m.kidhod.la/content/themes/default/templates/ajax.monetization.add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65250bf8deeb45_02681883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b28be6cbceb3785bb51a920c3b8b049cc0a7fdae' => 
    array (
      0 => '/www/wwwroot/m.kidhod.la/content/themes/default/templates/ajax.monetization.add.tpl',
      1 => 1694155603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_65250bf8deeb45_02681883 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"monetization",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, false);
?>
    <?php echo __("New Monetization Plan");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="js_ajax-forms" data-url="monetization/controller.php?do=insert">
  <div class="modal-body">
    <!-- title -->
    <div class="form-group">
      <label class="form-label"><?php echo __("Title");?>
</label>
      <input name="title" type="text" class="form-control">
    </div>
    <!-- title -->
    <!-- price -->
    <div class="form-group">
      <label class="form-label"><?php echo __("Price");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)</label>
      <input name="price" type="text" class="form-control">
    </div>
    <!-- price -->
    <!-- paid every -->
    <div class="form-group">
      <label class="form-label"><?php echo __("Paid Every");?>
</label>
      <div class="row">
        <div class="col-sm-8">
          <input class="form-control" name="period_num">
        </div>
        <div class="col-sm-4">
          <select class="form-select" name="period">
            <option value="day"><?php echo __("Day");?>
</option>
            <option value="week"><?php echo __("Week");?>
</option>
            <option value="month"><?php echo __("Month");?>
</option>
            <option value="year"><?php echo __("Year");?>
</option>
          </select>
        </div>
      </div>
      <div class="form-text">
        <?php echo __("For example 15 days, 2 Months, 1 Year");?>

      </div>
    </div>
    <!-- paid every -->
    <!-- description -->
    <div class="form-group">
      <label class="form-label"><?php echo __("Description");?>
</label>
      <textarea name="custom_description" rows="5" dir="auto" class="form-control"></textarea>
    </div>
    <!-- description -->
    <!-- order -->
    <div class="form-group">
      <label class="form-label"><?php echo __("Order");?>
</label>
      <input name="plan_order" type="text" class="form-control">
    </div>
    <!-- order -->
    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <input type="hidden" name="node_id" value="<?php echo $_smarty_tpl->tpl_vars['node_id']->value;?>
">
    <input type="hidden" name="node_type" value="<?php echo $_smarty_tpl->tpl_vars['node_type']->value;?>
">
    <button type="submit" class="btn btn-primary"><?php echo __("Publish");?>
</button>
  </div>
</form><?php }
}
