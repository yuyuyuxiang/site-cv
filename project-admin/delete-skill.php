<?php
/*require 'config.php';
$skillName = $_GET['name'];
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connetion failed: " . $conn->connect_error);
}
$idProject = $_GET['idProject'];
$sql = "DELETE FROM skill WHERE name = '$skillName'";
$result = $conn->query($sql);
$conn->close();
if ($result) {
    // redirect to index.php in 2 seconds
    header('refresh:1; index.php');
    echo "<h1>Success</h1>";
    echo 'redirecting...';
} else {
    header('refresh:1; index.php');
    echo "<h1>Fail, please try again</h1>";
    echo 'redirecting...';
}*/

require 'config.php';
$skillName = $_GET['name'];
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connetion failed: " . $conn->connect_error);
}
$idProject = $_GET['idProject'];

// Check if the user has confirmed the deletion
if (isset($_GET['confirmed'])) {
    $sql = "DELETE FROM skill WHERE name = '$skillName'";
    $result = $conn->query($sql);
    $conn->close();
    if ($result) {
        // redirect to index.php in 2 seconds
        header('refresh:1; index.php');
        echo "<h1>Success</h1>";
        echo 'redirecting...';
    } else {
        header('refresh:1; index.php');
        echo "<h1>Fail, please try again</h1>";
        echo 'redirecting...';
    }
} else {
    // Display confirmation prompt using a pop-up
    echo '<script>
        if (confirm("T\'es sûr de vouloir supprimer le skill : '.$skillName.'?")) {
            window.location.href = "delete-skill.php?name=' . $skillName . '&confirmed=true";
        } else {
            window.location.href = "index.php";
        }
    </script>';
}


?>