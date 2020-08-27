
<nav class="nav">
    <div class="nav-logo">
        <img src="" alt="" srcset="">
    </div>
    <div class="nav-links">
        <ul>
            <li><a class="btn-main <?php $current ? 'current' : '';?>" href="#">About</a></li>
            <li><a class="btn-main <?php $current ? 'current' : '';?>" href="#">Media</a></li>
            <li><a class="btn-main <?php $current ? 'current' : '';?>" href="#">Products</a></li>
            <li><a class="btn-main <?php $current ? 'current' : '';?>" href="#">Contact</a></li>
        </ul>
    </div>
    <div class="nav-shopping">
        <i class="fas fa-shopping-cart"></i>
        <p><?php echo !empty($user) ? $user : "Login";?></p>
        <i class="fas fa-sign-out-alt"></i>
    </div>
</nav>