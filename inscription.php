<?php

$dbco = new PDO("mysql:host=localhost;dbname=TheBerryFarm", 'root', '');

$prenom= $_POST['prenom'];
$nom=$_POST['nom'];
$email=$_POST['email'];
$phone=$_POST['nrTelephone'];
$age=$_POST['age'];
$adresse=$_POST['adresse'];
$cp=$_POST['cp'];
$pays=$_POST['pays'];
$mdp=$_POST['mdp'];


$sql = 'INSERT INTO UTILISATEUR (nom, prenom, email, mdp, age, adreese, CodePostal, Pays, Telephone)
    VALUES(
        "'.$nom.'", 
        "'.$prenom.'" , 
        "'.$email.'" , 
        "'.$mdp.'", 
        "'.$age.'", 
        "'.$adresse.'" , 
        '.intval($cp).' , 
        "'.$pays.'" , 
        '.intval($phone).');
  ';
    $dbco->exec($sql);
    header("Location: SingupSucces.php? signup=success");