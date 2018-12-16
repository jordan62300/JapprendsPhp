<!DOCTYPE html>
<?php

$jordan = "jordan";
$chiffre = 5;

echo strlen("$jordan");
echo("<br>");
echo("hello $jordan <br>");
echo( 10 * $chiffre );
echo("<br>");
$aire = aire(10,20);

function aire($largeur,$longueur) {
    $total = $largeur * $longueur;
    return $total;
}

echo($aire);

function buttonSubmit(){
    $html = '<input type="submit" value="Envoyer">';
    return $html;
}

echo(buttonSubmit());

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>