<?php
/* Smarty version 4.3.2, created on 2023-09-10 23:48:55
  from '/www/wwwroot/m.kidhod.la/content/themes/default/templates/settings.monetization.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64fe55e792ba46_39325901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca3903a869e63818b7f397c84d859b4e1cbee804' => 
    array (
      0 => '/www/wwwroot/m.kidhod.la/content/themes/default/templates/settings.monetization.tpl',
      1 => 1694155569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 2,
    'file:_no_transactions.tpl' => 1,
  ),
),false)) {
function content_64fe55e792ba46_39325901 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/m.kidhod.la/vendor/smarty/smarty/libs/plugins/modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>
<div class="card-header with-icon">
  <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"monetization",'class'=>"main-icon mr15",'width'=>"24px",'height'=>"24px"), 0, false);
?>
  <?php echo __("Monetization");?>

</div>
<div class="card-body">
  <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>

    <div class="alert alert-info">
      <div class="text">
        <strong><?php echo __("Content Monetization");?>
</strong><br>
        <?php echo __("Now you can earn money from your content. Set your own price and your users pay for it.");?>

        <br>
        <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_commission'] > 0) {?>
          <?php echo __("There is commission");?>
 <strong><span class="badge rounded-pill bg-warning"><?php echo $_smarty_tpl->tpl_vars['system']->value['monetization_commission'];?>
%</span></strong> <?php echo __("will be deducted");?>
.
          <br>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_money_withdraw_enabled']) {?>
          <?php echo __("You can");?>
 <a class="alert-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/monetization/payments" target="_blank"><?php echo __("withdraw your money");?>
</a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_money_transfer_enabled']) {?>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_money_withdraw_enabled']) {
echo __("or");?>
 <?php }?>
          <?php echo __("You can transfer your money to your");?>
 <a class="alert-link" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/wallet" target="_blank"><i class="fa fa-wallet"></i> <?php echo __("wallet");?>
</a>
        <?php }?>
      </div>
    </div>

    <div class="heading-small mb20">
      <?php echo __("Monetization Settings");?>

    </div>
    <div class="pl-md-4">
      <form class="js_ajax-forms" data-url="users/settings.php?edit=monetization">
        <div class="form-table-row">
          <div class="avatar">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"monetization",'class'=>"main-icon",'width'=>"40px",'height'=>"40px"), 0, true);
?>
          </div>
          <div>
            <div class="form-label h6"><?php echo __("Content Monetization");?>
</div>
            <div class="form-text d-none d-sm-block"><?php echo __("Enable or disable monetization for your content");?>
</div>
          </div>
          <div class="text-end">
            <label class="switch" for="user_monetization_enabled">
              <input type="checkbox" name="user_monetization_enabled" id="user_monetization_enabled" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_monetization_enabled']) {?>checked<?php }?>>
              <span class="slider round"></span>
            </label>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Payment Plans");?>

          </label>
          <div class="col-md-9">
            <div class="payment-plans">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['monetization_plans']->value, 'plan');
$_smarty_tpl->tpl_vars['plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->do_else = false;
?>
                <div class="payment-plan">
                  <div class="text-xxlg"><?php echo __($_smarty_tpl->tpl_vars['plan']->value['title']);?>
</div>
                  <div class="text-xlg"><?php echo print_money($_smarty_tpl->tpl_vars['plan']->value['price']);?>
 / <?php if ($_smarty_tpl->tpl_vars['plan']->value['period_num'] != '1') {
echo $_smarty_tpl->tpl_vars['plan']->value['period_num'];
}?> <?php echo __(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( $_smarty_tpl->tpl_vars['plan']->value['period'] )));?>
</div>
                  <?php ob_start();
echo $_smarty_tpl->tpl_vars['plan']->value['custom_description'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
                    <div><?php echo $_smarty_tpl->tpl_vars['plan']->value['custom_description'];?>
</div>
                  <?php }?>
                  <div class="mt10">
                    <span class="text-link mr10 js_monetization-deleter" data-id="<?php echo $_smarty_tpl->tpl_vars['plan']->value['plan_id'];?>
">
                      <i class="fa fa-trash-alt mr5"></i><?php echo __("Delete");?>

                    </span>
                    |
                    <span data-toggle="modal" data-url="monetization/controller.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['plan']->value['plan_id'];?>
" class="text-link ml10">
                      <i class="fa fa-pen mr5"></i><?php echo __("Edit");?>

                    </span>
                  </div>
                </div>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <div data-toggle="modal" data-url="monetization/controller.php?do=add&node_id=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_id'];?>
&node_type=profile" class="payment-plan new">
                <div class="d-flex align-items-center justify-content-center">
                  <i class="fa fa-plus mr5"></i>
                  <?php echo __("Add New");?>

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-9 offset-md-3">
            <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
          </div>
        </div>

        <!-- success -->
        <div class="alert alert-success mt15 mb0 x-hidden"></div>
        <!-- success -->

        <!-- error -->
        <div class="alert alert-danger mt15 mb0 x-hidden"></div>
        <!-- error -->
      </form>
    </div>

    <div class="divider"></div>

    <div class="heading-small mb20">
      <?php echo __("Monetization Balance");?>

    </div>
    <div class="pl-md-4">
      <div class="row">
        <!-- subscribers -->
        <div class="col-sm-6">
          <div class="section-title mb20">
            <?php echo __("Profile Subscribers");?>

          </div>
          <div class="stat-panel bg-info">
            <div class="stat-cell">
              <i class="fa fas fa-users bg-icon"></i>
              <div class="h3 mtb10">
                <?php echo $_smarty_tpl->tpl_vars['subscribers_count']->value;?>

              </div>
            </div>
          </div>
        </div>
        <!-- subscribers -->

        <!-- money balance -->
        <div class="col-sm-6">
          <div class="section-title mb20">
            <?php echo __("Monetization Money Balance");?>

          </div>
          <div class="stat-panel bg-primary">
            <div class="stat-cell">
              <i class="fa fa-donate bg-icon"></i>
              <div class="h3 mtb10">
                <?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['user']->value->_data['user_monetization_balance'],2));?>

              </div>
            </div>
          </div>
        </div>
        <!-- monetization balance -->
      </div>
    </div>
  <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "payments") {?>
    <div class="heading-small mb20">
      <?php echo __("Withdrawal Request");?>

    </div>
    <div class="pl-md-4">
      <form class="js_ajax-forms" data-url="users/withdraw.php?type=monetization">
        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Your Balance");?>

          </label>
          <div class="col-md-9">
            <h6>
              <span class="badge badge-lg bg-info">
                <?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['user']->value->_data['user_monetization_balance'],2));?>

              </span>
            </h6>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Amount");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)
          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="amount">
            <div class="form-text">
              <?php echo __("The minimum withdrawal request amount is");?>
 <?php echo print_money($_smarty_tpl->tpl_vars['system']->value['monetization_min_withdrawal']);?>

            </div>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Payment Method");?>

          </label>
          <div class="col-md-9">
            <?php if (in_array("paypal",$_smarty_tpl->tpl_vars['system']->value['monetization_payment_method_array'])) {?>
              <div class="form-check form-check-inline">
                <input type="radio" name="method" id="method_paypal" value="paypal" class="form-check-input">
                <label class="form-check-label" for="method_paypal"><?php echo __("PayPal");?>
</label>
              </div>
            <?php }?>
            <?php if (in_array("skrill",$_smarty_tpl->tpl_vars['system']->value['monetization_payment_method_array'])) {?>
              <div class="form-check form-check-inline">
                <input type="radio" name="method" id="method_skrill" value="skrill" class="form-check-input">
                <label class="form-check-label" for="method_skrill"><?php echo __("Skrill");?>
</label>
              </div>
            <?php }?>
            <?php if (in_array("moneypoolscash",$_smarty_tpl->tpl_vars['system']->value['monetization_payment_method_array'])) {?>
              <div class="form-check form-check-inline">
                <input type="radio" name="method" id="method_moneypoolscash" value="moneypoolscash" class="form-check-input">
                <label class="form-check-label" for="method_moneypoolscash"><?php echo __("MoneyPoolsCash");?>
</label>
              </div>
            <?php }?>
            <?php if (in_array("bank",$_smarty_tpl->tpl_vars['system']->value['monetization_payment_method_array'])) {?>
              <div class="form-check form-check-inline">
                <input type="radio" name="method" id="method_bank" value="bank" class="form-check-input">
                <label class="form-check-label" for="method_bank"><?php echo __("Bank Transfer");?>
</label>
              </div>
            <?php }?>
            <?php if (in_array("custom",$_smarty_tpl->tpl_vars['system']->value['monetization_payment_method_array'])) {?>
              <div class="form-check form-check-inline">
                <input type="radio" name="method" id="method_custom" value="custom" class="form-check-input">
                <label class="form-check-label" for="method_custom"><?php echo __($_smarty_tpl->tpl_vars['system']->value['monetization_payment_method_custom']);?>
</label>
              </div>
            <?php }?>
          </div>
        </div>

        <div class="row form-group">
          <label class="col-md-3 form-label">
            <?php echo __("Transfer To");?>

          </label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="method_value">
          </div>
        </div>

        <div class="row">
          <div class="col-md-9 offset-md-3">
            <button type="submit" class="btn btn-primary"><?php echo __("Make a withdrawal");?>
</button>
          </div>
        </div>

        <!-- success -->
        <div class="alert alert-success mt15 mb0 x-hidden"></div>
        <!-- success -->

        <!-- error -->
        <div class="alert alert-danger mt15 mb0 x-hidden"></div>
        <!-- error -->
      </form>
    </div>

    <div class="divider"></div>

    <div class="heading-small mb20">
      <?php echo __("Withdrawal History");?>

    </div>
    <div class="pl-md-4">
      <?php if ($_smarty_tpl->tpl_vars['payments']->value) {?>
        <div class="table-responsive mt20">
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th><?php echo __("ID");?>
</th>
                <th><?php echo __("Amount");?>
</th>
                <th><?php echo __("Method");?>
</th>
                <th><?php echo __("Transfer To");?>
</th>
                <th><?php echo __("Time");?>
</th>
                <th><?php echo __("Status");?>
</th>
              </tr>
            </thead>
            <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payments']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->iteration = 0;
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
$_smarty_tpl->tpl_vars['payment']->iteration++;
$__foreach_payment_1_saved = $_smarty_tpl->tpl_vars['payment'];
?>
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['payment']->iteration;?>
</td>
                  <td><?php echo print_money(smarty_modifier_number_format($_smarty_tpl->tpl_vars['payment']->value['amount'],2));?>
</td>
                  <td>
                    <?php if ($_smarty_tpl->tpl_vars['payment']->value['method'] == "custom") {?>
                      <?php echo $_smarty_tpl->tpl_vars['system']->value['monetization_payment_method_custom'];?>

                    <?php } else { ?>
                      <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment']->value['method'] ));?>

                    <?php }?>
                  </td>
                  <td><?php echo $_smarty_tpl->tpl_vars['payment']->value['method_value'];?>
</td>
                  <td>
                    <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['payment']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['payment']->value['time'];?>
</span>
                  </td>
                  <td>
                    <?php if ($_smarty_tpl->tpl_vars['payment']->value['status'] == '0') {?>
                      <span class="badge rounded-pill badge-lg bg-warning"><?php echo __("Pending");?>
</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['payment']->value['status'] == '1') {?>
                      <span class="badge rounded-pill badge-lg bg-success"><?php echo __("Approved");?>
</span>
                    <?php } else { ?>
                      <span class="badge rounded-pill badge-lg bg-danger"><?php echo __("Declined");?>
</span>
                    <?php }?>
                  </td>
                </tr>
              <?php
$_smarty_tpl->tpl_vars['payment'] = $__foreach_payment_1_saved;
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
  <?php }?>
</div><?php }
}
