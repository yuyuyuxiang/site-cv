<?php
header("Content-Type: text/html; charset=utf-8");
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #eee;
        }

        .form-signin {
            max-width: 500px;
            padding: 15px;
            margin: 0 auto;
            text-align: center;
        }

        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }

        .form-signin .checkbox {
            font-weight: normal;
        }

        .form-signin .form-control {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        .form-signin input[type="text"] {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>
<!--main-->
<body>
<div class="container">

    <form class="form-signin" role="form" method="post" action="check.php">
        <h2 class="form-signin-heading">Yuxiang ZHANG - Site CV Admin</h2>
        <input type="text" class="form-control" name="name" placeholder="ID" required autofocus>
        <input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> se souvenir de moi
            </label>
        </div>
        <button type="submit" class="btn btn-lg btn-primary btn-block">Envoyer</button>
    </form>

    <!--提示框-->
    <div class="alert alert-danger fade in" style="text-align:center">
        <h4>
            <!--选择提示的错误类型-->
            <?php
            session_start();
            if ($_SESSION["login_fail"] == true) {
                echo  "Login failed！";
            }
            else if (!isset($_SESSION["admin"]) || $_SESSION["admin"] == false) {
                echo "Please retry！";
            }

            ?>
        </h4>
        <p>
            <?php
            if ($_SESSION["login_fail"] == true) {
                echo "Wrong account or password, please login again！";
            }
            else if (!isset($_SESSION["admin"]) || $_SESSION["admin"] == false) {
                echo "Login timeout or logged out, please login again to ensure security！";
            }

            ?>
        </p>

    </div>

</div>
</body>
</html>