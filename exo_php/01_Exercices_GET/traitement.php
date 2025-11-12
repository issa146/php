<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if(isset($_GET["article"]) && isset($_GET["color"]) && isset($_GET["price"]) && !empty($_GET["article"] && !empty($_GET["color"]) && !empty($_GET["price"]))) {
    $article = htmlspecialchars($_GET["article"]);
    $color   = htmlspecialchars($_GET["color"]);
    $price   = htmlspecialchars($_GET["price"]);

    echo "<h2>Description de l'article</h2>";
    echo "<p>Nom : $article</p>";
    echo "<p>Couleur : $color</p>";
    echo "<p>Prix : $price €</p>";
} else {
    echo "<p style='color:red;'> Paramètres manquants dans l'URL.</p>";
}
    
 




        

    ?>
</body>
</html>




<?php


/** Exercice 1 : Affichage des paramètres
 * 
 *  Objectif : Afficher tous les paramètres passés dans l'URL
 * 
 * 
 *  1 . En gardant la page de rendu HTML, utiliser les informations de cette page pour les passer en paramètres d'URL
 * 
 *  2 . Dans ce second fichier nommé : traitement.php, $_GET doit être récupéré, vérifié et ses paramètres affichés sur le navigateur 
 * 
 */

/** Exercice 2 : Validation des paramètres
 * 
 *  Objectif : Valider les paramètres reçus dans l'URL et afficher un message d'erreur si un paramètre est manquant
 * 
 *  1 . S'assurer que les paramètres article,couleur et prix sont présents dans l'URL
 * 
 *  2. Si un ou plusieurs paramètres manquent, afficher un message d'erreur spécifique pour chacun
 * 
 *  Exemple : "<p> Le paramètre 'Article' est manquant'"
 */

/** Exercice 3 : Conversion du prix
 * 
 *  Objectif : Convertir le prix reçu dans l'URL de dollars à euros (utiliser le taux de conversion de 1 dollar = 0.92 euros)
 * 
 *  1 . Récupérer le dollars passé dans l'URL
 * 
 *  2 . Convertir en euros
 * 
 *  3 . Afficher le prix converti
 */

/** Exercice 4 : Affichage d'un message personnalisé
 * 
 *  Objectif : Afficher un message personnalisé en fonction de la couleur passée dans l'URL
 * 
 *  1 . Récupérer la couleur passée dans l'URL
 * 
 *  2 . Afficher un message en fonction de la couleur ( exemple si couleur jaune : "<p> Cette couleur me fait penser au soleil ! </p>)
 * 
 */

/** Exercice 5 : Vérification du prix minimum
 * 
 *  Objectif : Vérifier si le prix reçu dans l'URL est supérieur à un montant minimum et afficher un message appriprié
 * 
 *  1 . Déclarer un prix minimum (20 par exemple)
 * 
 *  2 . Comparer le prix reçu dans l'URL avec le prix minimum
 * 
 *  3 . Afficher un message indiquant si le prix est suffisant ou non 
 */