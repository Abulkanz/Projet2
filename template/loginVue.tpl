<!DOCTYPE html>
<html>
    <head>
        <title>Projet2</title>
    </head>
    <body>
        <form method="POST" action="index.php">
            <input type="hidden" name="gestion" value="login">
            <input type="hidden" name="action" value="login">
            Login <input type="text" id="identifiant" name="identifiant" value="">
            Mot de passe: <input type="password" id="password" name="password" value="">
            <input type="submit" name="login" value="Se connecter">
        </form>
    </body>
</html>