<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Projet2</title>
</head>
    <body>
        <nav>
            <form method="POST" action="index.php">
                <input type="hidden" name="gestion" value="accueil">
                <input type="submit" name="accueil" value="accueil">
            </form>
            <form method="POST" action="index.php">
                <input type="hidden" name="gestion" value="employes">
                <input type="submit" name="employes" value="utilisateur">
            </form>
            <form method="POST" action="index.php">
                <input type="hidden" name="gestion" value="animaux">
                <input type="submit" name="animaux" value="animaux">
            </form>
            <form method="POST" name="gestion">
                <input type="hidden" name="gestion" value="carte">
                <input class="lienNav" type="submit" name="carte" value="Carte">
            </form>
            <form method="POST" action="index.php">
                <input type="hidden" name="gestion" value="statistique">
                <input type="submit" name="statistique" value="statistique">
            </form>
            {$login}
            <ul>
                <li>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="gestion" value="profil">
                        <input type="hidden" name="identifiant" value="{$login}">
                        <input type="hidden" name="action" value="profil">
                        <input type="submit" name="profil" value="Profil">
                    </form>
                </li>
                <li>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="gestion" value="aide">
                        <input type="submit" name="aide" value="aide">
                    </form>
                </li>
                <li>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="gestion" value="animaux">
                        <input type="hidden" name="action" value="Deconnexion">
                        <input type="submit" name="Deconnexion" value="Deconnexion">
                    </form>
                </li>
            </ul>
        </nav>
        <h2>{$msg}</h2>
        <br>
        <table>
            <tr>
                <th></th>
                <th>nom</th>
                <th>prenom</th>
                <th>fonction</th>
                <th colspan="3">Action</th>
            </tr>
            {foreach from=$listeEmploye item=Employe}
            <tr>
                <td><img src="img/{$Employe.avatar}" class="miniature"></td>        
                <td>{$Employe.nomEmploye}</td>
                <td>{$Employe.prenomEmploye}</td>
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
        nombre d'enregistrements : {$nbligne}
        <br>
        <form method="POST" action="index.php">
            <p>
                <label>Ajout d'un employé</label>
                <input type="hidden" name="gestion" value="employes">
                <input type="hidden" name="action" value="ajouter">
                <input type="submit" name="ajouter" value="Ajouter">
            </p>
        </form>
    </body>
</html>