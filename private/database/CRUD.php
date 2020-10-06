
<?php

require_once 'DB.php';

class Crud {

    private $pdo_connection;

    public function __construct() {

        $database = new Database();
        $db = $database->dbConnection();
        $this->pdo_connection = $db;
    }

    public function createUser($firstname, $lastname, $password, $email) {

        $stmt = $this->pdo_connection->prepare("INSERT INTO `users` (firstname, lastname, email) VALUES (:firstname, :lastname, :email);");

        return $stmt->execute(array(
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':password' => $password,
            ':email' => $email
        ));
    }

    public function readUser($email, $password) {

        $stmt = $this->pdo_connection->prepare("SELECT (email, password) from `users` WHERE (:email, :password);");

        return $stmt->execute(array(
            ':email' => $email,
            ':password' => $password
        ));
    }

    public function updateUser($email, $password) {

        $stmt = $this->pdo_connection->prepare("UPDATE `users` SET `password` = ':password' WHERE `users`.`:email` = :email;");

        return $stmt->execute(array(
            ':password' => $password,
            ':email' => $email
        ));
    }

    public function deleteUser($email) {

        $stmt = $this->pdo_connection->prepare("DELETE * FROM `users` WHERE `users`.`email` = :email;");

        return $stmt->execute(array(
            ':email' => $email
        ));
    }
}
