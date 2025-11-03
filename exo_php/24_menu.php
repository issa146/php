<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php

$menu = [

     
    'entrées' => [
        'nom' => ['Tempura','Salade','Crêpe chèvre miel', 'Oeuf benedicte'],
        'prix' => [13,8,2,1]
      
    ],
    'plats' => [
        'nom' => ['Souris d agneau', 'Pâte bolognaise', 'Lasagne', 'Pizza pesto'],
        'prix' => [13,27,32,25]
    ],
    'dessert' => [
        'nom' => ['Cheesecake Framboise', 'Brownies', 'Ice cream', 'Tiramisu'],
        'prix' => [7,9,11,13]
    ]
];
 
$personnes = ["Issa","Hayata", "Ryan"];



foreach ($personnes as $personne) {
    echo "<h3>Menu pour $personne :</h3>";

     $total = 0;

    foreach ($menu as $categorie => $items) {

        $index = array_rand($items['nom']);

        $nom = $items['nom'][$index];
         $prix = $items['prix'][$index]; 

         echo $categorie . " : " . $nom . " - " . $prix . " €<br>";

         $total += $prix;
        }

            if ($total > 20) {
            $reduction = $total * 0.10;
            $total -= $reduction;
            echo "Réduction de 10% appliquée :" . $reduction . " €<br>";
        }
        echo "Total à payer : " . $total . " €<br>";
    }



// foreach ($menu as $categorie => $items) {
//     $indexNom = array_rand($items['nom']);
//     $indexPrix = array_rand($items['prix']);

//     echo  "Menu pour issa : " ."<br>". $categorie . " : " . $items['nom'][$indexNom] . " - " . $items['prix'][$indexPrix] . " €<br>";
// }

// foreach ($menu as $categorie => $items) {
//     $indexNom = array_rand($items['nom']);
//     $indexPrix = array_rand($items['prix']);

//     echo  "Menu pour hayata : " ."<br>". $categorie . " : " . $items['nom'][$indexNom] . " - " . $items['prix'][$indexPrix] . " €<br>";
// }

// foreach ($menu as $categorie => $items) {
//     $indexNom = array_rand($items['nom']);
//     $indexPrix = array_rand($items['prix']);

//     echo  "Menu pour ryan : " ."<br>". $categorie . " : " . $items['nom'][$indexNom] . " - " . $items['prix'][$indexPrix] . " €<br>";
// }



// echo "Menu pour issa : " ."<br>". $menu["entrées"]["nom"][array_rand($menu["entrées"]["nom"])] ." ";

// echo  $menu ['entrées'] ['prix']  [array_rand($menu["entrées"]["prix"])];
// echo " € ";
// echo "<br>";
// -------------------------------------------------------------------------------------------------------------
// echo $menu["plats"]["nom"][array_rand($menu["plats"]["nom"])]." ";
// echo $menu ['plats'] ['prix'] [array_rand($menu["plats"]["prix"])];
// echo " € ";
// echo "<br>";
// --------------------------------------------------------------------------------------------------------
// echo $menu["dessert"]["nom"][array_rand($menu["dessert"]["nom"])]." ";
// echo $menu ['dessert'] ['prix'] [array_rand($menu["dessert"]["prix"])];
// echo " € ";
// echo "<br>";







?>
</body>
</html>