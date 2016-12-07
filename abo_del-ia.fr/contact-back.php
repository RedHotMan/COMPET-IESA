<?php
  

    // Verification sur le "NOM"
    if ( isset($_POST['nom']) && (strlen(trim($_POST['nom'])) >0) ) {
        $nom = stripslashes(strip_tags($_POST['nom']));
    }
    else{
        echo "Merci de rentrer un Nom \r\n";
        $nom = "";
    }

    // Verification sur le "PRENOM"
    if ( isset($_POST['prenom']) && (strlen(trim($_POST['prenom'])) >0) ) {
        $prenom = stripslashes(strip_tags($_POST['prenom']));
    }
    else{
        echo "Merci de rentrer un Prenom \r\n";
        $prenom = "";
    }


    // Verification sur le "SUJET"
    if ( isset($_POST['sujet']) && (strlen(trim($_POST['sujet'])) >0) ) {
        $sujet = stripslashes(strip_tags($_POST['sujet']));
    }
    else{
        echo "Merci de rentrer un Sujet \r\n";
        $sujet = "";
    }

    
    //Verification sur le "EMAIL"
    if ( isset($_POST['email']) && (strlen(trim($_POST['email'])) >0 ) && (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL )) ){
        $email = stripslashes(strip_tags($_POST['email']));
    }
    elseif (empty($_POST['email'])){
        echo "Merci de rentrer un Email \r\n";
        $email = "";
    }
    else{
        echo "Email invalide";
        $email = "";
    }


    // Verification sur le "MESSAGE"
    if ( isset($_POST['message']) && (strlen(trim($_POST['message'])) >0) ) {
        $message = stripslashes(strip_tags($_POST['message']));
    }
    else{
        echo "Merci de rentrer un Message \r\n";
        $message = "";
    }


    //LES DONNEES A ENVOYES
    $to = "brosocomman@gmail.com";
    $objet = "[Site Web - DELIA] ".$sujet;
    $contenu = "Nom de l'expediteur: ".$nom." ".$prenom."\r\n"."Mail de l'expediteur: ".$email."\r\n".$message;

//    SI AUCUNE DONNEES N EST VIDE ENVOYER SINON ECHEC
    if ( (empty($nom)) || (empty($prenom)) || (empty($sujet)) || (empty($email)) || (!filter_var($email, FILTER_VALIDATE_EMAIL)) || (empty($message)) ){
        echo "Echec de l'envoi";
    }
    else{
        mail($to,$objet,$contenu);
        echo "Message envoyé";
    }
    
    
?>