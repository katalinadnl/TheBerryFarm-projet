<?php
include_once 'header.php'
?>
      
            <div id="imgPrincipale" >
                <h2 style="color:white" id="haut">Inscription</h2>
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
                <form action="inscription.php" method="post">
                    <p> Prénom </p> <input name="prenom" type="text"/> 
                    <p> Nom  </p><input name="nom" type="text"/>
                    <p> Email</p> <input name="email" type="mail"/> 
                    <p> N°téléphone </p> <input name="nrTelephone" type="phone"/>
                    <p> Date de naissance</p> <input name="age" type="date"/> 
                    <p> Adresse</p> <input name="adresse" type="text"/> 
                    <p> Code postal  </p><input name="cp" type="text"/>
                    <p> Pays </p><input name="pays" type="text"/> 
                    <p> Mot de passe </p><input name="mdp" type="password"/> <br/>
                    <input type="submit"  name="singup" value="Envoyer" />
                </form>
            </div>
<?php
include_once 'footer.php'
?>
