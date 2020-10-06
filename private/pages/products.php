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

<section class="products">
    <h2 class="heading-secondary">Product Overview</h2>
</section>