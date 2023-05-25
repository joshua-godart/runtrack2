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
        <label for="prénom">Prénom :</label>
        <input type="text" name="prénom" id="prénom" placeholder="prénom">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" placeholder="nom">
        <input type="submit" value="Valider">
    </form>
    <?php
// Vérifie si $_GET est vide
if ($_GET) {
    echo '<table border="1">';
    echo '<tr><th>Argument</th><th>Valeur</th></tr>';

    // Parcourir $_GET
    foreach ($_GET as $key => $value) {
        // Crée les lignes de tableau
        echo '<tr>';
        echo '<td>' . $key . '</td>';
        echo '<td>' . $value . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
?>
</body>
</html>