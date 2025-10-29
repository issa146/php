<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php
/**Exercice 1 : Créer un tableau simple
 *  Objectif : Créez un tableau contenant les noms de vos cinq films préférés.
 *  Instructions :
 *  Déclarez le tableau avec les titres des films.
 *  Affichez chaque film sur une ligne séparée dans un var_dump().
 */


$anime = ["naruto", "one peice", "kingdom","hunter x hunter", "snk"];

var_dump($anime);

?>


<?php

/** Exercice 2 : Ajouter et supprimer des éléments d'un tableau
 *   Objectif : Manipulez un tableau en ajoutant et en supprimant des éléments.
 *   Instructions :
 *   Créez un tableau avec quelques fruits.
 *   Ajoutez un fruit à la fin du tableau.
 *   Supprimez le premier fruit du tableau. Chercher la méthode qui permet de le faire
 *   Affichez le tableau modifié.
 */


$fruit = ["Ananas","Banane","Cerise","pomme"];
$fruit[] = "Kiwi";

array_shift($fruit);

var_dump($fruit);


?>



<?php

/** Exercice 3 : Créer et afficher un tableau associatif
 *   Objectif : Travaillez avec un tableau associatif.
 *   Instructions :
 *   Créez un tableau associatif qui contient les informations suivantes : prénom, nom, et âge.
 *   Affichez chaque information avec une phrase descriptive.
 */


$personne = [
    "prenom" => "Issa",
    "nom" => "Issaadi",
    "age" => 22
]; 


echo "Le prénom est " . $personne["prenom"] . ".<br>";
echo "Le nom de famille est " . $personne["nom"] . ".<br>";
echo "L'âge est " . $personne["age"] . " ans.<br>";


?>



<?php

/**Exercice 4 : Compter les éléments d'un tableau
 *  Objectif : Utilisez les fonctions count() et sizeof().
 *  Instructions :
 *  Créez un tableau avec plusieurs villes.
 *  Affichez le nombre d'éléments dans le tableau.
 */

$villes = ["Paris", "Lyon", "Marseille", "Toulouse", "Lille"];

echo count($villes);



?>



<?php
/** Exercice 5 : Créer un tableau multidimensionnel
 *   Objectif : Créez un tableau multidimensionnel et accédez à ses éléments.
 *   Instructions :
 *   Créez un tableau multidimensionnel avec des informations sur plusieurs étudiants : prénom, nom, et note.
 *   Affichez la note du premier étudiant.
 */
$etudiants = [
    [
        "prenom" => "julin",
        "nom" => "egfg",
        "note" => 15
    ],
    [
        "prenom" => "marc",
        "nom" => "etjij",
        "note" => 18
    ],
    [
        "prenom" => "Youssef",
        "nom" => "kdjgl",
        "note" => 12
    ]
];


echo "La note du premier étudiant" . $etudiants[0]["prenom"];

?>


<?php

/** Exercice 6 : Modifier un tableau multidimensionnel
 *   Objectif : Modifiez un tableau multidimensionnel.
 *   Instructions :
 *   Utilisez le tableau multidimensionnel créé dans l'exercice précédent.
 *   Changez la note du deuxième étudiant.
 *   Affichez toutes les informations du tableau modifié.
 */
$etudiants = [
    [
        "prenom" => "julin",
        "nom" => "egfg",
        "note" => 15
    ],
    [
        "prenom" => "marc",
        "nom" => "",
        "note" => 18
    ],
    [
        "prenom" => "Youssef",
        "nom" => "kdjgl",
        "note" => 12
    ]
];


$etudiants[1]["note"] = 20;

var_dump($etudiants[1]);


?>


<?php
/** Exercice 7 : Boucle for pour parcourir un tableau
 *   Objectif : Utilisez une boucle for pour parcourir un tableau.
 *   Instructions :
 *   Créez un tableau avec les mois de l'année.
 *   Utilisez une boucle for pour afficher chaque mois.
 */
$mois = [
    "Janvier", "Février", "Mars", "Avril", "Mai", "Juin",
    "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"
];


for ($i = 0; $i < count($mois); $i++) {
    echo $mois[$i] . "<br>";
}




?>


<?php
/** Exercice 8 bonus : Rechercher une valeur dans un tableau
 *   Objectif : Cherchez une valeur spécifique dans un tableau.
 *   Instructions :
 *   Créez un tableau avec des numéros aléatoires.
 *   Cherchez si un numéro spécifique est présent dans le tableau. Trouver la méthode pour
 *   Affichez un message en fonction du résultat de la recherche.
 */

$numeros = [12, 45, 7, 89, 23, 56, 90, 34];


if (in_array(45,$numeros)) {
    echo "Le numéro est présent dans le tableau";
} else {
    echo "Le numéro n'est pas présent dans le tableau ";
}
?>


<?php

/** Exercice 9 : Fusionner deux tableaux (Bonus)
 *   Objectif : Fusionnez deux tableaux en un seul.
 *   Instructions :
 *   Créez deux tableaux : un contenant des prénoms et un autre contenant des noms de famille.
 *   Fusionnez ces deux tableaux pour créer un tableau de noms complets.
 *   Affichez chaque nom complet sur une ligne.
 * 
 *  Aide: utiliser des boucles for
 */
$prenoms = ["ahmed", "ludovic", "rayan"];
$noms = ["abir", "danjou", "je sais pas"];

for ($i = 0; $i < count($prenoms); $i++) {
    echo $prenoms[$i] . " " . $noms[$i] . "<br>";
}
?>




</body>
</html>

