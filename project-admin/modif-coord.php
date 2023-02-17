<?php
require 'config.php';
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset('utf8');
// Check connection
    if ($conn->connect_error) {
        die("Connetion failed: " . $conn->connect_error);
    }
//Delete this line
    $tel = $_GET['tel2'];
    $mail = $_GET['mail2'];
    $adress = $_GET['adress2'];
    $sql = "UPDATE coordonnee SET tel = '{$tel}', mail = '{$mail}', adress = '{$adress}'";
    $result = $conn->query($sql);
    $conn->close();
    header('Location: index.php');

?>