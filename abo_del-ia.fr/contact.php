<!doctype html>

<html>

    <head>
        <title>Alexandre Ben Othman - Intégrateur / Webdesigner  - Portfolio</title>
        <?php include("includes/head.php"); ?>
    </head>


    <body>

        <div id="loader"></div>

        <?php include("includes/header.php"); ?>

        <div class="title">
            <video autoplay loop>
                <source src="/media/bg.webm" type="video/webm" />
            </video>
            <h1>Contact</h1>
        </div>

        <main id="contact" class="clearfix">
            <div class="center">
                <p>Si vous souhaitez me contacter, le formulaire ci-dessous est à votre disposition.
                    <br>Vous pouvez aussi consulter <a href="media/benothman-a_cv.pdf" target="_blank">mon CV</a>.</p>
                <form method="post" action="mail.php">
                    <p><input type="text" name="nom" id="nom" placeholder="Nom complet"/></p>
                    <p><input type="email" name="email" id="email" placeholder="Adresse email"/></p>
                    <p><input type="text" name="sujet" id="sujet" placeholder="Sujet"/></p>
                    <p><textarea name="message" id="message" placeholder="Message"></textarea></p>
                    <p><input type="submit" id="envoyer" value="Envoyer"/></p>
                </form>
            </div>
        </main>

        <?php include("includes/footer.php"); ?>

    </body>

</html>