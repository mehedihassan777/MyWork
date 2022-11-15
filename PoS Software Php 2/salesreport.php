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
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="row layout-top-spacing">
                <!-- your content start here -->

                <h5>Summery</h5>
            <form  method="post">
              <input class="form-control col-md-2" type="date" name="sdate">
              <button class="btn btn-sm btn-success">Search</button>
            </form>
            <h5>Summery</h5>
             <table class="table" border="1">
              <thead>
                <tr>
                  <th>#Sl</th>
                  <th>Date</th>
                  <th>Invoice</th>
                  <th>Total Qnt</th>
                  <th>Total Price</th>
                  <th>Dis</th>
                  <th>Dis. Amaunt</th>
                  <th>Grand Total</th>
                  <th>Pay</th>
                  <th>Due</th>
                </tr>
              </thead>
              <tbody>
              <?php
              include "classes/Sales.php";
              $purchase = new Sales;
              if(isset($_POST['sdate'])){
                $sl = 1;
                $sdate = $_POST['sdate'];
                  $obj = $purchase->salesDateSummeryShow($sdate);
                  while($data = $obj->fetch_assoc()){ ?>
                    <tr>
                      <td><?php echo $sl ?></td>
                      <td><?php echo $data["sdate"] ?></td>
                      <td><?php echo $data["invoice"] ?></td>
                      <td><?php echo $data["total_quantity"] ?></td>
                      <td><?php echo $data["total_price"] ?></td>
                      <td><?php echo $data["dis"] ?></td>
                      <td><?php echo $data["dis_amaunt"] ?></td>
                      <td><?php echo $data["grand_total"] ?></td>
                      <td><?php echo $data["pay"] ?></td>
                      <td><?php echo $data["due"] ?></td>
                    </tr>
                  
                <?php $sl++;}
              }
              else{
                $sl = 1;
                  $obj = $purchase->salesSummeryShow();
                  while($data = $obj->fetch_assoc()){ ?>
                    <tr>
                      <td><?php echo $sl ?></td>
                      <td><?php echo $data["sdate"] ?></td>
                      <td><?php echo $data["invoice"] ?></td>
                      <td><?php echo $data["total_quantity"] ?></td>
                      <td><?php echo $data["total_price"] ?></td>
                      <td><?php echo $data["dis"] ?></td>
                      <td><?php echo $data["dis_amaunt"] ?></td>
                      <td><?php echo $data["grand_total"] ?></td>
                      <td><?php echo $data["pay"] ?></td>
                      <td><?php echo $data["due"] ?></td>
                    </tr>
                  
                <?php $sl++;}
              }
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