
<?php

require_once 'private/database/CRUD.php';

// Set required environment variables
$title = 'Welcome';
$css_file_path = 'src/css/main.css';

$crud = new Crud();

$firstname = $lastname = $email = null;
$firstname_err = $lastname_err = $email_err = null;

function check_input($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST['firstname'])) {
        $firstname_err = 'Firstname is required';
    }
    else {
        $firstname = check_input($_POST['firstname']);

        if (!preg_match("/^[a-zA-Z]*$/", $firstname)) {
            $firstname_err = 'Only letters allowed';
        }
    }

    if (empty($_POST['lastname'])) {
        $lastname_err = 'Lastname is required';
    }
    else {
        $lastname = check_input($_POST['lastname']);

        if (!preg_match("/^[a-zA-Z]*$/", $firstname)) {
            $lastname_err = 'Only letters allowed';
        }
    }

    if (empty($_POST['email'])) {
        $email_err = 'email is required';
    }
    else {
        $email = check_input($_POST['email']);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = 'Invalid email format';
        }
    }

    // Proceed if the inputs are correct
    if (empty($firstname_err) && empty($lastname_err) && empty($email_err)) {
        if ($crud->createUser($firstname, $lastname, $email)) {
            header('location: private/pages/dashboard.php');
        }
        else {
            echo "fail";
        }
    }
}

?>

<?php 

include 'private/pages/components/header.php';

?>

<body>
    <h1>Welcome</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="text" name="firstname">
        <span class="<?php echo $firstname_err;?>"></span>
        <input type="text" name="lastname">
        <span class="<?php echo $lastname_err;?>"></span>
        <input type="email" name="email">
        <span class="<?php echo $email_err;?>"></span>
        <input type="submit" value="Submit">
    </form>
    <script src="src/js/main.js"></script>
</body>

<?php 

include 'private/pages/components/footer.php';

?>

