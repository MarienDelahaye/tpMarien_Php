<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Code d'accès de l'entreprise</title>
    </head>
    <body>
    
        <?php
        if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "ceciestunmotdepasse")
    {
    ?>
        <h1>Voici le code d'accès :</h1>
        <p><strong>AZER1-TYUI5-WASD3</strong></p>   
        
        <p>
        Réservé au personnel de l'entreprise.<br />
        </p>
        <?php
    }
    else 
    {
    echo '<p>Mot de passe incorrect, tu pensais pourvoir y accèder sans appartenir à lentreprise ?!</p>';
    }
    ?>
    
        
    </body>
</html>