<?php
require_once '../server.php';
$id = $_GET['id'];
$getname = 'SELECT name FROM products WHERE product_id ='.$id;
if (isset($conn)){
    $stmt = $conn->query($getname);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $row   = $stmt->fetch();
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $delete = 'DELETE FROM products WHERE product_id ='.$id;
        $conn->query($delete);
        echo '<script>alert("Success!");window.location = "index.php"</script>';
    }
}
?>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-5">
    <h2 class="font-weight-bold">Delete</h2>
    <div class="mt-3">Are you sure you want to delete <strong><?= $row->name ?></strong>?</div>
    <form action="" method="post">
        <a href="index.php"><button type="button" class="btn btn-success mt-3">Back</button></a>
        <button class="btn btn-success ml-2 mt-3">Delete product</button></form></div>
</body>
</html>