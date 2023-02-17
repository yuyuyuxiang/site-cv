<?php
require 'config.php';
echo $dbname;
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connetion failed: " . $conn->connect_error);
}
$idProject = $_GET['idProject'];
$initial = $_GET['initial'];
$titre = $_GET['titre'];
$sousTitre = $_GET['sousTitre'];
$description = $_GET['description'];
$lien = $_GET['lien'];
$shortDesc = $_GET['shortDesc'];
$tools = $_GET['tools'];
$img = $_GET['img'];
$sql = "UPDATE project SET titre = '{$titre}', initial = '{$initial}', sousTitre = '{$sousTitre}', description = '{$description}', lien = '{$lien}', shortDesc = '{$shortDesc}', tool = '{$tools}', img = '{$img}' WHERE id = '{$idProject}'";
$result = $conn->query($sql);
$conn->close();
echo $sql;
header('Location: index.php');

?>