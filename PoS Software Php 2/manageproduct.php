<?php
include "layout/header.php";
include "layout/navbar.php";
include "layout/sidebar.php"
?>


<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="middle-content">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">PHP POS Software</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Manage Product</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="row layout-top-spacing">
                <!-- your content start here -->

                <div class="table-responsive">
                    <table class="table table-bordered">



                        <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Product Name </th>
                                <th scope="col">Barcode </th>
                                <th scope="col">Description</th>
                                <th scope="col">Size</th>
                                <th scope="col">Color</th>
                                <th scope="col">Cost Price </th>
                                <th scope="col">Sale Price </th>
                                <th class="text-center" colspan="2" scope="col">Action</th>
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
                                <button data-bs-toggle="modal" data-bs-target="#delete'.$product["id"].'" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                                </tr>'; ?>

<div class="modal fade" id="delete<?php echo $product["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are Youe Sure Want to Delete ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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

                <!-- your content start here -->


            </div>
        </div>
    </div>




    <?php
    include "layout/footer.php";
    ?>