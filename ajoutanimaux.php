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
            $nom=$_POST["nom"];
            $prenom=$_POST["prenom"];
            $fonction=$_POST["fonction"];
            $mdp=$_POST["mail"];

            // on recupere l'image : nom, type, taille,..
            $imgFile = $_FILES["avatar"]["name"];
            $tmp_dir = $_FILES["avatar"]["tmp_name"];
            $imgSize = $_FILES["avatar"]["size"];
            
            // traitement de l'image
            // on definit le repertoire ou sera sotcké l'image
            $upload_dir = 'img/'; 
            // on receuper l'extension du fichier image
            $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); 
            // on definit les types de fichier qui seront pris en compte
            $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
            // on renome l'image 
            $userpic = rand(1000,1000000).'.'.$imgExt;

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
                $Sql = "INSERT INTO employes(nom, prenom, fonction, motDePasse, avatar) VALUES (?,?,?,?,?)";
                $idRequete = executeRequete($cnx,$Sql,array($nom,$prenom,$fonction,$mdp,$userpic));
            }
            // on verifier que la requete OK
            if ($idRequete==true){
        ?>
        <script>alert('Utilisateur a été ajouté');
            window.location.href='index.php';
        </script>
        <?php 
            } else {
                $errMSG = "Sorry Data Could Not Updated !";
                echo $errMSG;
            }
        }
        ?>
        <h1>Ajout d'un utilisateur</h1>
        <form method="POST" action="" enctype="multipart/form-data">
            Poids : <input type="text" id="nom" name="nom" /><br>
            taille : <input type="text" id="prenom" name="prenom" /><br>
            age :<input type="text" id="fonction" name="fonction" /><br>
            Prenom : <input type="text" id="mail" name="mail"/><br>
            Avatar : <input type="file" id="avatar" name="avatar" /><br>
            date naissance
            lieu de naissance : 
            date deces
            pere
            mere 
            idSecteur
            description
            statut
            idEspece
            <input type="submit" name="Envoyer" value="Envoyer le fichier" />
            <input type="submit" name="Retour" value="Retour" />
        </form>
    </body>
</html>