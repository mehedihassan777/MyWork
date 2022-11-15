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



                <!-- manage purchase table -->

                <div class="table-responsive mt-5">
                    <h4 class="mb-4">Purchase Items List Control</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Company</th>
                                <th scope="col">Invoice</th>
                                <th scope="col">Total Qnt </th>
                                <th scope="col">Total Price </th>
                                <th scope="col">Payment</th>
                                <th scope="col">Due</th>
                                <th scope="col">View</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
             			include 'classes/Purchase.php';
             			$purchase = new Purchase;
             			$obj = $purchase->purchaseSummeryShow();

             			while($data = $obj->fetch_assoc()){ ?>
                            <tr>
                                <td><?php echo $data["pdate"] ?></td>
                                <td><?php echo $data["company"] ?></td>
                                <td><?php echo $data["invoice"] ?></td>
                                <td><?php echo $data["total_quantity"] ?></td>
                                <td><?php echo $data["total_price"] ?></td>
                                <td><?php echo $data["pay"] ?></td>
                                <td><?php echo $data["due"] ?></td>
                                <td><button class="btn btn-sm btn-info">View</button></td>
                            </tr>
                            <?php	}
             		?>
                        </tbody>
                    </table>
                </div>
                <!-- manage purchase table end -->










                <!-- your content start here -->


            </div>
        </div>
    </div>




    <?php
    include "layout/footer.php";
    ?>