<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculatrice simple PHP</title>
    </head>
    <body> 
        <?php
            echo "
            <h1> Calculatrice simple en PHP </h1> <br>
            <form action='index.php' method='POST'>
                <span> Nombre 1: </span> <input type='text' name='nbPrem'> <br>
                <span> Nombre 2: </span> <input type='text' name='nbDeux'> <br> <br>
                <fieldset>
                    <legend> Sélectionner un opérateur </legend>
                        <label> Addition </label> <input type='radio' name='operation' value='add' checked/> <br>
                        <label> Soustraction </label> <input type='radio' name='operation' value='substract');'/> <br>
                        <label> Multiplication </label> <input type='radio' name='operation' value='times'/> <br>
                        <label> Division </label> <input type='radio' name='operation' value='divide'/><br>
                    </fieldset>
                <input type='hidden' name='form_submitted' value='1' />
                <input type='submit' name='soum' value='Calculer'>
            </form>";

            if (isset ($_POST['soum']));
            $nb1 = str_replace (',','.' , $_POST['nbPrem']);
            $nb2= str_replace (',' , '.' , $_POST['nbDeux']);

            if (is_numeric($nb1) === true && is_numeric($nb2) === true) {  
                $nb1 = floatval($nb1); 
                $nb2 = floatval($nb2);
            $operator = $_POST['operation'];
            switch($operator)
            {
                case "add":
                    echo "La réponse est: " .$nb1 + $nb2;
                    break; 
                case "substract":
                    echo "La réponse est: " .$nb1 - $nb2;
                    break;
                case "times":
                    echo "La réponse est: " .$nb1 * $nb2;
                    break; 
                case "divide":
                    echo $nb2 == 0 ? "Division par zéro impossible" : "La réponse est: " .$nb1 / $nb2;
                    break;
        } 
            }
            elseif (is_numeric($nb1) === false && is_numeric($nb2=== false)) { 
            echo "Veuillez saisir des chiffres compris entre 0 et 9";
            { 
        } 
    }   
        ?>
    </body>
</html>