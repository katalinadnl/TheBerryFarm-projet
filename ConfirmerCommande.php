<?php
session_start();
session_destroy();
?>
<?php
include_once 'header.php'
?>
      
            <div id="imgPrincipale" >
            </div>
            <div style="margin-left:3cm; 
                        margin-right:3cm; 
                        padding: 12px;
                        border: 1px solid #ccc; 
                        border-radius: 2px; 
                        box-sizing: 1cm; 
                        margin-top: 6px; 
                        margin-bottom: 16px;
                        text-align:center;">
                <h4>On vous remercie pour votre commande!</h4>
                <h4>Vous allez recevoir un mail de confirmation. </h4>
                <h4>À bientôt!</h4>

            </div>
<?php
include_once 'footer.php'
?>
