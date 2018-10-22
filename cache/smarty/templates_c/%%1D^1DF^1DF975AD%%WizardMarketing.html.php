<?php /* Smarty version 2.6.29, created on 2018-07-23 17:49:17
         compiled from modules/Campaigns/WizardMarketing.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'modules/Campaigns/WizardMarketing.html', 480, false),array('modifier', 'default', 'modules/Campaigns/WizardMarketing.html', 956, false),array('function', 'sugar_getimagepath', 'modules/Campaigns/WizardMarketing.html', 853, false),array('function', 'sugar_getimage', 'modules/Campaigns/WizardMarketing.html', 885, false),array('function', 'sugar_getjspath', 'modules/Campaigns/WizardMarketing.html', 925, false),array('function', 'sugar_getscript', 'modules/Campaigns/WizardMarketing.html', 1470, false),)), $this); ?>
<!--
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

/*********************************************************************************

 ********************************************************************************/
-->
<?php echo '
<style>
	.li-tick {
		list-style-image: url("themes/default/images/cmpwzrd/ic_check_circle_black_24px.svg");
		height: 24px;
		margin-top: 8px;
	}
	.li-cross {
		list-style-image: url("themes/default/images/cmpwzrd/ic_cancel_black_24px.svg");
		height: 24px;
		margin-top: 8px;
	}
	.li-tick *, .li-cross * {
		position: absolute;
		line-height: 24px;
	}
</style>
'; ?>

