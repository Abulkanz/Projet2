<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="POST" action="index.php">
            <input type="hidden" name="gestion" value="login">
            <input type="hidden" name="action" value="login">
            Login <input type="text" name="f_login" value="">
            Mot de passe: <input type="password" name="f_pw" value="">
            <input type="submit" name="login" value="Se connecter">
        </form>
        <!--<form method="POST" action="index.php">
        <input type="text" name="fLogin">
        <input type="password" name="fMdp">
        <input type="submit" name="valider" value="Confirmer">
    </form>-->
    </body>
</html>