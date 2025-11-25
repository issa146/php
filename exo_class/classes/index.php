<?php

// Gérer l'ajout des contacts ici ainsi que la récupération de tous les contacts

include_once  'config/Database.php';
include_once 'models/Contact.php';
// $database = new Database();
// echo $database->getConnection();

$verification = new Contact();
echo $verification->verification("issa", "issa@bjhb", 564564);



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <h1>Carnet de Contact</h1>

    <h2>Liste des Contacts</h2>
    <ul>
       
    </ul>

    <h2>Ajouter un nouveau contact</h2>
    <form action="index.php" method="POST">
        <input type="text" name="name" placeholder="Nom" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Téléphone">
        <button type="submit">Ajouter</button>
    </form>


</body>
</html>



<!-- # Exercice carnet de contacts
 
- Faire la BDD et la connection à la base de données doit être maintenant gérée. Il faut aussi faire les requêtes SQL dans le Contact.php du dossier models. Attention ce sera une class qui gèrera l'ajout et l'affichage des contacts de la BDD, donc vous aurez besoin de 2 méthodes.
  A vous de voir par quelle méthode commencer.
 
Récupérez le résultat dans index.php pour les afficher.
Gérer la validation des champs aussi -->
 
 