<?php if ($this->_tpl_vars['hideScreen']): ?><div style="display:none;"><?php endif; ?>
<?php echo '
<script type="text/javascript">
	$(function(){
		$(\'#wiz_stage\').show();
	});
</script>
'; ?>

<div id='wiz_stage' style="display:none;">
<form  id="wizform" name="wizform" method="POST" action="index.php" enctype="multipart/form-data">
	<input type="hidden" name="module" value="Campaigns">
	<input type="hidden" id="record" name="record" value="<?php echo $this->_tpl_vars['MRKT_ID']; ?>
">
	<input type="hidden" name="campaign_id" value="<?php echo $this->_tpl_vars['CAMPAIGN_ID']; ?>
">
	<input type="hidden" id='action' name="action">
	<input type="hidden" id="return_module" name="return_module" value="<?php echo $this->_tpl_vars['RETURN_MODULE']; ?>
">
	<input type="hidden" id="return_id" name="return_id" value="<?php echo $this->_tpl_vars['RETURN_ID']; ?>
">
	<input type="hidden" id="return_action" name="return_action" value="<?php echo $this->_tpl_vars['RETURN_ACTION']; ?>
">
	<input type="hidden" id="direct_step" name="direct_step" value='4'>
	<input type="hidden" id="wiz_total_steps" name="totalsteps" value="3">
	<input type="hidden" id="wiz_current_step" name="currentstep" value='0'>
	<input type="hidden" id="wiz_back" name="wiz_back" value='none'>
	<input type="hidden" id="wiz_next" name="wiz_next" value='2'>
	<input type="hidden" id="direction" name="wiz_direction" value='exit'>
	<input type="hidden" id="show_wizard_summary" name="show_wizard_summary" value='0'>
	<input type="hidden" id="sendMarketingEmailTest" name="sendMarketingEmailTest" value="0">
	<input type="hidden" id="sendMarketingEmailSchedule" name="sendMarketingEmailSchedule" value="0">

	<?php echo $this->_tpl_vars['WIZMENU']; ?>


<p>
<div id ='buttons'>
	<table width="100%" border="0" cellspacing="0" cellpadding="0" >
		<tr>
			<td align="left" width='30%'>
				<table border="0" cellspacing="0" cellpadding="0" ><tr>

					<tr>
						<td><div id="back_button_div2"><input id="wiz_back_button" type='hidden' title="<?php echo $this->_tpl_vars['APP']['LBL_BACK']; ?>
" class="button" onclick="determine_back();"  name="back" value="<?php echo $this->_tpl_vars['APP']['LBL_BACK']; ?>
"></div></td>

						<td<?php if ($this->_tpl_vars['campaign_type'] != 'NewsLetter' || $this->_tpl_vars['campaign_type'] == 'Email'): ?> style="display:none;"<?php endif; ?>><div id="back_button_div"><input id="wiz_back_button" type='button' title="<?php echo $this->_tpl_vars['APP']['LBL_BACK']; ?>
" class="button" onclick="determine_back();"  name="back" value="<?php echo $this->_tpl_vars['APP']['LBL_BACK']; ?>
"></div></td>


						<td><div id="cancel_button_div"><input id="wiz_cancel_button" title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button"

															   type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
">

							<script>
								<?php echo '
								$(function(){
									$(\'#wiz_cancel_button\').click(function(){
										this.form.action.value=\'WizardHome\';
										this.form.module.value=\'Campaigns\';
										this.form.record.value=\''; ?>
<?php echo $this->_tpl_vars['CAMPAIGN_ID']; ?>
<?php echo '\';

										// if mail box is not set up you can\'t cancel out of the wizard
										'; ?>
<?php if ($this->_tpl_vars['campaign_type'] == 'NewsLetter' || $this->_tpl_vars['campaign_type'] == 'Email'): ?><?php echo '
										var current = document.getElementById(\'wiz_current_step\').value;
										if(current == 1 || current == 2) {
											var total = document.getElementById(\'wiz_total_steps\').value;
											document.getElementById(\'wiz_current_step\').value = document.getElementById(\'wiz_total_steps\').value;
											$(\'#step\' + current).hide();
											$(\'#step\' + total).show();
											return false;
										}
										'; ?>
<?php endif; ?><?php echo '

										$(this).closest(\'form\').submit();
									});
								});
								'; ?>

							</script>

						</div></td>

						<td><div id="save_button_div"><input id="wiz_submit_button" title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.action.value='WizardMarketingSave'; this.form.module.value='Campaigns'; $('#show_wizard_summary').val('1'); " type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_NEXT_BUTTON_LABEL']; ?>
" ></div>
						</td>

						<td><div id="next_button_div"><input id="wiz_next_button" type='button' title="<?php echo $this->_tpl_vars['APP']['LBL_NEXT_BUTTON_LABEL']; ?>
" class="button" onclick="javascript:onNextClick();" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_NEXT_BUTTON_LABEL']; ?>
"></div></td>
					</tr>
				</table>
			</td>
			<td  align="right" width='40%'><div id='wiz_location_message'></td>
		</tr>
	</table>
</div>
</p>

	<script type="text/javascript">
		<?php echo '


		var uploadFormCallback = function() {
			console.log(\'override this..\');
		};

		$(function(){
			$(\'#upload_form\').submit(function(){
				var formData = new FormData($(this)[0]);
				$.post($(this).attr(\'action\'), formData, function(data){
					uploadFormCallback(data);
				});
				return false;
			});
		});

		var hasNewAttachments = function() {
			return $(\'#upload_form input[type=file]\').length > 1;
		};

		var submitMarketingEmailAttachments = function(callback) {
			$(\'#attach_to_template_id\').val($(\'#template_id\').val());
			///$(\'#attach_to_marketing_id\').val($(\'#record\').val());


			if(typeof callback != \'undefined\') {
				uploadFormCallback = callback;
			}

			$(\'#upload_form input[type="submit"]\').click();

		};

		// validations

		var emailTemplateFormValidationRules = [
			{id: \'template_id\', rules: [\'required\'], dependency: function() {
				return !$(\'input[name="update_exists_template"]\').prop(\'checked\');
			}},
			{id: \'template_name\', rules: [\'required\']},
			//{id: \'template_subject\', rules: [\'required\']},
		];

		var ruleMessages = {
			required: \''; ?>
<?php echo $this->_tpl_vars['MOD']['ERR_MISSING_REQUIRED_FIELDS']; ?>
<?php echo '\'
		};

		var hideEmailTemplateFormErrors = function() {
			var fields = emailTemplateFormValidationRules;
			for(var i=0; i<fields.length; i++) {
				var field = fields[i];
				$(\'#\' + field.id).css(\'background-color\', \'initial\');
				var errorElem = $(\'#\' + field.id).next();
				if(errorElem.hasClass(\'required\') && errorElem.hasClass(\'validation-message\')) {
					errorElem.remove();
				}
			}
		};

		var showEmailTemplateFormErrors = function(errors) {
			hideEmailTemplateFormErrors();
			for(var i=0; i<errors.length; i++) {
				var error = errors[i];
				$(\'#\' + error.field.id).css(\'background-color\', \'red\');
				$(\'#\' + error.field.id).animate({\'background-color\': \'white\'}, 1500);
				$(\'#\' + error.field.id).after(\'<div class="required validation-message">\' + error.message + \'</div>\');
			}
		};

		var isValidEmailTemplateFormAndShowErrors = function() {
			var errors = [];

			var fields = emailTemplateFormValidationRules;


			for(var i=0; i<fields.length; i++) {
				var field = fields[i];
				for(var j=0; j<field.rules.length; j++) {
					var rule = field.rules[j];
					switch(rule) {
						default: case \'required\':
							if(typeof field.dependency != \'undefined\') {
								if(field.dependency()) {
									rule = \'none\';
								}
							}
						break;
					}
					switch(rule) {
						case \'none\': break;
						default: case \'required\':
							if(!$(\'#\' + field.id).val()) {
								errors.push({
									\'field\': field,
									\'rule\': rule,
									\'message\': ruleMessages[rule],
								});
							}
							break;
					}

				}
			}

			if(errors.length) {
				showEmailTemplateFormErrors(errors);
				return false;
			}
			return true;
		};

		function onNextClick() {
			switch(document.getElementById(\'wiz_current_step\').value) {
				case \'1\':
						var updateChecked = $(\'input[name="update_exists_template"]\').prop(\'checked\');

						if($(\'#template_id\').val() == \'\') {
							alert(SUGAR.language.translate(\'Campaigns\', \'LBL_STEP_INFO_EMAIL_TEMPLATE\'));
							return false;
						}

//						if(!updateChecked) {
							// validate email template form before save
							if (isValidEmailTemplateFormAndShowErrors()) {
								onSaveCopyMarketingEmailTemplate(function () {
									onSaveMarketingEmail(function(){
										if (hasNewAttachments()) {
											submitMarketingEmailAttachments(function(){
												onNext();
												wizardMenuSetStepLink(4);
											});
										}
										else {
											onNext();
											wizardMenuSetStepLink(4);
										}
									});
								});
							}
//						} else {
//							onNext();
//							wizardMenuSetStepLink(4);
//						}
					break;

				case \'2\':
					// save/create marketing email first
					onSaveMarketingEmail(function(){
						onNext();
						refreshMarketingSelect();
					});
					break;

				default:
					onNext();
					break;

			}
		}

		var emailTemplateCopyId = null;

		function onSaveCopyMarketingEmailTemplate(callback) {



			var func = emailTemplateCopyId || $(\'input[name="update_exists_template"]\').prop(\'checked\') ? \'update\': \'createCopy\';

//			<!-- BEGIN: NoInbound1 -->
//			addUploadFiles(\'wizform\');
//			addUploadDocs(\'wizform\');
//			<!-- END: NoInbound1 -->

//			var getAttachmentsForAdd = function() {
//				// todo: !@#
//			};
//
			var getAttachmentsForRemove = function() {
				var attachmentsForRemove = [];
				$(\'#step1_uploader input[type="checkbox"]\').each(function(){
					if($(this).attr(\'name\') == \'remove_attachment[]\' && $(this).prop(\'checked\')) {
						attachmentsForRemove.push($(this).val());
					}
				});
				return attachmentsForRemove;
			};

			$.post(\'index.php?entryPoint=emailTemplateData&rand=\'+Math.random(), {
				\'func\': func,
				\'campaignId\': $(\'input[name="campaign_id"]\').val(),
				\'emailTemplateId\' : emailTemplateCopyId ? emailTemplateCopyId : $(\'#template_id\').val(),
				\'body_html\': $(\'#email_template_editor\').getMozaikValue(),
				\'name\': $(\'#template_name\').val(),
				\'subject\': $(\'#template_subject\').val(),
//				\'attachmentsAdd\': getAttachmentsForAdd(),
				\'attachmentsRemove\': getAttachmentsForRemove()
			}, function(resp){
				// todo: hide preloader or loading message..
				resp = JSON.parse(resp);
				if(resp.error) {
					// todo: show error
					console.error(resp.error);
				}
				else {
					if(!emailTemplateCopyId && func == \'createCopy\') {
						emailTemplateCopyId = resp.data.id;
						$(\'#template_id\').append(\'<option value="\' + resp.data.id + \'">\' + resp.data.name + \'</option>\');
						$(\'#template_id\').val(resp.data.id);

						$(\'input[name="update_exists_template"]\').prop(\'checked\', true);
					}
					callback();
				}
			});
			// todo: show preloader or loading message...
		}

		function onSaveMarketingEmail(callback) {
			var data = $(\'#wizform\').serialize();
			if(emailTemplateCopyId) {
				data = data.replace(/&template_id=[^&]+&/, \'&template_id=\'+emailTemplateCopyId+\'&\');
			}
			$.post(\'index.php?entryPoint=emailMarketingData&func=wizardUpdate&rand=\'+Math.random(), data, function(resp){
				// todo: hide preloader or loading message..
				resp = JSON.parse(resp);
				if(resp.error) {
					// todo: show error
					console.error(resp.error);
				}
				else {
					resp.data = JSON.parse(resp.data);
					//$(\'#record\').replaceWith(\'<input type="hidden" id="record" value="\' + resp.data.id + \'">\');
					document.getElementById(\'record\').value = resp.data.id;
					callback();
				}
			});
			// todo: show preloader or loading message...
		}

		function onNext() {
			navigate(\'next\', false, true);
			if(document.getElementById(\'wiz_current_step\').value == document.getElementById(\'wiz_total_steps\').value) {
				wizardMenuFillAll();
			}
			changeNextBtnLabel();
			saveMarketingAndTemplate(\'getTemplateValidation\');
		}

		function changeNextBtnLabel() {
			if(document.getElementById(\'wiz_current_step\').value == \'2\') {
				$(\'#wiz_next_button\').val(\''; ?>
<?php echo $this->_tpl_vars['MOD']['LBL_CREATE_MARKETING_RECORD']; ?>
<?php echo '\');
			}
			else {
				$(\'#wiz_next_button\').val(\''; ?>
<?php echo $this->_tpl_vars['APP']['LBL_NEXT_BUTTON_LABEL']; ?>
<?php echo '\');
			}
		}

		//returns a js date

		function toDate(datestr) {
			var $format = "", $splitformat = ["","",""], $dbformat = ["","",""];
			// Get user preferences date format
			$format = cal_date_format
			$format = $format.toUpperCase();
			$format = $format.replace(\'%D\', \'DD\')
			$format = $format.replace(\'%M\', \'MM\')
			$format = $format.replace(\'%Y\', \'YYYY\')

			// return js date
			return moment(datestr, $format).toDate()
		}

		$(document).ready(function(){

			YAHOO.util.Event.addListener(YAHOO.util.Selector.query(\'#date_start_date\'), "change", function(){
				var $date = toDate(YAHOO.util.Selector.query(\'#date_start_date\')[0].value);
				if($date == \'Invalid Date\') {
					$(\'#date_start_date\').val(\'\')
				}
			});

			$(\'#date_start_date\').change(function() {
				var $date = toDate(YAHOO.util.Selector.query(\'#date_start_date\')[0].value);
				if($date == \'Invalid Date\') {
					$(\'#date_start_date\').val(\'\')
				}
			})
		});
		'; ?>

	</script>


<table class='other view' cellspacing="1">
<tr>


<td  rowspan='2' width='100%' style="padding: 0;">
<div id="wiz_message"></div>
	<?php echo $this->_tpl_vars['msg']; ?>

<div id=wizard>
	<div id='step1' class="edit view" style="display:none;  margin-top: 8px;">
		<div id="templateManager" class="template-panel">
			<div id="templateManagerDialog">
				<div id="emailTemplateDialog" class="hidden">

				</div>

				<div id="emailTrackerDialog" class="hidden">
					<h2><?php echo $this->_tpl_vars['MOD']['LBL_TRACKER_TITLE']; ?>
</h2>
					<div class="clear"></div>
					<div class="template-container-full">
						<div class="hidden">
							<label><?php echo $this->_tpl_vars['MOD']['LBL_TRACKER_KEY']; ?>
</label>
							<input type="text" size="100" tabindex='1' name="tracker_name" id="tracker_name" value="<?php echo $this->_tpl_vars['TRACKER_NAME']; ?>
" class="errorable form-control input-sm" placeholder="<?php echo $this->_tpl_vars['MOD']['LBL_EDIT_TRACKER_NAME']; ?>
">
							<span id="tracker_name_error" style="display: none;" class="error_message" for="tracker_name"></span>
						</div>
						<div class="clear"></div>
						<div class="form-group">
							<label><?php echo $this->_tpl_vars['MOD']['LBL_TRACKER_TEXT']; ?>
</label>
							<input type="text" size="100" maxlength="255" id="url_text" name="url_text" value="<?php echo $this->_tpl_vars['DEFAULT_URL_TEXT']; ?>
" class="form-control input-sm" />
						</div>
						<div class="clear"></div>
						<div class="form-group">
							<label><?php echo $this->_tpl_vars['MOD']['LBL_TRACKER_URL']; ?>
:</label>
							<input type="text" maxlength='255' size="100" tabindex='3' <?php echo $this->_tpl_vars['TRACKER_URL_DISABLED']; ?>
 name="tracker_url_add" id="tracker_url_add" value="<?php echo $this->_tpl_vars['TRACKER_URL']; ?>
" class="errorable form-control input-sm" placeholder="http://" title="<?php echo $this->_tpl_vars['MOD']['LBL_EDIT_TRACKER_URL']; ?>
">
							<span id="tracker_url_error" style="display: none;" class="error_message" for="tracker_url"></span>
						</div>
						<div class="clear"></div>
						<div class="form-group">
							<span><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_EDIT_OPT_OUT'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '&nbsp') : smarty_modifier_replace($_tmp, ' ', '&nbsp')); ?>
</span><input onclick="toggle_tracker_url(this);" name="is_optout" id="is_optout" tabindex='2' type="checkbox" <?php echo $this->_tpl_vars['IS_OPTOUT_CHECKED']; ?>
/>
							<input type='button' tabindex="0" onclick='<?php echo $this->_tpl_vars['INSERT_URL_ONCLICK']; ?>
' class='button hidden' value='<?php echo $this->_tpl_vars['MOD']['LBL_INSERT_URL_REF']; ?>
'>
						</div>
					</div>
				</div>
				<div id="templateManagerDialogActions" class="form-group hidden">
					<input type="button" id="templateManagerActionOK" value="OK">
					<input type="button" id="templateManagerActionCancel" value="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL']; ?>
">
				</div>
			</div>

			<div class="template-panel-container panel">
				<div class="template-container-full ">
					<h4 style="border-bottom: solid 1px #eee;"><?php echo $this->_tpl_vars['MOD']['LBL_TEMPLATE']; ?>
</h4>
					<div class="clear">&nbsp;</div>
					<div><label class="wizard-step-info"><?php echo $this->_tpl_vars['MOD']['LBL_PLEASE_SELECT_OPTION']; ?>
</label></div>
					<style>
						<?php echo '
						ul.template_option_list {list-style-type: none; padding-left: 0; margin-bottom: 8px;}
						ul.template_option_list input {position: relative; top: -6px;}
						ul.template_option_list label {font-weight: normal;}
						'; ?>

					</style>
					<ul class="template_option_list">
						<li><input type="radio" name="template_option_radio" id="template_option_select"> <label for="template_option_select"><?php echo $this->_tpl_vars['MOD']['LBL_OPTION_SELECT_TEMPLATE']; ?>
</label></li>
						<li><input type="radio" name="template_option_radio" id="template_option_create"> <label for="template_option_create"><?php echo $this->_tpl_vars['MOD']['LBL_OPTION_CREATE_TEMPLATE']; ?>
</label></li>
						<li><input type="radio" name="template_option_radio" id="template_option_copy"  > <label for="template_option_copy"  ><?php echo $this->_tpl_vars['MOD']['LBL_OPTION_COPY_TEMPLATE']; ?>
</label></li>
					</ul>
					<script>
						<?php echo '
						$(function(){

							$(\'#template_option_select\').click(function(){
								$(\'#template_id_select_frm\').show();
								$(\'#template_name_input_frm\').hide();
								$(\'#template_id_name_space_separator\').hide();
								$(\'#LBL_SAVE_EMAIL_TEMPLATE_BTN\').show();
								$(\'#LBL_CREATE_EMAIL_TEMPLATE_BTN\').hide();
								$(\'input[name="update_exists_template"]\').prop(\'checked\', true);
							});

							$(\'#template_option_create\').click(function(){
								$(\'#template_id_select_frm\').hide();
								$(\'#template_name_input_frm\').show();
								$(\'#template_id_name_space_separator\').hide();
								$(\'#LBL_SAVE_EMAIL_TEMPLATE_BTN\').hide();
								$(\'#LBL_CREATE_EMAIL_TEMPLATE_BTN\').show();
								$(\'input[name="update_exists_template"]\').prop(\'checked\', false);
								emailTemplateCopyId = null;
							});

							$(\'#template_option_copy\').click(function(){
								$(\'#template_id_select_frm\').show();
								$(\'#template_name_input_frm\').show();
								$(\'#template_id_name_space_separator\').show();
								$(\'#LBL_SAVE_EMAIL_TEMPLATE_BTN\').hide();
								$(\'#LBL_CREATE_EMAIL_TEMPLATE_BTN\').show();
								$(\'input[name="update_exists_template"]\').prop(\'checked\', false);
							});


							$(\'#template_id_select_frm\').hide();
							$(\'#template_name_input_frm\').hide();
							$(\'#template_id_name_space_separator\').hide();
							$(\'#LBL_SAVE_EMAIL_TEMPLATE_BTN\').hide();
							$(\'#LBL_CREATE_EMAIL_TEMPLATE_BTN\').hide();

							if($(\'#template_id\').val()) {
								$(\'#template_option_select\').click();
							}
							else {
								$(\'#template_option_select\').click();
							}

							// fix lost buttons
							$(\'#show_buttons_frm\').removeClass(\'hidden\');

						});
						'; ?>

					</script>
					<div class="form-group clear-block">
						<!--<label><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_TEMPLATE'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '&nbsp') : smarty_modifier_replace($_tmp, ' ', '&nbsp')); ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></label>-->
						<div id="template_id_select_frm">
							<label><?php echo $this->_tpl_vars['MOD']['LBL_TEMPLATE_FIELD']; ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></label>
							<select  class="form-control input-sm" id="template_id" name='template_id' tabindex='2' onchange="onEmailTemplateChange(this, '<?php echo $this->_tpl_vars['MOD']['LBL_COPY_OF']; ?>
');" title='<?php echo $this->_tpl_vars['MOD']['LBL_TEMPLATE']; ?>
'><?php echo $this->_tpl_vars['EMAIL_TEMPLATE_OPTIONS']; ?>
</select>
						</div>
						<div class="clear">&nbsp;</div>
						<br style="disply:none;" id="template_id_name_space_separator">
						<div id="template_name_input_frm">
							<label><?php echo $this->_tpl_vars['MOD']['LBL_NAME']; ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></label>
							<input type="text" class="form-control input-sm" id="template_name" name="template_name" value="<?php echo $this->_tpl_vars['template_name']; ?>
" maxlength="255" size="100">
							<span class="form-group hidden">
								<label><?php echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_UPDATE_TEMPLATE'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '&nbsp') : smarty_modifier_replace($_tmp, ' ', '&nbsp')); ?>
</label>
								<input type="checkbox" name="update_exists_template" class="form-checkbox input-sm hidden">
							</span>
						</div>
						<script>
							<?php echo '
							$(function(){
								if(document.getElementById(\'template_id\').value) {
									onEmailTemplateChange(document.getElementById(\'template_id\'), \'{$MOD.LBL_COPY_OF}\');
								}
							});
							'; ?>

						</script>
					</div>
					<div id="template_messages"></div>
					<div class="button-group" id="show_buttons_frm">
						<input type="button" id="LBL_SAVE_EMAIL_TEMPLATE_BTN" value="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_EMAIL_TEMPLATE_BTN']; ?>
" onclick="EmailTemplateController('save')">
					<!-- </div> -->
					<!-- <div class="button-group-seperator"></div> -->
					<!-- <div class="button-group"> -->
						<input type="button" id="LBL_CREATE_EMAIL_TEMPLATE_BTN" value="<?php echo $this->_tpl_vars['MOD']['LBL_CREATE_EMAIL_TEMPLATE_BTN']; ?>
" onclick="EmailTemplateController('create')" class="">
					</div>
				</div>
			</div>
			<div class="template-panel-container panel-toolbar ">
				<div class="template-container">
					<h2><?php echo $this->_tpl_vars['MOD']['LBL_TRACKED_URLS']; ?>
</h2>
					<div class="clear"></div>

					<div class="form-group clear-block">
						<select class="form-control input-sm" tabindex='0' id="trackerUrlSelect" name='tracker_url' onchange='setTrackerUrlSelectVisibility();'>
							<option value="-1"><?php echo $this->_tpl_vars['MOD']['LBL_CREATE_TRACKER_URL']; ?>
</option>
							<?php echo $this->_tpl_vars['TRACKER_KEY_OPTIONS']; ?>

						</select>
					</div>

					<div class="button-group">
						<input type="button" value="<?php echo $this->_tpl_vars['MOD']['LBL_INSERT_TRACKER_BTN']; ?>
" onclick="EmailTrackerController('insert', '<?php echo $this->_tpl_vars['CAMPAIGN_ID']; ?>
');">
					</div>
					<div class="button-group-seperator"></div>
					<div class="button-group">
						<input type='button' id="LBL_CREATE_TRACKER_BTN" tabindex="0" class='button' value='<?php echo $this->_tpl_vars['MOD']['LBL_CREATE_TRACKER_BTN']; ?>
' onclick="EmailTrackerController('create', '<?php echo $this->_tpl_vars['CAMPAIGN_ID']; ?>
')">
						<input type='button' id="LBL_EDIT_TRACKER_BTN" tabindex="0" class='button' value='<?php echo $this->_tpl_vars['MOD']['LBL_EDIT_TRACKER_BTN']; ?>
' onclick="EmailTrackerController('edit', '<?php echo $this->_tpl_vars['CAMPAIGN_ID']; ?>
')">
					</div>

				</div>
				<div class="template-container">
					<h2><?php echo $this->_tpl_vars['MOD']['LBL_EMAIL_VARIABLES']; ?>
</h2>
					<div class="clear"></div>
					<script src="modules/EmailTemplates/EmailTemplate.js"></script>
					<script type="text/javascript">
						<?php echo $this->_tpl_vars['FIELD_DEFS_JS']; ?>

					</script>


					<?php echo '
					<script type="text/javascript">
						$(function(){
							addVariables(document.wizform.variable_name,document.wizform.variable_module.options[document.wizform.variable_module.selectedIndex].value, \'wizform\');
						});
					</script>
					'; ?>


					<div class="form-group clear-block">

						<select class="form-control input-sm" name='variable_module' tabindex="0" onchange="addVariables(document.wizform.variable_name,this.options[this.selectedIndex].value, 'wizform');">
							<?php echo $this->_tpl_vars['DROPDOWN']; ?>

						</select>
						<div class="pad">&nbsp;</div>

						<select class="form-control input-sm" name='variable_name' tabindex="0" onchange="showVariable('wizform');">
						</select>
					</div>

					<div class="hidden">
						<span scope="row">
							<?php echo $this->_tpl_vars['MOD']['LBL_USE']; ?>

						</span>
						<input type="text" size="30" tabindex="0" name="variable_text" />
					</div>

					<!-- BEGIN: variable_button -->
					<div class="button-group">
						<input id="insert_variable_to_body_btn" type='button' tabindex="0" onclick='<?php echo $this->_tpl_vars['INSERT_VARIABLE_ONCLICK']; ?>
' class='button' value='<?php echo $this->_tpl_vars['MOD']['LBL_INSERT_VARIABLE_BTN']; ?>
' style="display: none;">
						<input id="insert_variable_to_subject_btn" type='button' tabindex="0" onclick='insert_variable(document.wizform.variable_text.value, "template_subject")' class='button' value='<?php echo $this->_tpl_vars['MOD']['LBL_INSERT_VARIABLE_SUBJECT_BTN']; ?>
'>
					</div>
					<!-- END: variable_button -->
				</div>

			</div>
			<div class="template-panel-container">
				<div class="">
					<div>
						<?php echo '
						<script type="text/javascript">

							var setTrackerUrlSelectVisibility = function(){

								if($(\'select[name="tracker_url"]\').val()==\'-1\') {
									$(\'#insert_tracker_div\').hide();
									$(\'#create_tracker_div\').show();
								}
								else {
									$(\'#insert_tracker_div\').show();
									$(\'#create_tracker_div\').hide();
								}
							};
							$(function(){
								setTrackerUrlSelectVisibility();
							});

						</script>
						<script type="text/javascript">
							function toggle_tracker_url(isoptout) {
								tracker_url = document.getElementById(\'tracker_url_add\');
								if (isoptout.checked) {
									tracker_url.disabled=true;
									tracker_url.value="index.php?entryPoint=removeme";
								} else {
									tracker_url.disabled=false;
								}
							}

							var setFieldErrorMessage = function(field, message) {
								$(\'#\' + field).css(\'background-color\', \'red\');
								$(\'#\' + field).css({\'background-color\': \'white\'}, 1500);
								$(\'#\' + field + \'_error\').html(message).show();
							};

							var hideFieldErrorMessages = function() {
								$(\'.error_message\').each(function(i,e){
									$(\'#\' + $(e).attr(\'for\')).css(\'background-color\', \'initial\');
									$(e).html(\'\').hide();
								});
							};

							var onCampaignTrackerSaveClick = function() {

								var trackerName = $(\'#tracker_name\').val();
								var trackerURL = $(\'#tracker_url_add\').val();

								// validate elements fisrt

								var errors = [];
								if(!trackerName) {
									errors.push({field: \'tracker_name\', message: \''; ?>
<?php echo $this->_tpl_vars['MOD']['ERR_REQUIRED_TRACKER_NAME']; ?>
<?php echo '\'});
								}
								if(!trackerURL) {
									errors.push({field: \'tracker_url\', message: \''; ?>
<?php echo $this->_tpl_vars['MOD']['ERR_REQUIRED_TRACKER_URL']; ?>
<?php echo '\'});
								}
								hideFieldErrorMessages();
								if(errors.length) {
									for(var i=0; i<errors.length; i++) {
										setFieldErrorMessage(errors[i].field, errors[i].message);
									}
								}
								else {

									$.post(\'index.php?entryPoint=campaignTrackerSave\', {
										module: \'CampaignTrackers\',
										record: \'\', // TODO .. campaign tracker ID on update
										action: \'Save\',
										campaign_id: \''; ?>
<?php echo $this->_tpl_vars['CAMPAIGN_ID']; ?>
<?php echo '\',
										tracker_name: trackerName,
										tracker_url: trackerURL,
										is_optout: $(\'#is_optout\').prop(\'checked\') ? \'on\' : \'\',
										response_json: true
									}, function (resp) {
										resp = JSON.parse(resp);
										if (resp.data.id) {
											// TODO do it only when user want to create a new one as "copy and save.." function
											$(\'select[name="tracker_url"]\').append(\'<option value="{\' + trackerName + \'}">\' + trackerName + \' : \' + trackerURL + \'</option>\');
											$(\'select[name="tracker_url"]\').val(\'{\' + trackerName + \'}\');
											$(\'#url_text\').val(\'{\' + trackerName + \'}\');
										}
										setTrackerUrlSelectVisibility();
										//insert_variable_html_link(document.wizform.tracker_url.value);
									});

								}
							};

							$(function(){
								$(\'.errorable\').focus(function(){
									$(this).css(\'background-color\', \'initial\');
								});
							});
						</script>
						'; ?>

						<div class="panel-toolbar">
							<div class="template-container-full">
								<h2><?php echo $this->_tpl_vars['MOD']['LBL_SUBJECT']; ?>
</h2>
								<div class="form-group clear-block">
									<input type="text" id="template_subject" name="template_subject" value="<?php echo $this->_tpl_vars['template_subject']; ?>
" class="form-control input-sm"  maxlength="255" size="100" onclick="onClickTemplateSubject(this);">
								</div>
							</div>
						</div>
						<div class="panel-toolbar">

							<div class="template-container-full">
								<label><?php echo $this->_tpl_vars['MOD']['LBL_CLICK_TO_ADD']; ?>
</label>
								<br>
								<?php echo $this->_tpl_vars['BODY_MOZAIK']; ?>

							</div>
							<!--
                            <iframe id="html_frame" src="" style="width:100%; height:500px"></iframe>
                            <pre id="email_template_view"></pre>
                            -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="step2" style="display: none;">

		<div class="template-panel">
			<div class="template-panel-container panel">
				<div class="template-container-full">
		<table border="0" cellpadding="0" cellspacing="0" width="100%" class='edit view'>

			<tr>
				<td colspan="4">
					<h4><?php echo $this->_tpl_vars['MOD']['LBL_MRKT_NAME']; ?>
</h4>
				</td>
			</tr>
			<tr>
				<td colspan="4">
					<label class="wizard-step-info"><?php echo $this->_tpl_vars['MOD']['LBL_STEP_INFO_MARKETING']; ?>
</label>
				</td>
			</tr>
			<tr>

				<td scope="col" NOWRAP valign="top"><slot><?php echo $this->_tpl_vars['MOD']['LBL_MRKT_NAME_FIELD']; ?>
 <span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></slot></td>
				<td ><slot><input id='marketing_name' name='wiz_step3_name' title='<?php echo $this->_tpl_vars['MOD']['LBL_MRKT_NAME']; ?>
' size='25' maxlength='255' type="text" value="<?php echo $this->_tpl_vars['MRKT_NAME']; ?>
"></slot></td>
			</tr>


			<tr>
				<td scope="col" NOWRAP valign="top"><slot><?php echo $this->_tpl_vars['MOD']['LBL_FROM_MAILBOX_NAME']; ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></slot></td>
				<td>
					<slot>
						<select  title='<?php echo $this->_tpl_vars['MOD']['LBL_FROM_MAILBOX_TITLE']; ?>
' id='inbound_email_id' name='wiz_step3_inbound_email_id' onchange='set_from_reply_info(this);'><?php echo $this->_tpl_vars['MAILBOXES']; ?>
</select>
					</slot>
					<!--
					<br>
					<a href="index.php?module=InboundEmail&action=index" title="<?php echo $this->_tpl_vars['MOD']['LBL_INBOUND_EMAIL_SETTINGS_TITLE']; ?>
"><?php echo $this->_tpl_vars['MOD']['LBL_INBOUND_EMAIL_SETTINGS']; ?>
</a>
					<img border="0" class="inlineHelpTip" onclick="return SUGAR.util.showHelpTips(this,'<?php echo $this->_tpl_vars['MOD']['LBL_INBOUND_EMAIL_SETTINGS_TITLE']; ?>
','','','dialogHelpPopup')" src="index.php?entryPoint=getImage&amp;themeName=SuiteR&amp;imageName=helpInline.gif">
					<br>
					<a href="index.php?module=InboundEmail&action=EditView&mailbox_type=bounce" title="<?php echo $this->_tpl_vars['MOD']['LBL_INBOUND_EMAIL_CREATE_TITLE']; ?>
"><?php echo $this->_tpl_vars['MOD']['LBL_INBOUND_EMAIL_CREATE']; ?>
</a>
					<img border="0" class="inlineHelpTip" onclick="return SUGAR.util.showHelpTips(this,'<?php echo $this->_tpl_vars['MOD']['LBL_INBOUND_EMAIL_CREATE_TITLE']; ?>
','','','dialogHelpPopup')" src="index.php?entryPoint=getImage&amp;themeName=SuiteR&amp;imageName=helpInline.gif">
					-->
				</td>

				<td style="display: none;" scope="col" NOWRAP valign="top"><slot><?php echo $this->_tpl_vars['MOD']['LBL_STATUS_TEXT']; ?>
 <span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></slot></td>
				<td style="display: none;"><slot><select tabindex='2' id='status' title='<?php echo $this->_tpl_vars['MOD']['LBL_STATUS_TEXT']; ?>
' name='wiz_step3_status'><?php echo $this->_tpl_vars['STATUS_OPTIONS']; ?>
</select></slot></td>

			</tr>

			<tr>
				<td scope="col" NOWRAP valign="top"><slot><?php echo $this->_tpl_vars['MOD']['LBL_OUTBOUND_MAILBOX_NAME']; ?>
</slot></td>
				<td>
					<slot>
						<select  title='<?php echo $this->_tpl_vars['MOD']['LBL_OUTBOUND_MAILBOX_NAME']; ?>
' id='outbound_email_id' name='wiz_step3_outbound_email_id' onchange='// set_from_reply_info(this);'><?php echo $this->_tpl_vars['OUTBOUND_MAILBOXES']; ?>
</select>
					</slot>
					<!--
					<br>
					<a href="index.php?module=InboundEmail&action=index" title="<?php echo $this->_tpl_vars['MOD']['LBL_INBOUND_EMAIL_SETTINGS_TITLE']; ?>
"><?php echo $this->_tpl_vars['MOD']['LBL_INBOUND_EMAIL_SETTINGS']; ?>
</a>
					<img border="0" class="inlineHelpTip" onclick="return SUGAR.util.showHelpTips(this,'<?php echo $this->_tpl_vars['MOD']['LBL_INBOUND_EMAIL_SETTINGS_TITLE']; ?>
','','','dialogHelpPopup')" src="index.php?entryPoint=getImage&amp;themeName=SuiteR&amp;imageName=helpInline.gif">
					<br>
					<a href="index.php?module=InboundEmail&action=EditView&mailbox_type=bounce" title="<?php echo $this->_tpl_vars['MOD']['LBL_INBOUND_EMAIL_CREATE_TITLE']; ?>
"><?php echo $this->_tpl_vars['MOD']['LBL_INBOUND_EMAIL_CREATE']; ?>
</a>
					<img border="0" class="inlineHelpTip" onclick="return SUGAR.util.showHelpTips(this,'<?php echo $this->_tpl_vars['MOD']['LBL_INBOUND_EMAIL_CREATE_TITLE']; ?>
','','','dialogHelpPopup')" src="index.php?entryPoint=getImage&amp;themeName=SuiteR&amp;imageName=helpInline.gif">
					-->
				</td>

			</tr>


			<tr>

				<td scope="col" NOWRAP valign="top"><slot><?php echo $this->_tpl_vars['MOD']['LBL_START_DATE_TIME']; ?>
 <span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></slot></td>
				<td  style="display:none;" class="datafield"><slot><table  cellpadding="0" cellspacing="0"><tr><td nowrap><input title ='<?php echo $this->_tpl_vars['MOD']['LBL_START_DATE_TIME']; ?>
' id='date_start' name='wiz_step3_date_start' onblur="parseDate(this, '<?php echo $this->_tpl_vars['CALENDAR_DATEFORMAT']; ?>
');" size='11' tabindex='1' maxlength='10' type="text" value="<?php echo $this->_tpl_vars['MRKT_DATE_START']; ?>
"> <img src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'jscalendar.gif'), $this);?>
" alt="<?php echo $this->_tpl_vars['CALENDAR_DATEFORMAT']; ?>
"  id="jscal_trigger" align="absmiddle">&nbsp;</td>
				<td  style="display:none;" nowrap><input type="text" size='5' maxlength='5' id='time_start'  name='wiz_step3_time_start' tabindex="1" value="<?php echo $this->_tpl_vars['MRKT_TIME_START']; ?>
"/><?php echo $this->_tpl_vars['TIME_MERIDIEM']; ?>
</td></tr><tr><td nowrap><span class="dateFormat"><?php echo $this->_tpl_vars['USER_DATEFORMAT']; ?>
</span></td><td nowrap><span class="dateFormat"><?php echo $this->_tpl_vars['TIME_FORMAT']; ?>
</span></td></tr></table></slot>
					<script type="text/javascript">
						<?php echo '
						$(function(){
							if($(\'#date_start_meridiem\').length) {
								$(\'#date_start_hours option\').each(function(i,e){
									if(parseInt($(e).attr(\'value\'))>12) {
										$(e).hide();
									}
								});
							}
						});
						'; ?>

					</script>
				</td>

				<td>



					<!-- ------------------------------ -->
					<!-- ------------------------------ -->
					<!-- DATE TIME COMBO FOR START DATE -->
					<!-- ------------------------------ -->
					<!-- ------------------------------ -->

					<table border="0" cellpadding="0" cellspacing="0" class="dateTime">
						<tr valign="middle">
							<td nowrap class="datafield" style="width:150px;">
								<input autocomplete="off" type="text" id="<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_date" value="<?php echo $this->_tpl_vars['MRKT_DATE_START']; ?>
" xxx="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['date_start']['name']]['value']; ?>
" size="11" maxlength="10" title='' tabindex="0" onblur="combo_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
.update(); parseDate(this, '<?php echo $this->_tpl_vars['CALENDAR_DATEFORMAT']; ?>
');" onchange="combo_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
.update();parseDate(this, '<?php echo $this->_tpl_vars['CALENDAR_DATEFORMAT']; ?>
'); "    >
								<?php ob_start(); ?>alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" style="position:relative; top:6px" border="0" id="<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_trigger"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('other_attributes', ob_get_contents());ob_end_clean(); ?>
								<?php echo smarty_function_sugar_getimage(array('name' => 'jscalendar','ext' => ".gif",'other_attributes' => ($this->_tpl_vars['other_attributes'])), $this);?>
&nbsp;
							</td>
							<td nowrap colspan="5" style="width:200px;">
								<?php echo '
								<script type="text/javascript">
									setInterval(function(){
										$(\'input[name="wiz_step3_date_start"]\').val($(\'#date_start_date\').val());
										$(\'input[name="wiz_step3_time_start"]\').val($(\'#date_start_hours\').val() + \':\' + $(\'#date_start_minutes\').val());
										$(\'select[name="meridiem"]\').val($(\'#date_start_meridiem\').val());
										if(parseInt($(\'#date_start_hours\').val())>12) {
											$(\'#date_start_meridiem\').val(\'PM\');
										}
									},100);
								</script>
								'; ?>

								<div id="<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_time_section"></div>
								<script type="text/javascript">
									function set_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_values(form) {
									if(form.<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_flag.checked)  {
									form.<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_flag.value=1;
									form.<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
.value="";
									form.<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
.readOnly=true;
									} else  {
									form.<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_flag.value=0;
									form.<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
.readOnly=false;
									}
									}
								</script>
							</td>
						</tr>
						<tr valign="middle">
							<td nowrap>
								<span class="dateFormat"><?php echo $this->_tpl_vars['USER_DATEFORMAT']; ?>
</span>
							</td>
							<td nowrap>
								<span class="dateFormat"><?php echo $this->_tpl_vars['TIME_FORMAT']; ?>
</span>
							</td>
						</tr>
					</table>
					<input type="hidden" class="DateTimeCombo" id="<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
" name="<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['date_start']['name']]['value']; ?>
">
					<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"), $this);?>
'></script>
					<script type="text/javascript">
						var combo_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
 = new Datetimecombo("<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['date_start']['name']]['value']; ?>
", "<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
", "<?php echo $this->_tpl_vars['TIME_FORMAT']; ?>
", "0", '1', false, true);
						//Render the remaining widget fields
						combo_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
.timeseparator = ':';
						text = combo_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
.html('');
						document.getElementById('<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_time_section').innerHTML = text;

						//Call eval on the update function to handle updates to calendar picker object
						eval(combo_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
.jsscript(''));

						//bug 47718: this causes too many addToValidates to be called, resulting in the error messages being displayed multiple times
						//    removing it here to mirror the Datetime SugarField, where the validation is not added at this level
						//addToValidate('<?php echo $this->_tpl_vars['form_name']; ?>
',"<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_date",'date',false,"<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
");
						addToValidateBinaryDependency('<?php echo $this->_tpl_vars['form_name']; ?>
',"<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_hours", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_HOURS']; ?>
" ,"<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_date");
						addToValidateBinaryDependency('<?php echo $this->_tpl_vars['form_name']; ?>
', "<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_minutes", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_MINUTES']; ?>
" ,"<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_date");
						addToValidateBinaryDependency('<?php echo $this->_tpl_vars['form_name']; ?>
', "<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_meridiem", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_MERIDIEM']; ?>
","<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_date");

						YAHOO.util.Event.onDOMReady(function()
						{

						Calendar.setup ({
						onClose : update_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
,
						inputField : "<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_date",
								form : "<?php echo $this->_tpl_vars['form_name']; ?>
",
								ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_DATEFORMAT']; ?>
",
								daFormat : "<?php echo $this->_tpl_vars['CALENDAR_DATEFORMAT']; ?>
",
								button : "<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_trigger",
								singleClick : true,
								step : 1,
								weekNumbers: false,
								startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
						comboObject: combo_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
,
						form: '<?php echo $this->_tpl_vars['form_name']; ?>
'
						});

						//Call update for first time to round hours and minute values
						combo_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
.update(false);

						});
					</script>

					<!-- ------------------------------------- -->
					<!-- ------------------------------------- -->
					<!-- END OF DATE TIME COMBO FOR START DATE -->
					<!-- ------------------------------------- -->
					<!-- ------------------------------------- -->




				</td>


			</tr>


		</table>






		<div class="wizard-box">
			<label><?php echo $this->_tpl_vars['MOD']['LBL_FROM_NAME']; ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></label><br>
			<input name='wiz_step3_from_name' id='from_name' title='<?php echo $this->_tpl_vars['MOD']['LBL_FROM_NAME']; ?>
' tabindex='2' size='25' maxlength='<?php echo $this->_tpl_vars['MRKT_FROM_NAME_LEN']; ?>
' type="text" value="<?php echo $this->_tpl_vars['MRKT_FROM_NAME']; ?>
"><br>
			<span class="helpmsg"><?php echo $this->_tpl_vars['MOD']['LBL_FROM_NAME_HELP']; ?>
</span>
		</div>

		<div class="wizard-box">
			<label><?php echo $this->_tpl_vars['MOD']['LBL_FROM_ADDR']; ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></label><br>
			<input name='wiz_step3_from_addr' id='from_addr' title='<?php echo $this->_tpl_vars['MOD']['LBL_FROM_ADDR']; ?>
' tabindex='2' size='25' maxlength='<?php echo $this->_tpl_vars['MRKT_FROM_NAME_LEN']; ?>
' type="text" value="<?php echo $this->_tpl_vars['MRKT_FROM_ADDR']; ?>
"><br>
			<span class="helpmsg"><?php echo $this->_tpl_vars['MOD']['LBL_FROM_ADDR_HELP']; ?>
</span>
		</div>

		<div class="clear"></div>

		<div class="wizard-box">
			<label><?php echo $this->_tpl_vars['MOD']['LBL_REPLY_NAME']; ?>
</label><br>
			<input name='wiz_step3_reply_to_name' id='reply_name' title='<?php echo $this->_tpl_vars['MOD']['LBL_REPLY_NAME']; ?>
' tabindex='2' size='25' maxlength='<?php echo $this->_tpl_vars['MRKT_REPLY_NAME_LEN']; ?>
' type="text" value="<?php echo $this->_tpl_vars['MRKT_REPLY_NAME']; ?>
"><br>
			<span class="helpmsg"><?php echo $this->_tpl_vars['MOD']['LBL_REPLY_TO_NAME_HELP']; ?>
</span>
		</div>

		<div class="wizard-box">
			<label><?php echo $this->_tpl_vars['MOD']['LBL_REPLY_ADDR']; ?>
</label><br>
			<input name='wiz_step3_reply_to_addr' id='reply_addr' title='<?php echo $this->_tpl_vars['MOD']['LBL_REPLY_ADDR']; ?>
' tabindex='2' size='25' maxlength='<?php echo $this->_tpl_vars['MRKT_REPLY_ADDR_LEN']; ?>
' type="text" value="<?php echo $this->_tpl_vars['MRKT_REPLY_ADDR']; ?>
"><br>
			<span class="helpmsg"><?php echo $this->_tpl_vars['MOD']['LBL_REPLY_TO_ADDR_HELP']; ?>
</span>
		</div>

				</div>
			</div>
		</div>


		<table border="0" cellpadding="0" cellspacing="0" width="100%" class='edit view'>

			<tr style="display: none;">
				<td scope="col" NOWRAP valign="top"><slot><?php echo $this->_tpl_vars['MOD']['LBL_MESSAGE_FOR']; ?>
 <span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></slot></td>
				<td class="datafield"><slot><input type="checkbox"  tabindex='1' onclick="toggle_message_for(this);" id="all_prospect_lists" <?php echo $this->_tpl_vars['ALL_PROSPECT_LISTS_CHECKED']; ?>
 name='all_prospect_lists' title="<?php echo $this->_tpl_vars['MOD']['LBL_MESSAGE_FOR']; ?>
"><?php echo $this->_tpl_vars['MOD']['LBL_ALL_PROSPECT_LISTS']; ?>
</slot></td>

			</tr>
			<tr style="display: none;">
				<td  NOWRAP valign="top"><slot>&nbsp;</slot></td>
				<td width="35%" class="datafield"><slot><select <?php echo $this->_tpl_vars['MESSAGE_FOR_DISABLED']; ?>
  tabindex='1' multiple size="5" id="message_for" name='message_for[]' title="<?php echo $this->_tpl_vars['MOD']['LBL_MESSAGE_FOR']; ?>
"><?php echo $this->_tpl_vars['SCOPE_OPTIONS']; ?>
</select></slot></td>
				<td  NOWRAP valign="top"><slot>&nbsp;</slot></td>
				<td><slot>&nbsp;</slot></td>
			</tr>
		</table>


		<?php echo '
		<script type="text/javascript">
/*
			Calendar.setup ({'; ?>

				inputField : "date_start", ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_DATEFORMAT']; ?>
", showsTime : false, button : "jscal_trigger", singleClick : true, step : 1
			<?php echo '});
*/

//		function show_edit_template_link(field) {
//
//			var field1=document.getElementById(\'edit_template\');
//			if (field.selectedIndex == 0) {
//				field1.style.visibility="hidden";
//			}
//			else {
//				field1.style.visibility="visible";
//			}
//		}

		function refresh_email_template_list(template_id, template_name) {
			var field=document.getElementById(\'template_id\');
			var bfound=0;
			for (var i=0; i < field.options.length; i++) {
					if (field.options[i].value == template_id) {
						if (field.options[i].selected==false) {
							field.options[i].selected=true;
						}
						field.options[i].text = template_name;
						bfound=1;
					}
			}
			//add item to selection list.
			if (bfound == 0) {
				var newElement=document.createElement(\'option\');
				newElement.text=template_name;
				newElement.value=template_id;
				field.options.add(newElement);
				newElement.selected=true;
			}

			//enable the edit button.
			var field1=document.getElementById(\'edit_template\');
			field1.style.visibility="visible";
		}

		function open_email_template_form() {
		'; ?>

			URL="index.php?module=EmailTemplates&action=EditView&campaign_id=<?php echo $this->_tpl_vars['CAMPAIGN_ID']; ?>
";
			URL+="&sugar_body_only=1";
		<?php echo '
			windowName = \'email_template\';
			windowFeatures = \'width=800\' + \',height=600\' 	+ \',resizable=1,scrollbars=1\';

			win = window.open(URL, windowName, windowFeatures);
			if(window.focus)
			{
				// put the focus on the popup if the browser supports the focus() method
				win.focus();
			}
		}
		function edit_email_template_form() {
		'; ?>

			var field=document.getElementById('template_id');
			URL="index.php?module=EmailTemplates&action=EditView&campaign_id=<?php echo $this->_tpl_vars['CAMPAIGN_ID']; ?>
";
			URL+="&sugar_body_only=1";
			<?php echo '
			if (field.options[field.selectedIndex].value != \'undefined\') {
				URL+="&record="+field.options[field.selectedIndex].value;
			}
			windowName = \'email_template\';
			windowFeatures = \'width=800\' + \',height=600\' 	+ \',resizable=1,scrollbars=1\';

			win = window.open(URL, windowName, windowFeatures);
			if(window.focus)
			{
				// put the focus on the popup if the browser supports the focus() method
				win.focus();
			}
		}

		function toggle_message_for(all_prospects_checkbox) {
			message_for = document.getElementById(\'message_for\');
			if (all_prospects_checkbox.checked) {
				message_for.disabled=true;
			} else {
				message_for.disabled=false;
			}
		}
		'; ?>

		var from_emails=new Array(<?php echo $this->_tpl_vars['FROM_EMAILS']; ?>
);
		<?php echo '
		function set_from_email_and_name(mailbox) {
			from_email_span = document.getElementById(\'from_email\');
			from_name = document.getElementById(\'from_name\');
			for (i=0; i<=from_emails.length; i++) {
				if ((mailbox.value == \'\' &&  from_emails[i] ==\'EMPTY\') || from_emails[i] == mailbox.value) {
					var j=i+1;
					from_email_span.innerHTML=from_emails[j+1];
					if (from_name.value==\'\') {
						from_name.value=from_emails[j];
					}
					return;
				}
			}
		}

		'; ?>

		// cn: bug 12587 - allow setting of Reply-to X from campaigns
		var ie_stored_options = <?php echo $this->_tpl_vars['IEStoredOptions']; ?>
;
		<?php echo '

		function set_from_reply_info(mailbox) {
			var fn = document.getElementById(\'from_name\');
			var fa = document.getElementById(\'from_addr\');
			var rn = document.getElementById(\'reply_name\');
			var ra = document.getElementById(\'reply_addr\');

			if(mailbox.value != \'\') {
				if(ie_stored_options[mailbox.value]) {
					var focusIe = ie_stored_options[mailbox.value];
					// from name
					if(focusIe.from_name && focusIe.from_name != "")
						fn.value = focusIe.from_name;
					else
						fn.value = \'\';

					// from addr
					if(focusIe.from_addr && focusIe.from_addr != "")
						fa.value = focusIe.from_addr;
					else
						fa.value = \'\';

					// reply name
					if(focusIe.reply_to_name && focusIe.reply_to_name != "")
						rn.value = focusIe.reply_to_name;
					else
						rn.value = \'\';

					// reply add
					if(focusIe.reply_to_addr && focusIe.reply_to_addr != "")
						ra.value = focusIe.reply_to_addr;
					else
						ra.value = \'\';
				}
			} else {
				fn.value = \'\';
				fa.value = \'\';
				rn.value = \'\';
				ra.value = \'\';
			}
		}


		</script>
		'; ?>


		<?php if ($this->_tpl_vars['MAILBOXES_DEAULT']): ?>
		<script type="text/javascript">
			set_from_reply_info({value:"<?php echo $this->_tpl_vars['MAILBOXES_DEAULT']; ?>
"});
		</script>
		<?php endif; ?>

		</div>
	<div id='step3' data="summary-page" class="template-panel">
		<div class="template-panel-container panel">
			<div class="template-container-full">
				<h4 style="border-bottom: solid 1px #eee;padding-bottom: 8px"><?php echo $this->_tpl_vars['MOD']['LBL_SUMMARY']; ?>
</h4>
				<div class="clear">&nbsp;</div>
				<?php if ($this->_tpl_vars['campaign_type'] == 'NewsLetter' || $this->_tpl_vars['campaign_type'] == 'Email'): ?>
					<div class="form-group">
						<label><?php echo $this->_tpl_vars['MOD']['LBL_WIZ_SENDMAIL_TITLE']; ?>
</label>
							<select id="marketing_select" class="form-control input-sm"></select>
														<?php echo '
							<script type="text/javascript">
								var refreshMarketingSelect = function() {
									var marketingSelectValue = \''; ?>
<?php echo $this->_tpl_vars['EmailMarketingId']; ?>
<?php echo '\';
									if($(\'#marketing_select\').val()){
										marketingSelectValue = $(\'#marketing_select\').val();
									}
									$.get(\'index.php?entryPoint=emailMarketingList&campaign_id='; ?>
<?php echo $this->_tpl_vars['CAMPAIGN_ID']; ?>
<?php echo '\', function(resp){
										resp = JSON.parse(resp);
										if(resp.error) {
											// todo: show error
											console.log(error);
										}
										else {
											$(\'#marketing_select\').html(\'\');
											if(marketingSelectValue == \'\' && typeof resp.selectedId != \'undefined\' && resp.selectedId) {
												marketingSelectValue = resp.selectedId;
											}
											for(var i=0; i<resp.data.length; i++) {
												var elem = resp.data[i];
												var selected = \'\';
												if(elem.id == marketingSelectValue) {
													selected = \' selected="selected"\';

												}
												$(\'#marketing_select\').append(\'<option value="\' + elem.id + \'"\' + selected + \'>\' + elem.name + \'</option>\');
											}
											saveMarketingAndTemplate(\'getTemplateValidation\');
										}
									});

								};

								var saveMarketingAndTemplate = function(func) {
									if(typeof func == \'undefined\') {
										func = null;
									}
									var campaignId = \''; ?>
<?php echo $this->_tpl_vars['CAMPAIGN_ID']; ?>
<?php echo '\';
									var marketingId = $(\'#marketing_select\').val();
									//var templateId = $(\'#template_select\').val();
									$.post(\'index.php?entryPoint=setCampaignMarketingAndTemplate\', {
										\'campaignId\': campaignId,
										\'marketingId\': marketingId,
										\'func\': func
										//\'templateId\': templateId
									}, function(resp){
										resp = JSON.parse(resp);
										$(\'#alert_messages\').html(\'\');
										$.each(resp.templateValidationMessages, function(i, msg){
											$(\'#alert_messages\').append(\'<font color="red">\' + SUGAR.language.translate(\'Campaigns\', msg) + \'</forn><br>\');
										});

										$(\'#marketing_status_lnk\').removeAttr(\'title\');
										$(\'#marketing_status_btn\').removeClass(\'fail\');
										if(!$(\'#marketing_status_btn\').hasClass(\'ok\')) {
											$(\'#marketing_status_btn\').addClass(\'ok\');
										}

										if(!$.isEmptyObject(resp.marketingValidationMessages)) {
											$(\'#marketing_status_lnk\').attr(SUGAR.language.translate(\'EmailMarketing\', \'LBL_ERROR_ON_MARKETING\'));
											$(\'#marketing_status_btn\').removeClass(\'ok\');
											if(!$(\'#marketing_status_btn\').hasClass(\'fail\')) {
												$(\'#marketing_status_btn\').addClass(\'fail\');
											}
										}

										$(\'#marketing_errors\').html(\'\');
										$.each(resp.marketingValidationMessages, function(i, msg){
											$(\'#marketing_errors\').append(SUGAR.language.translate(\'Campaigns\', msg) + \'<br>\');
										});

									});
								};

								$(function(){
									refreshMarketingSelect();
									$(\'#marketing_select\').change(function(){
										saveMarketingAndTemplate(\'getTemplateValidation\');
									});
									/*
									 $(\'#template_select\').change(function(){
									 saveMarketingAndTemplate();
									 });
									 */
								});
							</script>
							'; ?>

					</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="template-panel-container panel-toolbar ">
			<div class="template-container-full">
				<h4 style="border-bottom: solid 1px #eee;padding-bottom: 8px"><?php echo $this->_tpl_vars['MOD']['LBL_CAMPAIGN_CHECKLIST']; ?>
</h4>
				<div class="clear">&nbsp;</div>
				<div style="margin-bottom: 16px;">
					<?php if ($this->_tpl_vars['WARNING_MESSAGE']): ?>
					<div id='target_message'><font color='red'><b><?php echo $this->_tpl_vars['WARNING_MESSAGE']; ?>
</b></font></div>
					<br class="emptyRow">
					<?php endif; ?>
					<div id="alert_messages"></div>
					<?php if ($this->_tpl_vars['diagnose']): ?>
					<?php echo $this->_tpl_vars['diagnose']; ?>

					<br class="emptyRow">
					<?php endif; ?>
					<div id="marketing_errors" class="error">
						<?php if ($this->_tpl_vars['error_on_marketing_name']): ?><?php echo $this->_tpl_vars['error_on_marketing_name']; ?>
<br><?php endif; ?>
						<?php if ($this->_tpl_vars['error_on_marketing_inbound_email_id']): ?><?php echo $this->_tpl_vars['error_on_marketing_inbound_email_id']; ?>
<br><?php endif; ?>
						<?php if ($this->_tpl_vars['error_on_marketing_date_start']): ?><?php echo $this->_tpl_vars['error_on_marketing_date_start']; ?>
<br><?php endif; ?>
						<?php if ($this->_tpl_vars['error_on_marketing_from_name']): ?><?php echo $this->_tpl_vars['error_on_marketing_from_name']; ?>
<br><?php endif; ?>
						<?php if ($this->_tpl_vars['error_on_marketing_from_addr']): ?><?php echo $this->_tpl_vars['error_on_marketing_from_addr']; ?>
<br><?php endif; ?>
					</div>
				</div>
				<ul>
					<li class="li-tick"><a href="<?php echo $this->_tpl_vars['link_to_campaign_header']; ?>
"><?php echo $this->_tpl_vars['MOD']['LBL_CAMPAIGN_DETAILS_AND_CONDITIONS']; ?>
</a></li>
					<li class="<?php if ($this->_tpl_vars['error_on_target_list']): ?>li-cross<?php else: ?>li-tick<?php endif; ?>"><a href="<?php echo $this->_tpl_vars['link_to_target_list']; ?>
"><?php echo $this->_tpl_vars['MOD']['LBL_CHOOSE_TARGETS']; ?>
</a></li>
					<?php if ($this->_tpl_vars['campaign_type'] == 'NewsLetter' || $this->_tpl_vars['campaign_type'] == 'Email'): ?>
					<li class="<?php if ($this->_tpl_vars['error_on_templates']): ?>li-cross<?php else: ?>li-tick<?php endif; ?>"><a href="<?php echo $this->_tpl_vars['link_to_choose_template']; ?>
"><?php echo $this->_tpl_vars['MOD']['LBL_CHOOSE_TEMPLATES']; ?>
</a></li>
					<li class="<?php if ($this->_tpl_vars['error_on_marketing']): ?>li-cross<?php else: ?>li-tick<?php endif; ?>"><a id="marketing_status_lnk" href="<?php echo $this->_tpl_vars['link_to_sender_details']; ?>
"><?php echo $this->_tpl_vars['MOD']['LBL_SENDER_DETAILS']; ?>
</a></li>
					<li class="<?php if ($this->_tpl_vars['error_on_scheduler2'] || $this->_tpl_vars['error_on_mailbox2']): ?>li-cross<?php else: ?>li-tick<?php endif; ?>"><a href="<?php echo $this->_tpl_vars['link_to_scheduler']; ?>
<?php if (! $this->_tpl_vars['link_to_scheduler']): ?><?php echo $this->_tpl_vars['link_to_email']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['MOD']['LBL_PROCESS_CAMPAIGN_EMAILS']; ?>
</a></li>
					<li class="<?php if ($this->_tpl_vars['error_on_scheduler1'] || $this->_tpl_vars['error_on_mailbox1']): ?>li-cross<?php else: ?>li-tick<?php endif; ?>"><a href="<?php echo $this->_tpl_vars['link_to_scheduler']; ?>
<?php if (! $this->_tpl_vars['link_to_scheduler']): ?><?php echo $this->_tpl_vars['link_to_email']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['MOD']['LBL_PROCESS_BOUNCED_EMAILS']; ?>
</a></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
		<div class="template-panel-container panel-toolbar ">
			<div class="template-container-full">
				<div class="button-group">
					<input type="hidden" name="wiz_home_next_step" value="1" />

					<a class="btn <?php if ($this->_tpl_vars['PL_DISABLED']): ?>btn-default<?php else: ?>btn-primary<?php endif; ?> btn-sm" style="border-radius: 0px;" <?php if ($this->_tpl_vars['PL_DISABLED']): ?> <?php else: ?>href="javascript:;" onclick="onScheduleClick(this, '<?php echo $this->_tpl_vars['CAMPAIGN_ID']; ?>
', $('#marketing_select').val());"<?php endif; ?>>
						<img src="themes/default/images/cmpwzrd/wallclock.png" style="height: 18px; width: auto;"> <?php echo $this->_tpl_vars['MOD']['LBL_SEND_EMAIL']; ?>

					</a>

					<a class="btn <?php if ($this->_tpl_vars['PL_DISABLED_TEST']): ?>btn-default<?php else: ?>btn-primary<?php endif; ?> btn-sm" style="border-radius: 0px;" <?php if ($this->_tpl_vars['PL_DISABLED_TEST']): ?> <?php else: ?>href="javascript:;"  onclick="onSendAsTestClick(this, '<?php echo $this->_tpl_vars['CAMPAIGN_ID']; ?>
', $('#marketing_select').val());"<?php endif; ?>>
						<img src="themes/default/images/cmpwzrd/email167.png" style="height: 18px; width: auto;"> <?php echo $this->_tpl_vars['MOD']['LBL_SEND_AS_TEST']; ?>

					</a>
				</div>
				<div class="button-group-seperator"></div>
				<div class="button-group">
					<a class="btn btn-primary btn-sm" href="index.php?module=Campaigns&action=DetailView&record=<?php echo $this->_tpl_vars['CAMPAIGN_ID']; ?>
" style="border-radius: 0px;"><?php echo $this->_tpl_vars['MOD']['LBL_TODETAIL_BUTTON_TITLE']; ?>
</a>
				</div>
				<?php if (! $this->_tpl_vars['PL_DISABLED']): ?>
				<div class="button-group">
					<a class="btn btn-primary btn-sm" href="index.php?module=Campaigns&action=TrackDetailView&record=<?php echo $this->_tpl_vars['CAMPAIGN_ID']; ?>
" style="border-radius: 0px;"><?php echo $this->_tpl_vars['MOD']['LBL_TRACK_BUTTON_LABEL']; ?>
</a>
					<a class="btn btn-primary btn-sm" href="index.php?module=Campaigns&action=RoiDetailView&record=<?php echo $this->_tpl_vars['CAMPAIGN_ID']; ?>
" style="border-radius: 0px;"><?php echo $this->_tpl_vars['MOD']['LBL_TRACK_ROI_BUTTON_LABEL']; ?>
</a>

				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

</td>
</tr>
</table>

<?php echo '
<script language="javascript">
function determine_back(){
'; ?>

	var current_step = document.getElementById('wiz_current_step').value;
    var total_steps = document.getElementById('wiz_total_steps').value;
<?php echo '
	if(current_step == 1){
'; ?>

		document.getElementById('action').value='WizardNewsletter';
		document.getElementById('record').value='<?php echo $this->_tpl_vars['CAMPAIGN_ID']; ?>
';
		document.getElementById('return_id').value='<?php echo $this->_tpl_vars['CAMPAIGN_ID']; ?>
';
		document.getElementById('direct_step').value='4';
		document.getElementById('wizform').submit();
<?php echo '
	}else{
		if (current_step == 2) {
			document.getElementById(\'wiz_current_step\').value = 1;
			navigate(\'direct\');
		}
		else {
			navigate(\'back\');
		}
	}

	changeNextBtnLabel();
}
</script>
'; ?>

</form>

	<div id="step1_uploader" style="display: none;">
		<div class="template-container-attachment panel">


		<table>
			<!-- BEGIN: NoInbound2 -->
			<tr>
				<td valign="top" scope="row">
					<?php echo $this->_tpl_vars['MOD']['LBL_ATTACHMENTS']; ?>
:
				</td>
				<td colspan="2" nowrap id="attachments_container">
					<?php echo $this->_tpl_vars['ATTACHMENTS']; ?>

				</td>
			</tr>
			<!-- END: NoInbound2 -->
		</table>
		<?php echo $this->_tpl_vars['ATTACHMENTS_JAVASCRIPT']; ?>


		<!-- BEGIN: NoInbound3 -->
		<form id="upload_form" name="upload_form" method="POST" action="index.php?entryPoint=emailTemplateData&func=uploadAttachments" enctype="multipart/form-data"> <!-- action='AttachDocuments.php' -->
			<input type="submit" style="display:none;">
			<div id="upload_div">
				<input type="file" id="my_file" name="file_1" size="40" />
				<input type="hidden" id="documentName" name="uploaddoc" onchange="docUpload(); form_reset_doc();" size="1" />
				<input type="hidden" id="documentId" name="seldoc" tabindex="0" />
				<input type="hidden" id="docRevId" name="seldoc" tabindex="0" />
				<input type="hidden" id="documentType" name="seldoc" tabindex="0" />
				<input type="button" name="add_doc" id="add_doc" onclick="selectDoc();" value='<?php echo $this->_tpl_vars['MOD']['LBL_SUGAR_DOCUMENT']; ?>
' class="button" />

				<input type="hidden" name="attach_to_template_id" id="attach_to_template_id" value="<?php echo $this->_tpl_vars['TEMPLATE_ID']; ?>
">
				<input type="hidden" name="campaign_id" value="<?php echo $this->_tpl_vars['CAMPAIGN_ID']; ?>
">
				<!-- <input type="hidden" name="attach_to_marketing_id" id="attach_to_marketing_id" value="<?php echo $this->_tpl_vars['MRKT_ID']; ?>
"> -->

			</div>
			<div id="attachments_div">
			</div>
		</form>

		</div>
		<!-- END: NoInbound3 -->
	</div>
	<script type="text/javascript" src="modules/Emails/javascript/Email.js"></script>
	<?php echo '
	<script type="text/javascript">
		$(function(){
			setInterval(function(){

				// show uploader form below template form only

				$(\'#step1_uploader\').css(\'display\', $(\'#step1\').css(\'display\'));

				// hide cancel and save button on summary page

				$(\'#wiz_cancel_button\').css(\'display\', $(\'#step3\').css(\'display\') == \'block\' ? \'none\' : \'block\');
				$(\'#wiz_submit_button\').css(\'display\', $(\'#step3\').css(\'display\') == \'block\' ? \'none\' : \'block\');

			}, 300);
		});

		var multi_selector = new multiFiles(document.getElementById(\'upload_div\'));
		multi_selector.addElement( document.getElementById(\'my_file\'));

	</script>
	'; ?>


</div>

<?php echo smarty_function_sugar_getscript(array('file' => "modules/Campaigns/wizard.js"), $this);?>

<?php echo $this->_tpl_vars['WIZ_JAVASCRIPT']; ?>

<?php echo $this->_tpl_vars['DIV_JAVASCRIPT']; ?>

<?php echo $this->_tpl_vars['JAVASCRIPT']; ?>

<script language="javascript">
//	link_navs();
//addToValidate('wizform', 'name', 'alphanumeric', true,  document.getElementById('name').title);
addToValidate('wizform', 'marketing_name', 'alphanumeric', true,  document.getElementById('marketing_name').title);
//addToValidate('wizform', 'date_start', 'alphanumeric', true,  document.getElementById('date_start').title);
addToValidate('wizform', 'inbound_email_id', 'alphanumeric', true,  document.getElementById('inbound_email_id').title);


<?php echo '
function getParameterByName(name, url) {
	if (!url) url = window.location.href;
	name = name.replace(/[\\[\\]]/g, "\\\\$&");
	var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
			results = regex.exec(url);
	if (!results) return null;
	if (!results[2]) return \'\';
	return decodeURIComponent(results[2].replace(/\\+/g, " "));
}



var jumpToPageByURL = function() {

	var jump = getParameterByName(\'jump\');

	var func = getParameterByName(\'func\');

	if(func == \'createEmailMarketing\') {
		jump = 1;
	}


	var jumpToPage = function(jump, noValidation) {
		if(typeof noValidation == \'undefined\') {
			noValidation = false;
		}
		var i=0;
		while (jump != document.getElementById(\'wiz_current_step\').value && i<100) {
			var currentStep = document.getElementById(\'wiz_current_step\').value;
			if(document.getElementById(\'wiz_current_step\').value > document.getElementById(\'wiz_total_steps\').value) {
				break;
			}
			navigate(\'next\', noValidation, true);
			i++;
			if(document.getElementById(\'wiz_current_step\').value == currentStep) {
				break;
			}
		}
		changeNextBtnLabel();
	};

	if(jump != null) {

		var campaignType = getParameterByName(\'campaign_type\');
		var showWizardMarketing = getParameterByName(\'show_wizard_marketing\');

		if(jump == 1 && func == \'createEmailMarketing\') {
			jumpToPage(jump, true);
		}
		else if(jump == 3 && showWizardMarketing && campaignType != \'Email\') {
			jumpToPage(jump, true);
		}
		else {

			if (jump == 2) {
				var templateId = getParameterByName(\'template_id\');
				onEmailTemplateChange(document.getElementById(\'template_id\'), \''; ?>
<?php echo $this->_tpl_vars['MOD']['LBL_COPY_OF']; ?>
<?php echo '\', templateId, function () {
					jumpToPage(jump);
				});
			}
			else {
				jumpToPage(jump);
			}
		}
//		while (jump != document.getElementById(\'wiz_current_step\').value && i<100) {
//			if(document.getElementById(\'wiz_current_step\').value > document.getElementById(\'wiz_total_steps\').value) {
//				break;
//			}
//			navigate(\'next\');
//			i++;
//		}
	}
	else {
		$(\'#step1\').show();
	}
};

var createEmptyMarketing = function(){
	saveMarketingAndTemplate(\'createEmailMarketing\');
};

$(function(){
	jumpToPageByURL();

	if($(\'#func\').val() == "createEmailMarketing" && parseInt($(\'.nav-steps.selected\').attr(\'data-nav-step\')) == 3) {
		createEmptyMarketing();
//		setTimeout(function() {
//			onSaveCopyMarketingEmailTemplate(function () {
//				if (hasNewAttachments()) {
//					submitMarketingEmailAttachments(function(){
//						onNext();
//						wizardMenuSetStepLink(4);
//					});
//				}
////				else {
////					onNext();
////					wizardMenuSetStepLink(4);
////				}
//			});
//		}, 300);
	};
});

'; ?>


</script>

<?php if ($this->_tpl_vars['hideScreen']): ?></div><?php endif; ?>
<link rel="stylesheet" type="text/css" href="modules/EmailTemplates/EmailTemplate.css">
<script src="include/javascript/moment.min.js"></script>