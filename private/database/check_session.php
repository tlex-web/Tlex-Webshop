
<?php 

$_SESSION['user'] = 'Tim';
$_SESSION['loggedin'] = true;

if (!isset($_SESSION['user']) && $_SESSION['loggedin'] !== true) {
    header("location: ../../public/login.php");
}
