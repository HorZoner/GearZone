<?php include_once "inc/header.php"; ?>
<?php
if (isset($conn)){
    $sql = 'select * from homepage';
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $rows = $stmt->fetchAll();

} else {
    $rows = '';
}

?>
        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">
                <?php foreach ($rows as $row) : ?>
                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="<?= $row->href ?>">
                        <img src="<?= $row->image ?>" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p><?= $row->description ?></p>
                            <h4><?= $row->item_name ?></h4>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    <!-- ##### Main Content Wrapper End ##### -->
<?php include_once 'inc/footer.php' ?>