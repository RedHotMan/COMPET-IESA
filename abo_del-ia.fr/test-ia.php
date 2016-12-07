<!doctype html>

<html>

<head>
    <title>Testez DELIA, l'IA de demain</title>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width; height=device-height; user-scalable=0; initial-scale=1.0; maximum-scale=1.0;">
    <link rel="shortcut icon" type="image/png" href="media/logos/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="css/test-ia.css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/test-ia.js"></script>
</head>


<body id="test-ia">

<span id="loader"></span>
<span id="attention"></span>
<span id="warn"></span>

<audio id="click">
    <source src="media/mp3/click.mp3" type="audio/mpeg">
</audio>

<!--------------------------------------------------->
<!----------------------- MAIN ---------------------->
<!--------------------------------------------------->
<main class="first">
    <audio id="hi">
        <source src="media/mp3/jingle-t.mp3" type="audio/mpeg">
    </audio>
    <div id="pres">
        <img src="media/logos/logo.png" class="fade">
        <h1 class="fade">TESTEZ DELIA</h1>
        <p class="fade">Un aperçu des fonctionnalités</p><br>
        <a class="cta intro fade" id="test-begin"><span>Commencer</span></a>
    </div>
</main>


<!--------------------------------------------------->
<!-------------------- QUESTIONS -------------------->
<!--------------------------------------------------->
<section id="quests" class="center hello">
    <div class="content">

        <!----------- QUESTION INITIALE DEFINISSANT DES CHOIX --------------------->
        <div class="q-in quest">
            <label>Que recherchez-vous ?</label>
            <select name="first" id="slct-1">
                <option value="null" selected></option>
                <option value="1">Une activité domestique</option>
                <option value="2">Une idée de sortie</option>
                <option value="3">Un cadeau à offrir</option>
            </select>
            <input type='button' name="rep-1" class="but-rep1" value="OK">
        </div>

        <!--------------------- CHOIX 1 --------------------->
        <div id="q-1" class="hello qn">
            <p class="intro-qn">Pour votre occupation :</p>
            <div id="q-1-2" class="q-2 quest hello">
                <label>Que voulez-vous faire ?</label>
                <select name="occupation">
                    <option value="null" selected></option>
                    <option value="1">Regarder une série/un film</option>
                    <option value="2">S'instruire/Tutoriels</option>
                    <option value="3">Jouer à un jeu vidéo</option>
                    <option value="4">Se détendre</option>
                    <option value="5">Se défouler (coaching sport)</option>
                </select>
                <input type='button' name="rep-2" class="but-rep2" value="OK">
            </div>
            <div id="q-1-3" class="q-3 quest hello">
                <label>Nombre de participants ?</label>
                <select name="number">
                    <option value="null" selected></option>
                    <option value="1">Seul</option>
                    <option value="2">A plusieurs</option>
                </select>
                <input type='button' name="rep-3" class="but-rep3 slct" value="OK">
            </div>
            <div class=" reps">
                <p>Voici ce que je peux vous proposer :</p>
                <div class="props-1">
                    <ul class="props l1">
                        <li><img src="media/reps/les-temps-modernes.jpg"/>
                            <p>Les Temps Modernes</p></li>
                        <li><img src="media/reps/game-of-thrones.jpg"/>
                            <p>Game Of Thrones</p></li>
                        <li><img src="media/reps/remi.jpg"/>
                            <p>Remi Sans Famille</p></li>
                    </ul>
                    <ul class="props l2">
                        <li><img src="media/reps/black-mirror.jpg"/>
                            <p>Black Mirror</p></li>
                        <li><img src="media/reps/SOC-NWA.jpg"/>
                            <p>Straight Outta Compton</p></li>
                        <li><img src="media/reps/the-hateful-eight.jpg"/>
                            <p>Les 8 Salopards</p></li>
                    </ul>
                </div>
                <div class="props-2">
                    <ul class="props l1">
                        <li><img src="media/reps/yt.jpg"/>
                            <p>Tutoriel Youtube</p></li>
                        <li><img src="media/reps/dcdl.jpg"/>
                            <p>Regarder Des Chiffres et Des Lettres</p></li>
                        <li><img src="media/reps/drague.jpg"/>
                            <p>La drague pour les nuls</p></li>
                    </ul>
                    <ul class="props l2">
                        <li><img src="media/reps/arte.jpg"/>
                            <p>Documentaire sur Arte</p></li>
                        <li><img src="media/reps/trivial-pursuit.jpg"/>
                            <p>Trivial Pursuit</p></li>
                        <li><img src="media/reps/ecole-primaire.jpg"/>
                            <p>L'école prmaire</p></li>
                    </ul>
                </div>
                <div class="props-3">
                    <ul class="props l1">
                        <li><img src="media/reps/the-witcher-3.jpg"/>
                            <p>The Witcher 3</p></li>
                        <li><img src="media/reps/watch-dogs-2.jpg"/>
                            <p>Watch Dogs 2</p></li>
                        <li><img src="media/reps/alone.jpg"/>
                            <p>Alone in the Dark</p></li>
                    </ul>
                    <ul class="props l2">
                        <li><img src="media/reps/wow.jpg"/>
                            <p>World Of Warcraft</p></li>
                        <li><img src="media/reps/fifa.jpg"/>
                            <p>FIFA 2017</p></li>
                        <li><img src="media/reps/goat-simulator.jpg"/>
                            <p>Farmer Simulator 2017</p></li>
                    </ul>
                </div>
                <div class="props-4">
                    <ul class="props l1">
                        <li><img src="media/reps/yoga.jpg"/>
                            <p>Yoga</p></li>
                        <li><img src="media/reps/MAHJONG.jpg"/>
                            <p>Une partie de mahjong</p></li>
                        <li><img src="media/reps/fille-de-ta-region.jpg"/>
                            <p>Masturbation</p></li>
                    </ul>
                    <ul class="props l2">
                        <li><img src="media/reps/yoga.jpg"/>
                            <p>Tai-chi entre amis</p></li>
                        <li><img src="media/reps/karaoke.jpg"/>
                            <p>Karaoke</p></li>
                        <li><img src="media/reps/RAVE.jpg"/>
                            <p>Une soirée rave sous drogues</p></li>
                    </ul>
                </div>
                <div class="props-5">
                    <ul class="props l1">
                        <li><img src="media/reps/danse.jpg"/>
                            <p>Aerobic</p></li>
                        <li><img src="media/reps/footing.jpg"/>
                            <p>Footing</p></li>
                        <li><img src="media/reps/"/>
                            <p>Punching ball humain</p></li>
                    </ul>
                    <ul class="props l2">
                        <li><img src="media/reps/paintball.jpg"/>
                            <p>Partie de paintball</p></li>
                        <li><img src="media/reps/rugbyaustralien.jpg"/>
                            <p>Un rugby australien</p></li>
                        <li><img src="media/reps/ufc.jpg"/>
                            <p>Une partie d’UFC</p></li>
                    </ul>
                </div>
            </div>
        </div>

        <!--------------------- CHOIX 2 --------------------->
        <div id="q-2" class="hello qn">
            <p class="intro-qn">Pour votre sortie :</p>
            <div id="q-2-2" class="q-2 quest hello">
                <label>Que désirez-vous faire ?</label>
                <select name="activity">
                    <option value="null" selected></option>
                    <option value="1">Un restaurant / un bistrot / un bar</option>
                    <option value="2">Un Cinéma / théâtre</option>
                    <option value="3">Visiter / Découvrir un lieu</option>
                    <option value="4">Pratiquer une activité sportive</option>
                </select>
                <input type='button' name="rep-2" class="but-rep2" value="OK">
            </div>
            <div id="q-2-3" class="q-3 quest hello">
                <label>Où ?</label>
                <input type="text" name="location" id="text-loation"
                       placeholder="Ex : Paris, Strasbourg, Perpignan...  "/>
                <input type='button' name="rep-3" class="but-rep3 inbut" value="OK">
            </div>
            <div class=" reps">
                <p>Voici ce que je peux vous proposer :</p>
                <div class="props-1">
                    <ul class="props l1">
                        <li><img src="media/reps/blueelephant.jpg"/>
                            <p>Blue Elephant</p></li>
                        <li><img src="media/reps/skylinebar.jpg"/>
                            <p>Le Skyline Bar & Lounge</p></li>
                        <li><img src="media/reps/barasieste.jpg"/>
                            <p>Bar à sieste</p></li>
                    </ul>
                </div>
                <div class="props-2">
                    <ul class="props l1">
                        <li><img src="media/reps/grandrex.jpg"/>
                            <p>Le Grand Rex</p></li>
                        <li><img src="media/reps/theatre-du-chatelet.jpg"/>
                            <p>Théâtre du Chatêlet</p></li>
                        <li><img src="media/reps/moulin-rouge.jpg"/>
                            <p>Le Moulin Rouge</p></li>
                    </ul>
                </div>
                <div class="props-3">
                    <ul class="props l1">
                        <li><img src="media/reps/casino.jpg"/>
                            <p>Casino Enghien-Les-Bains</p></li>
                        <li><img src="media/reps/jardin.jpg"/>
                            <p>Jardin du panthéon bouddhique</p></li>
                        <li><img src="media/reps/cimetiere.jpg"/>
                            <p>Cimetière du Père Lachaise</p></li>
                    </ul>
                </div>
                <div class="props-4">
                    <ul class="props l1">
                        <li><img src="media/reps/patinoire.jpg"/>
                            <p>Patinoire du Grand Palais</p></li>
                        <li><img src="media/reps/bowling.jpg"/>
                            <p>Le Bowling Foch</p></li>
                        <li><img src="media/reps/curling.jpg"/>
                            <p>Curling Club Viry-Chatillon</p></li>
                    </ul>
                </div>
            </div>
        </div>

        <!--------------------- CHOIX 3 --------------------->
        <div id="q-3" class="hello qn">
            <p class="intro-qn">Pour votre cadeau :</p>
            <div id="q-3-2" class="q-2 quest hello">
                <label>Pour quelle occasion ?</label>
                <select name="event">
                    <option value="null" selected></option>
                    <option value="1">Un anniversaire</option>
                    <option value="2">Un mariage</option>
                    <option value="3">Une naissance</option>
                    <option value="4">La Saint-Valentin</option>
                    <option value="5">Autres occasions</option>
                </select>
                <input type='button' name="rep-2" class="but-rep2" value="OK">
            </div>
            <div id="q-3-3" class="q-3 quest hello">
                <label>Pour :</label>
                <select name="destination">
                    <option value="null" selected></option>
                    <option value="1">Un homme / un garçon</option>
                    <option value="2">Une femme / une fille</option>
                    <option value="3">Couple</option>
                </select>
                <input type='button' name="rep-3" class="but-rep3 slct" value="OK">
            </div>
            <div class=" reps">
                <p>Voici ce que je peux vous proposer :</p>
                <div class="props-1">
                    <ul class="props l1">
                        <li><img src="media/reps/coffret-parfum.jpg"/>
                            <p>Coffret Parfum</p></li>
                        <li><img src="media/reps/livre-régime.jpg"/>
                            <p>Livre sur le régime</p></li>
                        <li><img src="media/reps/spray-cheveux.jpg"/>
                            <p>Spray anti-chute de cheveux</p></li>
                    </ul>
                    <ul class="props l2">
                        <li><img src="media/reps/maquillage.jpg"/>
                            <p>Coffret Cosmétiques</p></li>
                        <li><img src="media/reps/coussin.jpg"/>
                            <p>Boyfriend Arm Luxury Support Pillow</p></li>
                        <li><img src="media/reps/pesepersonne.jpg"/>
                            <p>Pèse-personne</p></li>
                    </ul>
                    <ul class="props l3">
                        <li><img src="media/reps/coffret.jpg"/>
                            <p>Coffret thalasso / spa</p></li>
                        <li><img src="media/reps/livre-bébé.jpg"/>
                            <p>Livre sur la conception des bébés</p></li>
                        <li><img src="media/reps/kit.jpg"/>
                            <p>Des menottes/kit chatouille-moi</p></li>
                    </ul>
                </div>
                <div class="props-2">
                    <ul class="props l1">
                        <li><img src="media/reps/coffret-parfum.jpg"/>
                            <p>Coffret Parfum</p></li>
                        <li><img src="media/reps/livre-régime.jpg"/>
                            <p>Livre sur le régime</p></li>
                        <li><img src="media/reps/spray-cheveux.jpg"/>
                            <p>Spray anti-chute de cheveux</p></li>
                    </ul>
                    <ul class="props l2">
                        <li><img src="media/reps/maquillage.jpg"/>
                            <p>Coffret Cosmétiques</p></li>
                        <li><img src="media/reps/coussin.jpg"/>
                            <p>Boyfriend Arm Luxury Support Pillow</p></li>
                        <li><img src="media/reps/pesepersonne.jpg"/>
                            <p>Pèse-personne</p></li>
                    </ul>
                    <ul class="props l3">
                        <li><img src="media/reps/coffret.jpg"/>
                            <p>Coffret thalasso / spa</p></li>
                        <li><img src="media/reps/livre-bébé.jpg"/>
                            <p>Livre sur la conception des bébés</p></li>
                        <li><img src="media/reps/kit.jpg"/>
                            <p>Des menottes/kit chatouille-moi</p></li>
                    </ul>
                </div>
                <div class="props-3">
                    <ul class="props l1">
                        <li><img src="media/reps/doudou-garcon.jpg"/>
                            <p>Jouet educatif/doudou</p></li>
                        <li><img src="media/reps/tetine-garcon.jpg"/>
                            <p>Tétine drôle</p></li>
                        <li><img src="media/reps/body.jpg"/>
                            <p>Body bébé fragile</p></li>
                    </ul>
                    <ul class="props l2">
                        <li><img src="media/reps/doudou.jpg"/>
                            <p>Doudou fille</p></li>
                        <li><img src="media/reps/tetine-fille.JPG"/>
                            <p>Tétine drole</p></li>
                        <li><img src="media/reps/accroche.jpg"/>
                            <p>Accroche-bébé</p></li>
                    </ul>
                    <ul class="props  l3">
                        <li><img src="media/reps/doudou.jpg"/>
                            <p>Doudou pour le nouveau-né</p></li>
                        <li><img src="media/reps/livre-parent.jpg"/>
                            <p>Livre être parent aujourd'hui</p></li>
                        <li><img src="media/reps/accroche.jpg"/>
                            <p>Accroche-bébé</p></li>
                    </ul>
                </div>
                <div class="props-4">
                    <ul class="props l1">
                        <li><img src="media/reps/coffret-parfum.jpg"/>
                            <p>Coffret Parfum</p></li>
                        <li><img src="media/reps/livre-régime.jpg"/>
                            <p>Livre sur le régime</p></li>
                        <li><img src="media/reps/spray-cheveux.jpg"/>
                            <p>Spray anti-chute de cheveux</p></li>
                    </ul>
                    <ul class="props l2">
                        <li><img src="media/reps/hotel.jpg"/>
                            <p>Sejour au 7ème ciel : Hotel chambre galaxy</p></li>
                        <li><img src="media/reps/anti-age.jpg"/>
                            <p>Gampe de soin anti-age</p></li>
                        <li><img src="media/reps/panoplie-sextoy.jpg"/>
                            <p>Sextoy (panoplie fifty shades of grades)</p></li>
                    </ul>
                    <ul class="props l3">
                        <li><img src="media/reps/coffret.jpg"/>
                            <p>Coffret thalasso / spa</p></li>
                        <li><img src="media/reps/livre-bébé.jpg"/>
                            <p>Livre sur la conception des bébés</p></li>
                        <li><img src="media/reps/kit.jpg"/>
                            <p>Des menottes/kit chatouille-moi</p></li>
                    </ul>
                </div>
                <div class="props-5">
                    <ul class="props l1">
                        <li><img src="media/reps/ferrari.jpg"/>
                            <p>Stage en ferrari</p></li>
                        <li><img src="media/reps/livre-connard.jpg"/>
                            <p>Livre : comment devenir un connard</p></li>
                        <li><img src="media/reps/gel-homme.jpg"/>
                            <p>Gel abdominal</p></li>
                    </ul>
                    <ul class="props l2">
                        <li><img src="media/reps/bijoux.jpg"/>
                            <p>Bjoux</p></li>
                        <li><img src="media/reps/cafetiere.jpg"/>
                            <p>Cafetière</p></li>
                        <li><img src="media/reps/anticellulite.jpg"/>
                            <p>Crème cellulite/fermeté pour le corps</p></li>
                    </ul>
                    <ul class="props l3">
                        <li><img src="media/reps/lovebox.jpg"/>
                            <p>Boîte love box : mille et une nuits</p></li>
                        <li><img src="media/reps/portecles.jpg"/>
                            <p>Porte-clés gravé</p></li>
                        <li><img src="media/reps/pochettecadeau.jpg"/>
                            <p>Pochette cadeau : instrument de plaisir</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!--------------------------------------------------->
