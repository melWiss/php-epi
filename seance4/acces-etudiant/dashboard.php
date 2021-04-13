<?php
include '../connection.php';
// Ouvrir une session
session_start();
...
// Vérifier que l'étudiant connecté a saisi ses codes correctement
if( !isset($_SESSION['id']) ) // Accès non authentifié !
{
    // Afficher un message d'erreur
 echo "Veuillez vous connecter !";
 // Arrêter l'exécution de ce script
 exit();
}
$id_etudiant = $_SESSION['id'];
// Connexion à la bdd
...
// Récupérer les données de l'étudiant connecté depuis la bdd
$q = 'SELECT * FROM notes WHERE id = $id_etudiant';
$res = $cnx->query("q");
$etd = $res->fetch();
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <title>Espace Etudiant - Dashboard</title>
</head>
<body>
 <h1>Espace Etudiant - Dashboard</h1>
 Votre moyenne est : <?php echo $etd['note'] ?>
 <hr/>

 <form action="dashboard_action.php" method="post">
 Votre nom : <input type="text" name="nom" required="required"
value="<?php echo $etd['nom'] ?>"> <br>
 <input type="hidden" name="id" value="<?php echo $id_etudiant; ?>">
 <input type="submit" value="Modifier" name="modifier">
</form>
</body>
</html>