<?php

$nbligne = 0;
// boucle while

while($nbligne < 10){
    echo($nbligne." Je dois faire mes devoirs<br />");
    $nbligne ++;
}


// boucle for simple

for($nbligne=0;$nbligne<10;$nbligne++) {
    echo($nbligne." Je dois faire mes devoirs<br />");
}

// Boucle for avec index

$jeu[0] = 'mario';
$jeu[1] = 'zelda';
$jeu[2] = 'rayman';
$nb_jeu = count($jeu);

for ($i=0; $i<$nb_jeu; $i++){
    echo("<br />" .$jeu[$i]);
};


// Boucle foreach 

$mario['type'] = 'platforme';
$mario['console'] = 'Nintendo';
$mario['public'] = 'tout public';

foreach($mario as $key => $value) {
    echo($key. " a la valeur ". $value. "<br />");
}

?>