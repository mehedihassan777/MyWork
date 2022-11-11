<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Member Registration Form</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode register-page">

<?php
  include "classes/Branch.php";
  $branch = new Branch;
  $id = $_GET['id']; 
  $data = $branch->find($id);
  if(isset($_POST['update'])){
    $reg = $branch->updateBranch($_POST,$id);
  }

?>

<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="index2.html" class="h1"><b>Sign-</b>Up</a>
    </div>

    <!-- Alert Message -->
    <!-- <div class="alert alert-success">
      <strong>Success</strong>Registration successfull
    </div> -->

    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form method="post">
        <div class="input-group mb-3">
          <input type="text" value="<?php echo $data['branch_name'] ?>" name="bname" class="form-control" placeholder="Branch name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-house-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" value="<?php echo $data['manager_name'] ?>" name="mname" class="form-control" placeholder="Manager name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" value="<?php echo $data['phone'] ?>" name="phone" class="form-control" placeholder="Phone Number">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div><div class="input-group mb-3">
          <input type="text" value="<?php echo $data['email'] ?>" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col text-center">
            <button type="submit" name="update" class="btn btn-primary btn-block">Update</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
