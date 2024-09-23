<?php
/* Smarty version 4.3.2, created on 2023-10-06 07:38:48
  from '/www/wwwroot/m.kidhod.la/content/themes/default/templates/information.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_651fb9884ff137_05154953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf7f93d71c54c864334d71a1955301bc4e98c562' => 
    array (
      0 => '/www/wwwroot/m.kidhod.la/content/themes/default/templates/information.tpl',
      1 => 1694155586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../css/style.css' => 1,
    'file:../css/style.rtl.css' => 1,
    'file:__feeds_user.tpl' => 3,
    'file:__feeds_page.tpl' => 1,
    'file:__feeds_group.tpl' => 1,
    'file:__feeds_event.tpl' => 1,
    'file:__feeds_post.tpl' => 1,
  ),
),false)) {
function content_651fb9884ff137_05154953 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/m.kidhod.la/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!doctype html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['system']->value['language']['code'];?>
" <?php if ($_smarty_tpl->tpl_vars['system']->value['language']['dir'] == "RTL") {?> dir="RTL" <?php }?>>

  <head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">

    <!-- Title -->
    <title><?php echo __("My Information");?>
</title>

    <!-- Fonts [Poppins|Font-Awesome] -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts [Poppins|Font-Awesome] -->

    <!-- CSS -->
    <?php if ($_smarty_tpl->tpl_vars['system']->value['language']['dir'] == "LTR") {?>
      <link href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <style type="text/css">
        <?php $_smarty_tpl->_subTemplateRender("file:../css/style.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </style>
    <?php } else { ?>
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/node_modules/bootstrap/dist/css/bootstrap.rtl.min.css">
      <style type="text/css">
        <?php $_smarty_tpl->_subTemplateRender("file:../css/style.rtl.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </style>
    <?php }?>
    <!-- CSS -->

    <!-- CSS Customized -->
    <style>
      body {
        padding-top: 0;
      }

      header {
        background: var(--header-bg-color);
        text-align: center;
        font-size: 34px;
        font-weight: 300;
        line-height: 70px;
        padding: 70px 0 100px;
      }

      header a,
      header a:hover {
        color: #fff;
      }

      .user-profile-picture {
        position: absolute;
        top: -50px;
        left: 50%;
        transform: translate(-50%);
      }
    </style>
    <!-- CSS Customized -->
  </head>

  <body <?php if ($_smarty_tpl->tpl_vars['system']->value['theme_mode_night']) {?>class="night-mode" <?php }?>>
    <!-- header -->
    <header>
      <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
"><?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
</a>
    </header>
    <!-- header -->

    <!-- container -->
    <div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>" style="margin-top: -25px;">
      <div class="card shadow">
        <div class="card-body page-content">
          <!-- welcome -->
          <div class="text-center">
            <img class="img-thumbnail rounded-circle user-profile-picture" src="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
" width="99" height="99">
          </div>
          <h3 class="mtb20 text-center"><span class="text-primary"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_lastname'];?>
</span></h3>
          <!-- welcome -->

          <!-- information & sessions -->
          <?php if ($_smarty_tpl->tpl_vars['user_data']->value['information']) {?>
            <!-- information -->
            <div class="section-title bg-gradient-primary mb20">
              <i class="fa fa-coins mr10"></i><?php echo __("Your Information");?>

            </div>
            <ul class="list-group mb20">
              <li class="list-group-item">
                <span class="float-end badge badge-lg rounded-pill bg-secondary"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['information']['user_id'];?>
</span>
                <?php echo __("User ID");?>

              </li>
              <li class="list-group-item">
                <span class="float-end badge badge-lg rounded-pill bg-secondary"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['information']['user_name'];?>
</span>
                <?php echo __("User Name");?>

              </li>
              <li class="list-group-item">
                <span class="float-end badge badge-lg rounded-pill bg-secondary"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['information']['user_firstname'];?>
</span>
                <?php echo __("User First Name");?>

              </li>
              <li class="list-group-item">
                <span class="float-end badge badge-lg rounded-pill bg-secondary"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['information']['user_lastname'];?>
</span>
                <?php echo __("User Last Name");?>

              </li>
              <li class="list-group-item">
                <span class="float-end badge badge-lg rounded-pill bg-secondary"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['information']['user_email'];?>
</span>
                <?php echo __("User Email");?>

              </li>
              <li class="list-group-item">
                <span class="float-end badge badge-lg rounded-pill bg-secondary"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['information']['user_phone'];?>
</span>
                <?php echo __("User Phone");?>

              </li>
              <li class="list-group-item">
                <span class="float-end badge badge-lg rounded-pill bg-secondary"><?php echo __($_smarty_tpl->tpl_vars['user_data']->value['information']['user_gender']);?>
</span>
                <?php echo __("User Gender");?>

              </li>
              <li class="list-group-item">
                <span class="float-end badge badge-lg rounded-pill bg-secondary"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user_data']->value['information']['user_registered'],"%e %B %Y");?>
</span>
                <?php echo __("Joined");?>

              </li>
              <li class="list-group-item">
                <span class="float-end badge badge-lg rounded-pill bg-secondary"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user_data']->value['information']['user_last_seen'],"%e %B %Y");?>
</span>
                <?php echo __("Last Login");?>

              </li>
            </ul>
            <!-- information -->

            <!-- sessions -->
            <div class="section-title bg-gradient-red mb20">
              <i class="fa fa-shield-alt mr10"></i><?php echo __("Your Sessions");?>

            </div>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['information']['sessions']) {?>
              <div class="table-responsive">
                <table class="table table-bordered table-hover <?php if ($_smarty_tpl->tpl_vars['system']->value['theme_mode_night']) {?>table-dark<?php }?>">
                  <thead>
                    <tr>
                      <th><?php echo __("ID");?>
</th>
                      <th><?php echo __("Browser");?>
</th>
                      <th><?php echo __("OS");?>
</th>
                      <th><?php echo __("Date");?>
</th>
                      <th><?php echo __("IP");?>
</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_data']->value['information']['sessions'], 'session');
$_smarty_tpl->tpl_vars['session']->iteration = 0;
$_smarty_tpl->tpl_vars['session']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['session']->value) {
$_smarty_tpl->tpl_vars['session']->do_else = false;
$_smarty_tpl->tpl_vars['session']->iteration++;
$__foreach_session_0_saved = $_smarty_tpl->tpl_vars['session'];
?>
                      <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['session']->iteration;?>
</td>
                        <td>
                          <?php echo $_smarty_tpl->tpl_vars['session']->value['user_browser'];?>
 <?php if ($_smarty_tpl->tpl_vars['session']->value['session_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['active_session_id']) {?><span class="badge rounded-pill badge-lg bg-success"><?php echo __("Active Session");?>
</span><?php }?>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['session']->value['user_os'];?>
</td>
                        <td>
                          <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['session']->value['session_date'];?>
"><?php echo $_smarty_tpl->tpl_vars['session']->value['session_date'];?>
</span>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['session']->value['user_ip'];?>
</td>
                      </tr>
                    <?php
$_smarty_tpl->tpl_vars['session'] = $__foreach_session_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </tbody>
                </table>
              </div>
            <?php } else { ?>
              <p class="text-center text-muted mt10">
                <?php echo __("No data to show");?>

              </p>
            <?php }?>
            <!-- sessions -->
          <?php }?>
          <!-- information & sessions -->

          <!-- friends -->
          <?php if (is_array($_smarty_tpl->tpl_vars['user_data']->value['friends'])) {?>
            <div class="section-title bg-gradient-teal mb20">
              <i class="fa fa-users mr10"></i><?php echo __("Your Friends");?>
 <span class="badge rounded-pill badge-lg bg-warning"><?php echo count($_smarty_tpl->tpl_vars['user_data']->value['friends']);?>
</span>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['friends']) {?>
              <ul class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_data']->value['friends'], '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                  <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"],'_no_action'=>true), 0, true);
?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
            <?php } else { ?>
              <p class="text-center text-muted mt10">
                <?php echo __("No data to show");?>

              </p>
            <?php }?>
          <?php }?>
          <!-- friends -->

          <!-- followings -->
          <?php if (is_array($_smarty_tpl->tpl_vars['user_data']->value['followings'])) {?>
            <div class="section-title bg-gradient-teal mb20">
              <i class="fa fa-users mr10"></i><?php echo __("Your Followings");?>
 <span class="badge rounded-pill badge-lg bg-warning"><?php echo count($_smarty_tpl->tpl_vars['user_data']->value['followings']);?>
</span>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['followings']) {?>
              <ul class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_data']->value['followings'], '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                  <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"],'_no_action'=>true), 0, true);
?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
            <?php } else { ?>
              <p class="text-center text-muted mt10">
                <?php echo __("No data to show");?>

              </p>
            <?php }?>
          <?php }?>
          <!-- followings -->

          <!-- followers -->
          <?php if (is_array($_smarty_tpl->tpl_vars['user_data']->value['followers'])) {?>
            <div class="section-title bg-gradient-teal mb20">
              <i class="fa fa-users mr10"></i><?php echo __("Your Followers");?>
 <span class="badge rounded-pill badge-lg bg-warning"><?php echo count($_smarty_tpl->tpl_vars['user_data']->value['followers']);?>
</span>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['followers']) {?>
              <ul class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_data']->value['followers'], '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                  <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"],'_no_action'=>true), 0, true);
?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
            <?php } else { ?>
              <p class="text-center text-muted mt10">
                <?php echo __("No data to show");?>

              </p>
            <?php }?>
          <?php }?>
          <!-- followers -->

          <!-- pages -->
          <?php if (is_array($_smarty_tpl->tpl_vars['user_data']->value['pages'])) {?>
            <div class="section-title bg-gradient-warning mb20">
              <i class="fa fa-flag mr10"></i><?php echo __("Your Likes");?>
 <span class="badge rounded-pill badge-lg bg-warning"><?php echo count($_smarty_tpl->tpl_vars['user_data']->value['pages']);?>
</span>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['pages']) {?>
              <ul class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_data']->value['pages'], '_page');
$_smarty_tpl->tpl_vars['_page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
$_smarty_tpl->tpl_vars['_page']->do_else = false;
?>
                  <?php $_smarty_tpl->_subTemplateRender('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box"), 0, true);
?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
            <?php } else { ?>
              <p class="text-center text-muted mt10">
                <?php echo __("No data to show");?>

              </p>
            <?php }?>
          <?php }?>
          <!-- pages -->

          <!-- groups -->
          <?php if (is_array($_smarty_tpl->tpl_vars['user_data']->value['groups'])) {?>
            <div class="section-title bg-gradient-warning mb20">
              <i class="fa fa-users mr10"></i><?php echo __("Your groups");?>
 <span class="badge rounded-pill badge-lg bg-warning"><?php echo count($_smarty_tpl->tpl_vars['user_data']->value['groups']);?>
</span>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['groups']) {?>
              <ul class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_data']->value['groups'], '_group');
$_smarty_tpl->tpl_vars['_group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_group']->value) {
$_smarty_tpl->tpl_vars['_group']->do_else = false;
?>
                  <?php $_smarty_tpl->_subTemplateRender('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_no_action'=>true), 0, true);
?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
            <?php } else { ?>
              <p class="text-center text-muted mt10">
                <?php echo __("No data to show");?>

              </p>
            <?php }?>
          <?php }?>
          <!-- groups -->

          <!-- events -->
          <?php if (is_array($_smarty_tpl->tpl_vars['user_data']->value['events'])) {?>
            <div class="section-title bg-gradient-warning mb20">
              <i class="fa fa-calendar mr10"></i><?php echo __("Your events");?>
 <span class="badge rounded-pill badge-lg bg-warning"><?php echo count($_smarty_tpl->tpl_vars['user_data']->value['events']);?>
</span>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['events']) {?>
              <ul class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_data']->value['events'], '_event');
$_smarty_tpl->tpl_vars['_event']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_event']->value) {
$_smarty_tpl->tpl_vars['_event']->do_else = false;
?>
                  <?php $_smarty_tpl->_subTemplateRender('file:__feeds_event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box"), 0, true);
?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
            <?php } else { ?>
              <p class="text-center text-muted mt10">
                <?php echo __("No data to show");?>

              </p>
            <?php }?>
          <?php }?>
          <!-- events -->

          <!-- posts -->
          <?php if (is_array($_smarty_tpl->tpl_vars['user_data']->value['posts'])) {?>
            <div class="section-title bg-gradient-purple mb20">
              <i class="fa fa-newspaper mr10"></i><?php echo __("Your posts");?>

            </div>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['posts']) {?>
              <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_data']->value['posts'], 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                  <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_information"), 0, true);
?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
            <?php } else { ?>
              <p class="text-center text-muted mt10">
                <?php echo __("No data to show");?>

              </p>
            <?php }?>
          <?php }?>
          <!-- posts -->
        </div>
      </div>
    </div>
    <!-- container -->

    <!-- footer -->
    <div class="<?php if ($_smarty_tpl->tpl_vars['system']->value['fluid_design']) {?>container-fluid<?php } else { ?>container<?php }?>">
      <div class="footer text-center">
        &copy; <?php echo date('Y');?>
 <?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>

      </div>
    </div>
    <!-- footer -->
  </body>

</html><?php }
}
