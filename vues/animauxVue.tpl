<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="style/dropdown.css" rel="stylesheet" type="text/css"/>
        <link href="style/styles.css" rel="stylesheet">
        <title>Ouhouhin-Animaux</title>
    </head>
    <body>
        <div class="conteneur">
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
                        <img class="avatar dropbtn"  onclick="displayMenuUser()" src="img/userlogof.png">
                        <span class="username dropbtn"  onclick="displayMenuUser()">
                            {$login}
                        </span>
                        <i class="fa fa-caret-down" aria-hidden="true" style="color:white;"></i>
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
            {$aucRes}
            <div class="conteneurTable">
                {$initTable}
                {foreach from=$listeAnimaux item=Animal}
                    <tr>
                        <td>{$Animal.photo}</td>
                        <td>{$Animal.prenomAnimal}</td>
                        <td>{$Animal.nomEspece}</td>
                        <td>{$Animal.sexe}</td>
                        <td>{$Animal.age}</td>
                        <td>{$Animal.statut}</td>
                        <td><form method='POST' action='index.php'>
                                <input class="action" type='submit' name='modifier' value='Modifier'>
                                <input type="hidden" name="gestion" value="animaux">
                                <input type='hidden' name='idAnimal' value="{$Animal.idAnimal}">
                                <input type="hidden" name="action" value="modifier">
                            </form>
                            <form method='POST' action='index.php'>
                                <input class="action" type='submit' name='supprimer' value='Supprimer'>
                                <input type="hidden" name="gestion" value="animaux">
                                <input type='hidden' name='idAnimal' value="{$Animal.idAnimal}">
                                <input type="hidden" name="action" value="supprimer">
                            </form></td>
                    </tr>
                {/foreach}
                </table>
            </div>
        </div> 
        {$js} 
    </body>
</html>