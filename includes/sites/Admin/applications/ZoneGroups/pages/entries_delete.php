<?php
/*
  osCommerce Online Merchant $osCommerce-SIG$
  Copyright (c) 2010 osCommerce (http://www.oscommerce.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License v2 (1991)
  as published by the Free Software Foundation.
*/

  $osC_ObjectInfo = new osC_ObjectInfo(OSCOM_Site_Admin_Application_ZoneGroups_ZoneGroups::getEntry($_GET['zID']));
?>

<h1><?php echo osc_link_object(OSCOM::getLink(), $osC_Template->getPageTitle()); ?></h1>

<?php
  if ( $OSCOM_MessageStack->exists() ) {
    echo $OSCOM_MessageStack->get();
  }
?>

<div class="infoBox">
  <h3><?php echo osc_icon('trash.png') . ' ' . $osC_ObjectInfo->getProtected('countries_name') . ': ' . $osC_ObjectInfo->getProtected('zone_name'); ?></h3>

  <form name="zDelete" class="dataForm" action="<?php echo OSCOM::getLink(null, null, 'id=' . $_GET['id'] . '&zID=' . $osC_ObjectInfo->getInt('association_id') . '&action=EntryDelete'); ?>" method="post">

  <p><?php echo OSCOM::getDef('introduction_delete_zone_entry'); ?></p>

  <p><?php echo '<b>' . $osC_ObjectInfo->getProtected('countries_name') . ': ' . $osC_ObjectInfo->getProtected('zone_name') . '</b>'; ?></p>

  <p><?php echo osc_draw_hidden_field('subaction', 'confirm') . osc_draw_button(array('priority' => 'primary', 'icon' => 'trash', 'title' => OSCOM::getDef('button_delete'))) . ' ' . osc_draw_button(array('href' => OSCOM::getLink(null, null, 'id=' . $_GET['id']), 'priority' => 'secondary', 'icon' => 'close', 'title' => OSCOM::getDef('button_cancel'))); ?></p>

  </form>
</div>