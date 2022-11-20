<?php
include_once 'header.php'
?>

            <div id="imgPrincipale" >
                <h2 style="color:white" id="haut">Inscription réussie!</h2>
                <h2 style="color:white" id="haut">Maintenant vous pouvez vous connecter!</h2>
            </div>
                
                    
            <form style="margin-top: 1cm;
                            margin-bottom: 1cm;
                            border-radius: 5px;
                            background-color: white;
                            padding: 20px;
                            text-align:center;" 
                            action="seConnecter.php" method="post">
                    <label for="email">Email </label> 
                    <input style="width: 15%; 
                                    padding: 12px;
                                    border: 1px solid #ccc; 
                                    border-radius: 2px; 
                                    box-sizing: 1cm; 
                                    margin-top: 6px; 
                                    margin-bottom: 16px;
                                    text-align:center;"
                                    name="email" type="mail"/><br/>
                    <label for="mdp">Mot de passe </label> 
                    <input  style="width: 15%; 
                                    padding: 12px;
                                    border: 1px solid #ccc; 
                                    border-radius: 2px; 
                                    box-sizing: 1cm; 
                                    margin-top: 6px; 
                                    margin-bottom: 16px;text-align:center;"
                                    name="mdp" type="password"/><br/>
                    <input style:hover=" background-color: #45a049;" type="submit" value="Envoyer" />
                </form>
           

                
            
<?php
include_once 'footer.php'
?>