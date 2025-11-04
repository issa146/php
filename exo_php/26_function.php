<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <?php
/*

1. Fonction sans paramètres et sans valeur de retour
Exercice : Créez une fonction appelée greet() qui affiche "Hello, world!" lorsqu'elle est appelée.
*/

function greet() {
    echo "Hello, world!";
}
greet();

?>
<?php 
/*
2. Fonction avec paramètres et sans valeur de retour
Exercice : Créez une fonction appelée greetUser() qui prend un paramètre $name et affiche "Hello, [name]!" où [name] est la valeur passée à la fonction.
*/

echo "<br>";
function greetUser($name) {
    echo 'Hello' . " " . $name . '<br>';
}
greetUser("issa");
?>

<?php
/*
3. Fonction avec paramètres et avec valeur de retour
Exercice : Créez une fonction appelée sum() qui prend deux paramètres $a et $b, les additionne, et retourne le résultat.
*/
function sum($a, $b) {
   return $a + $b;
}

echo sum(3,4);

?>

<?php

/*
4. Fonction qui calcule la somme des nombres d'un tableau
Exercice : Créez une fonction appelée sumArray($numbers) qui prend un tableau de nombres $numbers en paramètre et retourne la somme de tous les éléments du tableau.
*/

$numbers = [5,8,7,23,10];


function sumArray() {
    global $numbers;
    $resulta = 0;
    foreach ($numbers as $cle) {
        $resulta += $cle;
    }
    return $resulta;
}

echo sumArray();

?>


<?php

/*
5. Fonction avec paramètre par défaut
Exercice : Créez une fonction appelée greetWithTime() qui prend deux paramètres, un nom $name et un moment de la journée $timeOfDay (par défaut "day"), et qui affiche "Good [timeOfDay], [name]!

Rappel = vous pouvez ajouter une valeur au paramètre de fonction directement comme on a vu (exemple : function salut($name='Cynthia'){echo "Salut $name";})
".
*/

function greetWithTime($name, $timeOfDay = "day") {
    echo $name . " " . "good" . " " .  $timeOfDay . "<br>";
}

echo greetWithTime("issa" );

?>

<?php
/*
6. Fonction qui retourne un tableau
Exercice : Créez une fonction appelée getFruits() qui ne prend aucun paramètre et retourne un tableau contenant trois noms de fruits.
*/

function getFruits() {
    return ["pomme","cerise","fraise"];
}

 $fruits = getFruits();

 var_dump($fruits);
?>

<?php
/*
7. Fonction avec une chaîne de caractères comme paramètre
Exercice : Créez une fonction appelée reverseString($str) qui prend une chaîne de caractères $str en paramètre et retourne cette chaîne en ordre inversé.
*/

function reverseString($str) {
    $motInverser = "";
    $longueur = strlen($str);

    for ($i = $longueur - 1; $i >= 0; $i--) {
        $motInverser .= $str[$i];
    }
}

echo reverseString("bonjour");
?>


<?php

/*
8. Fonction avec paramètres et vérification de type
Exercice : Créez une fonction appelée divide($a, $b) qui prend deux paramètres $a et $b. La fonction doit vérifier que $b n'est pas égal à 0 avant de diviser $a par $b et retourner le résultat. Si $b est égal à 0, la fonction doit retourner un message d'erreur.
*/

function divide($a, $b) {
    if (!is_numeric($a) || !is_numeric($b)) {
        return "les deux valeurs doivent être des nombres.";
    }

    if ($b == 0) {
        return "division par zéro impossible.";
    }

    return $a / $b;
}

echo divide(10, 2);
?>


<?php
/*
9. Fonction qui utilise une boucle pour générer un résultat
Exercice : Créez une fonction appelée generateMultiplicationTable($number) qui prend un nombre $number en paramètre et retourne un tableau contenant la table de multiplication de ce nombre de 1 à 10.
*/

function generateMultiplicationTable($number) {
    if (!is_numeric($number)) {
        return "le paramètre doit être un nombre.";
    }

    $table = []; 

      for ($i = 1; $i <= 10; $i++) {
        $table[] = ($number * $i);
    }

    return $table;
}

$tableau = generateMultiplicationTable(5);
var_dump($tableau);
?>

<?php
/*
10. Fonction avec une condition complexe
Exercice : Créez une fonction appelée checkEligibility($age, $hasLicense) qui prend en paramètre un âge $age et un booléen $hasLicense. La fonction doit retourner "Eligible" si l'utilisateur a 18 ans ou plus et possède un permis de conduire, sinon "Not Eligible".
*/

function checkEligibility($age, $hasLicense) {
     if (!is_numeric($age) || !is_bool($hasLicense)) {
        return "les paramètres ne sont pas valides.";
     }

     if ($age >= 18 && $hasLicense) {
        return "Eligible";
    } else {
        return "Not Eligible";
    }
}

echo checkEligibility(20, true);


?>




</body>
</html>






<?php


















