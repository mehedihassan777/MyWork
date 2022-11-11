
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
            <h1 class="m-0">Manage Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">manage product</li>
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
          <div class="col-md-12">
             
          	<!-- My Content Area -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Simple Full Width Table</h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#slNo</th>
                      <th>Product Name</th>
                      <th>Description</th>
                      <th>Barcode</th>
                      <th>Size</th>
                      <th>Color</th>
                      <th>Cost-Price</th>
                      <th>Sale-Price</th>
                      <th colspan="2">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php 
                          include 'classes/Product.php';
                          $clsProduct = new Product;
                          if(isset($_GET['id'])){
                            $clsProduct->delete($_GET['id']);
                          }
                          $products = $clsProduct->allProduct();
                           $sl=1;
                          if ($products->num_rows > 0) {
                              while ($product = $products->fetch_assoc()) {
                                echo '<tr>
                                <td>'.$sl.'</td>
                                <td>'.$product["name"].'</td>
                                <td>'.$product["des"].'</td>
                                <td>'.$product["barcode"].'</td>
                                <td>'.$product["size"].'</td>
                                <td>'.$product["color"].'</td>
                                <td>'.$product["costPrice"].'</td>
                                <td>'.$product["salePrice"].'</td>
                                <td><a class="btn btn-sm btn-info" href="productedit.php?id='.$product["id"].'"><i class="fa fa-edit"></i></a>
                                <button data-toggle="modal" data-target="#delete'.$product["id"].'" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                                </tr>'; ?>

<div class="modal fade" id="delete<?php echo $product["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are sure want to delete this product?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="manageproduct.php?id=<?php echo $product["id"] ?>" class="btn btn-danger">Confirm</a>
      </div>
    </div>
  </div>
</div>


                <?php $sl++; }
                          }
                          else{
                            echo '<tr><td class="text-center" colspan="10">Data Not Fount</td></tr>';
                          }
                     ?>
                  </tbody>  

                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
   <?php 
     include 'includes/footer.php';
    ?> 
</div>
<!-- ./wrapper -->
 <?php 
     include 'includes/scripts.php';
    ?> 