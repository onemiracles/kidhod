<?php
/* Smarty version 4.3.2, created on 2023-10-10 03:39:10
  from '/www/wwwroot/m.kidhod.la/content/themes/default/templates/emails/forget_password_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6524c75e3301b2_82366221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05bc485fe05bba5dfb1aeb44e26165e35ad04755' => 
    array (
      0 => '/www/wwwroot/m.kidhod.la/content/themes/default/templates/emails/forget_password_email.txt',
      1 => 1694155693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6524c75e3301b2_82366221 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>


<?php echo __("To complete the reset password process, please copy this token");?>
:

<?php echo __("Token");?>
: <?php echo $_smarty_tpl->tpl_vars['reset_key']->value;?>


<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
 <?php echo __("Team");
}
}
