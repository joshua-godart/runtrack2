<!DOCTYPE html>
<html>
<head>
    <title>Formulaire avec styles</title>
    <?php
    // Vérifier si le formulaire a été soumis
    if (isset($_POST['submit'])) {
        // Récupérer le style sélectionné
        $style = $_POST['style'];
        // Inclure le fichier CSS correspondant
        echo '<link rel="stylesheet" type="text/css" href="' . $style . '.css">';
    }
    ?>
</head>
<body>
    <h1>Formulaire avec styles</h1>
    <form method="post" action="">
        <label for="style">Style :</label>
        <select name="style" id="style">
            <option value="">Choisissez votre style</option>
            <option value="style1">Style 1</option>
            <option value="style2">Style 2</option>
            <option value="style3">Style 3</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Valider">
    </form>
</body>
</html>
