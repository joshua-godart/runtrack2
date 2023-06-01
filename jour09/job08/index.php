<?php
$serveur = 'localhost';
$nomUtilisateur = 'root';
$motDePasse = 'admin';
$nomBaseDeDonnees = 'jour08';

try {
    // Connexion à la base de données avec PDO
    $bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees;charset=utf8", $nomUtilisateur, $motDePasse);

    // Requête SQL pour récupérer le nombre total d'étudiants
    $requete = "SELECT sum(capacite) as capacite_totale from salles";
    $resultat = $bdd->query($requete);
    $ligne = $resultat->fetch(PDO::FETCH_ASSOC);
    $capaciteTotale = $ligne['capacite_totale'];

    // Affichage du résultat dans un tableau HTML
    echo "<table>";
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Capacité totale</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    echo "<tr>";
    echo "<td>" . $capaciteTotale . "</td>";
    echo "</tr>";
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