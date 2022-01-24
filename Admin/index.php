<?php
require_once('../server.php');
if (isset($conn)) {
    $list = $conn->query("SELECT * FROM products");
    $list->setFetchMode(PDO::FETCH_OBJ);
    $datas = $list->fetchAll();
} else {die();}
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
    </style>
</head>
<body>

<div class="text-center">
    <h1 class="font-weight-bold">List products</h1>
</div>
    <a class="ml-auto" href="add.php"><button type="button" class="btn btn-warning text-white">Add product</button></a>
</form>
<table class="table mt-2 table-bordered table-striped">
    <thead class="bg-warning text-white">
    <tr>
        <th class="col-0">#</th>
        <th class="col-4">Product's name</th>
        <th class="col-0">Type</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($datas as $data) : ?>
    <tr>
        <td class="col-0"><?= $data->product_id ?></td>
        <td class="col-4"><?= $data->name ?></td>
        <td class="col-0"><?= $data->type ?></td>
        <td>
            <a href="edit.php?id=<?php echo $data->product_id; ?>">edit</a> |
            <a href="delete.php?id=<?php echo $data->product_id; ?>">delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>