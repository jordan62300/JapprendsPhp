<?php

$jeu[0] = 'mario';
$jeu[1] = 'zelda';
$jeu[2] = 'rayman';

//echo $jeu[0];

$mario['type'] = 'platforme';
$mario['console'] = 'Nintendo';
$mario['public'] = 'tout public';

//echo(" ".$mario['type']);

$jeux['mario']['type'] = 'platform';
$jeux['mario']['console'] = 'Nintendo';
$jeux['mario']['public'] = 'tout public';

$jeux['zelda']['type'] = 'rpg';
$jeux['zelda']['console'] = 'Nintendo';
$jeux['zelda']['public'] = 'Adulte';

//echo($jeux['zelda']['type']);

print_r($jeux);
?>