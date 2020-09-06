
<?php

require_once 'private/database/CRUD.php';

// Check Session 
require_once 'private/database/check_session.php';

// Set required environment variables -> they will be replaced with session variables
$title = 'Welcome';
$css_file_path = 'src/css/main.css';
$js_file_path = 'src/js/main.js';
$about_link = 'private/pages/about.php';
$media_link = 'private/pages/media.php';
$products_link = 'private/pages/products.php';
$contact_link = 'private/pages/contact.php';
$current = true;
$link_logout = 'public/logout.php';
$user = $_SESSION['user'];

?>

<?php 

include 'private/pages/components/header.php';

?>

<?php

include 'private/pages/components/navbar.php';

?>

<section class="landing">
    <h1 class="heading-primary">Tlex Photography-Webshop</h1>
    <p class="lead">Hello ! I'm pleased to welcome you on my little webshop, where you can find photos from my adventures, informations and much more</p>
    <a class="btn-main move-in-bottom" href="products.php">Have a look</a>
</section>

<?php 

include 'private/pages/components/footer.php';

?>

