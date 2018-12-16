<?php

$cookieFin = time()+60*60*24*365;

setcookie('login','charlie',$cookieFin);

echo $_COOKIE['login'];
?>