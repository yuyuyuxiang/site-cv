<?php
$name = $_GET['name'];
include('config.php');

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connetion failed: " . $conn->connect_error);
}

$sql = "select * from skill where name='$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $skillId = '';
    $skillName = '';
    $skillCategory = '';
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $skillId = $row['id'];
        $skillName = $row['name'];
        $skillCategory = $row['category'];
    }
} else {
    echo "0 résultat";
}
$conn->close();

echo 'Nom Compétence : <br>' . $skillName . '<br><br>';
echo 'Catégorie Compétence : <br>' . $skillCategory . '<br><br>';

?>
<style>
    body {
        padding: 20px;
        width: 80%;
        margin: auto;
    }

    input {
        width: 100%;
    }

    textarea {
        width: 100%;
        height: 100px;
    }
</style>
<hr>
<h2>Modifier la compétence ici</h2>
<form method="get" action="modif-skill.php" name="form-skill">
    <input type="hidden" name="id" value="<?php echo $skillId ?>">
    Nom Compétence : <input type="text" name="name" value="<?php echo $skillName ?>"><br>
    Catégorie Compétence : <input type="text" name="category" value="<?php echo $skillCategory ?>"><br><br>
    <button type="submit" name="skill-submit" value="Enregistrer">Enregistrer</button>
</form>
