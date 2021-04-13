<?php include 'connection.php';
// Récupérer toutes les données de l'étudiant à modifier
$id = $_GET['id'];
$nom = $_GET['nom'];
$note = $_GET['note'];
$email = $_GET['email'];
$mdp = $_GET['mdp'];
// Connexion à la bdd
// $id = $_GET['id'];
// Préparer la requête SQL de mise à jour
// $q = "UPDATE notes SET nom='$nom', note=$note WHERE id = $id AND email LIKE $email AND mdp LIKE $mdp";
$q = "UPDATE notes SET nom='$nom', note=$note WHERE id = $id AND email='$email' AND mdp='$mdp'";
// Exécuter la requête SQL
$cnx->exec($q);
// Redirection à la page principale
header('Location: notes-sql.php');
?>