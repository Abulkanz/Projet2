<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
        <link href="css/style.css" rel="stylesheet">
        <title>Projet2</title>
	</head>
        <body>
            <?php
            require_once 'include/infoConnexion.php';
            require_once 'include/connexion.php';
            require_once 'include/executeRequete.php';
            $cnx=connexion(UTILISATEUR,MOTDEPASSE,SERVER,BASEDEDONNEES);
            echo 'Formulaire de modification'.'<br>'.'<br>';
            if(isset($_POST['identifiant'])){
                $idEmployes=$_POST["identifiant"];
                $varSql = "SELECT idEmploye,idConnexion, nom,prenom, fonction, avatar,motDePasse,adresse_mail,idSexe FROM employes WHERE idEmploye= ?";
                $idRequete = executeRequete($cnx,$varSql,array($idEmployes));
                while($ligne=$idRequete->fetch()){   
            ?>
                <table>
				<form method="POST" action="" enctype="multipart/form-data">
                <thead>
                    <tr>
                        <td colspan="3">Fiche de : <?php echo ''.$ligne['nom'].''.''.' '.$ligne['prenom'];?></td>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <td><input type="submit" id="retour" name="Retour" value="Retour" ></td>
                        <td colspan="3"><input type="submit" id="Valider" name="Valider" value="Valider" ></td>
                        <!-- bouton servant a la modification -->
                    </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td rowspan="7"><img src="<?php echo 'img/'.$ligne['avatar'].'';?>" class="avatar"></td>
                            <td>Identifiant de connexion de la personne</td>
                            <td><input id="idconnexion" name="idconnexion" value="<?php echo ''.$ligne['idConnexion'].'';?>"></td>
                        </tr>
						<tr>
                            <td>Nom de la personne</td>
                            <td><input id="nom" name="nom" value="<?php echo ''.$ligne['nom'].'';?>"></td>
                        </tr>
                        <tr>
                            <td>Prenom de la personne</td>
                            <td><input id="prenom" name="prenom" value="<?php echo ''.$ligne['prenom'].'';?>"></td>
                        </tr>
                        <tr>
                            <td>Fonction de la personne</td>
                            <td><input id="fonction" name="fonction" value="<?php echo ''.$ligne['fonction'].'';?>"></td>
                        </tr>
                        <tr>
                            <td>Mot de passe de la personne</td>
                            <td><input id="motdepasse" name="motdepasse" value="<?php echo ''.$ligne['motDePasse'].'';?>"></td>
                        </tr>
                        <tr>
                            <td>Adresse mail de la personne</td>
                            <td><input id="mail" name="mail" value="<?php echo ''.$ligne['adresse_mail'].'';?>"></td>
                        </tr>
                        <tr>
                            <td>Sexe</td>
							<td><input id="sexe" name="sexe" value="<?php echo ''.$ligne['idSexe'].'';?>"></td>
                        </tr>
                        <tr>
                         <td colspan="3">
                            <form>
                                <input type="file" id="avatar" name="avatar" >
                                <input type="hidden" id="idEmploye" name="idEmploye" value="<?php echo ''.$ligne['idEmploye'].'';?>">
                                <input type="submit" id="modifier" name="modifier" value="Modifier" >
                            </form>
                        </td>
                        </tr>
                    </tbody>
            </table>
            </form>
            <?php
                }
            }
            if(isset($_POST['Retour'])){
                header('location:index.php?');
            }
            // dans le cas ou l'utilisateur souhaitent modifier que l'image
            if(isset($_POST['modifier'])){
                $idEmployes=$_POST["idEmploye"];

                // on recupere l'image : nom, type, taille,..
                $imgFile = $_FILES["avatar"]["name"];
                $tmp_dir = $_FILES["avatar"]["tmp_name"];
                $imgSize = $_FILES["avatar"]["size"];
                
                // traitement de l'image
                // on definit le repertoire ou sera sotcké l'image
                $upload_dir = 'img/'; 
                // on receuper l'extension du fichier image
                $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
                // on recupere le nom de l'image
                $nomImg = strtolower(pathinfo($imgFile,PATHINFO_FILENAME));
                // on definit les types de fichier qui seront pris en compte
                $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
                // on renome l'image 
                $userpic = $nomImg.'.'.$imgExt;
                
				if(in_array($imgExt, $valid_extensions)){
					if($imgSize < 5000000){  
						move_uploaded_file($tmp_dir,$upload_dir.$userpic);
					}
					else {
						$errMSG = "Le fichier est trop gros";
					}
				}
				else{
                $errMSG = "Le format de l'image n'est pas pris en charge";  
				}
				if(!isset($errMSG)){
					// on insere dans la bdd
					$Sql = "UPDATE employes SET avatar=? WHERE idEmploye=?";
					$idRequete = executeRequete($cnx,$Sql,array($userpic,$idEmployes));
				}
                header('location:index.php');
            }
            // dans le cas ou l'utilisateur ne souhaite que modifier les information concernant l'employe
			if(isset($_POST['Valider'])){
                $idEmployes=$_POST["idEmploye"];
                $idConnexion=$_POST["idconnexion"];
                $nom=$_POST["nom"];
                $prenom=$_POST["prenom"];
                $fonction=$_POST["fonction"];
                $motdepasse=$_POST["motdepasse"];
                $mail=$_POST["mail"];
                $Sql = "UPDATE employes SET idConnexion=?, nom=?, prenom=?, fonction=?, motDePasse=?, adresse_mail=? WHERE idEmploye=?";
                $idRequete = executeRequete($cnx,$Sql,array($idConnexion, $nom,$prenom,$fonction,$motdepasse,$mail,$idEmployes));
                header('location:index.php');
            }
            ?>
</html>

