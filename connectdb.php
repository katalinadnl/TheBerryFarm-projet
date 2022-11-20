<?php
 /*$dbco = new PDO("mysql:host=localhost;dbname=TheBerryFarm", 'root', '');
    $sql =  'SELECT * FROM PRODUIT';
foreach  ($dbco->query($sql) as $row) {
    print $row['ID'] . "\t";
    print  $row['nom'] . "\t";
    print $row['prix'] . "\n";
}
*/

$servername= "localhost";
$dbusername= "root";
$password="";
$dbname= "TheBerryFarm";

$dbco = new PDO("mysql:host=localhost;dbname=TheBerryFarm", 'root', '');
    
   
//$_Session


