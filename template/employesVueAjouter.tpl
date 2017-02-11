<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h2>{$msg}</h2>
        <form method="POST" action="index.php" enctype="multipart/form-data">
                <input type="hidden" name="gestion" value="employes">
                <input type="hidden" name="action" value="validerajouter">
                idConnexion : <input type="text" id="idconnexion" name="idconnexion" /><br>
                Nom : <input type="text" id="nom" name="nom" /><br>
                Prenom : <input type="text" id="prenom" name="prenom" /><br>
                Fonction :<input type="text" id="fonction" name="fonction" /><br>
                Mot de passe : <input type="text" id="motdepasse" name="motdepasse"/><br>
                Avatar : <input type="file" id="avatar" name="avatar" /><br>
                Adresse mail: <input type="text" id="mail" name="mail" /><br>
                Droits de l'utilisateur : <input type="text" id="droits" name="droits" /><br>
                Sexe de l'utilisateur : <input type="number" id="idSexe" name="idSexe" /><br>
                <input type="submit" name="validerajouter" value="Valider" />
        </form> 
    </body>
</html>