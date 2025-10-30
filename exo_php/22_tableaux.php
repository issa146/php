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
    "age" => 20
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
 * 
 */


echo "<br>";
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


echo "La note du premier étudiant" . $etudiants[0]["note"] ;

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
        "nom" => "jtyy",
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



// $rndm = [13254,536584,687,5869847,1,98796847];
 
//     foreach ($rndm as $spe ) {
//         if ($spe == 1) {
//             echo "Found our NAMBA WAN!!!!!!!";
//         }
//     }
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

echo "<br>";
$prenoms = ["ahmed", "ludovic", "ryan"];
$noms = ["abir", "danjou", "mambou"];

for ($i = 0; $i < count($prenoms); $i++) {
    echo $prenoms[$i] . " " . $noms[$i] . "<br>";
}
?>

    <!-- // Tableau des noms prénoms
    $names = ["Riri", "Fifi", "Loulou"];
    $surname = ["Grigri", "Frifri", "Grougrou"];
 
    // Tableau vide dans lequel on fusionnera les infos
    $ducks = [];
 
    // On bloucle tout ça et on met les info dans des tableaux dans le tableau TABLEAUCEPTION
    for ($i = 0; $i < count($names); $i++) {
        $ducks[] = [
            "nom" => $names[$i],
            "prenom" => $surname[$i]
        ];
    }
 
    // On affiche tout ça
    print_r($ducks); -->




</body>
</html>






<!-- 



<?php

/**Exercice 1 : Créer un tableau simple
 *  Objectif : Créez un tableau contenant les noms de vos cinq films préférés.
 *  Instructions :
 *  Déclarez le tableau avec les titres des films.
 *  Affichez chaque film sur une ligne séparée dans un var_dump().
 */
// echo '<h2> Exercice 1 : créer tableau simple </h2>';
// $tab1 = ['titanic', 'kill bill', 'le seigneur des anneaux', 'le hobbit', 'a star is born'];

// echo '<pre>';
// var_dump($tab1);
// echo '</pre>';

/** Exercice 2 : Ajouter et supprimer des éléments d'un tableau
 *   Objectif : Manipulez un tableau en ajoutant et en supprimant des éléments.
 *   Instructions :
 *   Créez un tableau avec quelques fruits.
 *   Ajoutez un fruit à la fin du tableau.
 *   Supprimez le premier fruit du tableau. Chercher la méthode qui permet de le faire
 *   Affichez le tableau modifié.
 */
// echo '<h2> Exercice 2 : Ajout suppression tableau </h2>';

// $tabFruit = ['ananas', 'poire', 'cerise', 'fraise', 'grenade', 'citron'];

// $tabFruit[] = 'melon'; // ou array_push($tabFruit, "melon")

// array_unshift($tabFruit); // ou unset($tabFruit[0])  ou array_splice(nomTableau, position, nombre él à supprimer à partir de la position)

// echo '<pre>';
// var_dump($tabFruit);
// echo '</pre>';


/** Exercice 3 : Créer et afficher un tableau associatif
 *   Objectif : Travaillez avec un tableau associatif.
 *   Instructions :
 *   Créez un tableau associatif qui contient les informations suivantes : prénom, nom, et âge.
 *   Affichez chaque information avec une phrase descriptive.
 */

// echo '<h2> Exercice 3 : créer et afficher un tableau associatif </h2>';

// $assoTab = [
//     'prenom' => 'jean',
//     'nom' => 'dujardin',
//     'age' => 50
// ];

// echo "le prénom de cette personne est $assoTab[prenom], son nom de famille est $assoTab[nom] et il a $assoTab[age] ans";

/**Exercice 4 : Compter les éléments d'un tableau
 *  Objectif : Utilisez les fonctions count() ou sizeof().
 *  Instructions :
 *  Créez un tableau avec plusieurs villes.
 *  Affichez le nombre d'éléments dans le tableau.
 */
// echo '<h2> Exercice 4 : Compter elements tableau </h2>';

// $villesTab = ['Paris', 'Milan', 'Madrid', 'Tokyo', 'New Dehli', 'Berlin', 'Kuala lampur', 'Dublin'];

// echo "le tableau contient : " . count($villesTab) . ' villes ';

