
<body>
    <nav class="nav">
        <div class="nav-logo">
            <img src="" alt="" srcset="">
        </div>
        <div class="nav-links">
            <ul>
                <li><a class="btn-main <?php echo $current ? 'current' : '';?>" href=<?php echo $about_link;?>>About</a></li>
                <li><a class="btn-main <?php echo $current ? 'current' : '';?>" href=<?php echo $media_link;?>>Media</a></li>
                <li><a class="btn-main <?php echo $current ? 'current' : '';?>" href=<?php echo $products_link;?>>Products</a></li>
                <li><a class="btn-main <?php echo $current ? 'current' : '';?>" href=<?php echo $contact_link;?>>Contact</a></li>
            </ul>
        </div>
        <div class="nav-shopping">
            <a href="private/pages/shopping-cart.php"><i class="fas fa-shopping-cart"></i></a>
            <p><?php echo !empty($user) ? $user : "Login";?></p>
            <a href=<?php echo $link_logout;?>><i class="fas fa-sign-out-alt"></i></a>
        </div>
    </nav>