<?php


//require_once dirname(__FILE__) .'/../../../lib/base.php';
require_once( dirname(__FILE__) . '/../../../../simpletest/unit_tester.php');
require_once( dirname(__FILE__) . '/../../../../simpletest/xml.php');
require_once( dirname(__FILE__) . '/../../../../simpletest/reporter.php');
//require_once(dirname(__FILE__) . '/photo_test.php');
//require_once(dirname(__FILE__) . '/modulemanegment_test.php');

//require_once(dirname(__FILE__) . '/EXIF_module_test.php');
class AllTests extends TestSuite {
	 function AllTests() {
	 	$this->TestSuite('All tests');
		$this->addFile(dirname(__FILE__)  . '/photo_test.php');
		$this->addFile(dirname(__FILE__) .'/modulemanegment_test.php');
	}
}

$at = new AllTests();
$at->run(new XmlReporter());
?>