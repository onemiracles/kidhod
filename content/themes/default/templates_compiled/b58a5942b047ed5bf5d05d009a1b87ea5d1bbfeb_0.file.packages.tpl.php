<?php
/* Smarty version 4.3.2, created on 2023-09-11 11:19:31
  from '/www/wwwroot/m.kidhod.la/content/themes/default/templates/packages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64fef7c3b3aa51_72944414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b58a5942b047ed5bf5d05d009a1b87ea5d1bbfeb' => 
    array (
      0 => '/www/wwwroot/m.kidhod.la/content/themes/default/templates/packages.tpl',
      1 => 1694155604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 2,
    'file:__svg_icons.tpl' => 68,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_64fef7c3b3aa51_72944414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if ($_smarty_tpl->tpl_vars['view']->value == "packages") {?>

  <!-- page header -->
  <div class="page-header">
    <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_upgrade_06a0.svg">
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="inner">
      <h2><?php echo __("Pro Packages");?>
</h2>
      <p class="text-xlg"><?php echo __("Choose the Plan That's Right for You");?>
</p>
    </div>
  </div>
  <!-- page header -->

  <!-- page content -->
  <div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> sg-offcanvas" style="margin-top: -25px;">
    <div class="row">

      <!-- side panel -->
      <div class="col-12 d-block d-sm-none sg-offcanvas-sidebar mt20">
        <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </div>
      <!-- side panel -->

      <!-- content panel -->
      <div class="col-12 sg-offcanvas-mainbar">
        <div class="card">
          <div class="card-body page-content">
            <div class="row justify-content-md-center">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packages']->value, 'package');
$_smarty_tpl->tpl_vars['package']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->do_else = false;
?>
                <!-- package -->
                <div class="col-md-6 col-lg-4 col-xl-<?php if ($_smarty_tpl->tpl_vars['packages_count']->value >= 4) {?>3<?php } elseif ($_smarty_tpl->tpl_vars['packages_count']->value == 3) {?>4<?php } elseif ($_smarty_tpl->tpl_vars['packages_count']->value <= 2) {?>6<?php }?> text-center">
                  <div class="card card-pricing shadow-sm">
                    <div class="card-header bg-transparent text-start pb0">
                      <h3 style="color: <?php echo $_smarty_tpl->tpl_vars['package']->value['color'];?>
">
                        <?php echo __($_smarty_tpl->tpl_vars['package']->value['name']);?>

                        <div class="float-end">
                          <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['package']->value['icon'];?>
" style="max-width: 42px;">
                        </div>
                      </h3>
                    </div>
                    <div class="card-body text-start">
                      <h2 class="price">
                        <?php if ($_smarty_tpl->tpl_vars['package']->value['price'] == 0) {?>
                          <?php echo __("Free");?>

                        <?php } else { ?>
                          <?php echo print_money(number_format($_smarty_tpl->tpl_vars['package']->value['price']));?>

                        <?php }?>
                      </h2>
                      <div>
                        <?php if ($_smarty_tpl->tpl_vars['package']->value['period'] == "life") {?>
                          <?php echo __("Life Time");?>

                        <?php } else { ?>
                          <?php echo __("for");?>

                          <?php if ($_smarty_tpl->tpl_vars['package']->value['period_num'] != '1') {
echo $_smarty_tpl->tpl_vars['package']->value['period_num'];
}?> <?php echo __(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( $_smarty_tpl->tpl_vars['package']->value['period'] )));?>

                        <?php }?>
                      </div>
                    </div>
                    <ul class="list-group list-group-flush text-start">
                      <li class="list-group-item">
                        <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
echo __("Featured member");?>

                      </li>
                      <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_ads_free_enabled']) {?>
                        <li class="list-group-item">
                          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
echo __("No Ads");?>

                        </li>
                      <?php }?>
                      <li class="list-group-item">
                        <?php if ($_smarty_tpl->tpl_vars['package']->value['verification_badge_enabled']) {?>
                          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                        <?php } else { ?>
                          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                        <?php }?>
                        <?php echo __("Verified badge");?>

                      </li>
                      <li class="list-group-item">
                        <?php if (!$_smarty_tpl->tpl_vars['package']->value['boost_posts_enabled']) {?>
                          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
echo __("Posts promotion");?>

                        <?php } else { ?>
                          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
echo __("Boost up to");?>
 <?php echo number_format($_smarty_tpl->tpl_vars['package']->value['boost_posts']);?>
 <?php echo __("Posts");?>

                        <?php }?>
                      </li>
                      <li class="list-group-item">
                        <?php if (!$_smarty_tpl->tpl_vars['package']->value['boost_pages_enabled']) {?>
                          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
echo __("Pages promotion");?>

                        <?php } else { ?>
                          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
echo __("Boost up to");?>
 <?php echo number_format($_smarty_tpl->tpl_vars['package']->value['boost_pages']);?>
 <?php echo __("Pages");?>

                        <?php }?>
                      </li>

                      <!-- Permissions -->
                      <li class="list-group-item">
                        <strong class="text-link" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false">
                          <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"permissions",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                          <?php echo __("All Permissions");?>

                        </strong>
                      </li>
                      <div class="packages-permissions collapse multi-collapse">
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['pages_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Create Pages");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['groups_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['groups_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Create Groups");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['events_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['events_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Create Events");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['blogs_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['blogs_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Write Articles");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['market_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['market_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Sell Products");?>
 <small>(<?php if ($_smarty_tpl->tpl_vars['package']->value['allowed_products'] == '0') {
echo __("Unlimited");
} else {
echo $_smarty_tpl->tpl_vars['package']->value['allowed_products'];
}?> <?php echo __("Products");?>
)</small>
                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['forums_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['forums_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Add Forums Threads/Replies");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['movies_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['movies_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Watch Movies");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['games_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['games_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Play Games");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['gifts_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['gifts_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Send Gifts");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['blogs_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['blogs_permission_read']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Read Articles");?>
 <?php if ($_smarty_tpl->tpl_vars['package']->value['blogs_permission_read']) {?><small>(<?php if ($_smarty_tpl->tpl_vars['package']->value['allowed_blogs_categories'] == '0') {
echo __("All");
} else {
echo $_smarty_tpl->tpl_vars['package']->value['allowed_blogs_categories'];
}?> <?php echo __("Categories");?>
)</small><?php }?>
                          </li>
                        <?php }?>

                        <li class="list-group-item">
                          <?php if ($_smarty_tpl->tpl_vars['package']->value['videos_permission_read']) {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                          <?php } else { ?>
                            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                          <?php }?>
                          <?php echo __("Watch Videos");?>
 <?php if ($_smarty_tpl->tpl_vars['package']->value['videos_permission_read']) {?><small>(<?php if ($_smarty_tpl->tpl_vars['package']->value['allowed_videos_categories'] == '0') {
echo __("All");
} else {
echo $_smarty_tpl->tpl_vars['package']->value['allowed_videos_categories'];
}?> <?php echo __("Categories");?>
)</small><?php }?>
                        </li>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['stories_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['stories_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Add Stories");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['colored_posts_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['colored_posts_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Add Colored Posts");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['activity_posts_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['activity_posts_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Add Feelings/Activity Posts");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['polls_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['polls_posts_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Add Polls Posts");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['geolocation_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['geolocation_posts_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Add Geolocation Posts");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['gif_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['gif_posts_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Add GIF Posts");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['anonymous_mode']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['anonymous_posts_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Add Anonymous Posts");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['invitation_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['invitation_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Generate Invitation Codes");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['audio_call_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['audio_call_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Make Audio Calls");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['video_call_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['video_call_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Make Video Calls");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['live_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['live_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Go Live");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['videos_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['videos_upload_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Upload Videos");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['audio_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['audios_upload_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Upload Audios");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['file_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['files_upload_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Upload Files");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['ads_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['ads_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Create Ads");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['fundings_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['fundings_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Raise Fundings");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['monetization_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['monetization_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Monetize Content");?>

                          </li>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['system']->value['tips_enabled']) {?>
                          <li class="list-group-item">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['tips_permission']) {?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"checked",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php } else { ?>
                              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"cross",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
                            <?php }?>
                            <?php echo __("Receive Tips");?>

                          </li>
                        <?php }?>
                      </div>
                      <!-- Permissions -->

                      <?php if ($_smarty_tpl->tpl_vars['package']->value['custom_description']) {?>
                        <li class="list-group-item">
                          <?php echo nl2br((string) __($_smarty_tpl->tpl_vars['package']->value['custom_description']), (bool) 1);?>

                        </li>
                      <?php }?>
                    </ul>
                    <div class="card-footer bg-transparent">
                      <div class="d-grid">
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
                          <?php if ($_smarty_tpl->tpl_vars['package']->value['price'] == 0) {?>
                            <button class="btn rounded-pill btn-primary js_try-package" data-id='<?php echo $_smarty_tpl->tpl_vars['package']->value["package_id"];?>
'>
                              <?php echo __("Try Now");?>

                            </button>
                          <?php } else { ?>
                            <button class="btn rounded-pill btn-danger" data-toggle="modal" data-url="#payment" data-options='{ "handle": "packages", "id": <?php echo $_smarty_tpl->tpl_vars['package']->value["package_id"];?>
, "price": "<?php echo $_smarty_tpl->tpl_vars['package']->value["price"];?>
", "name": "<?php echo $_smarty_tpl->tpl_vars['package']->value["name"];?>
", "img": "<?php echo $_smarty_tpl->tpl_vars['package']->value["icon"];?>
" }'>
                              <?php if (!$_smarty_tpl->tpl_vars['user']->value->_data['user_subscribed']) {?>
                                <?php echo __("Buy Now");?>

                              <?php } else { ?>
                                <?php echo __("Upgrade Now");?>

                              <?php }?>
                            </button>
                          <?php }?>
                        <?php } else { ?>
                          <a class="btn rounded-pill btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signin">
                            <?php echo __("Buy Now");?>

                          </a>
                        <?php }?>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /package -->
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
          </div>
        </div>
      </div>
      <!-- content panel -->

    </div>
  </div>
  <!-- page content -->

<?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "upgraded") {?>

  <!-- page content -->
  <div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?> mt20 sg-offcanvas">
    <div class="row">

      <!-- side panel -->
      <div class="col-12 d-block d-sm-none sg-offcanvas-sidebar">
        <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      </div>
      <!-- side panel -->

      <!-- content panel -->
      <div class="col-12 sg-offcanvas-mainbar">
        <div class="card text-center">
          <div class="card-body">
            <div class="mb20">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"education",'class'=>"main-icon",'width'=>"90px",'height'=>"90px"), 0, true);
?>
            </div>
            <h2><?php echo __("Congratulations");?>
!</h2>
            <p class="text-xlg mt10"><?php echo __("You are now");?>
 <span class="badge bg-danger"><?php echo __($_smarty_tpl->tpl_vars['user']->value->_data['package_name']);?>
</span> <?php echo __("member");?>
</p>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_pick_categories']) {?>
              <p class="text-lg">
                <?php echo __("Your package allows you to pick categories that you are interested in");?>

              </p>
              <p class="text-lg">
                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['allowed_videos_categories'] > 0) {?>
                  <span class="badge bg-secondary plr20 ptb15 rounded-pill"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['allowed_videos_categories'];?>
 <?php echo __("Videos Categories");?>
</span>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['allowed_blogs_categories'] > 0) {?>
                  <span class="badge bg-secondary plr20 ptb15 rounded-pill"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['allowed_blogs_categories'];?>
 <?php echo __("Blogs Categories");?>
</span>
                <?php }?>
              </p>
              <a class="btn btn-primary rounded-pill" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/membership"><?php echo __("Pick Categories");?>
</a>
            <?php } else { ?>
              <a class="btn btn-primary rounded-pill" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
"><?php echo __("Start Now");?>
</a>
            <?php }?>
          </div>
        </div>
      </div>
      <!-- content panel -->

    </div>
  </div>
  <!-- page content -->

<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
