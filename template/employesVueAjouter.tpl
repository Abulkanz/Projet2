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
                idConnexion : <input type="text" id="idconnexion" name="idconnexion"><br>
                Nom : <input type="text" id="nom" name="nom" /><br>
                Prenom : <input type="text" id="prenom" name="prenom" /><br>
                Fonction :<select id="fonction" name="fonction">
                    <option value="">---Fonction---</option>
                    <option value="Administrateur">Administrateur</option> 
                    <option value="Chef animalier">Chef animalier</option>
                    <option value="Veterinaire">Veterinaire</option>
                    <option value="Stagiaire">Stagiaire</option>
                </select><br>
                Mot de passe : <input type="password" id="motdepasse" name="motdepasse"><br>
                Avatar : <input type="file" id="avatar" name="avatar" /><br>
                Adresse mail: <input type="email" id="mail" name="mail" /><br>
                Droits de l'employé' : <select id="droits" name="droits">
                    <option value="">---Droits---</option>
                    <option value="0">Lecture</option> 
                    <option value="1">Tous les droits</option>
                    <option value="2">Droits de type administrateur</option>
                </select><br>
                Sexe de l'employé : 
                <select id="idSexe" name="idSexe">
                    <option value="">---Sexe de l'employé---</option>
                    <option value="1">Masculin</option> 
                    <option value="2">Feminin</option>
                </select><br>
                <input type="submit" name="validerajouter" value="Valider"/>
                <input type="submit" name="Retour" value="Retour"/>
        </form> 
    </body>
</html>