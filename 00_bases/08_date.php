<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="img_div">
        <img src="./img/logo_poleS.png" alt="Logo poleS">
    </div>

     <h1>Les dates</h1>

    <div class="topnav">
	    <a href="01_bases.php">01.Bases</a>
        <a href="02_variables.php">02.Les variables</a>
        <a href="03_constantes.php">03.Les constantes</a>
        <a href="04_arithmetiques.php">04.Arithmétiques</a>
        <a href="05_conditions.php">05.Conditions</a>
        <a href="06_tableaux.php">06.Tableaux</a>
        <a href="07_boucles.php">07.Boucles</a>
        <a href="08_dates.php">08.Dates</a>
        <a href="09_fonctions.php">09.Fonctions</a>
        <a href="10_inclusion.php">10.Inclusion</a>
    </div>

    <?php
    //--------------------
    echo '<h2> Gestion des dates </h2>';
    //--------------------
    echo '<pre>';
    // définir le fusaux horaire
    date_default_timezone_set("Europe/Paris");
        echo 'echo date(\'d/m/Y H:i:s\');// date() retourne la date de maintenant selon le format indiqué. d pour jour, m pour mois, Y pour année sur 4 chiffres, y pour année sur 2 chiffres, H pour heure sur 24h, h pour heure sur 12h, i pour minute et s pour seconde;';
    echo '</pre>';
    echo '<p>' . date('d/m/Y H:i:s') . '</p>';  // date() retourne la date de maintenant selon le format indiqué. d pour jour, m pour mois, Y pour année sur 4 chiffres, y pour année sur 2 chiffres, H pour heure sur 24h, h pour heure sur 12h, i pour minute et s pour seconde.   

    echo '<pre>';
        echo 'echo date(\'Y-m-d\');// on peut changer l\'ordre des paramètres ainsi que le séparateur';
    echo '</pre>';
    echo '<p>' . date('Y-m-d') . '</p>';  // on peut changer l'ordre des paramètres ainsi que le séparateur

    //----
    // Le timestamp :
    // Le timestamp est le nombre de secondes écoulées entre une certaine date et le 1er janvier 1970 à 00:00:00. Cette date correspond à la création du système UNIX.
    // Ce système de timestamp est utilisé par de nombreux langages de programmation dont le PHP et le JavaScript. 

    //----
    echo '<p>Le timestamp: Le timestamp est le nombre de secondes écoulées entre une certaine date et le 1er janvier 1970 à 00:00:00. Cette date correspond à la création du système UNIX. Ce système de timestamp est utilisé par de nombreux langages de programmation dont le PHP et le JavaScript.</p>';
    echo '<pre>';
        echo 'echo time();// retourne l\'heure actuelle en timestamp';
    echo '</pre>';
    echo '<p>' . time() . '</p>';   // retourne l'heure actuelle en timestamp

    //----
    // Changer le format d'une date (méthode procédurale) :
    echo '<p>Changer le format d\'une date (méthode procédurale):</p>';
    echo '<pre>';
        echo '$dateJour = strtotime(\'27-09-2018\');// transforme la date exprimée en string en timestamp';
        echo 'echo $dateJour;// affiche le timestamp du jour';
    echo '</pre>';

    $dateJour = strtotime('27-09-2018'); // transforme la date exprimée en string en timestamp
    echo '<p>' . $dateJour . '</p>';  // affiche le timestamp du jour

    echo '<pre>';
    echo 'var_dump(strtotime(\'13-13-2018\'));// ici retourne false car la date fournie n\'est pas valide. Cette fonction permet donc de valider une date.';
    echo '</pre>';
    var_dump(strtotime('13-13-2018')); // ici retourne false car la date fournie n'est pas valide. Cette fonction permet donc de valider une date.

    echo '<pre>';
    echo '$dateFormat = date(\'Y-m-d\', $dateJour);// transforme un timestamp en une date formatée en année-mois-jour';
    echo 'echo $dateFormat;';
    echo '</pre>';
    $dateFormat = date('Y-m-d', $dateJour);

    echo $dateFormat; // Affiche "2018-09-27"
    echo '<p>' . $dateFormat . '</p>';

    /*****************************************************************************/
    // Exemple de cas où strtotime nous servirait
    // 1- vérifier si une date est passée ou si une autre date est dans le futur.

    $dateJour = strtotime('27-09-2018');
    $now = time(); // Timestamp actuel
    if ($dateJour < $now) {
        echo "Cette date est passée.";
    } else {
        echo "Cette date est dans le futur.";
    }

   // 2- Après avoir converti une date en timestamp, on peut la reformater dans un autre format en utilisant la fonction date(). Par exemple, convertir une date en anglais ou afficher la date sous un autre format.

    $dateJour = strtotime('27-09-2018');
    echo date('l, d F Y', $dateJour); // Affiche la date sous forme : Thursday, 27 September 2018


    // 3- calculer combien de jours se sont écoulés entre deux dates.

    $date1 = strtotime('27-09-2018');
    $date2 = strtotime('01-10-2018');
    var_dump("<p> Valeur date 2: ".$date2."</p>");
    var_dump("<p>Valeur date 1: ".$date1."</p>");
    $diffSeconds = $date2 - $date1;
    var_dump("<p> Valeur différence dates: ".$date2."</p>");
    $diffDays = $diffSeconds / (60 * 60 * 24); // Convertir secondes en jours

    echo "<p>Il y a $diffDays jours entre les deux dates.</p>";

    // convertion timestamp en date lisible

    $timestamp = 1633039200; // Correspond au 30 septembre 2021 à 10:00PM

    // Conversion du timestamp en date lisible
    $dateLisible = date('d-m-Y H:i:s', $timestamp);

    echo "<p>Date lisible : $dateLisible</p>";

    //---------------------------------------------------------------------------------------
    // Changer le format d'une date (méthode objet) :
    echo '<p>Changer le format d\'une date (méthode objet) :</p>';
    echo '<pre>';
        echo '$date = new DateTime(\'11-04-2017\');// $date est un objet date qui représente le 11-04-2017';
        echo 'echo $date->format(\'Y-m-d\'); // on peut formater cet objet date en appelant sa méthode format() et en lui indiquant les paramètres du format, ici Y-m-d. Affiche 2017-04-11.';
    echo '</pre>';

    $date = new DateTime('11-04-2017'); // $date est un objet date qui représente le 11-04-2017
    echo '<p>' . $date->format('Y-m-d') . '</p>'; // on peut formater cet objet date en appelant sa méthode format() et en lui indiquant les paramètres du format, ici 'Y-m-d'. Affiche '2017-04-11'.
    ?>

