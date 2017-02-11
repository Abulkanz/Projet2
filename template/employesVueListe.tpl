<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Projet2</title>
</head>
    <body>
        <h2>{$msg}</h2>
        <br>
        <form method="POST" action="index.php">
        <input type="hidden" name="gestion" value="employes">
        <input type="hidden" name="action" value="Rechercher">
        Rechercher par nom d'auteur
        <input type="text" name="nom">
        <input type="submit" name="Rechercher" value="Rechercher">
        </form>
        <form method="post" action="index.php">
        <input type="hidden" name="gestion" value="employes">
        <input type="hidden" name="action" value="Trier">
                Trier
                 <select name="choix" id="choix">
                     <option value="">---Choix----</option>
                     <option value="nom">Nom</option>
                     <option value="prenom">Prenom</option>
                 </select>
                <input type="submit" name="Trier" value="Trier">
            </form>
        <table>
            <tr>
                <th></th>
                <th>reference</th>
                <th>designation</th>
                <th>prix</th>
                <th colspan="3">Action</th>
            </tr>
            {foreach from=$listeEmploye item=Employe}
            <tr>
                <td><img src="img/{$Employe.avatar}" class="miniature"></td>        
                <td>{$Employe.nom}</td>
                <td>{$Employe.prenom}</td>
                <td>{$Employe.fonction}</td>
                <td>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="identifiant" value="{$Employe.idEmploye}">
                        <input type="hidden" name="gestion" value="employes">
                        <input type="hidden" name="action" value="consulter">
                        <input type="submit" name="consulter" value="Consulter">
                    </form>
                </td>
                <td>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="identifiant" value="{$Employe.idEmploye}">
                        <input type="hidden" name="gestion" value="employes">
                        <input type="hidden" name="action" value="modifier">
                        <input type="submit" name="modifier" value="Modifier">
                    </form>
                </td>
                <td>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="identifiant" value="{$Employe.idEmploye}">
                        <input type="hidden" name="gestion" value="employes">
                        <input type="hidden" name="action" value="supprimer">
                        <input type="submit" name="supprimer" value="Supprimer">
                    </form>
                </td>
            </tr>
            {/foreach}
        </table>
        <br>
        Nombre d'enregistrements : {$nbligne}
        <br>
        <form method="POST" action="index.php">
            <p>
                <label>Ajouter un produit</label>
                <input type="hidden" name="gestion" value="employes">
                <input type="hidden" name="action" value="ajouter">
                <input type="submit" name="ajouter" value="Ajouter">
            </p>
        </form>
    </body>
</html>