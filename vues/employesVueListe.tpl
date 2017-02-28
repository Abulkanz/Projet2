<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style/styles.css" rel="stylesheet">
    <link href="style/dropdown.css" rel="stylesheet">
    <title>Projet2</title>
    <title>Projet2</title>
</head>
    <body>
        <div class="conteneur noOverF">
            <img class="logo" src="img/logoSinges.png">
            <header>
                <ul>
                    <li>
                        <form method="POST" name="gestion">
                            <input type="hidden" name="gestion" value="accueil">
                            <input class="lienNav" type="submit" value="Accueil">
                        </form>
                    </li>
                    <li>
                        <form method="POST" name="gestion">
                            <input type="hidden" name="gestion" value="animaux">
                            <input class="lienNav" type="submit" value="Animaux">
                        </form>
                    </li>
                    <li>
                        <form method="POST" action="index.php">
                            <input type="hidden" name="gestion" value="employes">
                            <input class="lienNav" type="submit" name="employes" value="utilisateur">
                        </form>
                    </li>
                     <li>
                            <form method="POST" action="index.php">
                                <input type="text" name="objRech" placeholder="Rechercher">
                                <input type="hidden" name="gestion" value="animaux">
                                <input type="hidden" name="action" value="rechercher">
                                <input type="submit" name="rechAnimal" value="->">
                                <label for="tri">Trier par</label>
                                <select id="tri" name="selection">
                                    <option selected="selected" value="prenomAnimal">Prénom</option>
                                    <option value="nomEspece">Espèce</option>
                                    <option value="Sexe">Sexe</option>
                                    <option value="Age">Age</option>
                                    <option value="StatutA">Statut</option>
                                </select>
                            </form>
                    </li>
                    <li class="dropdown">
                        <span class="dropbtn" onclick="displayMenuUser()"><img class="avatar"  onclick="displayMenuUser()" src="img/userlogof.png"><span class="username"  onclick="displayMenuUser()">{$login}</span></span>
                        <div class="dropdown-content" id="menuUser">
                            <form method="POST" name="gestion">
                                <button class="lienNav">
                                    <input type="hidden" name="gestion" value="profil">
                                    <input type="hidden" name="action" value="profil">
                                    <input type="hidden" name="identifiant" value="{$login}">
                                    <img src="img/userlogof.png" style="width:20px; margin-right:5px">Profil
                                </button>
                            </form>
                            <form method="POST" name="gestion">
                                <button class="lienNav">
                                    <input type="hidden" name="gestion" value="aide">
                                    <img src="img/icone_aide.png" style="width:20px; margin-right:5px">Aide
                                </button>
                            </form>
                            <form method="POST" name="gestion">
                                 <button class="lienNav">
                                    <input type="hidden" name="gestion" value="accueil">
                                    <input type="hidden" name="action" value="deconnexion">
                                    <img src="img/iconedeconnexion.png" style="width:15px; margin-right:5px">Déconnexion
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
            </header>
        <div class="conteneurTable">
        <h2>{$msg}</h2>
        <br>
        <table>
            <tr>
                <th></th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Fonction</th>
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
        </div>
    </body>
</html>