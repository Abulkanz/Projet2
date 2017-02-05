<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
 
    <body>
       <?php
        require_once 'include/infoConnexion.php';
        require_once 'include/connexion.php';
        require_once 'include/executeRequete.php';
        $cnx=connexion(UTILISATEUR,MOTDEPASSE,SERVER,BASEDEDONNEES);

        if(isset($_POST['Retour'])){
            header("location:index.php");
        }
        if(isset($_POST['Envoyer'])){
            // recupere les information saisie
            $idConnexion=$_POST["idconnexion"];
            $nom=$_POST["nom"];
            $prenom=$_POST["prenom"];
            $fonction=$_POST["fonction"];
            $motdepasse=$_POST["motdepasse"];
            $mail=$_POST["mail"];
            $droits=$_POST["droits"];
            $idSexe=$_POST["idSexe"];

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

            // on passe a l'envoie du fichier
            // on verifier d'abord que le fichier est correct
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
                $Sql = "INSERT INTO employes(idConnexion, nom, prenom, fonction, motDePasse, avatar, adresse_mail, droits, idSexe) VALUES (?,?,?,?,?,?,?,?,?)";
                $idRequete = executeRequete($cnx,$Sql,array($idConnexion,$nom,$prenom,$fonction,$motdepasse,$userpic,$mail,$droits,$idSexe));
            }
            // on verifier que la requete OK
            if ($idRequete==true){
        ?>
        <script>alert('Utilisateur a été ajouté');
            window.location.href='index.php';
        </script>
        <?php 
            } else {
                $errMSG = "Désolé les données n'ont pas été insérée";
                echo $errMSG;
            }
        }
        ?>
        <h1>Ajout d'un utilisateur</h1>
        <form method="POST" action="" enctype="multipart/form-data">
            idConnexion : <input type="text" id="idconnexion" name="idconnexion" /><br>
            Nom : <input type="text" id="nom" name="nom" /><br>
            prenom : <input type="text" id="prenom" name="prenom" /><br>
            fonction :<input type="text" id="fonction" name="fonction" /><br>
            Mot de passe : <input type="text" id="motdepasse" name="motdepasse"/><br>
            Avatar : <input type="file" id="avatar" name="avatar" /><br>
            Adresse mail: <input type="text" id="mail" name="mail" /><br>
            Droits de l'utilisateur : <input type="text" id="droits" name="droits" /><br>
            Sexe de l'utilisateur : <input type="number" id="idSexe" name="idSexe" /><br>
            <input type="submit" name="Envoyer" value="Valider" />
            <input type="submit" name="Retour" value="Retour" />
        </form>
    </body>
</html>