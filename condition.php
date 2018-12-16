<?php
/*
$sexe = "femme";

    if($sexe=="homme") {
        echo("Salut beau gosse");
    } else {
        echo("Salut poulette");
    };
*/
$note = rand(0,20);
$sage = rand(0,1);
echo('Votre note est de '. $note);
echo('<br>');

if($note<=5 && $sage){
    echo(" c'est pas bien");
} else if($note<=5 && !$sage) {
    echo('You are fired!');
} else if($note<=10){
    echo(' Peut mieux faire');
} else if($note<=15) {
    echo(" C'est bien");
} else {
    echo(" C'est super");
}
?>