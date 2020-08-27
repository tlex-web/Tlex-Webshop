
<?php 

require_once '../private/database/CRUD.php';

$crud = new Crud();

$firstname = $lastname = $email = $password = $password_confirm = '';
$firstname_err = $lastname_err = $email_err $password_err = $password_confirm_err = '';

function check_input($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST['firstname'])) {
        $firstname_err = 'firstname is required';
    }
    else {
        $firstname = check_input($_POST['firstname']);

        if (!preg_match("/^[a-zA-Z]*$/", $firstname)) {
            $firstname_err = 'Only letters allowed';
        }
    }

    if (empty($_POST['lastname'])) {
        $lastname_err = 'lastname is required';
    }
    else {
        $lastname = check_input($_POST['lastname']);

        if (!preg_match("/^[a-zA-Z]*$/", $lastname)) {
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

    if (empty($_POST["password"]) && empty($_POST["password-confirm"])) {
        $password_err = 'password is required';
    }
    else {
        $password = check_input($_POST["password"]);
        $password_confirm = check_input($_POST["password-confirm"]);

        if ($password !== $password_confirm) {
            $password_confirm_err = 'passwords are not identical'
        }
    }


    // Proceed if the inputs are correct
    if (empty($firstname_err) && empty($lastname_err) && empty($email_err) && empty($password_err) && empty($password_confirm_err)) {
        if ($crud->createUser($firstname, $lastname, $email)) {
            header('location: private/pages/dashboard.php');
        }
        else {
            echo "fail";
        }
    }
}

?>

<div class="container">
    <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="input-fields">
            <label class="label" for="firstname">Firstname</label>
            <input type="text" name="firstname">
            <span class=<?php echo !empty($firstname_err) ? 'danger' : '';?>>* <?php echo $firstname_err;?></span>
        </div>
        <div class="input-fields">
            <label class="label" for="lastname">Lastname</label>
            <input type="text" name="lastname">
            <span class=<?php echo !empty($lastname_err) ? 'danger' : '';?>>* <?php echo $lastname_err;?></span>
        </div>
        <div class="input-fields">
            <label class="label" for="email">E-Mail</label>
            <input type="email" name="email">
            <span class=<?php echo !empty($email_err) ? 'danger' : '';?>>* <?php echo $email_err;?></span>
        </div>
        <div class="input-fields">
            <label class="label" for="password">Password</label>
            <input type="password" name="password">
            <span class=<?php echo !empty($password_err) ? 'danger' : '';?>>* <?php echo $password_err;?></span>
        </div>
        <div class="input-fields">
            <label class="label" for="password_confirm">Password Confirm</label>
            <input type="password" name="password-confirm">
            <span class=<?php echo !empty($password_confirm_err) ? 'danger' : '';?>>* <?php echo $password_confirm_err;?></span>
        </div>
        <input type="submit" value="Registrieren">
    </form>
</div>