<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les bases en PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="img_div">
        <img src="./img/logo_poleS.png" alt="Logo poleS">
    </div>

    <h1>les variables en php</h1>

    <div class="topnav">
        <a href="01_bases.php">01.Les bases</a>
        <a href="02_variables.php">02.Les variables</a>
        <a href="03_constantes.php">03.Les constantes</a>
        <a href="04_arithmetiques.php">04.Arithméthiques</a>
    </div>

    <?php
    echo '<p>Déclaration et affectation de variables</p>';
        $firsVar = 150;
        var_dump($firsVar);
        echo gettype($firsVar);

        echo "<br>";
        
        $secondVar = "alors ";
        var_dump($secondVar);
        echo gettype($secondVar);

        echo "<br>";

        $thirdVar = true;
        var_dump($thirdVar);
        echo gettype($thirdVar);
    ?>

    </body>
</html>