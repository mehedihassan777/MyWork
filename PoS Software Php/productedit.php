
  <?php
    include 'includes/header.php';
    include 'includes/loader.php';
    include 'includes/navbar.php';
    include 'includes/sidebar.php';
    ?> 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add New Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">add product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8 offset-md-2">
          	<!-- My Content Area -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                  <?php 
                    include 'classes/Product.php';
                    $product = new Product;
                    $id = $_GET['id'];
                    if (isset($_POST['update'])) {
                        $product->updateProduct($_POST,$id);
                    }
                    $product = $product->find($id);
                  ?>
                  <form method="POST">
                  <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Product Name" value="<?php echo $product["name"] ?>">
                  </div>
                  <div class="form-group">
                    <label for="des">Product Description</label>
                    <textarea name="des" class="form-control" id="des" placeholder="Description"> <?php echo $product["des"] ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="barcode">Product Barcode</label>
                    <input type="text" name="barcode" class="form-control" id="barcode" placeholder="Enter Product Barcode" value="<?php echo $product["barcode"] ?>">
                  </div>
                  <div class="form-group">
                    <label for="size">Product Size</label>
                    <input type="text" name="size" class="form-control" id="size" placeholder="Enter Product Size"  value="<?php echo $product["size"] ?>">
                  </div>
                  <div class="form-group">
                    <label for="color">Product Color</label>
                    <input type="color" name="color" class="form-control" id="color" value="<?php echo $product["color"] ?>">
                  </div>
                  <div class="form-group">
                    <label for="costPrice">Cost Price</label>
                    <input type="text" name="costPrice" class="form-control" id="costPrice" placeholder="Enter Product Cost Price" value="<?php echo $product["costPrice"] ?>">
                  </div>
                  <div class="form-group">
                    <label for="salePrice">Sale Price</label>
                    <input type="text" name="salePrice" class="form-control" id="salePrice" placeholder="Enter Product Cost Price" value="<?php echo $product["salePrice"] ?>">
                  </div>
                </div>
                <div class="card-footer">
                  <button name="update" type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
   <?php 
     include 'includes/footer.php';
    ?> 
</div>
<!-- ./wrapper -->
 <?php 
     include 'includes/scripts.php';
    ?> 