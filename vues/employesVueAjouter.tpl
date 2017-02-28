<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="style/styles.css" rel="stylesheet">
        <link href="style/dropdown.css" rel="stylesheet">
        <script type="text/javascript" src="js/script.js"> </script>
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
        <h2>{$msg}</h2>
        <div class="conteneurTable">
        <table>
				<form method="POST" action="index.php" enctype="multipart/form-data" onsubmit="Verifier_formulaire (this.form)">
                <thead>
                    </thead>
                    <tfoot>
                    <tr>
                        <input type="hidden" name="gestion" value="employes">
                        <input type="hidden" name="action" value="validerajouter">
                        <td><input type="submit" id="retour" name="Retour" value="Retour" ></td>
                        <td colspan="3"><input type="submit" name="validerajouter" value="Valider"/></td>
                    </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Identifiant de connexion(login)</td>
                            <td><input type="text" id="login" name="login" onblur="verifUtilisateur(this);"><span id="info"></span></td>
                        </tr>
						<tr>
                            <td>Nom</td>
                            <td><input type="text" id="nom" name="nom" /></td>
                        </tr>
                        <tr>
                            <td>Prénom</td>
                            <td><input type="text" id="prenom" name="prenom" /></td>
                        </tr>
                        <tr>
                            <td>Fonction</td>
                            <td>
                                <select id="fonction" name="fonction">
                                    <option value="">---Fonction---</option>
                                    <option value="Administrateur">Administrateur</option> 
                                    <option value="Chef animalier">Chef animalier</option>
                                    <option value="Veterinaire">Veterinaire</option>
                                    <option value="Stagiaire">Stagiaire</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Mot de passe</td>
                            <td><input type="password" id="motdepasse" name="motdepasse" value=""></td>
                        </tr>
                        <tr>
                            <td>Adresse mail</td>
                            <td><input type="email" id="mail" name="mail" value=""></td>
                        </tr>
                        <tr>
                            <td>Sexe</td>
							<td><select id="idSexe" name="idSexe">
                    <option value="">---Sexe de l'employé---</option>
                    <option value="1">Masculin</option> 
                    <option value="2">Feminin</option>
                </select></td>
                        </tr>
                        <tr>
                            <td>Droits</td>
							<td><select id='droits' name='droits'>
                    <option value=''>---Droits---</option>
                    <option value='1'>Lecture</option> 
                    <option value='2'>Tous les droits</option>
                    <option value='3'>Droits de type administrateur</option>
                </select></td>
                        </tr>
                        <tr>
                            <td>Photo de profil</td>
                            <td><input type="file" id="avatar" name="avatar" value=""></td>
                        </tr>
                    </tbody>
                    </form>
            </table>
            </div>
            </body>
            {$js}
</html>