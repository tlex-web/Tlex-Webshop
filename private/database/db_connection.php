
<?php

class Database {

    private $host = null;
    private $name = null;
    private $user = null;
    private $pw = null;
    private $charset = null;
    public $pdo_connection;

    public function dbConnection() {

        $this->setParams();

        try {
            $this->pdo_connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->name, $this->user, $this->pw);
            $this->pdo_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $err) {
            echo "DB Connection Error: " . $err->getMessage();
        }
        return $this->pdo_connection;
    }

    private function setParams() {

        $config = parse_ini_file('config/db_params.php');

        $this->host = $config['host'];
        $this->name = $config['name'];
        $this->user = $config['user'];
        $this->pw = $config['pw'];
    }
}

?>