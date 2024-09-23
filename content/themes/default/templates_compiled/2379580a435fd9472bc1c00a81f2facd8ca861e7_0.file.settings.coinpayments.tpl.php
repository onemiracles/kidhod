<?php
/* Smarty version 4.3.2, created on 2023-10-07 01:43:45
  from '/www/wwwroot/m.kidhod.la/content/themes/default/templates/settings.coinpayments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6520b7d187a164_92664064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2379580a435fd9472bc1c00a81f2facd8ca861e7' => 
    array (
      0 => '/www/wwwroot/m.kidhod.la/content/themes/default/templates/settings.coinpayments.tpl',
      1 => 1694155584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:_no_transactions.tpl' => 1,
  ),
),false)) {
function content_6520b7d187a164_92664064 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card-header with-icon">
  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"coinpayments",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), 0, false);
?>
  <?php echo __("CoinPayments Transactions");?>

</div>
<div class="card-body">
  <div class="heading-small mb20">
    <?php echo __("Transactions History");?>

  </div>
  <div class="pl-md-4">
    <?php if ($_smarty_tpl->tpl_vars['coinpayments_transactions']->value) {?>
      <div class="table-responsive mt20">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th><?php echo __("ID");?>
</th>
              <th><?php echo __("Product");?>
</th>
              <th><?php echo __("Amount");?>
</th>
              <th><?php echo __("Created");?>
</th>
              <th><?php echo __("Updated");?>
</th>
              <th><?php echo __("Status");?>
</th>
              <th><?php echo __("Status Message");?>
</th>
            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coinpayments_transactions']->value, 'transaction');
$_smarty_tpl->tpl_vars['transaction']->iteration = 0;
$_smarty_tpl->tpl_vars['transaction']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['transaction']->value) {
$_smarty_tpl->tpl_vars['transaction']->do_else = false;
$_smarty_tpl->tpl_vars['transaction']->iteration++;
$__foreach_transaction_0_saved = $_smarty_tpl->tpl_vars['transaction'];
?>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['transaction']->iteration;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['transaction']->value['product'];?>
</td>
                <td><?php echo print_money($_smarty_tpl->tpl_vars['transaction']->value['amount']);?>
</td>
                <td>
                  <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['transaction']->value['created_at'];?>
"><?php echo $_smarty_tpl->tpl_vars['transaction']->value['created_at'];?>
</span>
                </td>
                <td>
                  <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['transaction']->value['last_update'];?>
"><?php echo $_smarty_tpl->tpl_vars['transaction']->value['last_update'];?>
</span>
                </td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['transaction']->value['status'] == '-1') {?>
                    <span class="badge rounded-pill badge-lg bg-danger"><?php echo __("Error");?>
</span>
                  <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['status'] == '0') {?>
                    <span class="badge rounded-pill badge-lg bg-info"><?php echo __("Processing");?>
</span>
                  <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['status'] == '1') {?>
                    <span class="badge rounded-pill badge-lg bg-warning"><?php echo __("Pending");?>
</span>
                  <?php } elseif ($_smarty_tpl->tpl_vars['transaction']->value['status'] == '2') {?>
                    <span class="badge rounded-pill badge-lg bg-success"><?php echo __("Complete");?>
</span>
                  <?php }?>
                </td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['transaction']->value['status'] == '-1') {?>
                    <?php echo __("Error while processing your payment");?>

                  <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['transaction']->value['status_message'];?>

                  <?php }?>
                </td>
              </tr>
            <?php
$_smarty_tpl->tpl_vars['transaction'] = $__foreach_transaction_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </tbody>
        </table>
      </div>
    <?php } else { ?>
      <?php $_smarty_tpl->_subTemplateRender('file:_no_transactions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
  </div>
</div><?php }
}
