
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

include 'private/pages/components/header.php';

include 'private/pages/components/navbar.php';

?>

<section class="landing">
    <h1 class="heading-primary"><span class="typewriter"></span></h1>
    <p class="lead">Hello ! I'm pleased to welcome you on my little web-shop, where you can find photos from my adventures, information's and much more</p>
    <a class="btn-main move-in-bottom" href="products.php">Have a look</a>
</section>

<script src="src/js/typewriter.js"></script>

<?php 

include 'private/pages/components/footer.php';

?>