</body>
</html>













<?php

/** Exercice 1 : Afficher la date actuelle
 * 
 *  Objectif : Afficher la date sous le format 'jour/mois/annee' suivi de 'heure:minute:secondes'
 * 
 *  aide : utiliser la fonction date()
 */

echo '<h2> Exercice 1 : Afficher la date actuelle </h2>';

$date = date('d-m-Y h:i:s'); 

echo $date;

/** Exercice 2 : Formater une date
 * 
 *  Objectif : Transformer la date '2024-08-08' en format de type 08/08/2024
 * 
 *  aide : strtotime() combiné à date()
 */

echo '<h2> Exercice 2 : Formater une date </h2>';

$dateString = "2024-08-08";

$timeStamped = strtotime($dateString);

$newDate = date("d/m/Y", $timeStamped);

echo $newDate;

/** Exercice 3 : Calculer l'âge d'une personne
 * 
 *  Objectif : Ecrire un script qui calcul l'age d'une personne née le '15-02-1990'
 * 
 *  aide : combinaison date() , strtotime() et time()
 * 
 */

echo '<h2> Exercice 3 : Calculer l\'âge d\'une personne </h2>';

// On met la date de naissance de la personne
$naissance = '15-02-1990';

// On converti la date avec strtotime()
$timeStampNaissance = strtotime($naissance);

// On récupère le timestamp actuel : 
$now = time();

// On calcule la différence en années :

$age = date('Y', $now) - date('Y', $timeStampNaissance);

// Petit bonus verification mois
// si le mois et le jour d'aujourd'hui sont inférieurs au mois et jours de la date de naissance, c'est que l'utilisateur n'a pas encore eut son anniversaire
if (date('md', $now) < date('md', $timeStampNaissance)) { //date('md') : extrait le mois et le jour sous format MMDD exemple : 1502 avec l'anniversaire 
    $age--;
}

echo "L'age de la personne est : $age";


/** Exercice 4 : Afficher le timestamp actuel
 * 
 *  Objectif : Afficher le timstamp actuel et expliquer sa signification
 * 
 *  aide : fonction time()
 * 
 */

echo '<h2> Exercice 4 : Afficher le timstamp actuel </h2>';

echo "timestamp actuel : " . time();
// Explication du timestamp
echo ' <br> Le timestamp actuel est le nombre de secondes écoulées depuis le 1er janvier 1970 à 00:00:00 UTC (système UNIX). Cette date est appelée "Epoch". Le timestamp est souvent utilisé en programmation pour représenter un instant précis dans le temps de manière numérique.';

/** Exercice 5 : Convertir timestamp en date
 * 
 *  Objectif : Convertir le timstamp actuel en date lisible sous le format 'jour/mois/annee'
 * 
 *  Aide : combinaison date() et time()
 */

echo '<h2> Exercice 5 : Convertir timestamp en date </h2>';

$timeStamp = time();

$now = date('d/m/Y', $timeStamp);

echo $now;


/** Exercice 6 : Date dans une semaine
 * 
 *  Objectif : Afficher la date qui sera exactement une semaine après la date d'aujourd'hui
 * 
 *  aide : strtotime() avec +1 week
 */

echo '<h2> Exercice 6: One week later </h2>';


$now = time();

$oneWeek = strtotime('+1 week', $now);

$formattedDate = date('d-m-Y', $oneWeek);

echo "Dans une semaine, nous serons le : $formattedDate";



/** Exercice 7 : Nombre de jours entre deux dates (BONUS)
 * 
 *  Objectif : Calculer le nombre de jours entre le 01-01-2024 et aujourd'hui
 * 
 *  Aide : soustraire les timestamps des deux dates et les convertir en jours
 */

echo '<h2> Exercice 7 : Nombre de jours entre deux dates </h2>';

$janvier = '01-01-2024';

$formatedJanvier = strtotime($janvier);

$now = time();

$secondes = $formatedJanvier - $now;

$differencesJours = round($secondes / (60 * 60 * 24));

echo "Nombre de jours entre le 1er janvier 2024 et aujourd'hui est : $differencesJours";



/** Exercice supp : Valider une date
 * 
 *  Objectif : Ecrire une fonction qui valide si une date donnée sous la forme 'dd-mm-yyyy' est valide ou non
 *  Testez avec plusieurs dates 😉
 * 
 *  Aide : Utiliser strtotime() et verifier si le resultat est false
 * 
 */

echo '<h2> Exercice supp : Valider une date </h2>';

function validateDate($date)
{
    $newDate = strtotime($date);

    if (!$newDate) {
        echo 'Date invalide <br>';
    } else {
        echo 'Date valide <br>';
    }
}

validateDate('22-05-1992'); // Valide
validateDate('22-05-3005'); // Valide (l'année 3005 existera un jour)
validateDate('33-06-2024'); // Invalide (max jours dans le mois 31)