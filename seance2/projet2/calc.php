<?php
    extract($_POST);
    switch ($op) {
        case 'sum':
            echo "$a + $b = ".$a+$b;
            break;
        case 'stract':
            echo "$a - $b = ".$a-$b;
            break;
        case 'prod':
            echo "$a * $b = ".$a*$b;
            break;
        case 'div':
            echo "$a / $b = ".$a/$b;
            break;
                
        default:
            echo "error";
            break;
    }
?>