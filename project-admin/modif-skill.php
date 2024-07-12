<?php
require 'config.php';
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connetion failed: " . $conn->connect_error);
}
$skillId = $_GET['id'];
$skillName = $_GET['name'];
$skillCategory = $_GET['category'];
$sql = "UPDATE skill SET name = '$skillName', category = '$skillCategory' WHERE id = '$skillId'";
try {
    $result = $conn->query($sql);
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage();
}
$conn->close();

if ($result) {
    // redirect to index.php in 2 seconds
    header('refresh:1; index.php');
    echo "<h1>Success</h1>";
    echo 'redirecting...';
} else {
    header('refresh:1; show-skill.php?name=' . $skillName . '&langAdmin=' . $langAdmin . '');
    echo "<h1>fail, please try again</h1>";
    echo 'redirecting...';
}

?>