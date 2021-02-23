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

    Bonjour <b>tout</b> le monde, il est <i><?php echo date("H:i"); ?></i>
    <hr />
    Date System: <i><?php echo date("m/d/y"); ?></i>
    <hr />
    Date et Heure de System: <i><?php echo date("m/d/Y-H:i"); ?></i>
    <hr />
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

    <h3>Autre method pour afficher le contenu du tableau du tableau</h3>
    On va basculer plusieurs fois entre PHP et HTML
    <ol>
        <?php
            for($i=0;$i<$taille;$i++){?>
        <li><?php printf("ligne %d",$t[$i]) ?></li>
        <?php }
        ?>
    </ol>
    <hr />
    <h3>Les tableaux (arrays)</h3>
    A mettre en forme sous forme de tableau HTML:
    <table border="1">

        <head>
            <tr>
                <th>Cellule</th>
                <th>Valeur (contenu)</th>
                <th>Type</th>
            </tr>
        </head>
        <tbody>
            <?php for($i=0;$i<$taille;$i++){?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $t[$i]; ?></td>
                <td><?php echo gettype($t[$i]); ?></td>
            </tr>
            <?php };?>
        </tbody>
    </table>
    <hr />
    <h3>Les tableaux associatifs</h3>
    <?php
        $panier = array("pommes"=>5, "ananas"=>12, "bananas"=>4.5);
        echo "<br>Contenu de mon panier: <ol>";
        foreach($panier as $produit => $qte){
            echo "<li>$produit: $qte Kg</li>";
        }
        echo "</ol>";
    ?>
    <hr />
    <h4>Ajouter 10Kg d'oranges et afficher le nouveau panier</h4>
    <?php
        $panier["orange"] = 10;
        echo "<br>Contenu de mon panier: <ol>";
        foreach($panier as $produit => $qte){
            echo "<li>$produit: $qte Kg</li>";
        }
        echo "</ol>";
    ?>
    <hr />
    <h4>Ajouter 1Kg de pommes et afficher le nouveau panier</h4>
    <?php
        $panier["pommes"]++;
        echo "<br>Contenu de mon panier: <ol>";
        foreach($panier as $produit => $qte){
            echo "<li>$produit: $qte Kg</li>";
        }
        echo "</ol>";
    ?>
    <hr />
    <form action="action.php" method="post">
        <p>Votre nom : <input type="text" name="nom" /></p>
        <p>Votre âge : <input type="text" name="age" /></p>
        <p><input type="submit" value="OK"></p>
    </form>
    <hr />
    <form action="calc.php" method="post">
        <p>donner a : <input type="text" name="a" /></p>
        <p>donner b : <input type="text" name="b" /></p>
        <p><input type="submit" value="OK"></p>
    </form>

</body>

</html>