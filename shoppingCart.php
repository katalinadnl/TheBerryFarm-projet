<?php
session_start(); 
$dbco = new PDO("mysql:host=localhost;dbname=TheBerryFarm", 'root', ''); 
$req= $dbco->prepare('SELECT * FROM PRODUIT');
$req->execute(array());
require 'panier.php';
$panier= new panier($dbco);
?>
<?php
include_once 'header.php'
?>


    <div id="imgPrincipale" >
        <h2 style="color:white" id="haut">Panier</h2>
    </div>
    <h4> Vous avez un total de: <span class="total"><?= $panier->total() ?> € </span> </h4> 
    <form method="post" action="shoppingCart.php">
        <div style="text-align: center;
                    background-position: center;">
            <table class="table table-striped">
                    <tr>
                        <th class="name">Myrtille</th>
                        <th class="price">Prix</th>
                        <th class="quantity">Quantité</th>
                        
                        <th class="action">Supprimer</th>
                    </tr>

                    <?php  
                    $ids= array_keys($_SESSION['panier']);
                    if(empty($ids)){
                        $products=array();
                    }else{
                    $req= $dbco->prepare('SELECT * FROM PRODUIT WHERE id IN ('.implode(',',$ids).')');
                    $req->execute(array());
                    $products= $req->fetchAll(PDO::FETCH_OBJ);
                    }
                    foreach($products as $product):
                    ?>
                    <tr>
                        <td class="name"> <?= $product->nom; ?></td>
                        <td class="price"><?= number_format($product->prix,2,',',' '); ?> €</td>
                        <td class="quantity"><input type="number" name="panier[quantity][<?= $product->id; ?>]" value="<?=$_SESSION['panier'][$product->id];?>" </td>
                        <td class="action">
                        <a href="shoppingCart.php?delPanier=<?= $product->id; ?>" class="del"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>

                <?php endforeach; ?>
                

                </table>
                
        </div>
        <div style="text-align: right; margin-right: 2cm;">
        <input  type="submit" class="btn btn-outline-info" value="Recalculer"></div>
    </form>
    <p style="background-position:center; 
                padding: 12px;
                box-sizing: 1cm; 
                margin-top: 6px; 
                margin-bottom: 16px;
                text-align:center;">
    <a method="post" action="ConfirmerCommande.php" href="ConfirmerCommande.php"s class="btn btn-outline-info">Confirmer </a>
    </p>
<?php
include_once 'footer.php'
?>
