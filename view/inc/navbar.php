<div class="nav">
    <div class="nav-left">
        <img src="./view/public/images/logo-1.jpg" width="100px" alt="">
    </div>
    <div class="nav-center">
        <ul class="list-menu">
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="">Thương hiệu</a></li>
            <li><a href="">Liên hệ</a></li>
            <li><a href="">Tin tức</a></li>
            <li><a href="">Store</a></li>
            <li>
            <?php if (isset($_SESSION['user'])) { ?>
                <a class="" href="<?php echo BASE_URL . '/admin/product'; ?>" class="text-gray-200 hover:text-white transition">Admin</a>
               
              <?php } ?>
            </li>
        </ul>
    </div>
    <div class="nav-right">
        <div class="cart-icon">
            <a href="cart.php"> <i class="fa-solid fa-cart-shopping"></i></a>
            <?php echo number_cart_product() ?>
        </div>
        <div class="search-nav">
           <div>
           <form action="search.php" method="get">
                <input type="text" name="search" placeholder="search">
                <button type="search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
           </div>
        </div>
    </div>
</div>