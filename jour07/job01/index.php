<?php
session_start();

if(!isset($_SESSION["nbvisites"])){
    $_SESSION["nbvisites"] = 0;
}else{
    $_SESSION["nbvisites"] ++;
}

if(isset($_POST["reset"])){
    $_SESSION["nbvisites"] = 0;
}

echo $_SESSION["nbvisites"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Compteur de visites</title>
</head>
<body>
    <form method="post">
        <input type="submit" name="reset" value="Réinitialiser">
    </form>
</body>
</html>