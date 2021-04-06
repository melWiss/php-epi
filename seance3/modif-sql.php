<?php include 'connection.php';
// Récupérer l'id à modifier
$id = $_GET['id'];
// Récupérer toutes les données de l'étudiant relatif à l'ID récupéré
$q = "SELECT * FROM notes WHERE id = $id";
$res = $cnx->query($q);
$etd = $res->fetch(); // Ceci est UN SEUL étudiant
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Modifier un étudiant</title>
</head>
<body>
 <h1>Modifier une fiche étudiant</h1>
 <form action="modif-sql-action.php">
 ID : <?php echo $id; ?><br/>
 Nom : <input type="text" name="nom" value="<?php echo $etd['nom']
?>"></br>
 Note : <input type="text" name="note" ...></br>
 <input type="hidden" name="id" value=<?php echo $id; ?>>
 <input type="submit" value="Modifier" name="modifier">
 </form>
</body>
</html>