<?php
header("Content-Type: text/html; charset=utf-8");
require 'config.php';
//--------------------------------------------------------------------------------------------------------
//验证session
//启动session
session_start();
//判断是否登录
if (isset($_SESSION["admin"]) and $_SESSION["admin"] === true) {
} else {
    //验证失败，强制把$_SESSION["admin"]设为false
    $_SESSION["admin"] = false;
    header("Location: login.php");
}
//-------------------------------------------------------------------------------------------------------

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connetion failed: " . $conn->connect_error);
}

$sql = "SELECT id, titre, shortDesc FROM project";
$sql2 = "SELECT tel, mail, adress FROM coordonnee";
$sql3 = "SELECT name, category FROM skill ORDER BY category DESC";
$result = $conn->query($sql);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);

if ($result->num_rows > 0) {
    $id = array();
    $titre = array();
    $shortDesc = array();
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $id[] = $row['id'];
        $titre[] = $row['titre'];
        $shortDesc[] = $row['shortDesc'];
    }
} else {
    echo "0 résultat";
}
if ($result2->num_rows > 0) {
    $tel = '';
    $mail = '';
    $adress = '';
    while ($row2 = $result2->fetch_array(MYSQLI_ASSOC)) {
        $tel = $row2['tel'];
        $mail = $row2['mail'];
        $adress = $row2['adress'];
    }
} else {
    echo "0 résultat";
}
if ($result3->num_rows > 0) {
    $name = array();
    $category = array();
    while ($row3 = $result3->fetch_array(MYSQLI_ASSOC)) {
        $name[] = $row3['name'];
        $category[] = $row3['category'];
    }
} else {
    echo "0 résultat";
}
$conn->close();
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../assets/jpeg/icon.jpg">
    <title>Back-office | Site CV</title>
    <meta name="description"
          content="C'est le back-office de mon site CV YUXIANG ZHANG.">
    <meta property="title" content="Back-office | Site CV">
    <meta name="og:description"
          content="C'est le back-office de mon site CV YUXIANG ZHANG.">
    <meta property="og:title" content="Back-office | Site CV">
    <style>
        body {
            padding: 20px;
            width: 80%;
            margin: auto;
        }

        h1 {
            color: #2a6496;
            display: flex;
            justify-content: center;
        }

        /* give a table style */
        table {
            border-collapse: separate;
            border: #2a6496 solid 2px;
        }

        td {
            border: #2a6496 solid 1px;
            padding: 10px;
        }

        a {
            border: 1px solid #2a6496;
        }

        input {
            width: 100%;
        }

        textarea {
            width: 100%;
            height: 100px;
        }

        button {
            width: 200px;
            height: 50px;
            border: 1px solid #2a6496;
            scale: 1.1;
        }

        button:hover {
            background-color: #2a6496;
            color: white;
        }

        .lang-button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .lang-button {
            border: 1px solid #2a6496;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
        }

        .lang-button:hover {
            background-color: #2a6496;
            color: white;
        }

        .table-button {
            display: grid;
            gap: 10px;
            width: 100px;
        }

        .table-button a {
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
        }

        .table-button a:hover {
            background-color: #2a6496;
            color: white;
        }
    </style>
</head>
<body>
<div class="lang-button-container">
    <a class="lang-button" href="?langAdmin=cn" onclick="changeLang1()">中文</a>
    <a class="lang-button" href="?langAdmin=en" onclick="changeLang2()">English</a>
    <a class="lang-button" href="?langAdmin=fr" onclick="changeLang3()">Français</a>
</div>

<h1>Back Office Site CV - Ici je modifie</h1>
<h3>Ici je modifie les coordonnées</h3>
<?php
echo '<li class="liens-li">Tel : ' . $tel . '</li><br><li class="liens-li">Mail : ' . $mail . '</li><br><li class="liens-li">Addresse : ' . $adress . '</li><br><a href="modif.php?tel=' . $tel . '&mail=' . $mail . '&adress=' . $adress . '"><button>Modifier</button></a>'
?>
<br><br>
<br>
<hr>
<br>
<h3>Ici je modifie les projets</h3>
<table>
    <tr>
        <td><b>id</b></td>
        <td><b>Titre</b></td>
        <td><b>Description</b></td>
        <td><b>Action</b></td>
    </tr>
    <?php
    for ($i = 0; $i < count($id); $i++) {
        echo '<tr>
                    <td>' . $id[$i] . '</td>
                    <td>' . $titre[$i] . '</td>
                    <td>' . $shortDesc[$i] . '</td>
                    <td class="table-button"><a href="show-project.php?id=' . $id[$i] . '&langAdmin=' . $langAdmin . '">Modifier</a><a href="delete-project.php?id=' . $id[$i] . '&langAdmin=' . $langAdmin . '">Supprimer</a></td>
                </tr>';
    }
    ?>
</table>
<br><br>
<br>
<hr>
<br>
<h3>Ici j'ajoute de projets</h3>
<form method="get" action="add-project.php" name="form-project">
    ID : <input type="number" name="add-idProject" value="" required><br>
    Initial : <input type="text" name="add-initial" value="" required><br>
    Titre : <input type="text" name="add-titre" value="" required><br>
    Sous Titre : <textarea type="text" name="add-sousTitre" required></textarea><br>
    Short Description : <textarea type="text" name="add-shortDesc" required></textarea><br>
    Lien : <input type="text" name="add-lien" value="" required><br>
    Description : <textarea type="text" name="add-description" required></textarea><br>
    Tools : <input type="text" name="add-tools" value="" required><br>
    Image : <input type="text" name="add-img" value="" required><br><br>
    <button type="submit" name="project-submit" value="Enregistrer">Ajouter</button>
</form>
<br>
<hr>
<br>
<h3>Ici je modifie les compétences</h3>
<table>
    <tr>
        <td><b>Skill Name</b></td>
        <td><b>Skill category</b></td>
        <td><b>Action</b></td>
    </tr>
    <?php
    for ($i = 0; $i < count($name); $i++) {
        echo '<tr>
                    <td>' . $name[$i] . '</td>
                    <td>' . $category[$i] . '</td>
                    <td class="table-button"><a href="show-skill.php?name=' . $name[$i] . '&langAdmin=' . $langAdmin . '">Modifier</a><a href="delete-skill.php?name=' . $name[$i] . '&langAdmin=' . $langAdmin . '">Supprimer</a></td>
                </tr>';
    }
    ?>
</table>
<h3>Ici j'ajoute de compétences</h3>
<form method="get" action="add-skill.php" name="skill-form">
    Skill Name : <input type="text" name="add-name" value="" required><br>
    Skill Category : <input type="text" name="add-category" value="" required><br>
    Skill code : <input type="text" name="add-code" value="" required><br>
    <br>
    <button type="submit" name="skill-submit" value="Enregistrer">Ajouter</button>
</form>
<script>
    function changeLang1() {
        var Days = 30;
        var exp = new Date();
        exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
        document.cookie = "langAdmin" + "=" + "cn" + ";expires=" + exp.toGMTString();
    }

    function changeLang2() {
        var Days = 30;
        var exp = new Date();
        exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
        document.cookie = "langAdmin" + "=" + "en" + ";expires=" + exp.toGMTString();
    }

    function changeLang3() {
        var Days = 30;
        var exp = new Date();
        exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
        document.cookie = "langAdmin" + "=" + "fr" + ";expires=" + exp.toGMTString();
    }
</script>
</body>
</html>
