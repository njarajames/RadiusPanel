<?php
require "config.php";

// Fonction pour obtenir le nombre d'enregistrements dans la table "nas"
function getRowCountInGroupNASTable($conn) {
    // Requête SQL pour compter le nombre d'enregistrements dans la table "nas"
    $sql = "SELECT COUNT(*) as count FROM radgroup WHERE Type = 'NAS_Client' ";

    // Exécution de la requête
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $count = $row['count'];
        return $count;
    } else {
        // Gérer les erreurs de la requête SQL
        return -1; // Ou une autre valeur pour indiquer une erreur
    }
}


// Utilisation de la fonction pour obtenir le nombre d'enregistrements
$countInGroupNASTable = getRowCountInGroupNASTable($conn);

echo $countInGroupNASTable;

?>