<?php
session_start();

// Vérifier si le bouton "reset" a été cliqué
if (isset($_POST['reset'])) {
    // Réinitialiser la variable de session contenant les prénoms
    unset($_SESSION['prenoms']);
}

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier si le champ "prenom" est présent dans la soumission du formulaire
    if (isset($_POST['prenom'])) {
        $prenom = $_POST['prenom'];

        // Vérifier si la variable de session "prenoms" existe
        if (!isset($_SESSION['prenoms'])) {
            // Si elle n'existe pas, l'initialiser comme un tableau vide
            $_SESSION['prenoms'] = array();
        }

        // Ajouter le prénom à la variable de session
        $_SESSION['prenoms'][] = $prenom;
    }
}

// Afficher l'ensemble des prénoms
if (isset($_SESSION['prenoms'])) {
    echo "Liste des prénoms :<br>";
    foreach ($_SESSION['prenoms'] as $prenom) {
        echo $prenom . "<br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ajouter des prénoms</title>
</head>
<body>
    <form method="post">
        <input type="text" name="prenom" placeholder="Entrez un prénom" required>
        <input type="submit" value="Ajouter">
    </form>

    <form method="post">
        <input type="submit" name="reset" value="Réinitialiser">
    </form>
</body>
</html>
