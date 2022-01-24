<?php $actual_link =$_SERVER['PHP_SELF'];
$file = explode('/',$actual_link);
 ?>
<?php include_once 'server.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Amado - Furniture Ecommerce Template | Cart</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">

</head>

<body>
<!-- Search Wrapper Area Start -->
<div class="search-wrapper section-padding-100">
    <div class="search-close">
        <i class="fa fa-close" aria-hidden="true"></i>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="search-content">
                    <form action="#" method="get">
                        <input type="search" name="search" id="search" placeholder="Type your keyword...">
                        <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search Wrapper Area End -->

<!-- ##### Main Content Wrapper Start ##### -->
<div class="main-content-wrapper d-flex clearfix">

    <!-- Mobile Nav (max width 767px)-->
    <div class="mobile-nav">
        <!-- Navbar Brand -->
        <div class="amado-navbar-brand">
            <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
        </div>
        <!-- Navbar Toggler -->
        <div class="amado-navbar-toggler">
            <span></span><span></span><span></span>
        </div>
    </div>

    <!-- Header Area Start -->
    <header class="header-area clearfix">
        <!-- Close Icon -->
        <div class="nav-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <!-- Logo -->
        <div class="logo">
            <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
        </div>
            <!-- Amado Nav -->
        <nav class="amado-nav">
            <ul>
                <li class="<?php if ($file[3] == 'index.php') { echo 'active';}?>"><a href="index.php">Home</a></li>
                <li class="<?php if ($file[3] == 'shop.php') { echo 'active';}?>"><a href="shop.php">Shop</a></li>
                <li class="<?php if ($file[3] == 'product-details.php') { echo 'active';}?>"><a href="product-details.php">Product</a></li>
                <li class="<?php if ($file[3] == 'cart.php') { echo 'active';}?>"><a href="cart.php">Cart</a></li>
            </ul>
        </nav>
        <!-- Button Group -->
        <?php if ($session->get() == '') {echo '<div class="amado-btn-group mt-30 mb-100">
            <a href="account/login" class="btn amado-btn mb-15">Login</a>
            <a href="account/register" class="btn amado-btn active">Register</a>
        </div>';} else {echo '<a href="account/logout.php" class="btn amado-btn mb-15">Log out</a>';}
        ?>
        <!-- Cart Menu -->
        <div class="cart-fav-search mb-100">
            <a href="cart.php" class="cart-nav"><img src="img/core-img/cart.png" alt=""> Cart <span>(0)</span></a>
            <a href="account/profile.php" class="fav-nav"><img src="img/core-img/favorites.png" alt=""><?= ($session->get() != '') ? $session->get()->name : '' ?></a>
        </div>
        <!-- Social Button -->
        <div class="social-info d-flex justify-content-between">
            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
    </header>
    <!-- Header Area End -->