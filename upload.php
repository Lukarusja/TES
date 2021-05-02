<?php
	//this is where we set the location for the uploaded information and //generate it for the AJAX script
	$fname = $_FILES['userPhoto']['name'];
	//destination location variable
	$location ="uploads/".$fname;
	//determine file type from path
	$imageFileType=strtolower(pathinfo($location,PATHINFO_EXTENSION));
	$validExtensions = array("jpg","jpeg","png");
	$response = "0";
	
	//file extension checker
	if(in_array($imageFileType,$validExtensions)){
		//upload file
		if($_FILES['userPhoto']['size'] < 1000000){
			if(move_uploaded_file($_FILES['userPhoto']['tmp_name'],$location)){
				$response = $location;
			}
		}
		else{
			 throw new RuntimeException('Exceeded filesize limit.');
		}
	}
	echo $response;
	exit;
?>