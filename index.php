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
    <title>Yuxiang ZHANG développeur web | Site CV</title>
    <link rel="shortcut icon" href="./assets/jpeg/icon.jpg">
    <meta name="description" content="BONJOUR, JE M'APPELLE YUXIANG ZHANG. Actuellement développeur web, ceci est mon site CV, où vous pouvez me connaître plus !">
    <meta property="title" content="Yuxiang ZHANG développeur web | Site CV">
    <meta name="og:description" content="BONJOUR, JE M'APPELLE YUXIANG ZHANG. Actuellement développeur web, ceci est mon site CV, où vous pouvez me connaître plus !">
    <meta property="og:title" content="Yuxiang ZHANG développeur web | Site CV">
    <link rel="stylesheet" href="css/style.css" />
    <link href="css/aos.css" rel="stylesheet">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TT42C5J');</script>
    <!-- End Google Tag Manager -->
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TT42C5J"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
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
