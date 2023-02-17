<?php
/*
Site Multilingue / utilisation des constantes !
*/
error_reporting(0);
require 'choixlang.php';
require 'config-bdd.php';

$page = $_GET['page'];
if(!isset($page)){
    $page = 'home';
}
if($page != 'home' && $page != 'about' && $page != 'mentions-legales' && $page != 'project' && $page != 'project-detail' && $page != 'project-1' && $page != 'project-2' && $page != 'project-3' && $page != 'project-4' && $page != 'project-5' && $page != 'project-6'){
    header('Location: 404.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Site CV - Yuxiang ZHANG</title>
    <link rel="shortcut icon" href="./assets/jpeg/icon.jpg">
    <meta name="description" content="BONJOUR, JE M'APPELLE YUXIANG ZHANG. Actuellement développeur web, ceci est mon site CV, où vous pouvez me connaître plus !">
    <link rel="stylesheet" href="css/style.css" />
    <link href="css/aos.css" rel="stylesheet">
  </head>
  <body>
    <header class="header">
        <?php
            include 'header.php';
        ?>
    </header>
    <?php
      include $page . '.php';
    ?>
    <footer class="main-footer">
      <?php
        include "footer.php";
      ?>
    </footer>

    <script src="index.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="aos.js"></script>
    <script type="text/javascript">
      AOS.init();
      /*$("#btn_submit").click(function(e){
          var _this = $(event.target);
          var title = $(_this.siblings()[0]).find("#object").val();
          var addr = "yuxiangzhang.0521@gmail.com"
          var message = $(_this.siblings()[1]).find("#message").val();

          window.location.href="Mailto:" + addr + "?Subject=" + title + "&Body=" + message;
      });*/
    </script>
  </body>
</html>
