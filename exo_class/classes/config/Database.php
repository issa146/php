<?php

class Database {
public $pdo;



    public function getConnection() {
          try {
            $this->pdo =  new PDO(
                'mysql:host=localhost;dbname=societe',
                'root',
                '',
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8'
                )
            );
            echo "Connexion à la BDD réussie";
            var_dump($this->pdo);
        } catch (PDOException $e) {
            // En cas d'erreur de connexion, on capture l'exception
            echo '<p class="error">Erreur de connexion à la base de données : ' . $e->getMessage() . '</p>';
            die; // Arrête le script si la connexion échoue
        }
        return $this->pdo;
            }
        }
?>



