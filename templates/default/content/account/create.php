<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2006 osCommerce

  Released under the GNU General Public License
*/
?>

<?php echo tep_image(DIR_WS_IMAGES . 'table_background_account.gif', $osC_Template->getPageTitle(), null, null, 'id="pageIcon"'); ?>

<h1><?php echo $osC_Template->getPageTitle(); ?></h1>

<?php
  if ($messageStack->size('create') > 0) {
    echo $messageStack->output('create');
  }
?>

<form name="create" action="<?php echo tep_href_link(FILENAME_ACCOUNT, 'create=save', 'SSL'); ?>" method="post" onsubmit="return check_form(create);">

<div class="moduleBox">
  <em style="float: right; margin-top: 10px;"><?php echo $osC_Language->get('form_required_information'); ?></em>

  <h6><?php echo $osC_Language->get('my_account_title'); ?></h6>

  <div class="content">
    <ol>

<?php
  if (ACCOUNT_GENDER > -1) {
    $gender_array = array(array('id' => 'm', 'text' => $osC_Language->get('gender_male')),
                          array('id' => 'f', 'text' => $osC_Language->get('gender_female')));
?>

      <li><?php echo osc_draw_label($osC_Language->get('field_customer_gender'), 'fake', null, (ACCOUNT_GENDER > 0)) . osc_draw_radio_field('gender', $gender_array); ?></li>

<?php
  }
?>

      <li><?php echo osc_draw_label($osC_Language->get('field_customer_first_name'), 'firstname', null, true) . osc_draw_input_field('firstname'); ?></li>
      <li><?php echo osc_draw_label($osC_Language->get('field_customer_last_name'), 'lastname', null, true) . osc_draw_input_field('lastname'); ?></li>

<?php
  if (ACCOUNT_DATE_OF_BIRTH == '1') {
?>

      <li><?php echo osc_draw_label($osC_Language->get('field_customer_date_of_birth'), 'dob_days', null, true) . tep_draw_date_pull_down_menu('dob', null, false, true, true, date('Y')-1901, -5); ?></li>

<?php
  }
?>

      <li><?php echo osc_draw_label($osC_Language->get('field_customer_email_address'), 'email_address', null, true) . osc_draw_input_field('email_address'); ?></li>

<?php
  if (ACCOUNT_NEWSLETTER == '1') {
?>

      <li><?php echo osc_draw_label($osC_Language->get('field_customer_newsletter'), 'newsletter') . osc_draw_checkbox_field('newsletter', '1'); ?></li>

<?php
  }
?>

      <li><?php echo osc_draw_label($osC_Language->get('field_customer_password'), 'password', null, true) . osc_draw_password_field('password'); ?></li>
      <li><?php echo osc_draw_label($osC_Language->get('field_customer_password_confirmation'), 'confirmation', null, true) . osc_draw_password_field('confirmation'); ?></li>
    </ol>
  </div>
</div>

<?php
  if (DISPLAY_PRIVACY_CONDITIONS == '1') {
?>

<div class="moduleBox">
  <h6><?php echo $osC_Language->get('create_account_terms_heading'); ?></h6>

  <div class="content">
    <?php echo sprintf($osC_Language->get('create_account_terms_description'), tep_href_link(FILENAME_INFO, 'privacy', 'AUTO')) . '<br /><br /><ol><li>' . osc_draw_checkbox_field('privacy_conditions', array(array('id' => 1, 'text' => $osC_Language->get('create_account_terms_confirm')))) . '</li></ol>'; ?>
  </div>
</div>

<?php
  }
?>

<div class="submitFormButtons">
  <span style="float: right;"><?php echo tep_image_submit('button_continue.gif', $osC_Language->get('button_continue')); ?></span>

  <?php echo osc_link_object(tep_href_link(FILENAME_ACCOUNT, null, 'SSL'), tep_image_button('button_back.gif', $osC_Language->get('button_back'))); ?>
</div>

</form>