<!--------------------- MESSAGE --------------------->
<!--------------------------------------------------->
<section id="message" class="center hello">
    <p class="p1">Avez-vous remarqué les différents problèmes de notre IA ?</p>
    <p class="p2">C'est bien normal...<br><span>DELIA est en train de dégénérer.</span></p>
    <p class="p3">Trouvez-vous cela normal de confier à une intelligence artificielle vos moindres demandes ?</p>
    <p class="p4">N’êtes vous pas capable de gérer votre vie comme vous l’entendez par vos propres moyens ?</p>
    <p class="p5">Faites vous confiance.</p>
    <p class="p6"><a class="cta if-cta">Cliquez</a></p>
</section>
<div id="modal-video">
    <iframe id="video" width="560" height="315" src="https://www.youtube.com/embed/q3RyAY8JvLg" frameborder="0" allowfullscreen></iframe><span class="cross"></span>
</div>


<!--------------------------------------------------->
<!--------------------- MESSAGE --------------------->
<!--------------------------------------------------->
<section id="end" class="center hello">
    <p>Suivez-nous et contactez-nous :</p>
    <ul id="social">
        <li><a href="https://www.facebook.com/askdelia/" target="_blank"><img src="media/logos/facebook.png"></a></li>
        <li><a href="https://twitter.com/DeliaCoach" target="_blank"><img src="media/logos/twitter.png"></a></li>
        <li><a href="https://fr.pinterest.com/brosocomman/" target="_blank"><img src="media/logos/pinterest.png"></a>
        </li>
        <li><a href="https://www.youtube.com/channel/UCKxHH-O9aSAw7_vP9urjqOA" target="_blank"><img src="media/logos/youtube.png"></a></li>
        <li><a class="contact"><img src="media/logos/message.png"></a></li>
    </ul>
    <ul id="links">
        <li><a class="cta" href="/">Retour Accueil</a></li>
        <li><a class="cta" href="test-ia.php">Refaire Test</a></li>
        <li><a class="cta if-cta" id="if-cta">Revoir Vidéo</a></li>
    </ul>

</section>

<?php require('modal-contact.php')?>

</body>


</html>
