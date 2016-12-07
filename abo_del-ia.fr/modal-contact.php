<div id="modal-contact">
            <img id="modal-quit" src="media/logos/cross.png">
            
            <h2>Nous contacter</h2>
            
            <!--  MESSAGE D'ERREUR -->
            <div class="error"></div>
            
            <!--  MESSAGE DE CONFIRMATION D'ENVOIS  -->
            <div class="info-form"></div>
            
            
            <!--  FORMULAIRE DE CONTACT-->
            <form id="modal-form" action="contact-back.php" method="post">
                <input id="form-nom" type="text" name="nom" placeholder="Nom" maxlength="15">

                <input id="form-prenom" type="text" name="prenom" placeholder="Prenom" maxlength="15">

                <input type="email" name="email" placeholder="Email">
                
                <input type="text" name="sujet" placeholder="Sujet" maxlength="50">
                
                <textarea name="message" rows="90" cols="100%" placeholder="Message"></textarea>
                
                <input id="form-send" type="submit" value="Envoyer">
            </form>
        </div>
        
        
        
        
        
<!--        AJAX POUR ENVOIS DU FORMULAIRE-->
        <script type="text/javascript">
            $(function(){
                
                $("#modal-form").submit(function(){
                    
//                     RECUPERATION DES DONNES
                    var nom = $(this).find("input[name=nom]").val();
                    var prenom = $(this).find("input[name=prenom]").val();
                    var email = $(this).find("input[name=email]").val();
                    var sujet = $(this).find("input[name=sujet]").val();
                    var message = $(this).find("textarea[name=message]").val();
                    
                    
//                    LES MESSAGES D'ERREUR DU FORMULAIRE 
                    var error_all = "<p>Merci de remplir tous les champs</p>";
                    var error_email = "<p>Votre Email est invalide</p>";
                    
                    
//                    VERIFICATION AU NIVEAU DE L EMAIL
                    var expReg = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/.test(email);
                    
                    
//                   SI UNE DES VALEURS ET VIDE AFFICHE MSG ERREUR
                    if( nom == "" || prenom == "" || email == "" || sujet == "" || message == ""){
                        $(".error").html(error_all);     
                    }

                    else{
                        
//                      SI MAIL REMPLI PAS CONDITIONS EXPRESSION REGULIAIRE AFFICHE MSG ERREUR
                        if (!expReg){
                            $(".error").html(error_email);
                        }
                        
//                        TRAITEMENT AJAX
                        else{
                            $.ajax({
                                type:"POST",
                                url:"contact-back.php",
                                data:$(this).serialize(),
                                success: function(){
                                    $(".info-form").html("<p>Message envoyé avec succés</p>");
                                    $(".error").html("");
                                    document.getElementById("modal-form").reset();
                                },
                                error: function(){
                                    $(".error").html("<p>Erreur d'appel le formulaire pas envoyé</p>");
                                    $(".info-form").html("");
                                }
                            });
                        }
                        
                    } 
                    
//                    VIDE MSG ERREUR QUAND QUITTER LE MODAL
                    $("#modal-quit").click(function(){
                        $(".error").html("");
                        $(".info-form").html("");
                        document.getElementById("modal-form").reset();
                    });
                    return false;
                });
            });
        </script>