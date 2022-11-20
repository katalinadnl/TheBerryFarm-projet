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
                <h2 style="color:white" id="haut">mon compte</h2>
            </div>

            <h4>Mes coordonnées</h4> 
            <div style="margin-left:3cm; 
                        margin-right:3cm; 
                        padding: 12px;
                        margin-top: 6px; 
                        margin-bottom: 12px;
                        text-align:center;">
                <p>NOM:     <?php echo $_SESSION['nom'] ?></p><br/>
                <p>PRENOM:      <?php echo $_SESSION['prenom'] ?></p><br/>
                <p>EMAIL:       <?php echo $_SESSION['email'] ?> </p><br/>
                
            </div>
            <p style="color:#352f5d; text-align:center;">Votre produit a été ajouté!</p>
            
            <div style="margin-left:3cm; 
                        margin-right:3cm; 
                        padding: 12px;
                        border: 1px solid #ccc; 
                        border-radius: 2px; 
                        box-sizing: 1cm; 
                        margin-bottom: 16px;
                        text-align:center;">
                <h4>Acheter</h4>
                <?php $products= $req->fetchAll(PDO::FETCH_OBJ); ?>
                <?php foreach ( $products as $product): ?>
                <form action="addpanier.php" method="post">
                    <input style="margin-bottom:1cm;"type="radio"/>  <?= $product->nom; ?> (1kg)
    
                
                    <a style="margin-left:1cm; margin-bottom:1cm;" class="add addPanier" href="addpanier.php?id=<?=$product->id; ?>">
                    Ajouter au panier<i class="fa fa-cart-plus"></i>
                    </a> 

                </form>
                <?php endforeach ?>
            </div>

            
<?php
include_once 'footer.php'
?>
            