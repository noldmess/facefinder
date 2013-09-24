<?php
use OCA\FaceFinder;
OCP\JSON::checkLoggedIn();
OCP\JSON::callCheck();
OCP\JSON::checkAppEnabled('facefinder');
$id=(int)$_GET['image'];
if($id>0){
		$writemodul=OCA\FaceFinder\ModuleManeger::getInstance();
	$moduleclasses=$writemodul->getModuleClass();
	$photo=OCA\FaceFinder\FaceFinderPhoto::getPhotoClass($id);
	//test
	if(FaceDetaction_ModuleMapper::issetInCacheImages($photo->getID())){
		echo "sdfsdf";
		FaceDetaction_ModuleMapper::getInfo($photo->getID());
		OCP\Util::writeLog("facefinder","test".$photo->getPath(),OCP\Util::DEBUG);
	}
	$class=FaceDetaction_ModuleMapper::getClass($photo->getID());
	echo OCP\JSON::success(array('data'=>$class->getJSON()));
}else{
		OCP\JSON::error(array("message"=>"get image must be an intager"));
}
?>