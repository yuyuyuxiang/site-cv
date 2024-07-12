<?php
require 'config.php';
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connetion failed: " . $conn->connect_error);
}
$idProject = $_GET['add-idProject'];
$initial = $_GET['add-initial'];
$titre = $_GET['add-titre'];
$sousTitre = $_GET['add-sousTitre'];
$description = $_GET['add-description'];
$lien = $_GET['add-lien'];
$shortDesc = $_GET['add-shortDesc'];
$tools = $_GET['add-tools'];
$img = $_GET['add-img'];
$sql = "INSERT INTO project (id, initial, titre, sousTitre, shortDesc, lien, description, tool, img) VALUES ('$idProject', '$initial', '$titre','$sousTitre','$shortDesc', '$lien', '$description', '$tools', '$img')";
$result = $conn->query($sql);
$conn->close();
if($result){
    // redirect to index.php in 2 seconds
    header('refresh:1; index.php');
    echo "<h1>Success</h1>";
    echo 'redirecting...';
}
else{
    header('refresh:1; index.php');
    echo "<h1>fail, please try again</h1>";
    echo 'redirecting...';
}
?>