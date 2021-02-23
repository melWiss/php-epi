<?php
    $nom = $_POST['nom'];
    $age = $_POST['age'];
?>

Bonjour, <?php echo htmlspecialchars($_POST['nom']); ?>.
Tu as <?php echo (int)$_POST['age']; ?> ans.
<?php
    $myfile = fopen("$nom.txt", "w");
    $txt = "$nom, $age.";
    fwrite($myfile, $txt);
    fclose($myfile);
?>