<?php
include "layout/header.php";
include "layout/navbar.php";
include "layout/sidebar.php"
?>

<?php 
    include 'classes/Dashboard.php';

    $obj = new Dashboard;
    $totalBranch = $obj->totalBranch();
    $totalStock = $obj->totalStock();
    $sales = $obj->totalSales();
    $purchase = $obj->totalPurchase();
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
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="row layout-top-spacing">
                <!-- your content start here -->
                                <div class="col-12">
                                    <div class="btn btn-info">
                                        <h4>Total Branches</h4>
                                        <h6><?php echo $totalBranch['totalBranch'] ?></h6>
                                    </div>
    
                                    <div class="btn btn-info offset-1">
                                        <h4>Total Stock</h4>
                                        <h6><?php echo $totalStock['stock'] ?></h6>
                                    </div>
    
                                    <div class="btn btn-info offset-1">
                                        <h4>Sales</h4>
                                        <h6><?php echo $sales['sales'] ?></h6>
                                    </div>

                                    <div class="btn btn-info offset-1">
                                        <h4>Purchase</h4>
                                        <h6><?php echo $purchase['purchase'] ?></h6>
                                    </div>
                                </div>

                                    
                            </div>
                        </div>
                    </div>

                </div>



                
                <!-- your content start here -->


            </div>
        </div>
    </div>




    <?php
    include "layout/footer.php";
    ?>