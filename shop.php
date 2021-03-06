<?php if (isset($_GET['category'])){
    $url = $_GET['category'];
} else {
    $url = '';
}
?>
<?php include_once "inc/header.php"; ?>
<?php
if (isset($conn)){
    $sql = 'select * from type';
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $rows = $stmt->fetchAll();

    if ($url != '') {
        $sqlitem = 'select product_id,name,image,image_hover,price from products where type = '. $url;
        $stmt2 = $conn->query($sqlitem);
        $stmt2->setFetchMode(PDO::FETCH_OBJ);
        $rows2 = $stmt2->fetchAll();
    } else {
        $sqlitem = 'select product_id,name,image,image_hover,price from products';
        $stmt2 = $conn->query($sqlitem);
        $stmt2->setFetchMode(PDO::FETCH_OBJ);
        $rows2 = $stmt2->fetchAll();
    }
//    echo '<pre>';
//    print_r($rows2);
//    echo '</pre>';
//    die();
} else {
    $rows = '';
}

?>
        <div class="shop_sidebar_area">

            <!-- ##### Single Widget ##### -->
            <div class="widget catagory mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-30">Catagories</h6>

                <!--  Catagories  -->
                <div class="catagories-menu">
                    <ul>
                        <?php foreach ( $rows as $row) : ?>
                        <li class="<?php if ($url == $row->id){echo 'active';} ?>"><a href="shop.php?category=<?= $row->id ?>"><?= $row->type ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

        </div>

        <div class="amado_product_area section-padding-100">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                            <!-- Total Products -->
                            <div class="total-products">
                                <p>Showing 1-8 0f 25</p>
                                <div class="view d-flex">
                                    <a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <!-- Sorting -->
                            <div class="product-sorting d-flex">
                                <div class="sort-by-date d-flex align-items-center mr-15">
                                    <p>Sort by</p>
                                    <form action="#" method="get">
                                        <select name="select" id="sortBydate">
                                            <option value="value">Date</option>
                                            <option value="value">Newest</option>
                                            <option value="value">Popular</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="view-product d-flex align-items-center">
                                    <p>View</p>
                                    <form action="#" method="get">
                                        <select name="select" id="viewProduct">
                                            <option value="value">12</option>
                                            <option value="value">24</option>
                                            <option value="value">48</option>
                                            <option value="value">96</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <?php foreach ( $rows2 as $row2 ) : ?>
                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="<?= $row2->image ?>" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="<?= $row2->image_hover ?>" alt="">
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price"><?= $row2->price ?>$</p>
                                    <a href="product-details.php?item=<?= $row2->product_id ?>">
                                        <h6><?= $row2->name ?></h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="cart">
                                        <a href="cart.php" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="img/core-img/cart.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                <div class="row">
                    <div class="col-12">
                        <!-- Pagination -->
<!--                        <nav aria-label="navigation">-->
<!--                            <ul class="pagination justify-content-end mt-50">-->
<!--                                <li class="page-item active"><a class="page-link" href="#">01.</a></li>-->
<!--                                <li class="page-item"><a class="page-link" href="#">02.</a></li>-->
<!--                                <li class="page-item"><a class="page-link" href="#">03.</a></li>-->
<!--                                <li class="page-item"><a class="page-link" href="#">04.</a></li>-->
<!--                            </ul>-->
<!--                        </nav>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

<?php include_once 'inc/footer.php' ?>