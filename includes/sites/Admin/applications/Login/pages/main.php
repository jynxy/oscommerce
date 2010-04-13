<?php
/*
  osCommerce Online Merchant $osCommerce-SIG$
  Copyright (c) 2010 osCommerce (http://www.oscommerce.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License v2 (1991)
  as published by the Free Software Foundation.
*/
?>

<h1><?php echo osc_link_object(OSCOM::getLink(), $osC_Template->getPageTitle()); ?></h1>

<div class="infoBox">
  <h3><?php echo osc_icon('people.png') . ' ' . __('action_heading_login'); ?></h3>

  <form name="login" class="dataForm" action="<?php echo OSCOM::getLink(null, null, 'action=Process'); ?>" method="post">

  <p><?php echo __('introduction'); ?></p>

  <fieldset>
    <p><label for="user_name"><?php echo __('field_username'); ?></label><?php echo osc_draw_input_field('user_name'); ?></p>
    <p><label for="user_password"><?php echo __('field_password'); ?></label><?php echo osc_draw_password_field('user_password'); ?></p>
  </fieldset>

  <p><?php echo osc_draw_button(array('icon' => 'key', 'title' => __('button_login'))); ?></p>

  </form>
</div>

<script type="text/javascript">
$('#user_name').focus();
</script>