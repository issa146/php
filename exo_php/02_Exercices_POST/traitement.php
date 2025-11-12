<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// Utiliser form.php pour le formulaire
// Créer un formulaire avec en champ (nom,prenom,email,motdepasse,ville,pays)

/** Exercice 1 : Validation de formulaire
 * 
 *  Objectif : Vérifier si tous les champs du formulaire ont été remplis et afficher un message d'erreur pour chaque champ manquant
 * 
 *  1 . S'assurer que tous les champs sont remplis avant d'afficher les données
 */


      if(isset($_POST["nom"]) && !empty($_POST["nom"]) && isset($_POST["prenom"]) && !empty($_POST["prenom"]) && isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["motdepasse"]) && !empty($_POST["motdepasse"]) && isset($_POST["ville"]) && !empty($_POST["ville"]) && isset(($_POST["pays"])) && !empty($_POST["pays"])) {
                echo "Mon : " . htmlspecialchars($_POST["nom"]) . "<br>";
                echo "Prénom : " . htmlspecialchars($_POST["prenom"]) . "<br>";
                echo "Email : " . htmlspecialchars($_POST["email"]) . "<br>";
                echo "Mot de passe : " . htmlspecialchars($_POST["motdepasse"]) . "<br>";
                echo "ville : " . htmlspecialchars($_POST["ville"]) . "<br>";
                echo "pays : " . htmlspecialchars($_POST["pays"]) . "<br>";
            } else {
                echo "il fait rmplires tous les champs";
            }


/** Exercice 2 : traitement et affichage sécurisé
 * 
 *  Objectif : Afficher les données du formulaire de manière sécurisée pour les éviter les attaques XSS (échapper les données) (possibilité de copier/coller le traitement de l'exercice 1)
 * 
 */


/** Exercice 3 : Afficher les données précédentes
 * 
 *  Objectif : Réafficher les données précédemment saisies dans le formulaire après la soumission
 * 
 *  1 . Pré-remplir les champs du formulaire avec les valeurs soumises précédemment 
 * 
 *  *  Cet exercice se fera donc dans la partie formulaire directement ! (Vous devrez supprimer la partie action du formulaire pour qu'il redirige la requête sur la même page)
 * 
 */

/** Exercice 4 : Limitation de longueur pour mot de passe 
 * 
 *  Objectif : Limiter la longueur de le mot de passe  saisie par l'utilisateur à 130 caractères et afficher un message d'avertissement si ce seuil est dépassé
 * 
 *  1 . Verifier la longueur du champ mot de passe 
 * 
 *  2 . Afficher un message si la longueur dépasse 130 caractères
 * 
 * 
 */

/*

/** Exercice 5 : Conversion de données
 * 
 *  Objectif : Convertir la ville en majuscule avant de l'afficher et afficher un message de confirmation 
 * 
 *  1 . Convertir la ville reçue du formulaire en majuscule
 * 
 *  2 . Afficher la ville en majuscule ainsi qu'un message de confirmation 'merci pour votre soumission'
 * 
 */


?>
</body>
</html>







<?php
    // error_reporting(E_ALL);
    // ini_set("display_errors", 1);

    /** -----------------------------------------
     *  Exercice 1 : Validation de formulaire
     * ------------------------------------------
     * 
     *  Objectif : Vérifier si tous les champs du formulaire ont été remplis et afficher un message d'erreur pour chaque champ manquant
     * 
     *  1 . S'assurer que tous les champs sont remplis avant d'afficher les données
     * 
     */

    // echo '<h2>Exercice 1 : Validation de formulaire</h2>';

    // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //     if (
    //         !empty($_POST['name'])
    //         && !empty($_POST['firstname'])
    //         && !empty($_POST['email'])
    //         && !empty($_POST['city'])
    //         && !empty($_POST['mdp'])
    //         && !empty($_POST['country'])
    //     ) {
    //         echo "<p>Voici les informations fournies : Ville = {$_POST['city']}, Code postal = {$_POST['cp']}, Adresse = {$_POST['adresse']}</p>";
    //     } else {
    //         echo "<p style='color:red;'>Tous les champs doivent être remplis.</p>";
    //     }
    // }
    ?>

 <hr>

 <?php
    /** -----------------------------------------
     *  Exercice 2 : Affichage sécurisé
     * ------------------------------------------
     * Utilisation de htmlspecialchars() pour éviter les XSS.
     */
//     echo '<h2>Exercice 2 : Affichage sécurisé</h2>';

//     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//         if (
//             !empty($_POST['name'])
//             && !empty($_POST['firstname'])
//             && !empty($_POST['email'])
//             && !empty($_POST['city'])
//             && !empty($_POST['mdp'])
//             && !empty($_POST['country'])
//         ) {
//             echo "<p>Ville : " . htmlspecialchars($_POST['city']) . ", Code postal : " . htmlspecialchars($_POST['cp']) . ", Adresse : " . htmlspecialchars($_POST['adresse']) . "</p>";
//         } else {
//             echo "<p style='color:red;'>Tous les champs doivent être remplis.</p>";
//         }
//     }
//     ?>

//  <hr>

 <?php
    /** -----------------------------------------
     *  Exercice 3 : Réaffichage des données
     * ------------------------------------------
     * Les champs du formulaire sont déjà pré-remplis au-dessus.
     */
    // echo '<h2>Exercice 3 : Réafficher les données précédentes</h2>';
    // echo "<p>Les champs saisis sont automatiquement réaffichés grâce aux valeurs dans les inputs.</p>";
    // ?>

 <hr>

 <?php
    /** -----------------------------------------
     *  Exercice 4 : Limitation de longueur du mot de passe
     * ------------------------------------------
     * Vérifier que le mot de passe ne dépasse pas 130 caractères.
     */
//     echo '<h2>Exercice 4 : Limitation de longueur du mot de passe</h2>';

//     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//         if (!empty($_POST['mdp'])) {
//             if (mb_strlen($_POST['mdp']) > 130) {
//                 echo "<p style='color:red;'>La longueur de votre mot de passe ne doit pas dépasser 130 caractères !</p>";
//             } else {
//                 echo "<p>Merci, la longueur de votre mot de passe est correcte.</p>";
//             }
//         } else {
//             echo "<p style='color:red;'>Le champ mot de passe est vide.</p>";
//         }
//     }
//     ?>

//  <hr>

 <?php
    /** -----------------------------------------
     *  Exercice 5 : Conversion de données
     * ------------------------------------------
     * Convertir la ville en majuscules et afficher un message.
     */
    // echo '<h2>Exercice 5 : Conversion de données</h2>';

    // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //     if (!empty($_POST['city'])) {
    //         $ville = strtoupper($_POST['city']);
    //         echo "<p>Votre ville : <strong>$ville</strong> est bien enregistrée. Merci pour votre soumission !</p>";
    //     } else {
    //         echo "<p style='color:red;'>La ville n'a pas été renseignée.</p>";
    //     }
    // }
    ?>


