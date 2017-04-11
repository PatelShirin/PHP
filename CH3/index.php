<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once "classes/Page_Data.class.php";

$pageData=new Page_Data();

$pageData->title="Building and processing HTML forms with PHP";
$pageData->content=include_once "views/navigation.php";

//$pageData->content .= "<div>... and a form here</div>";
$navigationIsClicked=isset($_GET['page']);
if($navigationIsClicked){
    $fileToUpload=$_GET['page'];
} else {
    $fileToUpload="search";
}
$pageData->content.=include_once "views/$fileToUpload.php";
$page = include_once "templates/page.php";
echo $page;