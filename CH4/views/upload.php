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
	$out = "<pre>";
	$out .=print_r($_FILES, true);
	$out .= "</pre>";
	return $out;
	
}
