
<?php

require_once 'private/database/CRUD.php';

// Set required environment variables -> they will be replaced with session variables
$title = 'Welcome';
$css_file_path = 'src/css/main.css';
$current = false;
$user = '';

?>

<?php 

include 'private/pages/components/header.php';

?>

<body>
    <?php

    include 'private/pages/components/navbar.php';

    ?>
    <section class="about-a">
        <h1 class="heading-primary">Tlex Photography-Webshop</h1>
        <p class="lead">Hello. I'm pleased to welcome you on my little webshop, where you can find photos from my adventures, informations and much more!</p>
        <a class="btn-main move-in-bottom" href="products.php">Have a look</a>
    </section>

    <section class="about-b">
        
    </section>

<?php 

include 'private/pages/components/footer.php';

?>

