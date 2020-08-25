
<?php

require_once 'db_connection.php';

class Crud {

    private $pdo_connection;

    public function __construct() {

        $database = new Database();
        $db = $database->dbConnection();
        $this->pdo_connection = $db;
    }

    public function createUser($firstname, $lastname, $email) {

        $stmt = $this->pdo_connection->prepare("INSERT INTO users (firstname, lastname, email) VALUES (:firstname, :lastname, :email)");

        return $stmt->execute(array(
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':email' => $email
        ));
    }
}
