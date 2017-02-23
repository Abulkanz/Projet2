<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <script type="text/javascript" src="js/script.js"> </script>
        <title>Projet2</title>
	</head>
    <body>
        <h2>{$msg}</h2>
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
                            <td>Nom de l'employe</td>
                            <td><input type="text" id="nom" name="nom" /></td>
                        </tr>
                        <tr>
                            <td>Prenom de l'employe</td>
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
</html>