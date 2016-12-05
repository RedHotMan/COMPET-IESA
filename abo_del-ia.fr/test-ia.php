<!doctype html>

<html>

    <head>
        <title>Testez DELIA, l'IA de demain</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width; height=device-height; user-scalable=0; initial-scale=1.0; maximum-scale=1.0;">
        <link rel="shortcut icon" type="image/png" href="media/logos/favicon.png" />
        <link rel="stylesheet" type="text/css" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" href="css/test-ia.css" />
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </head>
    
    
    <body id="test-ia">

        <span id="loader"></span>
        <span id="warn"></span>
        <span id="modal-video"><iframe src="https://www.youtube.com/embed/ch7gquxwohA" frameborder="0" allowfullscreen></iframe></span>

        <main class="first">
            <audio id="hi">
                <source src="media/mp3/test.mp3" type="audio/mpeg">
            </audio>
            <audio id="click">
                <source src="media/mp3/click.mp3" type="audio/mpeg">
            </audio>
            <div id="pres">
                <img src="media/logos/logo.png" class="fade">
                <h1 class="fade">TESTEZ DELIA</h1>
                <p class="fade">Un aperçu des fonctionnalités</p><br>
                <a class="cta intro fade" id="test-begin"><span>Commencer</span></a>
            </div>
        </main>
    
        <section id="quests" class="center hello">
            <div class="content">
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

                <div id="q-1" class="hello qn">
                    <p class="intro-qn">Pour votre occupation :</p>
                    <div id="q-1-2" class="q-2 quest hello">
                        <label>Que voulez-vous faire ?</label>
                        <select name="occupation">
                            <option value="null" selected></option>
                            <option value="1">Regarder une série/un film</option>
                            <option value="2">S'instruire/Tutoriels</option>
                            <option value="3">Joueur à un jeu</option>
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
                        <input type='button' name="rep-3" class="but-rep3" value="OK">
                    </div>
                    <div class=" reps">
                        <p>Voici ce que je peux vous proposer :</p>
                        <ul class="props props-1">
                            <li>Réponse 1-1</li>
                            <li>Réponse 1-2</li>
                            <li>Réponse 1-3</li>
                        </ul>
                        <ul class="props props-2">
                            <li>Réponse 1-1</li>
                            <li>Réponse 1-2</li>
                            <li>Réponse 1-3</li>
                        </ul>
                        <ul class="props props-3">
                            <li>Réponse 1-1</li>
                            <li>Réponse 1-2</li>
                            <li>Réponse 1-3</li>
                        </ul>
                        <ul class="props props-4">
                            <li>Réponse 1-1</li>
                            <li>Réponse 1-2</li>
                            <li>Réponse 1-3</li>
                        </ul>
                        <ul class="props props-5">
                            <li>Réponse 1-1</li>
                            <li>Réponse 1-2</li>
                            <li>Réponse 1-3</li>
                        </ul>
                    </div>
                </div>

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
                        <input type="text" name="location" id="text-loation" placeholder="Ex : Paris, Strasbourg, Perpignan...  "/>
                        <input type='button' name="rep-3" class="but-rep3" value="OK">
                    </div>
                    <div class=" reps">
                        <p>Voici ce que je peux vous proposer :</p>
                        <ul class="props props-1">
                            <li>Réponse 2-1</li>
                            <li>Réponse 2-2</li>
                            <li>Réponse 2-3</li>
                        </ul>
                        <ul class="props props-2">
                            <li>Réponse 2-1</li>
                            <li>Réponse 2-2</li>
                            <li>Réponse 2-3</li>
                        </ul>
                        <ul class="props props-3">
                            <li>Réponse 2-1</li>
                            <li>Réponse 2-2</li>
                            <li>Réponse 2-3</li>
                        </ul>
                        <ul class="props props-4">
                            <li>Réponse 2-1</li>
                            <li>Réponse 2-2</li>
                            <li>Réponse 2-3</li>
                        </ul>
                    </div>
                </div>

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
                        <select  name="destination">
                            <option value="null" selected></option>
                            <option value="1">Un homme / un garçon</option>
                            <option value="2">Une femme / une fille</option>
                            <option value="3">Couple</option>
                        </select>
                        <input type='button' name="rep-3" class="but-rep3" value="OK">
                    </div>
                    <div class=" reps">
                        <p>Voici ce que je peux vous proposer :</p>
                        <ul class="props props-1">
                            <li>Réponse 3-1</li>
                            <li>Réponse 3-1</li>
                            <li>Réponse 3-1</li>
                        </ul>
                        <ul class="props props-2">
                            <li>Réponse 3-2</li>
                            <li>Réponse 3-2</li>
                            <li>Réponse 3-2</li>
                        </ul>
                        <ul class="props props-3">
                            <li>Réponse 3-3</li>
                            <li>Réponse 3-3</li>
                            <li>Réponse 3-3</li>
                        </ul>
                        <ul class="props props-4">
                            <li>Réponse 3-4</li>
                            <li>Réponse 3-4</li>
                            <li>Réponse 3-4</li>
                        </ul>
                        <ul class="props props-5">
                            <li>Réponse 3-5</li>
                            <li>Réponse 3-5</li>
                            <li>Réponse 3-5</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="message" class="center hello">
            <p class="p1">Un instant...</p>
            <p class="p2">Avez-vous vu les différents problèmes de notre IA ?</p>
            <p class="p3">C'est bien normal...<br> <span>DELIA est en train de dégénérer.</span></p>
        </section>

    </body>


</html>
