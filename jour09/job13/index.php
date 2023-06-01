<?php
$serveur = 'localhost';
$nomUtilisateur = 'root';
$motDePasse = 'admin';
$nomBaseDeDonnees = 'jour08';

try {
    // Connexion à la base de données avec PDO
    $bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees;charset=utf8", $nomUtilisateur, $motDePasse);

    // Requête SQL pour récupérer les informations de la table étudiants
    $requete = "SELECT salles.nom AS nom_salles, etages.nom AS nom_etages FROM salles JOIN etages ON salles.id_etage = etages.id";
    $resultat = $bdd->query($requete);
// Affichage du résultat dans un tableau HTML
    echo "<table>";
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nom de la salle</th>";
    echo "<th>Nom de l'étage</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    
    while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $ligne['nom_salles'] . "</td>";
        echo "<td>" . $ligne['nom_etages'] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";

    // Fermeture de la connexion à la base de données
    $resultat->closeCursor();
    $bdd = null;
} catch (PDOException $e) {
    // En cas d'erreur, afficher le message d'erreur
    echo "Erreur : " . $e->getMessage();
}
?>