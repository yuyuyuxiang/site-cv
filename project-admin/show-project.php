<?php
$id = $_GET['id'];
include ('config.php');

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connetion failed: " . $conn->connect_error);
}

$sql = "select * from project where id='{$id}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $idProject='';
    $initial='';
    $titre='';
    $sousTitre='';
    $shortDesc='';
    $lien='';
    $description='';
    $tools='';
    $img='';
    while($row=$result->fetch_array(MYSQLI_ASSOC)){
        $idProject=$row['id'];
        $initial=$row['initial'];
        $titre=$row['titre'];
        $sousTitre=$row['sousTitre'];
        $shortDesc=$row['shortDesc'];
        $lien=$row['lien'];
        $description=$row['description'];
        $tools=$row['tool'];
        $img=$row['img'];
    }
} else {
    echo "0 résultat";
}
$conn->close();

echo 'ID : <br>'.$idProject.'<br><br>';
echo 'Initial : <br>'.$initial.'<br><br>';
echo 'Titre : <br>'.$titre.'<br><br>';
echo 'Sous Titre : <br>'.$sousTitre.'<br><br>';
echo 'Short Description : <br>'.$shortDesc.'<br><br>';
echo 'Lien : <br>'.$lien.'<br><br>';
echo 'Description : <br>'.$description.'<br><br>';
echo 'Tools : <br>'.$tools.'<br><br>';
echo 'Image : <br>'.$img.'<br><br>';

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
    textarea{
        width: 100%;
        height: 100px;
    }
</style>
<hr>
<h2>Modifier le projet ici</h2>
<span>ID : <?php echo $idProject; ?></span><br>
<form method="get" action="modif-project.php" name="form-project">
    <input type="hidden" name="idProject" value="<?php echo $idProject?>">
    Initial : <input type="text" name="initial" value="<?php echo $initial?>"><br>
    Titre : <input type="text" name="titre" value="<?php echo $titre?>"><br>
    Sous Titre : <textarea type="text" name="sousTitre"><?php echo $sousTitre?></textarea><br>
    Short Description : <textarea type="text" name="shortDesc"><?php echo $shortDesc?></textarea><br>
    Lien : <input type="text" name="lien" value="<?php echo $lien?>"><br>
    Description : <textarea type="text" name="description"><?php echo $description?></textarea><br>
    Tools : <input type="text" name="tools" value="<?php echo $tools?>"><br>
    Image : <input type="text" name="img" value="<?php echo $img?>"><br><br>
    <button type="submit" name="project-submit" value="Enregistrer">Enregistrer</button>
</form>
