
<?php

$dbco = new PDO("mysql:host=localhost;dbname=TheBerryFarm", 'root', '');
?>
<?php
include_once 'header.php'
?>


            <div id="imgPrincipale" >
                <h2 style="color:white" id="haut">Decouvrir Nos Produits</h2>
            </div>
            
            <div id="produits" class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6" style="position: static;"> 
                        <h4 style="color:#352f5d">Myrtille Chandler</h4>
                        <img src="chandler.jpeg" width="300" height="300">
                    </div>
                    <div style="text-align:center; padding:1.5cm; position: static;" class="col-xs-12 col-md-6" >
                        
                        <p style=" color:#352f5d; font-family: Arial, Helvetica, sans-serif;">La Myrtille ‘Chandler’ est une variété américaine réputée pour la très grande taille de ses fruits. 
                            Cet arbuste vigoureux et buissonnant offre une récolte étalée sur 6 semaines, 
                            en juillet-août, grâce à ses jolies grappes de grosses myrtilles bleu foncé, au goût acidulé équilibré. 
                            La floraison a lieu en mai. En automne, le feuillage vert foncé se pare de magnifiques teintes jaune orangé vif. 
                            C'est un arbuste de terre de bruyère, bien drainée, qui apprécie le soleil tamisé ou la mi-ombre.</p>
                        <div id="stock" class="alert alert-info" style="position: static;">Prix: 7€/1kg</div>
                    </div>
                </div>
                <hr/>


                <div class="row">
                    <div class="col-xs-12 col-md-6" style="position: static;"> 
                        <h4 style="color:#352f5d">Myrtille Duke</h4>
                        <img src="duke.jpeg" width="300" height="300">
                    </div>
                    <div style="text-align:center; padding:1.5cm; position: static;" class="col-xs-12 col-md-6" >
                      
                        <p style=" color:#352f5d; font-family: Arial, Helvetica, sans-serif;">Une variété de myrtille précoce, très productive. 
                        Ses gros fruits bleus bien fermes, recouverts d'une légère pruine blanche, sont bons à récolter dès la fin du mois de juin 
                        et peuvent être consommés frais ou cuisinés. C'est un arbuste de vigueur moyenne et de croissance assez lente qui finit
                        par atteindre 1,80 m de haut. Le feuillage prend de belles couleurs rouge à l'automne. Cet arbuste fruitier est extrêmement 
                        résistant au froid. Il demande un sol acide, non calcaire, frais, ainsi qu'une exposition ensoleillée ou mi-ombragée. 
                        Plantation idéalement à l'automne..</p>
                        <div id="stock" class="alert alert-info" style="position: static;">Prix: 10€/1kg</div>
                    </div>
                </div>
                <hr/>


                <div class="row">
                    <div class="col-xs-12 col-md-6" style="position: static;"> 
                        <h4 style="color:#352f5d">Myrtille BlueCrop</h4>
                        <img src="blucrop.jpeg" width="300" height="300">
                    </div>
                    <div style="text-align:center; padding:1.5cm; position: static;" class="col-xs-12 col-md-6" >
                        
                        <p style=" color:#352f5d; font-family: Arial, Helvetica, sans-serif;">C'est la variété la plus cultivée au monde,
                         et sans doute l'une des plus faciles à réussir. Cette myrtille forme un arbuste de vigueur moyenne,
                          à port droit et étalé. Il tient ses promesses, offrant chaque année une production abondante et régulière. 
                          La floraison a lieu mi-mai, la récolte s'effectue entre la mi-juillet et la fin août. 
                          De calibre moyen, les baies sont savoureuses et un peu acidulées. 
                          Le feuillage prend de belles teintes à l'automne. 
                          Cet arbuste résiste au froid, à la sécheresse, à la pourriture sclérotique. 
                        Les fruits de bonne tenue supportent bien le transport.</p>
                        <div id="stock" class="alert alert-info" style="position: static;">Prix: 8€/1kg</div>
                        
                    </div>
                </div>
                <hr/>


                <div class="row">
                    <div class="col-xs-12 col-md-6" style="position: static;"> 
                        <h4 style="color:#352f5d">Myrtille Elliot</h4>
                        <img src="elliot.jpeg" width="300" height="300">
                    </div>
                    <div style="text-align:center; padding:1.5cm; position: static;" class="col-xs-12 col-md-6">
                        
                        <p style=" color:#352f5d; font-family: Arial, Helvetica, sans-serif;">Ces variétés originaires d'Amérique mûrissent 
                        en juillet et la récolte se poursuit pendant des semaines. 
                        (Nécessite deux types de pollinisation croisée, trois étant même préférables.) Ces buissons se couvrant de pourpre à l'automne,
                         ils se prêtent à une utilisation en haie informelle. Vous disposerez de myrtilles fraîches 
                         pour des tartes et des confitures pour de très nombreuses années. 
                         La variété « Elliott » donne plus de fruits que les autres à un stade plus précoce.
                          Ces plantes vigoureuses sont couvertes de gros fruits fermes avec une saveur sucrée délicieuse.

                        </p>
                        <div id="stock" class="alert alert-info" style="position: static;">Prix: 6€/1kg</div>
                    </div>
                </div>
                <hr/>

                <p>Pour faire une commande vous devez vos <a href="SeConnecterhtml.php"> connecter </a></p>
            </div>
            

            


<?php
include_once 'footer.php'
?>
