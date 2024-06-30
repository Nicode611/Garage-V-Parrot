<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/footer.css">
    </head>
<footer>
    <div class="contact-footer-container">
        <h1 class="footer-titles">Contactez-nous !</h1>
        <p class="footer-texts">Besoin d'aide avec votre véhicule,<br> envie de voir nos véhicules ...</p>
        <a href="../pages/contact.php"><button>Contactez-nous</button></a>
    </div>
    <div class="horaires-footer-container">
        <h1 class="footer-titles">Horaires</h1>
        <?php
            $includeFile = ("../includes/horaires.php");
            if (file_exists($includeFile)) { include($includeFile); } else { echo "Le fichier $includeFile n'a pas été trouvé."; }
        ?>
    </div>
    <div class="infos-footer-container">
        <h1 class="footer-titles">Infos</h1>
        <p class="footer-texts">
            8 rue detail<br>
            31000 Toulouse
        </p>
        <p class="footer-texts">
            <svg class="phone-icon" width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                
                <g id="SVGRepo_iconCarrier"> <path d="M2.00589 4.54166C1.905 3.11236 3.11531 2 4.54522 2H7.60606C8.34006 2 9.00207 2.44226 9.28438 3.1212L10.5643 6.19946C10.8761 6.94932 10.6548 7.81544 10.0218 8.32292L9.22394 8.96254C8.86788 9.24798 8.74683 9.74018 8.95794 10.1448C10.0429 12.2241 11.6464 13.9888 13.5964 15.2667C14.008 15.5364 14.5517 15.4291 14.8588 15.0445L15.6902 14.003C16.1966 13.3687 17.0609 13.147 17.8092 13.4594L20.8811 14.742C21.5587 15.0249 22 15.6883 22 16.4238V19.5C22 20.9329 20.8489 22.0955 19.4226 21.9941C10.3021 21.3452 2.65247 13.7017 2.00589 4.54166Z" fill="#09A7A0"/> </g>
                
                </svg> || +33627548625<br>
                <svg width="25px" height="25px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" id="mail" class="icon glyph"><path d="M22,8.32V18a2,2,0,0,1-2,2H4a2,2,0,0,1-2-2V8.69L4,9.78l7.52,4.1A1,1,0,0,0,12,14a1,1,0,0,0,.5-.14L20,9.49Z" style="fill:#09A7A0"></path><path d="M22,6h0L20,7.18l-8,4.67L4,7.5,2,6.4V6A2,2,0,0,1,4,4H20A2,2,0,0,1,22,6Z" style="fill:#09A7A0"></path></svg> ||  valentin.parrot@gmail.com
        </p>
    </div>
</footer>
</html>