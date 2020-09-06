
<?php 

// Check session 
require_once '../database/check_session.php';

// Set required environment variables
include '../../config/env.php';

include 'components/header.php';

?>

<?php 

include 'components/navbar.php';

?>

<!-- Main Content -->

<section class="section-a">
    <h3 class="heading-3">About me and my work</h3>

    <div class="introduction">
        <img src="../../src/img/about.jpg" class="introduction-image" alt="Portrait">
        <div class="introduction-text">
            <p class="lead">First of all I want to introduce myself in a few words. I am Tim Lui and I study business informatics at the university of applied siences in Trier. Alongside my studies I challenge myself in coding, mountain biking, drumming, gaming, hiking and photographing. So this project unites some of my passions which I want to share with you guys and I even want to offer you some of my impressions. 
            </p>
        </div>
        <div class="introduction-picture-1">
            <i class="fas fa-bike fa-3x"></i>
        </div>
        <div class="introduction-picture-2">
            <i class="fas fa-code fa-3x"></i>
        </div>
        <div class="introduction-picture-3">
            <i class="fas fa-camera fa-3x"></i>
        </div>
    </div>
</section>

<?php

include 'components/footer.php';

?>
