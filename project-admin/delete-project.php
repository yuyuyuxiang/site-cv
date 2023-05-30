<?php
require 'config.php';
$id = $_GET['id'];
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connetion failed: " . $conn->connect_error);
}
$sql2 = "SELECT titre FROM project WHERE id = '{$id}'";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();
$projectTitle = $row2['titre'];

// Check if the user has confirmed the deletion
if (isset($_GET['confirmed'])) {
    $sql = "DELETE FROM project WHERE id = '{$id}'";
    $result = $conn->query($sql);
    $conn->close();
    if ($result) {
        // redirect to index.php in 2 seconds
        header('refresh:1; index.php');
        echo "<h1>Success</h1>";
        echo 'Redirecting...';
    } else {
        header('refresh:1; index.php');
        echo "<h1>Fail, please try again</h1>";
        echo 'Redirecting...';
    }
} else {
    // Display confirmation prompt
    echo '<script>
        if (confirm("T\'es sûr de vouloir supprimer le projet : '.$projectTitle.'?")) {
            window.location.href = "delete-project.php?id=' . $id . '&confirmed=true";
        } else {
            window.location.href = "index.php";
        }
    </script>';
}

?>