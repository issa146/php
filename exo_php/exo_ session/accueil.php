<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>bienvenue</h2>

<?php

 echo $_SESSION["nom"] . "<br>";
 echo $_SESSION["prenom"] . "<br>";
 echo $_SESSION["email"] . "<br>";
 echo $_SESSION["motdepasse"] . "<br>";


    

?>


</body>
</html>