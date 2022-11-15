<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>SignIn Tp PHP POS Software </title>
    <link rel="icon" type="image/x-icon" href="src/assets/img/favicon.ico"/>
    <link href="src/vertical-dark-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="src/vertical-dark-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="src/vertical-dark-menu/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    
    <link href="src/vertical-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="src/assets/css/light/authentication/auth-boxed.css" rel="stylesheet" type="text/css" />
    
    <link href="src/vertical-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <link href="src/assets/css/dark/authentication/auth-boxed.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    
</head>

<body class="form">

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <div class="auth-container d-flex">

        <div class="container mx-auto align-self-center">

            <div class="row">

                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                    <div class="card mt-3 mb-3">
                        <div class="card-body">
        <!-- Login data php start -->
          <?php
  include "classes/Branch.php";
  if(isset($_SESSION['check']))
    header('location:dashboard.php');
  $branch = new Branch;
  if(isset($_POST['login'])){
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $branch->login($userName,$password);
  }

?>
          <!-- Login data php End -->
                            <div class="row">
                                <div class="col-md-12 mb-3">

                                    <h2>Sign In</h2>
                                    <p>Enter your email or phone and password to login</p>

                                </div>
                                <form action="" method="POST">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Email or Phone</label>
                                            <input type="text" name="userName" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <label class="form-label">Password</label>
                                            <input type="text" name="password" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-4">
                                            <button name="login" class="btn btn-secondary w-100">SIGN IN</button>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="text-center">
                                            <p class="mb-0">Dont't have an account ? <a href="register.php" class="text-warning">Sign Up</a></p>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->


</body>

</html>