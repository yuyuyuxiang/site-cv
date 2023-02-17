<?php
require 'config.php';
$id = $_GET['id'];
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connetion failed: " . $conn->connect_error);
}
$idProject = $_GET['idProject'];
$sql = "DELETE FROM project WHERE id = '{$id}'";
$result = $conn->query($sql);
$conn->close();
header('Location: index.php');

?>