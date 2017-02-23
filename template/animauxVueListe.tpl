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
        <h2>{$msg}</h2>
        <br>
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
        <br>
        <form method="POST" action="index.php">
        <input type="hidden" name="gestion" value="Animauxs">
        <input type="hidden" name="action" value="Rechercher">
        Rechercher par 
        <input type="text" name="nom">
        <input type="submit" name="Rechercher" value="Rechercher">
        </form>
        <!--<form method="post" action="index.php">
        <input type="hidden" name="gestion" value="Animauxs">
        <input type="hidden" name="action" value="Trier">
                Trier
                 <select name="choix" id="choix">
                     <option value="">---Choix----</option>
                     <option value="nom">Nom</option>
                     <option value="prenom">Prenom</option>
                 </select>
                <input type="submit" name="Trier" value="Trier">
            </form>-->
        <br>
        <table>
            <tr>
                <th></th>
                <th>Prenom</th>
                <th>Espece</th>
                <th>Sexe</th>
                <th>Poids</th>
                <th>Taille</th>
                <th>Age</th>
                <th>Lieu de naissance</th>
                <th>Statut</th>
                <th colspan="3">Action</th>
            </tr>
            {foreach from=$listeAnimaux item=Animaux}
            <tr>
                <td><img src="img/imgFiches/{$Animaux.photo}" class="miniature"></td>        
                <td>{$Animaux.prenomAnimal}</td>
                <td>{$Animaux.nomEspece}</td>
                <td>{$sexe}</td>
                <td>{$Animaux.poids}</td>
                <td>{$Animaux.taille}</td>
                <td>10</td>
                <td>{$Animaux.lieu_naissance}</td>
                <td>{$Animaux.statut}</td>
                <td>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="identifiant" value="{$Animaux.idAnimaux}">
                        <input type="hidden" name="gestion" value="animaux">
                        <input type="hidden" name="action" value="consulter">
                        {$consulter}
                    </form>
                </td>
                <td>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="identifiant" value="{$Animaux.idAnimaux}">
                        <input type="hidden" name="gestion" value="animaux">
                        <input type="hidden" name="action" value="modifier">
                        {$modifier}
                    </form>
                </td>
                <td>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="identifiant" value="{$Animaux.idAnimaux}">
                        <input type="hidden" name="gestion" value="animaux">
                        <input type="hidden" name="action" value="supprimer">
                        {$supprimer}
                    </form>
                </td>
            </tr>
            {/foreach}
        </table>
        <br>
        Nombre d'enregistrements : {$nbligne}
        <br>
        {$ajouter}
    </body>
</html>