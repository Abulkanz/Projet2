<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h2>{$msg}</h2>
        {foreach from=$consultEmploye item=Employe}
        <form method="POST" action="index.php" enctype="multipart/form-data">
                <input type="hidden" name="gestion" value="employes">
                <input type="hidden" name="action" value="validermodification">
                <input type="hidden" id="idEmploye" name="idEmploye" value="{$Employe.idEmploye}"/><br>
                idConnexion : <input type="text" id="idconnexion" name="idconnexion" value="{$Employe.idconnexion}"/><br>
                Nom : <input type="text" id="nom" name="nom" value="{$Employe.nom}"/><br>
                Prenom : <input type="text" id="prenom" name="prenom" value="{$Employe.prenom}"/><br>
                Fonction :<input type="text" id="fonction" name="fonction" value="{$Employe.fonction}"/><br>
                Mot de passe : <input type="text" id="motdepasse" name="motdepasse" value="{$Employe.motdepasse}"/><br>
                Avatar : <input type="file" id="avatar" name="avatar"/><br>
                Adresse mail: <input type="text" id="mail" name="mail" value="{$Employe.adressemail}"/><br>
                Droits de l'utilisateur : <input type="text" id="droits" name="droits" value="{$Employe.droits}"/><br>
                Sexe de l'utilisateur : <input type="number" id="idSexe" name="idSexe" value="{$Employe.idSexe}"/><br>
                <input type="submit" name="validermodification" value="Valider" />
        </form> 
        {/foreach}
    </body>
</html>