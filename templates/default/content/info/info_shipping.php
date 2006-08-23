<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2006 osCommerce

  Released under the GNU General Public License
*/
?>

<?php echo tep_image(DIR_WS_IMAGES . 'table_background_specials.gif', $osC_Template->getPageTitle(), null, null, 'id="pageIcon"'); ?>

<h1><?php echo $osC_Template->getPageTitle(); ?></h1>

<p><?php echo $osC_Language->get('shipping'); ?></p>

<div class="submitFormButtons" style="text-align: right;">
  <?php echo osc_link_object(tep_href_link(FILENAME_INFO), tep_image_button('button_continue.gif', $osC_Language->get('button_continue'))); ?>
</div>