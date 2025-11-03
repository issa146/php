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




echo "Menu pour issa : " ."<br>". $menu["entrées"]["nom"][array_rand($menu["entrées"]["nom"])] ." ";

echo  $menu ['entrées'] ['prix']  [array_rand($menu["entrées"]["prix"])];
echo " € ";
echo "<br>";
// -------------------------------------------------------------------------------------------------------------
echo $menu["plats"]["nom"][array_rand($menu["plats"]["nom"])]." ";
echo $menu ['plats'] ['prix'] [array_rand($menu["plats"]["prix"])];
echo " € ";
echo "<br>";
// --------------------------------------------------------------------------------------------------------
echo $menu["dessert"]["nom"][array_rand($menu["dessert"]["nom"])]." ";
echo $menu ['dessert'] ['prix'] [array_rand($menu["dessert"]["prix"])];
echo " € ";
echo "<br>";





?>
</body>
</html>