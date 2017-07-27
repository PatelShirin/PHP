<?php
//complete source code for views/upload.php
//$newImageSubmitted is TRUE if form was submitted, otherwise FALSE
$newImageSubmitted = isset( $_POST['new-image'] );

if ( $newImageSubmitted ) {
	//t	his code runs if form was submitted
	$output = upload();
}
else {
	//t	his runs if form was NOT submitted
	$output = include_once "views/upload-form.php";
}
return $output;


//declare new function
function upload(){
	include_once "classes/uploader.class.php";
	
	//i	mage-data is the name attribute used in <input type='file' />
	$uploader = new Uploader( "image-data" );
	$uploader->saveIn("img");	
	$fileUploaded = $uploader->save();
	
	if ( $fileUploaded ) {
		$out = "new file uploaded";
	}
	else {
		$out = "something went wrong";
	}
	return $out;
}

