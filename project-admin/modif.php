<style>
    body{
        padding: 20px;
    }
    input{
        width: 300px;
        height: 50px;
        margin-bottom: 10px;
    }
    button{
        width: 300px;
        height: 50px;
        border: 1px solid #2a6496;
        scale: 1.1;
    }
    button:hover{
        background-color: #2a6496;
        color: white;
    }

</style>
<form method="get" action="modif-coord.php" name="form-coord">
    Tel : <input type="text" name="tel2" value="<?php echo $_GET['tel']?>"><br>
    Mail : <input type="email" name="mail2" value="<?php echo $_GET['mail']?>"><br>
    Addresse : <input type="text" name="adress2" value="<?php echo $_GET['adress']?>"><br>
    <button type="submit" name="coord-submit" value="Enregistrer">Enregistrer</button>
</form>