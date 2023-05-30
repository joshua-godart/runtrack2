<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier si le champ "prenom" est présent dans la soumission du formulaire
    if (isset($_POST['prenom'])) {
        $prenom = $_POST['prenom'];

        // Stocker le prénom dans un cookie avec une expiration d'un an
        setcookie('prenom', $prenom, time() + 365 * 24 * 3600);
    }
}

// Vérifier si l'utilisateur est déjà connecté en vérifiant l'existence du cookie "prenom"
if (isset($_COOKIE['prenom'])) {
    $prenom = $_COOKIE['prenom'];
    echo "Bonjour $prenom !";

    // Afficher le bouton de déconnexion
    echo '<form method="post">';
    echo '<input type="submit" name="deco" value="Déconnexion">';
    echo '</form>';

    // Vérifier si le bouton "Déconnexion" a été cliqué
    if (isset($_POST['deco'])) {
        // Supprimer le cookie en le rendant expiré
        setcookie('prenom', '', time() - 3600);
        header('Location: ' . $_SERVER['PHP_SELF']); // Rediriger pour actualiser la page
    }
} else {
    // Afficher le formulaire de connexion
    echo '<form method="post">';
    echo '<input type="text" name="prenom" placeholder="Entrez votre prénom" required>';
    echo '<input type="submit" name="connexion" value="Connexion">';
    echo '</form>';
}
?>
