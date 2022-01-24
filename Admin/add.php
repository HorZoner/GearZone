<?php
include_once '../server.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $amount = $_POST['amount'];
    $img1 = $_POST['img1'];
    $img2 = $_POST['img2'];
    $img3 = $_POST['img3'];
    $img4 = $_POST['img4'];
    $description = $_POST['description'];
    $sql = "INSERT INTO products (name, type, price, amount, image, image_hover, img3, img4, description)
VALUES ('$name', '$type', '$price', '$amount', '$img1','$img1', '$img2', '$img3', '$description')";
    if (isset($conn)) {
        $conn ->query($sql);
        echo '<script> alert("Success!"); window.location = "index.php"</script>';
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        table {
            border-collapse:separate;
            border-spacing:20px 20px;
        }
        select,input {
            width: 100%;
            height:40px

        }
    </style>
</head>
<body>

<h1 class="ml-5 mt-5">Add product</h1>
<form class="form-horizontal mt-5" action="" method="post">
    <table class="ml-5 mr-5" style="width: 80%;">
        <tr>
            <td class="col-2">Product name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td class="col-2">Product type</td>
            <td><input type="number" name="type"></td>
        </tr>
        <tr>
            <td class="col-2">Price</td>
            <td><input type="number" name="price"></td>
        </tr>
        <tr>
            <td class="col-2">Amount</td>
            <td><input type="number" name="amount"></td>
        </tr>
        <tr>
            <td class="col-2">Image</td>
            <td><input type="text" name="img1"></td>
        </tr>
        <tr>
            <td class="col-2">Image hover</td>
            <td><input type="text" name="img2"></td>
        </tr>
        <tr>
            <td class="col-2">image 3</td>
            <td><input type="text" name="img3"></td>
        </tr>
        <tr>
            <td class="col-2">image 4</td>
            <td><input type="text" name="img4"></td>
        </tr>
        <tr>
            <td class="col-2">Description</td>
            <td><textarea style="min-width:100%;min-height: 100px" name="description"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td class="text-right">
                <button class="btn btn-success">Add product</button>
                <a href="index.php"><button type="button" class="btn btn-success">Back</button></a>
            </td>
        </tr>
    </table>
</form>

</body>
</html>