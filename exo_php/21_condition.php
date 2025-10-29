<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <?php
    /** Exercice 1 : Vérifier la validité d'un âge
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable age est valide (entre 0 et 120)
 *  
 *  Afficher un message indiquant si l'âge est valide ou non 
 * 
 * petit bonus : vérifier que l'âge est un nombre entier et non un décimal
 */


    $age = 130;
    if (is_int($age)) {
           if ( $age >= 0 && $age <= 120) {
        echo "c'est bon";
    } else {
        echo "c'est pas bon";
    }
        
    }

 


    ?>



<?php



/** Exercice 2 : Calculer la réduction
 * 
 *  Objectif : Ecrire une condition qui applique une réduction de 10% si le montant est supérieur à 100 (créer une variable montant), et 5% si le montant est entre 50 et 100€, sinon, aucune réduction n'est appliquée
 *  Bonus: trouver comment avoir la moyenne en entier et non en décimal
 * 
 *
 */


echo "<br>";
$montant = 100;

if ($montant > 100) {
    echo "vous avez une réduction de 10%";
} else if ($montant >= 50 && $montant <= 100) {
    echo "vous avez une réduction de 5%";
}else {
    echo "vous avez aucune réduction";
}

?>


<?php
/** Exercice 3 : Afficher le jour de la semaine
 * 
 *  Objectif : Ecrire une condition 'switch' pour afficher un message en fonction du jour de la semaine, le jour est donnée par une variable $jour en number (1 pour lundi, 2 pour mardi etc...)
 * 
 */


$jour = 5;

switch($jour) {
    case 1 :
        echo "<h1>lundi</h1>";
        break;
    case 2 :
        echo "<h1>mardi</h1>";
        break;
    case 3 :
        echo "<h1>mercredi</h1>";
        break;
    case 4 :
        echo "<h1>jeudi</h1>";
        break;
    case 5 :
        echo "<h1>vendredi</h1>";
        break;
    case 6 :
        echo "<h1>samedi</h1>";
        break;
    case 7 :
        echo "<h1>dimanche</h1>";
        break;
    
}


// if ($jour == 1) {
//     echo "lundi";
// } else if ($jour == 1) {

// }else if ($jour == 2) {
//     echo "mardi";
    
// }else if ($jour == 3) {
//     echo "mercredi";
    
// }else if ($jour == 4) {
//     echo "jeudi";
    
// }else if ($jour == 5) {
//     echo "vendredi";
    
// }else if ($jour == 6) {
//     echo "samedi";
    
// }else if ($jour == 7) {
//     echo "dimanch";
    
// }







?>



<?php
/** Exercice 4 : Comparaison de chaines de caractères
 *  Objectif : Ecrire une condition qui compare si deux variables sont identiques, la condition doit vérifier le type ET la valeur 
 */

$prenom1 = "issa";
$prenom2 = "issa";

if ($prenom1 === $prenom2) {
    echo "ils sont égaux";
} else {
    echo "ils sont pas égaux";
}

?>


<?php

/** Exercice 5 : Calcul de la moyenne
 *  
 *  Objectif : Ecrire un script qui vérifie si la moyenne trois notes est suffisante pour passer un examen, la moyenne doit être supérieure ou égale à 10 (afficher un message pour chacun des cas)
 * 
 */

echo "<br>";

$notes = 20;

if ($notes >= 10) {
    echo "vous avez réussi";
} else if ($notes < 10) {
    echo "vous avez pas réussi";
}


?>


<?php


/** Exercice 6 : Tester une variable indéfinie
 * 
 *  Objectif : Ecrire une condition qui utilisera 'isset()' pour vérifier si une variable $var est définie, si elle est définie, afficher sa valeur, sinon afficher un message indiquant qu'elle n'est pas définie
 * 
 * Tentez avec null, '', 0 
 */

echo "<br>";

$var = 4;

if(isset($var)) {
    echo $var;
} else {
   echo "elle n'est pas définie";
}

?>


<?php
/** Exercice 7 : Valider un formulaire
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable $nom est vide avec empty(), si c'est le cas, afficher un message qui demandera à l'utilisateur de remplir le champ
 *  Pas besoin d'un formulaire, faites juste une variable et tester en changeant les valeurs: string vide, non NULL...
 * 
 */

echo "<br>";
$nom = "rthrt";

if (empty($nom)) {
    echo "il faut remplir le champ";
} else {
    echo $nom;
}

?>

<?php

/** Exercice 8 : Vérification d'un numéro pair ou impair
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable a une valeur paire ou impaire (utiliser modulo)
 * 
 */

$nombre = 10;

if ($nombre % 2 == 0) {
    echo "paire";
} else {
    echo "impaire";
}


?>


<?php


/** Exercice 9 : Catégoriser une personne selon son âge
 * 
 *  Objectif : Ecrire une/des condition(s) qui classe une personnee en 'enfant','adolescent','adulte' ou 'senior' selon son age
 */

echo "<br>";

$agebis=80;
 
if($agebis<=10){
    echo " enfant <br>";
}elseif($agebis<18){
    echo " ado <br>";
 
}elseif($agebis<65){
    echo " adulte <br>";
 
}elseif($agebis<120){
    echo " senior <br>";
}elseif($agebis<150){
    echo " 6 pieds sous terre <br>";
 
}


?>



<?php


/** Exercice 10 : Vérifier la cohérence des réponses avec l'opérateur XOR
 * 
 *  Objectif : Ecrire des conditions et vérifier la cohérence de ces réponses
 * 
 *  Exemple : Nous avons une vérification a faire pour vérifier si l'utilisateur se connecte avec son empreinte digitale ou son mdp (il ne peut pas faire les deux en même temps)
 * 
 *  xor : L'une des deux conditions doit être vraie seulement, si les deux sont vraies, alors il retournera false
 *  contrairement à || (or) qui vérifiera si au moins l'une des deux conditions est vraie, même si les deux le sont
 * 
 */

$empdgi = true;
$mdp = false;

if($empdgi xor $mdp) {
    echo "c'est bon";
}else {
    echo "c'est pas bon";
}





?>




</body>
</html>





<?php
























?>