/** Exercice 5 : Créer un tableau multidimensionnel
 *   Objectif : Créez un tableau multidimensionnel et accédez à ses éléments.
 *   Instructions :
 *   Créez un tableau multidimensionnel avec des informations sur plusieurs étudiants : prénom, nom, et note.
 *   Affichez la note du premier étudiant.
 */
// echo '<h2> Exercice 5 : créer tableau multidimensionnel </h2>';

// $multiTab = [
//     'etudiant1' => [
//         'prenom' => 'Cedric',
//         'nom' => 'Mathis',
//         'note' => 14
//     ],
//     'etudiant2' => [
//         'prenom' => 'Cynthia',
//         'nom' => 'Piat',
//         'note' => 17
//     ],
//     'etudiant3' => [
//         'prenom' => 'Fanny',
//         'nom' => 'Englist',
//         'note' => 11
//     ]
// ];

// echo 'La note du premier étudiant est :' . $multiTab['etudiant1']['note']; 

/** Exercice 6 : Modifier un tableau multidimensionnel
 *   Objectif : Modifiez un tableau multidimensionnel.
 *   Instructions :
 *   Utilisez le tableau multidimensionnel créé dans l'exercice précédent.
 *   Changez la note du deuxième étudiant.
 *   Affichez toutes les informations du tableau modifié.
 */
// echo '<h2> Exercice 6 : Modifier un tableau multidimensionnel </h2>';

// $multiTab['etudiant2']['note'] = 16;

// echo '<pre>';
// var_dump($multiTab);
// echo '</pre>';


/** Exercice 7 : Boucle for pour parcourir un tableau
 *   Objectif : Utilisez une boucle for pour parcourir un tableau.
 *   Instructions :
 *   Créez un tableau avec les mois de l'année.
 *   Utilisez une boucle for pour afficher chaque mois de l'année.
 */
// echo '<h2> Exercice 7 : Boucle for pour parcourir un tableau </h2>';

// $moisTab = ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre'];

// for($i = 0; $i < count($moisTab); $i++) {
//     echo '<p>' . $moisTab[$i] .'</p>';
// }


/** Exercice 8 Bonus: Rechercher une valeur dans un tableau
 *   Objectif : Cherchez une valeur spécifique dans un tableau.
 *   Instructions :
 *   Créez un tableau avec des numéros aléatoires.
 *   Cherchez si un numéro spécifique est présent dans le tableau. Trouver la méthode pour
 *   Affichez un message en fonction du résultat de la recherche.
 */
// echo '<h2> Exercice 8 : Valeur dans un tableau </h2>';

// $aleatNum = [44, 39, 685, 55, 242, 2, 4, 1, 77];

// if(in_array(10, $aleatNum)) {
//     echo '<p>Ce numéro est bien dans le tableau</p>';
// } else {
//     echo '<p>Ce numéro n\'est pas dans le tableau</p>';
// }


/** Exercice 9 : Fusionner deux tableaux (Bonus)
 *   Objectif : Fusionnez deux tableaux en un seul.
 *   Instructions :
 *   Créez deux tableaux : un contenant des prénoms et un autre contenant des noms de famille.
 *   Fusionnez ces deux tableaux pour créer un tableau de noms complets.
 *   Affichez chaque nom complet sur une ligne.
 *   Aide: utiliser des boucles for
 */
// echo '<h2> Exercice 9 : Fusionner deux tableaux </h2>';

// $prenomsTab = ['Max', 'Stephanie', 'Oceane', 'Alma', 'Sonia', 'Lisa', 'Mitra', 'Eric', 'Antoine'];
// $nomsTab = ['Raspail', 'Dupont', 'Andrieux', 'Duhal', 'Dorval', 'Benguiz', 'Fanzy', 'Rabelais', 'Mozart'];

// $nomsComplets = [];

// for($i = 0; $i < count($prenomsTab); $i++) {
//     $nomsComplets[] = $prenomsTab[$i] . ' ' . $nomsTab[$i];
// }
// var_dump($nomsComplets);



// for($i = 0; $i < count($nomsComplets); $i++) {
//     echo "<p>$nomsComplets[$i]</p>";
// }

//$newPeople = array_merge($prenomsTab, $nomsTab); 
//print_r($newPeople); // mais ici les tableaux sont les uns à la suite des autres 

?> -->