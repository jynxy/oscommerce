<?php
/*
  osCommerce Online Merchant $osCommerce-SIG$
  Copyright (c) 2010 osCommerce (http://www.oscommerce.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License v2 (1991)
  as published by the Free Software Foundation.
*/

  namespace osCommerce\OM\Site\Admin\Application\ZoneGroups\Action;

  use osCommerce\OM\ApplicationAbstract;
  use osCommerce\OM\Site\Admin\Application\ZoneGroups\ZoneGroups;
  use osCommerce\OM\Registry;
  use osCommerce\OM\OSCOM;

  class BatchDeleteEntries {
    public static function execute(ApplicationAbstract $application) {
      if ( isset($_POST['batch']) && is_array($_POST['batch']) && !empty($_POST['batch']) ) {
        $application->setPageContent('entries_batch_delete.php');

        if ( isset($_POST['subaction']) && ($_POST['subaction'] == 'confirm') ) {
          $error = false;

          foreach ( $_POST['batch'] as $id ) {
            if ( !ZoneGroups::deleteEntry($id) ) {
              $error = true;
              break;
            }
          }

          if ( $error === false ) {
            Registry::get('MessageStack')->add(null, OSCOM::getDef('ms_success_action_performed'), 'success');
          } else {
            Registry::get('MessageStack')->add(null, OSCOM::getDef('ms_error_action_not_performed'), 'error');
          }

          osc_redirect_admin(OSCOM::getLink(null, null, 'id=' . $_GET['id']));
        }
      }
    }
  }
?>