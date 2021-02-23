<?php
//$nom = $_POST['nom'];
//$email = $_POST['email'];
extract($_POST);
$file = fopen('db.txt','a');
fwrite($file,"$nom $email\n");

echo "Done saving user!";
?>