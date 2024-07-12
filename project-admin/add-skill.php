<?php
require 'config.php';
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connetion failed: " . $conn->connect_error);
}
$skillName = $_GET['add-name'];
$skillCategory = $_GET['add-category'];
$skillCode = $_GET['add-code'];
$sql = "INSERT INTO skill (name, category, code) VALUES ('$skillName', '$skillCategory', '$skillCode')";
$result = $conn->query($sql);
$conn->close();
if ($result) {
    // redirect to index.php in 2 seconds
    header('refresh:1; index.php');
    echo "<h1>Success</h1>";
    echo 'redirecting...';
} else {
    header('refresh:1; index.php');
    echo "<h1>fail, please try again</h1>";
    echo 'redirecting...';
}
?>