<?php
$dbco = new PDO("mysql:host=localhost;dbname=TheBerryFarm", 'root', ''); 
require 'panier.php';
$panier= new panier($dbco);

if(isset($_GET['id'])){
    $req= $dbco->prepare('SELECT id FROM PRODUIT WHERE id=:id');
    $req->execute(array('id'=> $_GET['id']));
    $product= $req->fetchAll(PDO::FETCH_OBJ);
    if(empty($product)){
        header('Location: null.php');

    }
    $panier->add($product[0]->id);
    header('Location: produitAjoute.php');
}else{
    die("Vous n'avez pas sélectionné de produit à ajouter au panier");
}

?>


