<?php
/* Smarty version 4.3.2, created on 2023-10-11 06:59:26
  from '/www/wwwroot/m.kidhod.la/content/themes/default/templates/__feeds_candidate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652647ce5400c7_62942263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46d3e93cff264851902264fe9935c17ab7cdd175' => 
    array (
      0 => '/www/wwwroot/m.kidhod.la/content/themes/default/templates/__feeds_candidate.tpl',
      1 => 1694155588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652647ce5400c7_62942263 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="job-candidate-wrapper">
  <div class="job-candidate-header">
    <div class="job-candidate-avatar">
      <a class="post-avatar-picture large" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['candidate']->value['user_name'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['candidate']->value['user_picture'];?>
);"></a>
    </div>
    <div class="job-candidate-info">
      <div class="name">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['candidate']->value['user_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['candidate']->value['name'];?>
</a>
      </div>
      <div class="row mb10">
        <div class="col-md-6">
          <i class="fas fa-map-marker-alt fa-fw mr5" style="color: #1f9cff;"></i><?php echo $_smarty_tpl->tpl_vars['candidate']->value['location'];?>

        </div>
        <div class="col-md-6">
          <i class="fas fa-clock fa-fw mr5" style="color: #ffc107;"></i><span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['candidate']->value['applied_time'];?>
"><?php echo $_smarty_tpl->tpl_vars['candidate']->value['applied_time'];?>
</span>
        </div>
      </div>
      <div class="row mb10">
        <div class="col-md-6">
          <i class="fas fa-phone-alt fa-fw mr5" style="color: #2bb431;"></i><?php echo $_smarty_tpl->tpl_vars['candidate']->value['phone'];?>

        </div>
        <div class="col-md-6">
          <i class="fas fa-envelope fa-fw mr5" style="color: #009688;"></i><?php echo $_smarty_tpl->tpl_vars['candidate']->value['email'];?>

        </div>
      </div>
      <div>
        <!-- message -->
        <button type="button" class="btn btn-sm btn-primary rounded-pill js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['candidate']->value['user_id'];?>
" data-name="<?php if ($_smarty_tpl->tpl_vars['system']->value['show_usernames_enabled']) {
echo $_smarty_tpl->tpl_vars['candidate']->value['user_name'];
} else {
echo $_smarty_tpl->tpl_vars['candidate']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['candidate']->value['user_lastname'];
}?>" data-link="<?php echo $_smarty_tpl->tpl_vars['candidate']->value['user_name'];?>
" data-picture="<?php echo $_smarty_tpl->tpl_vars['candidate']->value['user_picture'];?>
">
          <i class="fa fa-comments mr5"></i><?php echo __("Message");?>

        </button>
        <!-- message -->
      </div>
    </div>
  </div>
  <div class="divider mtb20"></div>
  <div class="job-question">
    <div class="mb10">
      <div class="question"><?php echo __("Where did you work?");?>
</div>
      <div class="answer"><?php echo $_smarty_tpl->tpl_vars['candidate']->value['work_place'];?>
</div>
    </div>
    <div class="row mb10">
      <div class="col-md-4">
        <div class="question"><?php echo __("Position");?>
</div>
        <div class="answer"><?php echo $_smarty_tpl->tpl_vars['candidate']->value['work_position'];?>
</div>
      </div>
      <div class="col-md-4">
        <div class="question"><?php echo __("From");?>
</div>
        <div class="answer"><?php echo $_smarty_tpl->tpl_vars['candidate']->value['work_from'];?>
</div>
      </div>
      <div class="col-md-4">
        <div class="question"><?php echo __("To");?>
</div>
        <div class="answer"><?php if ($_smarty_tpl->tpl_vars['candidate']->value['work_now']) {
echo __("Till Now");
} else {
echo $_smarty_tpl->tpl_vars['candidate']->value['work_to'];
}?></div>
      </div>
    </div>
    <div class="question"><?php echo __("Description");?>
</div>
    <div class="answer"><?php echo $_smarty_tpl->tpl_vars['candidate']->value['work_description'];?>
</div>
  </div>
  <!-- questions -->
  <?php if ($_smarty_tpl->tpl_vars['candidate']->value['question_1_title'] || $_smarty_tpl->tpl_vars['candidate']->value['question_2_title'] || $_smarty_tpl->tpl_vars['candidate']->value['question_3_title']) {?>
    <div class="divider mtb20"></div>
    <div>
      <!-- question #1 -->
      <?php if ($_smarty_tpl->tpl_vars['candidate']->value['question_1_title']) {?>
        <div class="job-question">
          <div class="question"><?php echo $_smarty_tpl->tpl_vars['candidate']->value['question_1_title'];?>
</div>
          <div class="answer">
            <?php echo $_smarty_tpl->tpl_vars['candidate']->value['question_1_answer'];?>

          </div>
        </div>
      <?php }?>
      <!-- question #1 -->
      <!-- question #2 -->
      <?php if ($_smarty_tpl->tpl_vars['candidate']->value['question_2_title']) {?>
        <div class="job-question">
          <div class="question"><?php echo $_smarty_tpl->tpl_vars['candidate']->value['question_2_title'];?>
</div>
          <div class="answer">
            <?php echo $_smarty_tpl->tpl_vars['candidate']->value['question_2_answer'];?>

          </div>
        </div>
      <?php }?>
      <!-- question #2 -->
      <!-- question #3 -->
      <?php if ($_smarty_tpl->tpl_vars['candidate']->value['question_3_title']) {?>
        <div class="job-question">
          <div class="question"><?php echo $_smarty_tpl->tpl_vars['candidate']->value['question_3_title'];?>
</div>
          <div class="answer">
            <?php echo $_smarty_tpl->tpl_vars['candidate']->value['question_3_answer'];?>

          </div>
        </div>
      <?php }?>
      <!-- question #3 -->
    </div>
  <?php }?>
  <!-- questions -->
</div><?php }
}
