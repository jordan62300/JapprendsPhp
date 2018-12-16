<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php

 /* _POST */
 
    $prenom = $_POST["prenom"];

    echo htmlentities($_POST["sexe"]);
    echo("<br />");
    echo $_POST["pays"];
    echo("<br />");
    
    if(strlen($_POST["prenom"]) > 10) {
        echo("prenom trop long") ;
    } else {
        echo($_POST["prenom"]);
    }
    
/* GET */

    if($_GET['majeur'] == "oui") {
        echo("Bienvenue sur youporn");
    } else {
        echo(" Vous navez pas l'age legal pour ce site ");
    }

?>
<body>
    <p> Etes vous majeur?</p>
    <a href="formulaire.php?majeur=oui">Oui</a>
    <a href="formulaire.php?majeur=non">Non</a>



    <form action="formulaire.php" method="post" name="formulaire">
        Prénom : <input type="text" name="prenom" value=""/>
        <br />
        Sexe 
        <input type="radio" name="sexe" value="F">Fille
        <input type="radio" name="sexe" value="M">Mec
        <br />
        <select name="pays">
            <option value="france">France</option>
            <option value="suisse">Suisse</option>
            <option value="belgique">Belgique</option>
            <option value="canada">Canada</option>
        </select>
        <br />

        Inscription newsletter :
        <input type="checkbox" name="newsletter" value="oui"/>
        <br />

        <input type="submit" value="Envoyer">

    </form>
    
</body>
</html>