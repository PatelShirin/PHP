<?php
//complete code for index.php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
include_once "ch4/classes/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->title = "Dynamic image gallery";
$pageData->content = include_once "ch4/views/navigation.php";
$userClicked = isset($_GET['page']);

if ( $userClicked ) {
$fileToLoad = $_GET['page'];
} else {
$fileToLoad = "gallery";
}
$pageData->content .=include_once "ch4/views/$fileToLoad.php";
$page = include_once "ch4/templates/page.php";
echo $page;