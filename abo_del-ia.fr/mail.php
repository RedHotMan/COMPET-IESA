<?php
    $to = 'brosocomman@gmail.com';
    $message = "message de ".$_POST['nom']." ".$_POST['email']." ".$_POST['sujet']."\n\r".$_POST['message'];

    if($_POST['nom'] !== '' && $_POST['email'] !== '' && $_POST['sujet'] !== '' && $_POST['message'] !== ''){
        if(mail($to,"Depuis Site Delia",$message)){
            header("location:index.php");
        }
        else{
            echo "message non envoyé";
            echo '<button href="index.php" class="btn waves-effect waves-light">Retour au site</button> ';
        }
    }
    else{
        echo 'Remplir le formulaire correctement';
        echo '<button href="index.php" class="btn waves-effect waves-light">Retour au site</button> ';
    }
    
?>
