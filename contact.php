<?php
require 'choixlang.php';
echo '<form name="f" action="index.php" method="GET">
        <input name="page" type="hidden" value="home">
        <input name="lang" type="hidden" value="'.$lang.'">
      </form>';
if(isset($_POST['btn_submit'])){
    $to = "yuxiang.zhang@yuxiangzhang123.com";
    $subject = $_POST['object'];
    $message = $_POST['message'];
    $from = $_POST['mail'];
    $headers = "From:" . $from;
}
if(mail($to,$subject,$message,$headers)){
    echo '<div class="reponse-text" style="margin: auto; 
            margin-top: 10%;
            padding-top: 20px;
            padding-bottom: 20px;
            background: linear-gradient(to right, rgba(0, 98, 185, 0.8), rgba(0, 98, 185, 0.8)), url(../../assets/svg/common-bg.svg); 
            width: 70%; 
            text-align: center; 
            font-size: x-large; 
            color: white; 
            border-radius: 20px;">
            <p>
                '.CONTACT_SUCCESS.'
            </p>
            <p>
                '.CONTACT_REDIRECT.'
            </p>
          </div>';
    echo '<script type="text/JavaScript">
            //f submit in 3 second
            setTimeout(function(){document.f.submit ();}, 3000);
          </script>';
}else{
    echo '<div class="reponse-text" style="margin: auto; 
            margin-top: 10%;
            padding-top: 20px;
            padding-bottom: 20px;
            background: linear-gradient(to right, rgba(0, 98, 185, 0.8), rgba(0, 98, 185, 0.8)), url(../../assets/svg/common-bg.svg); 
            width: 70%; 
            text-align: center; 
            font-size: x-large; 
            color: white; 
            border-radius: 20px;">
            <p>
                '.CONTACT_ERROR.'
            </p>
            <p>
                '.CONTACT_REDIRECT.'
            </p>
          </div>';
    echo '<script type="text/JavaScript">
            //f submit in 3 second
            setTimeout(function(){document.f.submit ();}, 3000);
          </script>';
}
?>
