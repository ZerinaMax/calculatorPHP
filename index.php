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
    $x = NULL;
    $y = NULL;
        echo "
        <h1> Calculatrice simple en PHP </h1> <br>
        <form action='registration.php' method='post'>
        <span> Nombre 1: </span><input type='text' value='$x'> <br>
        <span> Nombre 2: </span><input type='text' value='$y'> <br> <br>
        <span> Sélectionner un opérateur <span> <br> <br>
        <label>Addition</label><input type='radio' name='client' id='AdditionCli' value='additioner'/> <br>
        <label>Soustraction</label><input type='radio' name='client' id='SoustractionCli' value='soustraire');' /> <br>
        <label>Multiplication</label><input type='radio' name='client' id='MultiplicationCli' value='multiplier' /> <br>
        <label>Division</label><input type='radio' name='client' id='DivisionCli' value='diviser'/> <br> <br>
        <input type='button' value='Calculer'>
        <div> </div>
        </form>";
    ?>
</body>
</html>