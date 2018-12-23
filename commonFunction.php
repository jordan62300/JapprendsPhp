<?php

$output = substr('hello',1,3) ."<br>" ;  // retourne une partie d'une chaine de caractere
echo $output;

echo strlen('Hello')."<br>"; // compte le nombre de caractere

$pos = strpos('Hello world', 'o') ."<br>"; // retourne le premier index de la lettre cherchée (ici 4 pour la lettre o)

$posInverse = strrpos('Hello world', 'o') ."<br>"; // retourne le premier index de la lettre cherchée en sens inverse (ici 7 pour la lettre 0)

echo $posInverse;

$text = 'hello world      ';
var_dump($text);

$trimmed = trim($text);       // trim retire les espaces
var_dump($trimmed);     

$oupper = strtoupper('<br> Hello world');   // tout en majuscule
echo $oupper;

$lower = strtolower('<br> Hello world');   // tout en minuscule
echo $lower;

$capitalize = ucwords('<br> hello world');  // majuscule a chaque début de mot
echo $capitalize;

$sometext = '<br> Hello World';
$replace = str_replace('World','Everyone',$sometext); // remplace le mot World par Everyone dans la variable $sometext

echo $replace;


$val = '22';
$isstring = "<br>". is_string($val);   // si $val est une chaine de caractere alors ca affiche 1 sinon ca n'affiche rien

echo $isstring;

$string = "<br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur iure laboriosam voluptatem, optio accusantium illo eius nobis omnis natus delectus fugiat, exercitationem ex iusto odit atque itaque veritatis quae neque.";

$compressed = gzcompress($string);

echo $compressed;

