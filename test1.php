<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>My Amazing App</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
    Bonjour <b>tout</b> le monde, il est <i><?php echo date("H:i"); ?></i><hr/>
    Date System: <i><?php echo date("m/d/y"); ?></i><hr/>
    Date et Heure de System: <i><?php echo date("m/d/Y-H:i"); ?></i><hr/>
    <?php
        $x = 5;
        $y = 2.5;
        echo "<br/> $x + $y = ". ($x + $y);
        echo '<br/> $x + $y = '. ($x + $y);
        printf("<br> %.0f + %.1f = %.2f", $x, $y, $x + $y);
        echo "<hr/>";
        $z = "5";
        printf("<br>Le type de z est <b>%s</b>, sa valeur est %s",gettype($z), $z);
        $z++;
        printf("<br>Le type de z est <u>%s</u>, sa valeur est %s",gettype($z), $z);
        echo "<hr/>";
        echo "<ul>";
        for($i=0;$i<5;$i++){
            printf("<li>element %d</li>",$i+1);
        }
        echo "</ul>";
        echo "<hr/>";
        echo "<ol>";
        for($i=0;$i<5;$i++){
            printf("<li>element %d</li>",$i+1);
        }
        echo "</ol>";
        echo "<hr/>";
        $t = array(5, 2.5,"x", true, "Bonjour", 999);
        $taille = count($t);
        for($i = 0;$i<$taille; $i++){
            printf("Valeur de la cellule %d : %s et son type est %s",$i,$t[$i],gettype($t[$i]));
            printf("<br/>");
        }
        echo "<hr/>";
        echo "Ajout de nouvelles valeurs ...<br/>";
        // Ajouter de nouvelles valeurs à la FIN
        $t[] = "Nouvelle cellule";
        $t[] = 555;
        $t[] = "dernière cellule";
        for($i = 0;$i<count($t); $i++){
            printf("Valeur de la cellule %d : %s et son type est %s",$i,$t[$i],gettype($t[$i]));
            printf("<br/>");
        }
        echo "<hr/>";
    ?>

</body>
</html>
