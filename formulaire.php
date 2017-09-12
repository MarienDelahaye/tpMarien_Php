<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>TP protégé par mot de passe</title>
    </head>
    <body>
        <p>Veuillez entrer le mot de passe pour accèder au code d'accès</p>
        <form action="secret.php" method="post">
            <p>
            <input type="password" name="mot_de_passe" />
            <input type="submit" value="Valider" />
            </p>
        </form>
        <p>Cette page est réservé au personnel de l'entreprise, inutile d'essayer si vous n'appartenez pas au personnel.</p>
    </body>
</html>