<?php
/*
  osCommerce Online Merchant $osCommerce-SIG$
  Copyright (c) 2010 osCommerce (http://www.oscommerce.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License v2 (1991)
  as published by the Free Software Foundation.
*/

  class OSCOM_Site_Admin_Application_TaxClasses_Action_EntrySave {
    public function execute(OSCOM_ApplicationAbstract $application) {
      if ( isset($_GET['rID']) && is_numeric($_GET['rID']) ) {
        $application->setPageContent('entries_edit.php');
      } else {
        $application->setPageContent('entries_new.php');
      }

      if ( isset($_POST['subaction']) && ($_POST['subaction'] == 'confirm') ) {
        $data = array('zone_id' => $_POST['tax_zone_id'],
                      'rate' => $_POST['tax_rate'],
                      'description' => $_POST['tax_description'],
                      'priority' => $_POST['tax_priority'],
                      'rate' => $_POST['tax_rate'],
                      'tax_class_id' => $_GET['id']);

        if ( OSCOM_Site_Admin_Application_TaxClasses_TaxClasses::saveEntry((isset($_GET['rID']) && is_numeric($_GET['rID']) ? $_GET['rID'] : null), $data) ) {
          OSCOM_Registry::get('MessageStack')->add(null, OSCOM::getDef('ms_success_action_performed'), 'success');
        } else {
          OSCOM_Registry::get('MessageStack')->add(null, OSCOM::getDef('ms_error_action_not_performed'), 'error');
        }

        osc_redirect_admin(OSCOM::getLink(null, null, 'id=' . $_GET['id']));
      }
    }
  }
?>