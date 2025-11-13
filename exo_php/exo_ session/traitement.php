<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      if(isset($_POST["nom"]) && !empty($_POST["nom"]) && isset($_POST["prenom"]) && !empty($_POST["prenom"]) && isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["motdepasse"]) && !empty($_POST["motdepasse"])) {
                echo "Mon : " . htmlspecialchars($_POST["nom"]) . "<br>";
                echo "Prénom : " . htmlspecialchars($_POST["prenom"]) . "<br>";
                echo "Email : " . htmlspecialchars($_POST["email"]) . "<br>";
                echo "Mot de passe : " . htmlspecialchars($_POST["motdepasse"]) . "<br>";

            } else {
                echo "il faut remplires tous les champs";
            }

   

        //  $prenom = mb_strlen($_POST["prenom"]);   
        //  $nom = mb_strlen($_POST["nom"]);   
        //  $motdepasse = $_POST["motdepasse"];   

            
        // var_dump($_SESSION);

        if(strlen($_POST["prenom"]) < 2 || strlen($_POST["prenom"]) > 30) {
            echo "il faut que le nom soit entre 2 et 30";
            header("location : accueil.php");
            die();
        }
        if(strlen($_POST["nom"])  < 2 || strlen($_POST["nom"]) > 30) {
             echo "il faut que le prenom soit entre 2 et 30";
             header("location : accueil.php");
             die();
        }

        if(strlen($_POST["motdepasse"]) < 6 || strlen($_POST["motdepasse"]) > 20) {
            echo "il faut que le mot de passe soit entre 6 et 20";
            header("location : accueil.php");
            die();
        }


        $_SESSION["nom"] = trim($_POST["nom"]);
        $_SESSION["prenom"] = trim($_POST["prenom"]);
        $_SESSION["email"] = trim($_POST["email"]);
        $_SESSION["motdepasse"] = trim($_POST["motdepasse"]);

        // if(strlen($_POST["prenom"]) < 2 || strlen($_POST["prenom"]) > 30 && strlen($_POST["nom"])  < 2 || strlen($_POST["nom"]) > 30) {
        //     echo "il faut que le nom et prenom soit entre 2 et 30";
        // } else if (strlen($_POST["motdepasse"]) < 6 ||  20) {
        //     echo "il faut que le mot de passe soit entre 6 et 20";
        // }

        header("location: accueil.php");
        
     ?>

     




</body>
</html>