<?php
/* Smarty version 4.3.2, created on 2023-09-11 20:30:59
  from '/www/wwwroot/m.kidhod.la/content/themes/default/templates/__feeds_game.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64ff7903683f72_77412518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b251b6d5aa562b98a9fc13ac1c89fd3bcd163872' => 
    array (
      0 => '/www/wwwroot/m.kidhod.la/content/themes/default/templates/__feeds_game.tpl',
      1 => 1694155613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ff7903683f72_77412518 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_tpl']->value != "list") {?>
  <li class="col-md-6 col-lg-3">
    <div class="ui-box">
      <div class="img">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/<?php echo $_smarty_tpl->tpl_vars['_game']->value['game_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_game']->value['title_url'];?>
">
          <img alt="<?php echo $_smarty_tpl->tpl_vars['_game']->value['title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['_game']->value['thumbnail'];?>
" />
        </a>
      </div>
      <div class="mt10">
        <a class="h6 text-active" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/<?php echo $_smarty_tpl->tpl_vars['_game']->value['game_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_game']->value['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['_game']->value['title'];?>
</a>
        <?php if ($_smarty_tpl->tpl_vars['_game']->value['played']) {?>
          <div class="mt10 mb20 text-sm">
            <i class="far fa-clock mr5"></i><?php echo __("Played");?>
: <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['_game']->value['last_played_time'];?>
"><?php echo $_smarty_tpl->tpl_vars['_game']->value['last_played_time'];?>
</span>
          </div>
        <?php }?>
      </div>
      <div class="mt10">
        <a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/<?php echo $_smarty_tpl->tpl_vars['_game']->value['game_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_game']->value['title_url'];?>
">
          <?php echo __("Play");?>

        </a>
      </div>
    </div>
  </li>
<?php } elseif ($_smarty_tpl->tpl_vars['_tpl']->value == "list") {?>
  <li class="feeds-item">
    <div class="data-container">
      <a class="data-avatar" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/<?php echo $_smarty_tpl->tpl_vars['_game']->value['game_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_game']->value['title_url'];?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['_game']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_game']->value['title'];?>
">
      </a>
      <div class="data-content">
        <div class="float-end">
          <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/<?php echo $_smarty_tpl->tpl_vars['_game']->value['game_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_game']->value['title_url'];?>
"><?php echo __("Play");?>
</a>
        </div>
        <div>
          <span class="name">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/<?php echo $_smarty_tpl->tpl_vars['_game']->value['game_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_game']->value['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['_game']->value['title'];?>
</a>
          </span>
        </div>
      </div>
    </div>
  </li>
<?php }
}
}
