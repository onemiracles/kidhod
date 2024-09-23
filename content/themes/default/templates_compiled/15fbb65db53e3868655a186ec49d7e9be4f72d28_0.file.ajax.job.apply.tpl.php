<?php
/* Smarty version 4.3.2, created on 2023-10-11 16:15:52
  from '/www/wwwroot/m.kidhod.la/content/themes/default/templates/ajax.job.apply.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6526ca389f34f7_91043062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15fbb65db53e3868655a186ec49d7e9be4f72d28' => 
    array (
      0 => '/www/wwwroot/m.kidhod.la/content/themes/default/templates/ajax.job.apply.tpl',
      1 => 1694155577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
  ),
),false)) {
function content_6526ca389f34f7_91043062 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, false);
?>
    <?php echo __("Job Apply");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="js_ajax-forms" data-url="posts/job.php?do=apply&post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
  <div class="modal-body">
    <div class="text-xlg mb10"><?php echo __("Your Information");?>
</div>
    <div class="row">
      <!-- name -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo __("Name");?>
</label>
        <input name="name" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['name'];?>
">
      </div>
      <!-- name -->
      <!-- location -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo __("Location");?>
</label>
        <input name="location" type="text" class="form-control">
      </div>
      <!-- location -->
    </div>
    <div class="row">
      <!-- phone -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo __("Phone");?>
</label>
        <input name="phone" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_phone'];?>
">
      </div>
      <!-- phone -->
      <!-- email -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo __("Email");?>
</label>
        <input name="email" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_email'];?>
">
      </div>
      <!-- email -->
    </div>
    <div class="divider mtb10"></div>
    <div class="text-xlg mb10"><?php echo __("Your Experience");?>
</div>
    <div class="row">
      <!-- work place -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo __("Where did you work?");?>
 (<?php echo __("Optional");?>
)</label>
        <input name="work_place" type="text" class="form-control">
      </div>
      <!-- work place -->
      <!-- work position -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo __("Position");?>
</label>
        <input name="work_position" type="text" class="form-control">
      </div>
      <!-- work position -->
    </div>
    <!-- work description -->
    <div class="form-group">
      <label class="form-label"><?php echo __("Description");?>
</label>
      <textarea name="work_description" rows="5" dir="auto" class="form-control"></textarea>
    </div>
    <!-- work description -->
    <!-- work duration -->
    <div class="row">
      <div class="col-md-6 form-group">
        <label class="form-label"><?php echo __("From");?>
</label>
        <select class="form-select" name="work_from">
          <?php $_smarty_tpl->_assignInScope('i', 2022);?>
          <?php
 while ($_smarty_tpl->tpl_vars['i']->value >= 1970) {?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
            <?php echo $_smarty_tpl->tpl_vars['i']->value--;?>

          <?php }?>

        </select>
      </div>
      <div class="col-md-6 form-group">
        <label class="form-label"><?php echo __("To");?>
</label>
        <select class="form-select" name="work_to">
          <?php $_smarty_tpl->_assignInScope('i', 2022);?>
          <?php
 while ($_smarty_tpl->tpl_vars['i']->value >= 1970) {?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
            <?php echo $_smarty_tpl->tpl_vars['i']->value--;?>

          <?php }?>

        </select>
        <div class="form-check mt10">
          <input type="checkbox" class="form-check-input" name="work_now" id="work_now">
          <label class="form-check-label" for="work_now">
            <?php echo __("I currently work here");?>

          </label>
        </div>
      </div>
    </div>
    <!-- work duration -->
    <!-- questions -->
    <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_1_title'] || $_smarty_tpl->tpl_vars['post']->value['job']['question_2_title'] || $_smarty_tpl->tpl_vars['post']->value['job']['question_3_title']) {?>
      <div class="divider mtb10"></div>
      <div class="text-xlg mb10"><?php echo __("Job Questions");?>
</div>
      <div class="form-group">
        <div>
          <!-- question #1 -->
          <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_1_title']) {?>
            <div class="job-question">
              <label class="form-label mb5"><?php echo $_smarty_tpl->tpl_vars['post']->value['job']['question_1_title'];?>
</label>
              <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_1_type'] == "free_text") {?>
                <textarea name="question_1_answer" rows="3" dir="auto" class="form-control"></textarea>
              <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['job']['question_1_type'] == "yes_no_question") {?>
                <div>
                  <div class="form-check">
                    <input type="radio" name="question_1_answer" id="question_1_yes" value="yes" class="form-check-input">
                    <label class="form-check-label" for="question_1_yes"><?php echo __("Yes");?>
</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="question_1_answer" id="question_1_no" value="no" class="form-check-input">
                    <label class="form-check-label" for="question_1_no"><?php echo __("No");?>
</label>
                  </div>
                </div>
              <?php } else { ?>
                <div>
                  <select class="form-select" name="question_1_answer">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value['job']['question_1_options'], 'value', false, 'id');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
              <?php }?>
            </div>
          <?php }?>
          <!-- question #1 -->
          <!-- question #2 -->
          <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_2_title']) {?>
            <div class="job-question">
              <label class="form-label mb5"><?php echo $_smarty_tpl->tpl_vars['post']->value['job']['question_2_title'];?>
</label>
              <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_2_type'] == "free_text") {?>
                <textarea name="question_2_answer" rows="3" dir="auto" class="form-control"></textarea>
              <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['job']['question_2_type'] == "yes_no_question") {?>
                <div>
                  <div class="form-check">
                    <input type="radio" name="question_2_answer" id="question_2_yes" value="yes" class="form-check-input">
                    <label class="form-check-label" for="question_2_yes"><?php echo __("Yes");?>
</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="question_2_answer" id="question_2_no" value="no" class="form-check-input">
                    <label class="form-check-label" for="question_2_no"><?php echo __("No");?>
</label>
                  </div>
                </div>
              <?php } else { ?>
                <div>
                  <select class="form-select" name="question_2_answer">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value['job']['question_2_options'], 'value', false, 'id');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
              <?php }?>
            </div>
          <?php }?>
          <!-- question #2 -->
          <!-- question #3 -->
          <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_3_title']) {?>
            <div class="job-question">
              <label class="form-label mb5"><?php echo $_smarty_tpl->tpl_vars['post']->value['job']['question_3_title'];?>
</label>
              <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_3_type'] == "free_text") {?>
                <textarea name="question_3_answer" rows="3" dir="auto" class="form-control"></textarea>
              <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['job']['question_3_type'] == "yes_no_question") {?>
                <div>
                  <div class="form-check">
                    <input type="radio" name="question_3_answer" id="question_3_yes" value="yes" class="form-check-input">
                    <label class="form-check-label" for="question_3_yes"><?php echo __("Yes");?>
</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="question_3_answer" id="question_3_no" value="no" class="form-check-input">
                    <label class="form-check-label" for="question_3_no"><?php echo __("No");?>
</label>
                  </div>
                </div>
              <?php } else { ?>
                <div>
                  <select class="form-select" name="question_3_answer">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value['job']['question_3_options'], 'value', false, 'id');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
              <?php }?>
            </div>
          <?php }?>
          <!-- question #3 -->
        </div>
      </div>
    <?php }?>
    <!-- questions -->

    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary"><?php echo __("Apply");?>
</button>
  </div>
</form><?php }
}
