<nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="<?= $base_url ?>index.php" class="navbar-brand">MauJual</a>
            </div>
            <div class="navbar-right">
                
                <?php if(!isset($_SESSION['WHOIS'])): ?>
                <p class="navbar-text" ><a href="<?= $base_url ?>page/login_page.php" class="navbar-link">login</a></p>
                <p class="navbar-text" ><a href="<?= $base_url ?>page/register_page.php" class="navbar-link">Daftar</a></p>
                <?php else : ?>
                <p class="navbar-text"><?= $_SESSION['WHOIS'] ?> | <a href="<?= $base_url ?>page/logout.php" class="navbar-link">logout</a></p>
                <?php endif; ?>
            </div>
                <ul class="nav navbar-nav">
                    <li><a href="<?= $base_url ?>index.php">Beranda</a></li>
                    <?php   if (isset($_SESSION['status_lvl'])){ ?>
                                <li><a href="<?= $base_url ?>page/cart_page.php">Keranjang</a></li>
                    <?php   if ($_SESSION['status_lvl']==2) : ?>
                                <li><a href="<?= $base_url ?>page/seller_page.php">Jualanku</a></li>
                    <?php endif;} ?>
                </ul>
        </div>
</nav>