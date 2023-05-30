<?php
setcookie("nbvisites");
if (!isset($_COOKIE["nbvisites"])){
    setcookie("nbvisites", 1);
    $_COOKIE["nbvisites"] = 1;
}
elseif ($_COOKIE["nbvisites"]++)
    setcookie("nbvisites", $_COOKIE["nbvisites"]);

    if (isset($_POST['reset'])) {
    setcookie('nbvisites', 0);
    $_COOKIE['nbvisites'] = 0;
}
echo $_COOKIE["nbvisites"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <form method="post">
            <input type="submit" name="reset" value="Réinitialiser">
        </form>
    </body>
</html>