<?php
    var_dump($_POST);
    echo "<hr>";

    $numero1 = $_POST["name"];
    $numero2 = $_POST["lastname"];
    
    
    switch ($_POST['option']) {
        case "suma":
            echo($numero1+$numero2);
        break;
        case "resta":
            echo($numero1-$numero2);
        break;
        case "multi":
            echo($numero1*$numero2);
        break;
        case "div":
            echo($numero1/$numero2);
        break;

        }

?>