<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    





<?php
/** Exercice 1 : Afficher la date actuelle
 * 
 *  Objectif : Afficher la date sous le format 'jour/mois/annee' suivi de 'heure:minute:secondes'
 * 
 *  aide : utiliser la fonction date()
 */

echo '<p>' . date('d/m/Y H:i:s') . '</p>'; 
?>


<?php
/** Exercice 2 : Formater une date
 * 
 *  Objectif : Transformer la date '2024-08-08' en format de type 08/08/2024
 * 
 *  aide : date() combinée à strtotime()
 */
echo "<br>";
$date = '2024-08-08';
echo $date2 = date('d/m/Y', strtotime($date));


?>


<?php
/** Exercice 3 : Calculer l'âge d'une personne
 * 
 *  Objectif : Ecrire un script qui calcul l'age d'une personne née le '15-02-1990'
 *  aide : combinaison date() et strtotime()
 */

$nee = "15-02-1990";
$datActule = date("Y/m/d");
 

?>



<?php


/** Exercice 4 : Afficher le timestamp actuel
 * 
 *  Objectif : Afficher le timstamp actuel et expliquer sa signification
 *  aide : fonction time()
 */

echo "<br>";
echo "<br>";
echo "Le timestamp est le nombre de secondes écoulées entre 1er janvier 1970 et aujourdui " . time();

?>


<?php
/** Exercice 5 : Convertir timestamp en date
 * 
 *  Objectif : Convertir le timstamp actuel en date lisible sous le format 'jour/mois/annee'
 * 
 *  Aide : combinaison date() et time()
 */
echo "<br>";
echo "<br>";
$actuel = time();

echo $date3 = date('d/m/Y', $actuel);
?>


<?php

/** Exercice 6 : Date dans une semaine
 * 
 *  Objectif : Afficher la date qui sera exactement une semaine après la date d'aujourd'hui
 * 
 *  aide : strtotime() avec +1 week
 */
echo "<rb>";

$aujourdui = date('d/m/Y',strtotime("+1 week"));
echo $aujourdui;
?>

<?php
/** Exercice 7 : Nombre de jours entre deux dates (BONUS)
 * 
 *  Objectif : Calculer le nombre de jours entre le 01-01-2024 et aujourd'hui
 * 
 *  Aide : soustraire les timestamps des deux dates et les convertir en jours
 */

?>

<?php

/** Exercice supp : Valider une date
*
*  Objectif : Ecrire une fonction qui valide si une date donnée sous la forme 'dd-mm-yyyy' est valide ou non
*  Testez avec plusieurs dates 😉
*
*  Aide : Utiliser strtotime() et verifier si le resultat est false
*/


// Note à sois-même, les dates sont par défaut en mm/dd/yyyy alors que c'est français :(
    $userdate = ["08/04/2004", "11/11/2011", "21/12/2012", "13/03/2030"];
 
    foreach ($userdate as $key => $value) {
        $verif = strtotime($value);
        if ($verif) {
            echo date("d/m/Y", $verif) . " " . "date valide <br>";
 
        }else {
            echo "date invalide <br>";
        }
    }




?>


</body>
</html>






















<?php








