<?php
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    $error = explode('/',$error);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/core-style.css">
    <title>Document</title>
</head>
<body>
<div class="container text-center">
<h1>Oops! You did something wrong with this website!</h1>
<h3 class="text-danger">ERROR: <?= $error[0] ?></h3>
<a class="btn btn-danger" href="<?= $error[1] ?>">GO BACK</a>
</div>
</body>
</html>