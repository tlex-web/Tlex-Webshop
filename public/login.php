
<?php 

require_once '../database/CRUD.php';

$username = $password = '';
$email_err = $password_err = '';

function checkData($data) {

    htmlspecialchars($data);
    stripslashes($data);
    trim($data);

    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST["email"])) {

        $email_param = checkData($_POST["email"]);
    }
    else {

        $email_err = 'email is required';
    }
    if (!empty($_POST["password"])) {

        $password_param = checkData($_POST["password"]);
    }
    else {

        $password_err = 'password is required';
    }

    if (empty($email_err) && empty($password_err)) {

        $stmt = "SELECT id, email, password WHERE "
    }

}

?>