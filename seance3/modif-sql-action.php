<?php include 'connection.php';
// Récupérer toutes les données de l'étudiant à modifier
$id = $_GET['id'];
$nom = $_GET['nom'];
$note = $_GET['note'];
// Connexion à la bdd
$id = $_GET['id'];
// Préparer la requête SQL de mise à jour
$q = "UPDATE notes SET nom='$nom', note=$note WHERE id = $id";
// Exécuter la requête SQL
$cnx->exec($q);
// Redirection à la page principale
header('Location: notes-sql.php');
?>