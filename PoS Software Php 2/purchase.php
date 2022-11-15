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

                <form class="row g-3">
                    <h4>Purchase Information</h4>
                    <div class="col-md-3">
                        <label class="form-label">Date</label>
                        <input type="date" id="pdate" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Enter Company Name</label>
                        <input type="text" id="cname" class="form-control" placeholder="Enter Company Name">
                        <input type="hidden" id="product_id" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Enter Invoice Number</label>
                        <input type="text" id="invoice" class="form-control" placeholder="Enter Invoice Number">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Available Stock</label>
                        <input readonly type="text" id="stock" class="form-control" placeholder="Available Stock">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Enter Product Barcode</label>
                        <input type="text" id="barcode" class="form-control" placeholder="Enter Product Barcode">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Cost Price</label>
                        <input readonly type="text" id="costPrice" class="form-control" placeholder="Cost Price">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Enter Quantity</label>
                        <input type="text" id="quantity" class="form-control" placeholder="Enter Quantity">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Total Price</label>
                        <input readonly type="text" id="total" class="form-control" placeholder="Total Price">
                        <button class="addItem btn btn-primary d-grid gap-2 col-12 mx-auto">Add
                            Item</button>
                    </div>

                    <div class="col-12">
                        
                    </div>
                </form>


                <!-- show purchase table -->

                <div class="table-responsive mt-5">
                    <h4 class="mb-4">Purchase Items List Control</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Barcode</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody class="tdata">

                        </tbody>
                    </table>
                </div>
                <!-- show purchase table end -->



                <!-- summary purchase table start -->
                <form class="row g-3 mt-5">
                    <h4>Purchase Summary</h4>
                    <div class="col-md-3">
                        <label class="form-label">Total Quantity</label>
                        <input type="text" id="totalQnt" class="form-control" placeholder="Total Quantity">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Total Amount</label>
                        <input type="text" id="totalAmount" class="form-control" placeholder="Total Amount">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Discount %</label>
                        <select id="dis" class="form-select" aria-label="Default select example">
                            <option value="0">0</option>
                            <option value="5">5%</option>
                            <option value="10">10%</option>
                            <option value="15">15%</option>
                            <option value="20">20%</option>
                            <option value="25">25%</option>
                            <option value="30">30%</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Discount Amount</label>
                        <input type="text" id="disAmount" class="form-control" placeholder="Discount Amount">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Grand Total</label>
                        <input type="text" id="grandTotal" class="form-control" placeholder="Grand Total">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Enter Payment Amount</label>
                        <input type="text" id="pay" class="form-control" placeholder="Enter Payment Amount">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Due Amount</label>
                        <input type="text" id="due" class="form-control" placeholder="Due Amount">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Print Summary</label>
                        <input type="button" id="save" class="form-control btn btn-info btn-lg" value="Save & Print">
                    </div>

                </form>
                <!-- summary purchase table End -->







                <!-- your content start here -->


            </div>
        </div>
    </div>




    <?php
    include "layout/footer.php";
    ?>