<?php
header("Content-Type: text/html; charset=utf-8");
if(!isset($_POST['submit'])){
    header("Location: login.php");
}
//--------------------------------------------------------------------------------------------------------------------
//设置session
//启动session
session_start();
//声明一个admin变量，用于后期判读是否登录，并且赋空值
$_SESSION["admin"] = null;
$_SESSION["login_fail"] = null;
//---------------------------------------------------------------------------------------------------------------------


//获得验证的用户名和密码
$ADMIN_NAME=$_POST['name'];
$ADMIN_PASSWORD=$_POST['password'];
//和数据库内的进行比对
//创建对象并打开连接，最后一个参数是选择的数据库名称
require_once('config.php');
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connetion failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM webmaster WHERE admin_name='$ADMIN_NAME' and admin_password='$ADMIN_PASSWORD'";
$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_ASSOC);//转为数组

if($row){
    //-----------------------------------------------------------------------------------------------------------------
    //验证通过后，启动session
    session_start();
    //登录成功后admin的值设为真
    $_SESSION["admin"] = true;
    //-----------------------------------------------------------------------------------------------------------------
    header("Location: index.php");
}
else{
    session_start();
    $_SESSION["login_fail"] = true;
    header("Location: login.php");
}
$conn->close();
?>