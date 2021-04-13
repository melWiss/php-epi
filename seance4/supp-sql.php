<?php include 'connection.php';
// Récupérer l'id à supprimer
$id = $_GET['id'];
// Supprimer l'enregistrement
$cnx->exec("DELETE FROM notes where id = $id");
// rederiction
header('Location: notes-sql.php');
?>