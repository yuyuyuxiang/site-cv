<?php
error_reporting(0);
//premier cas pas de cookie ni variable langue initialisée on part sur la langue du navigateur
if ((!$_COOKIE['langAdmin'])) {
    $langAdmin = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    setCookie("langAdmin", $langAdmin, time() + 3600 * 24 * 365);
} //sinon on se base sur la lang affectée en param
else {
    $langAdmin = $_COOKIE['langAdmin'];
}

$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "";
if ($langAdmin == "fr") {
    $dbname = "cv-admin-fr";
} elseif ($langAdmin == "en") {
    $dbname = "cv-admin";
} elseif ($langAdmin == "cn") {
    $dbname = "cv-admin-cn";
} else {
    $dbname = "cv-admin";
}
?>