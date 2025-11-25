<?php

// Gestion des requêtes ici !

class Contact {
    public $pdo;
    public $name;
    public $email;
    public $phone;

public function __construct() {
    // $this->name = $name;
    // $this->email = $email;
    // $this->phone = $phone;
    try {
    $pdo2 = new Database();
    $this->pdo = $pdo2->getConnection();

//     var_dump($pdo2->getConnection());
    } catch (PDOException $e) {
            // En cas d'erreur de connexion, on capture l'exception
            echo '<p class="error">Erreur de connexion à la base de données : ' . $e->getMessage() . '</p>';
            die; // Arrête le script si la connexion échoue
    }

}


public function verification($name, $email,$phone) {
    // $this->pdo = $pdo;
    if($_SERVER["REQUEST_METHOD"] === "POST") {
    if(isset($_POST["name"]) && !empty($_POST["name"]) && isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["phone"]) && !empty($_POST["phone"])) {

        $result = $this->pdo->prepare("INSERT INTO users (name, email, phone) VALUES (?,?,?)");
        // $this->pdo->lastInsertId();
        var_dump($result);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    }
}

}
}










