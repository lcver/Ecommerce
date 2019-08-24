<nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="<?= $base_url ?>index.php" class="navbar-brand">MauJual</a>
            </div>
            <div class="navbar-right">
                
                <?php if(!isset($_SESSION['WHOIS'])): ?>
                <p class="navbar-text" ><a href="page/login_page.php" class="navbar-link">login</a></p>
                <?php else : ?>
                <p class="navbar-text"><?= $_SESSION['WHOIS'] ?> | <a href="<?= $base_url ?>page/logout.php" class="navbar-link">logout</a></p>
                <?php endif; ?>
            </div>
                <?php 
                    if (isset($_SESSION['status_lvl'])){
                        if ($_SESSION['status_lvl']==2) : ?>
                    <ul class="nav navbar-nav">
                        <li><a href="<?= $base_url ?>index.php">Beranda</a></li>
                        <li><a href="<?= $base_url ?>page/cart_page.php">Keranjang</a></li>
                        <li><a href="<?= $base_url ?>page/seller_page.php">Halaman Penjual</a></li>
                    </ul>
                <?php   elseif($_SESSION['status_lvl']==1): ?>
                    <ul class="nav navbar-nav">
                        <li><a href="<?= $base_url ?>index.php">Beranda</a></li>
                        <li><a href="">Keranjang</a></li>
                    </ul>
                <?php endif;} ?>
        </div>
</nav>