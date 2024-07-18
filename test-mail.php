<?php
require 'vendor/autoload.php'; // 引入 composer 的自动加载文件
require 'choixlang.php';
echo '<form name="f" action="index.php" method="GET">
        <input name="page" type="hidden" value="home">
        <input name="lang" type="hidden" value="' . $lang . '">
      </form>';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['btn_submit'])) {
    $to = "yuxiang.zhang@yuxiangzhang123.com";
    $subject = $_POST['object'];
    $message = $_POST['message'];
    $from = $_POST['mail'];
}

$mail = new PHPMailer(true); // 传递 `true` 启用异常


try {
    //服务器设置
    $mail->SMTPDebug = 0; // 开启详细调试输出
    $mail->isSMTP(); // 设置邮件使用SMTP
    $mail->Host = 'smtp.gmail.com'; // 设置SMTP服务器
    $mail->SMTPAuth = true; // 启用SMTP认证
    $mail->Username = 'yuxiangzhang.0521@gmail.com'; // SMTP 用户名
    $mail->Password = 'lol'; // SMTP 密码
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                      // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;

    //收件人
    $mail->setFrom('yuxiangzhang.0521@gmail.com', 'Server email');
    $mail->addReplyTo($from, 'Sender email');
    $mail->addAddress($to, 'Yuxiang ZHANG - Site CV email'); // 添加一个收件人

    //内容
    $mail->isHTML(true); // 设置电子邮件格式为HTML
    // 设置邮件主题，并使用 UTF-8 编码
    $mail->Subject = '=?UTF-8?B?' . base64_encode('FROM SITE CV : ' . $subject) . '?=';
    $mail->Body    = '<b>' . $message . '</b>';
    $mail->AltBody = $message;

    if ($mail->send()) {
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
                ' . CONTACT_SUCCESS . '
            </p>
            <p>
                ' . CONTACT_REDIRECT . '
            </p>
          </div>';
        echo '<script type="text/JavaScript">
            //f submit in 3 second
            setTimeout(function(){document.f.submit ();}, 3000);
          </script>';
    }
} catch (Exception $e) {
    $error_message = CONTACT_ERROR . '<br>' . $mail->ErrorInfo;
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
                ' . $error_message . '
            </p>
            <p>
                ' . CONTACT_REDIRECT . '
            </p>
          </div>';
    echo '<script type="text/JavaScript">
            //f submit in 3 second
            setTimeout(function(){document.f.submit ();}, 3000);
          </script>';
}
