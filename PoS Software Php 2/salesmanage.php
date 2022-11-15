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
                        <li class="breadcrumb-item active" aria-current="page">Sales Summery</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="row layout-top-spacing">
                <!-- your content start here -->

                  <table class="table" border="1">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Invoice</th>
                      <th>Total Qnt</th>
                      <th>Total Price</th>
                      <th>Payment</th>
                      <th>Due</th>
                      <th>View</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      include 'classes/Sales.php';
                      $purchase = new Sales;
                      $obj = $purchase->salesSummeryShow();

                      while($data = $obj->fetch_assoc()){ ?>
                        <tr>
                          <td><?php echo $data["sdate"] ?></td>
                          <td><?php echo $data["invoice"] ?></td>
                          <td><?php echo $data["total_quantity"] ?></td>
                          <td><?php echo $data["total_price"] ?></td>
                          <td><?php echo $data["pay"] ?></td>
                          <td><?php echo $data["due"] ?></td>
                          <td><a href="saledetails.php?inv=<?php echo $data["invoice"] ?>" class="btn btn-sm btn-info">View</a></td>
                        </tr>
                    <?php }
                    ?>
                  </tbody>  
                 </table>
                
                <!-- your content start here -->


            </div>
        </div>
    </div>




    <?php
    include "layout/footer.php";
    ?>