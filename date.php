<?php
echo date('d')."<br>"; // day
echo date('m')."<br>"; // Month
echo date('Y')."<br>"; // Years
echo date('l')."<br>"; // day of the week
echo date('d/m/Y')."<br>";   // Jour/mois/Années

echo date('h')."<br>"; // HOur
echo date('i')."<br>"; // Minute
echo date('s')."<br>"; // Seconde
echo date('a')."<br>"; // AM or PM


date_default_timezone_set('America/New_York'); // Set timezone


echo date('h:i:sa')."<br>"; //   heure:minute:seconde:pm

$timestamp = mktime(23,30,42,7,13,1995);   // heure,minute,seconde,mois,jour,années

echo date('d/m/Y', $timestamp)."<br>";       // Remplace les valeurs d/m/Y avec ceux données dans la variable timestamp

$timestamp2 = strtotime('7:00pm March 22 2016')."<br>";
$timestamp3 = strtotime('tomorrow')."<br>";
$timestamp4 = strtotime('next Sunday')."<br>";
$timestamp5 = strtotime('+2 Months')."<br>";

echo $timestamp2;

echo date('m/d/Y h:i:sa', $timestamp2)."<br>";
