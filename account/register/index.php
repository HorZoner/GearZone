<?php
include_once('../../server.php');
if ($session->get() != '') {header('Location: ../../index.php');}else
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirmation = $_POST['password2'];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($name == '' && $email == '' && $password == ''){
            header('location:../error.php?error=missing-required-parameter/register');
        }else if (isset($_POST['checkAgreement'])) {
            if ($password_confirmation == $password) {
                $check = 'SELECT email FROM accounts';
                $checkqry = $conn->query($check);
                $checkqry->setFetchMode(PDO::FETCH_OBJ);
                $accountName = $checkqry->fetch();
                if ($accountName->email == $email) {echo '<script>alert("This email address was used")</script>';}else {
                    $sql = "INSERT INTO accounts (name,email,password) VALUES ('$name','$email','$password')";
                    $stmt = $conn->query($sql);
                    echo '<script>alert("Account created");window.location.href="../login"</script>';
                }
            } else {} //password confirm
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/css/all.css">
    <title>Hello, world!</title>
</head>
<body>
<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <form action="" method="post" class="form">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                <form class="mx-1 mx-md-4">

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" name="name" class="form-control" required/>
                                            <label class="form-label" for="form3Example1c">Your Name</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="email" name="email" class="form-control" required/>
                                            <label class="form-label" for="form3Example3c">Your Email</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" name="password" class="form-control" required/>
                                            <label class="form-label" for="form3Example4c">Password</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" name="password2" class="form-control" required/>
                                            <label class="form-label" for="form3Example4cd">Repeat your password</label>
                                        </div>

                                    </div>
                                    <p class="text-center text-muted mt-0 mb-3">Have already an account? <a href="../login" class="fw-bold text-body"><u>Login here</u></a></p>

                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input  name = "checkAgreement"
                                                class="form-check-input me-2"
                                                type="checkbox"
                                                id="form2Example3c"
                                        />
                                        <label class="form-check-label" for="form2Example3">
                                            I agree all statements in <a href="#!">Terms of service</a>
                                        </label>

                                    </div>
                                    <span class="text-center">You have to agree all statements in Terms of service</span>
                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-warning btn-lg text-white">Register</button>

                                    </div>

                                </form>

                            </div>

                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <a href="../../index.php"><img src="../../img/core-img/logo.png" class="img-fluid" alt="Sample image"></a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>

    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>