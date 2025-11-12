<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix de couleur de fond</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="white">
    <h1>Choisissez votre couleur de fond :</h1>

    <form action="" method="POST">
        <input type="radio" id="color" name="color" value="red">
        <label for="red">Rouge</label><br>

        <input type="radio" id="color" name="color" value="green">
        <label for="green">Vert</label><br>

        <input type="radio" id="color" name="color" value="blue">
        <label for="blue">Bleu</label><br>

        <input type="submit" value="Appliquer">
    </form>

    <!-- Lien vers la deuxième page -->
    <h2><a href="page2.php">Aller à la deuxième page</a></h2>

    <h2><a href="">Réinitialiser la couleur</a></h2>


    <?php

    if(isset($_POST["color"])){
        $color = $_POST["color"];
    } else if (isset($_COOKIE["color"])) {
        $color = $_COOKIE["color"];
    } else {
        $langue = "white";
    }


    setcookie("color", $color, time()  + 365 * 24 * 60 * 60);
    var_dump($_COOKIE);


    if($color = $_POST["color"]) {
        echo "<body class='red'></body>";
    } else if ($color = $_POST["color"]) {
        echo "<body class='green'></body>";
    } else {
        echo "<body class='blue'></body>";
    }

    ?>

</body>

</html>