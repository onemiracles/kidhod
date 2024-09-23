<?php
/* Smarty version 4.3.2, created on 2023-10-11 07:08:42
  from '/www/wwwroot/m.kidhod.la/content/themes/default/templates/ajax.job.editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652649fadbaac3_50056102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2eafc7513e95bfab31ed62eef9e50e2aece8a870' => 
    array (
      0 => '/www/wwwroot/m.kidhod.la/content/themes/default/templates/ajax.job.editor.tpl',
      1 => 1694155571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 1,
    'file:__categories.recursive_options.tpl' => 1,
    'file:__custom_fields.tpl' => 1,
  ),
),false)) {
function content_652649fadbaac3_50056102 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
  <h6 class="modal-title">
    <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"jobs",'class'=>"main-icon mr10",'width'=>"24px",'height'=>"24px"), 0, false);
?>
    <?php echo __("Edit Job");?>

  </h6>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<form class="js_ajax-forms" data-url="posts/edit.php">
  <div class="modal-body">
    <div class="row">
      <!-- job title -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo __("Job Title");?>
</label>
        <input name="title" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['job']['title'];?>
">
      </div>
      <!-- job title -->
      <!-- location -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo __("Location");?>
</label>
        <input name="location" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['job']['location'];?>
">
      </div>
      <!-- location -->
    </div>
    <!-- salary range -->
    <div class="form-group">
      <label class="form-label"><?php echo __("Salary Range");?>
</label>
      <div class="row">
        <div class="input-group col-md-4">
          <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency_dir'] == "left") {?>
            <span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
</span>
          <?php }?>
          <input name="salary_minimum" type="text" class="form-control" placeholder="<?php echo __("Minimum");?>
" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['job']['salary_minimum'];?>
">
          <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency_dir'] == "right") {?>
            <span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
</span>
          <?php }?>
        </div>
        <div class="input-group col-md-4">
          <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency_dir'] == "left") {?>
            <span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
</span>
          <?php }?>
          <input name="salary_maximum" type="text" class="form-control" placeholder="<?php echo __("Maximum");?>
" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['job']['salary_maximum'];?>
">
          <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency_dir'] == "right") {?>
            <span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
</span>
          <?php }?>
        </div>
        <div class="col-md-4">
          <select class="form-select" name="pay_salary_per">
            <option value="per_hour" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['pay_salary_per'] == "per_hour") {?>selected<?php }?>><?php echo __("Per Hour");?>
</option>
            <option value="per_day" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['pay_salary_per'] == "per_day") {?>selected<?php }?>><?php echo __("Per Day");?>
</option>
            <option value="per_week" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['pay_salary_per'] == "per_week") {?>selected<?php }?>><?php echo __("Per Week");?>
</option>
            <option value="per_month" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['pay_salary_per'] == "per_month") {?>selected<?php }?>><?php echo __("Per Month");?>
</option>
            <option value="per_year" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['pay_salary_per'] == "per_year") {?>selected<?php }?>><?php echo __("Per Year");?>
</option>
          </select>
        </div>
      </div>
    </div>
    <!-- salary range -->
    <div class="row">
      <!-- job type -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo __("Job Type");?>
</label>
        <select class="form-select" name="type">
          <option value="full_time" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['type'] == "full_time") {?>selected<?php }?>><?php echo __("Full Time");?>
</option>
          <option value="part_time" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['type'] == "part_time") {?>selected<?php }?>><?php echo __("Part Time");?>
</option>
          <option value="internship" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['type'] == "internship") {?>selected<?php }?>><?php echo __("Internship");?>
</option>
          <option value="volunteer" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['type'] == "volunteer") {?>selected<?php }?>><?php echo __("Volunteer");?>
</option>
          <option value="contract" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['type'] == "contract") {?>selected<?php }?>><?php echo __("Contract");?>
</option>
        </select>
      </div>
      <!-- job type -->
      <!-- category -->
      <div class="form-group col-md-6">
        <label class="form-label"><?php echo __("Category");?>
</label>
        <select class="form-select" name="category">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jobs_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <?php $_smarty_tpl->_subTemplateRender('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_category'=>$_smarty_tpl->tpl_vars['post']->value['job']['category_id']), 0, true);
?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      </div>
      <!-- category -->
    </div>
    <!-- description -->
    <div class="form-group">
      <label class="form-label"><?php echo __("Description");?>
</label>
      <textarea name="description" rows="5" dir="auto" class="form-control"><?php echo $_smarty_tpl->tpl_vars['post']->value['text_plain'];?>
</textarea>
      <div class="form-text">
        <?php echo __("Describe the responsibilities and preferred skills for this job");?>

      </div>
    </div>
    <!-- description -->
    <!-- custom fields -->
    <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['basic']) {?>
      <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['basic'],'_registration'=>false), 0, false);
?>
    <?php }?>
    <!-- custom fields -->
    <!-- questions -->
    <div class="form-group">
      <label class="form-label"><?php echo __("Questions");?>
</label>
      <div>
        <!-- add question -->
        <?php if (!$_smarty_tpl->tpl_vars['post']->value['job']['question_1_title'] || !$_smarty_tpl->tpl_vars['post']->value['job']['question_2_title'] || !$_smarty_tpl->tpl_vars['post']->value['job']['question_3_title']) {?>
          <div class="add-job-question js_add-job-question"><i class="fas fa-plus-circle mr5"></i><?php echo __("Add Question");?>
</div>
        <?php }?>
        <!-- add question -->
        <!-- question #1 -->
        <div class="job-question <?php if (!$_smarty_tpl->tpl_vars['post']->value['job']['question_1_title']) {?>x-hidden<?php }?>" data-id="1">
          <label class="form-label mb10"><?php echo __("Question");?>
 #1</label>
          <select class="form-select js_question-type" name="question_1_type">
            <option value="free_text" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_1_type'] == "free_text") {?>selected<?php }?>><?php echo __("Free Text Question");?>
</option>
            <option value="yes_no_question" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_1_type'] == "yes_no_question") {?>selected<?php }?>><?php echo __("Yes/No Question");?>
</option>
            <option value="multiple_choice" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_1_type'] == "multiple_choice") {?>selected<?php }?>><?php echo __("Multiple Choice Question");?>
</option>
          </select>
          <div class="form-text">
            <?php echo __("Select the type of your question");?>

          </div>
          <input name="question_1_title" type="text" class="form-control mt10" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['job']['question_1_title'];?>
">
          <div class="form-text">
            <?php echo __("Ask your question");?>

          </div>
          <div class="<?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_1_type'] != "multiple_choice") {?>x-hidden<?php }?> js_question-choices">
            <textarea name="question_1_choices" rows="3" dir="auto" class="form-control mt10"><?php echo $_smarty_tpl->tpl_vars['post']->value['job']['question_1_choices'];?>
</textarea>
            <div class="form-text">
              <?php echo __("One option per line");?>

            </div>
          </div>
        </div>
        <!-- question #1 -->
        <!-- question #2 -->
        <div class="job-question <?php if (!$_smarty_tpl->tpl_vars['post']->value['job']['question_2_title']) {?>x-hidden<?php }?>" data-id="2">
          <label class="form-label mb10"><?php echo __("Question");?>
 #2</label>
          <select class="form-select js_question-type" name="question_2_type">
            <option value="free_text" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_2_type'] == "free_text") {?>selected<?php }?>><?php echo __("Free Text Question");?>
</option>
            <option value="yes_no_question" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_2_type'] == "yes_no_question") {?>selected<?php }?>><?php echo __("Yes/No Question");?>
</option>
            <option value="multiple_choice" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_2_type'] == "multiple_choice") {?>selected<?php }?>><?php echo __("Multiple Choice Question");?>
</option>
          </select>
          <div class="form-text">
            <?php echo __("Select the type of your question");?>

          </div>
          <input name="question_2_title" type="text" class="form-control mt10" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['job']['question_2_title'];?>
">
          <div class="form-text">
            <?php echo __("Ask your question");?>

          </div>
          <div class="<?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_2_type'] != "multiple_choice") {?>x-hidden<?php }?> js_question-choices">
            <textarea name="question_2_choices" rows="3" dir="auto" class="form-control mt10"><?php echo $_smarty_tpl->tpl_vars['post']->value['job']['question_2_choices'];?>
</textarea>
            <div class="form-text">
              <?php echo __("One option per line");?>

            </div>
          </div>
        </div>
        <!-- question #2 -->
        <!-- question #3 -->
        <div class="job-question <?php if (!$_smarty_tpl->tpl_vars['post']->value['job']['question_3_title']) {?>x-hidden<?php }?>" data-id="3">
          <label class="form-label mb10"><?php echo __("Question");?>
 #3</label>
          <select class="form-select js_question-type" name="question_3_type">
            <option value="free_text" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_3_type'] == "free_text") {?>selected<?php }?>><?php echo __("Free Text Question");?>
</option>
            <option value="yes_no_question" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_3_type'] == "yes_no_question") {?>selected<?php }?>><?php echo __("Yes/No Question");?>
</option>
            <option value="multiple_choice" <?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_3_type'] == "multiple_choice") {?>selected<?php }?>><?php echo __("Multiple Choice Question");?>
</option>
          </select>
          <div class="form-text">
            <?php echo __("Select the type of your question");?>

          </div>
          <input name="question_3_title" type="text" class="form-control mt10" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['job']['question_3_title'];?>
">
          <div class="form-text">
            <?php echo __("Ask your question");?>

          </div>
          <div class="<?php if ($_smarty_tpl->tpl_vars['post']->value['job']['question_3_type'] != "multiple_choice") {?>x-hidden<?php }?> js_question-choices">
            <textarea name="question_3_choices" rows="3" dir="auto" class="form-control mt10"><?php echo $_smarty_tpl->tpl_vars['post']->value['job']['question_3_choices'];?>
</textarea>
            <div class="form-text">
              <?php echo __("One option per line");?>

            </div>
          </div>
        </div>
        <!-- question #3 -->
      </div>
    </div>
    <!-- questions -->
    <!-- cover image -->
    <div class="form-group">
      <label class="form-label"><?php echo __("Cover Image");?>
</label>
      <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['job']['cover_image'];?>
')">
        <div class="x-image-loader">
          <div class="progress x-progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
        <input type="hidden" class="js_x-image-input" name="cover_image" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['job']['cover_image'];?>
">
      </div>
    </div>
    <!-- cover image -->
    <!-- error -->
    <div class="alert alert-danger mt15 mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <input type="hidden" name="handle" value="job">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
    <button type="submit" class="btn btn-primary"><?php echo __("Save");?>
</button>
  </div>
</form>

<?php echo '<script'; ?>
>
  $(function() {
    /* handle job questions */
    $('.js_add-job-question').on('click', function() {
      if ($('.job-question[data-id="1"]').is(":hidden")) {
        $('.job-question[data-id="1"]').show();
        return;
      }
      if ($('.job-question[data-id="2"]').is(":hidden")) {
        $('.job-question[data-id="2"]').show();
        return;
      }
      if ($('.job-question[data-id="3"]').is(":hidden")) {
        $('.job-question[data-id="3"]').show();
        $(this).hide();
        return;
      }
    });
    /* handle job questions dependencies */
    $('.js_question-type').on('change', function() {
      if ($(this).val() == "multiple_choice") {
        $(this).parents('.job-question').find(".js_question-choices").show();
      } else {
        $(this).parents('.job-question').find(".js_question-choices").hide();
      }
    });
  });
<?php echo '</script'; ?>
><?php }
}
