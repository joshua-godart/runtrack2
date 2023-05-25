<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="nombre">Nombre :</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        <input type="submit" value="Valider">
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD']==='GET'){
            $count = 0;
            foreach($_GET as $key => $value){
                if ($value % 2 == 0) {
                    echo $value . " est un nombre paire";
                    } else {
                    echo $value . " est un nombre impaire";
                    }
                }
        }
    ?>
</body>
</html>