<?php
    require 'function.php';

    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $cekdatabase = mysqli_query($conn, "SELECT * FROM login where email='$email' and password='$password'");
        $hitung = mysqli_num_rows($cekdatabase);

        if($hitung>0){
            $_SESSION['log'] = 'true';
            $_SESSION['email'] = $email;
            header('location:index.php');
            
        } else {
            echo 'data  tidak ada';
        }
    }

    if(!isset($_SESSION['log'])){

    } else {
        header('location:index.php');  
    }

?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - Inventory CYB</title>
        <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header text-center">
                                        <img src="assets/img/cyb-login.png" alt="Logo Perusahaan" class="mb-3" style="width: 300px; height: auto; margin-top: 0px; margin-bottom: 0px;">
                                        <h3 class="text-center font-weight-light my-4"><strong>Login</strong></h3>
                                    </div>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" name="email" id="inputEmailAddress" type="email" placeholder="Enter email address" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" name="password" id="inputPassword" type="password" placeholder="Enter password" />
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-secondary" href="index.php" name="login">Login</button>
                                            </div> 
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>