<?php

/*
choixlang.php qui permet de determiner quel fichier de constantes à inclure
*/
error_reporting(0);
//premier cas pas de cookie ni variable langue initialisée on part sur la langue du navigateur
If((!$_GET['lang'])&&(!$_COOKIE['lang'])){
	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
	setCookie("lang",$lang,time()+3600*24*365);
	}
//deuxieme cas une valeur dans le cookie
Elseif(($_COOKIE['lang'])&&(!$_GET['lang'])){
	$lang=$_COOKIE['lang'];
	}
//sinon on se base sur la lang affectée en param
Else{
	$lang=$_GET['lang'];
	setCookie("lang",$lang,time()+3600*24*365);
	}
// on switch sur lang pour savoir quel fichier inclure
switch($lang){
	case "fr":
		include "lang/lang_fr.php";
		break;
	case "cn":
		include "lang/lang_cn.php";
		break;
	case "en":
		include "lang/lang_en.php";
		break;
	default :
		include "lang/lang_fr.php";
		break;
	}
?>
