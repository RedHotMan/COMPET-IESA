<!doctype html>

<html>

    <head>
        <title>Découvrez DELIA, l'IA de demain</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link rel="shortcut icon" type="image/png" href="media/logos/favicon.png" />
        <link rel="stylesheet" type="text/css" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </head>


    <body>


        
<!--        PAGE ACCUEIL - 1ERE VUE -->
        
        
        <audio id="wlc">
            <source src="media/mp3/jingle.mp3" type="audio/mpeg">
        </audio>
        
        <main class="first">
            <div class="fadein">
                <img src="media/bg/1.jpg">
                <img src="media/bg/2.jpg">
                <img src="media/bg/3.jpg">
                <img src="media/bg/4.jpg">
                <img src="media/bg/5.jpg">
                <img src="media/bg/6.jpg">
            </div>
            <div id="pres">
                <img id="logo" src="media/logos/logo.png" class="fade">
                <p class="effect">L'intelligence artificielle qui vous facilite la vie</p><br>
                <a class="cta intro fade"><span>Explorer</span></a>
                
                <img id="fleche" class="fade" src="media/logos/fleche1.png">
            </div>
        </main>
        
    
    
<!--    PRESENTATION - 2EME VUE -->
    
    
    
        <section id="anchor">
            <h1> Qui est Delia ?</h1>
            <div class="row">
                <div class="col-1-2">
                    <img src="media/logos/ordi.png" >
                    <p>Delia est la 1ère application qui vous permet de gérer votre vie connectée. C’est le coach intelligent qui fait de votre bien-être sa priorité.  </p>
                </div>
                
                <div class="col-1-2">
                    <img src="media/logos/smiley.png" >
                    <p>Delia connait vos préférences, vos humeurs, vos goûts... Son offre est individualisée et fondée sur votre personnalité.</p>
                </div>

                <div class="col-1-2">
                    <img src="media/logos/cerveau.png"> 
                    <p>Delia sait lire en vous, ainsi que sur vos lèvres. Nul besoin de préciser vos demandes, elle reconnait vos mots ainsi que votre voix.</p>
                </div>
                
                <div class="col-1-2">
                    <img src="media/logos/infini.png" >
                    <p>A la différence d’un humain, Delia ne vous laissera jamais tomber. Vous en avez le contrôle absolu de son activation jusqu’à sa mort.</p>
                </div>
                
                <a class="cta_test" href="test-ia.php">Tester Delia !</a>
            </div>

        </section> 

    
    
<!--    FOOTER -->
    
    
    
        <footer>
            <div>
                
                <!--     FOOTER PARTIE RESEAUX        -->
                
                <div class="footer_reseaux">

                    <ul id="reseaux">
                        <li id="contact">
                            <img src="media/logos/message.png">
                        </li>

                        <li>
                            <a href="https://www.facebook.com/askdelia/" target="_blank"><img src="media/logos/facebook.png"></a>
                        </li>
                        
                        <li>
                            <a href="https://twitter.com/DeliaCoach" target="_blank"><img src="media/logos/twitter.png"></a>
                        </li>
                        
                        <li>
                            <a href="https://fr.pinterest.com/brosocomman/" target="_blank"><img src="media/logos/pinterest.png"></a>
                        </li>
                        
                        <li>
                            <img src="media/logos/youtube.png">
                        </li>
                    </ul>
                </div>
                
                <!--    FOOTER PARTIE COPYRIGHT-->
                
                <div class="footer_right">
                    <span>© 2016 Socomman - All Right Reserved</span>
                </div>
            </div>
        </footer>
    
        
    
    
<!--    MODAL CONTACT -->
    
    
        <?php
            require('modal-contact.php');
        ?>

    </body>

</html>
