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
                        <input type="hidden" name="gestion" value="animaux">
                        <input type="hidden" name="action" value="validerajouter">
                        <td><input type="submit" id="retour" name="retour" value="Retour" ></td>
                        <td colspan="3"><input type="submit" name="validerajouter" value="Valider"/></td>
                    </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>poids</td>
                            <td><input type="text" id="poids" name="poids"></span></td>
                        </tr>
						<tr>
                            <td>taille</td>
                            <td><input type="text" id="taille" name="taille" /></td>
                        </tr>
                        <tr>
                            <td>prenom de l'animal</td>
                            <td><input type="text" id="prenomAnimal" name="prenomAnimal" /></td>
                        </tr>
                        <tr>
                            <td>date de naissance</date_naissa></td>
                            <td><input type="text" id="date_naissance" name="date_naissance" /></td>
                        </tr>
                        <tr>
                            <td>lieu de naissance</td>
                            <td><input type="text" id="lieu_naissance" name="lieu_naissance" value=""></td>
                        </tr>
                        <tr>
                            <td>pere</td>
                            <td><input type="text" id="pere" name="pere" value=""></td>
                        </tr>
                        <tr>
                            <td>mere</td>
                            <td><input type="mere" id="mere" name="mere" value=""></td>
                        </tr>
                        <tr>
                            <td>Parcelle</td>
                            <td><input type="text" id="idParcelle" name="idParcelle" value=""></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td><textarea id="description" name="description"></textarea></td>
                        <tr>
                            <td>Sexe</td>
							<td><select id="idSexe" name="idSexe">
                                <option value="">---Sexe de l'animal---</option>
                                <option value="1">Masculin</option> 
                                <option value="2">Feminin</option>
                             </select></td>
                        </tr>
                        <tr>
                            <td>Statut</td>
							<td><select id="statut" name="statut">
                                <option value="">---Statut de l'animal---</option>
                                <option value="1">Prete</option> 
                                <option value="2">Transfere</option>
                             </select></td>
                        </tr>
                        <tr>
                            <td>Pays</td>
                            <td><input type="text" id="idPays" name="idPays" value=""></td>
                        </tr>
                        <tr>
                            <td>Especes</td>
                            <td><input type="text" id="idEspece" name="idEspece" value=""></td>
                        </tr>
                        <tr>
                            <td>Photo de profil</td>
                            <td><input type="file" id="photo" name="photo" value=""></td>
                        </tr>
                    </tbody>
                    </form>
            </table>
</html>