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
                        <li class="breadcrumb-item active" aria-current="page">Add New Product</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="row layout-top-spacing">
                <!-- your content start here -->

                <?php 
                    include 'classes/Product.php';
                    $product = new Product;
                    $id = $_GET['id'];
                    if (isset($_POST['update'])) {
                        $product->updateProduct($_POST,$id);
                    }
                    $product = $product->find($id);
                  ?>

                <form class="row g-3" method="POST">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Product Name</label>
                        <input type="text" name="name" value="<?php echo $product["name"] ?>" class="form-control" id="pName" placeholder="Enter Product Name">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Product Description</label>
                        <input type="text" name="des" value="<?php echo $product["des"] ?>" class="form-control" id="des" placeholder="Enter Product Descriptions">
                    </div>
                    <div class="col-6">
                        <label for="inputAddress" class="form-label">Product Barcode</label>
                        <input type="text" name="barcode" value="<?php echo $product["barcode"] ?>" class="form-control" id="bCode" placeholder="Enter Product Bardcode">
                    </div>
                    <div class="col-6">
                        <label for="inputAddress2" class="form-label">Product Size</label>
                        <input type="text" name="size" value="<?php echo $product["size"] ?>" class="form-control" id="pSize" placeholder="Enter Product Size">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Product Color</label>
                        <input type="color" name="color" value="<?php echo $product["color"] ?>" class="form-control" id="color" placeholder="Enter Product Bardcode">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Cost Price</label>
                        <input type="text" name="costPrice" value="<?php echo $product["costPrice"] ?>" class="form-control" id="costPrice" placeholder="Enter Cost Price">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Sale Price</label>
                        <input type="text" name="salePrice" value="<?php echo $product["salePrice"] ?>" class="form-control" id="salePrice" placeholder="Enter Sale Price">
                    </div>

                    <div class="col-12">
                        <button name="update" class="btn btn-primary">Update</button>
                    </div>
                </form>

                <!-- your content start here -->


            </div>
        </div>
    </div>




    <?php
    include "layout/footer.php";
    ?>