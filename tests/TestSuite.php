<?php

/*require_once dirname(__FILE__) .'/../../../lib/public/db.php';
require_once dirname(__FILE__) .'/../../../lib/db.php';
require_once dirname(__FILE__) .'/../../../lib/config.php';
//
//require_once(dirname(__FILE__) . '/photo_test.php');
//require_once(dirname(__FILE__) . '/modulemanegment_test.php');
require_once(dirname(__FILE__) . '/../../../../simpletest/autorun.php');
//require_once dirname(__FILE__) .'/../lib/photo.php';*/
require_once dirname(__FILE__) .'/../../../lib/base.php';
 OC_User::login( 'Aaron', 'AarMes1990' ) ;
//OC_App::loadApp('facefinder');
class AllTests extends TestSuite {
	 function AllTests() {
	 	$this->TestSuite('All tests');
		//$this->addFile(dirname(__FILE__)  . '/photo_test.php');
		$this->addFile(dirname(__FILE__) .'/modulemanegment_test.php');
		//$this->addFile(dirname(__FILE__) .'/EXIF_module_test.php');
	}
}
?>