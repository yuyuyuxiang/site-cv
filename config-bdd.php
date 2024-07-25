<?php
error_reporting(0);
//premier cas pas de cookie ni variable langue initialisée on part sur la langue du navigateur
/* If((!$_GET['lang'])){
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
    setCookie("lang",$lang,time()+3600*24*365);
}
//sinon on se base sur la lang affectée en param
Else{
    $lang=$_GET['lang'];
} */

$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "";
if($lang == "fr"){
    $dbname = "cv-admin-fr";
}elseif($lang == "en"){
    $dbname = "cv-admin";
}elseif($lang == "cn"){
    $dbname = "cv-admin-cn";
}
?>