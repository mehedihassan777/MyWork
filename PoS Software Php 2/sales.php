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

                <div class="row g-3">
                    <h4>Sales Information</h4>
                    <div class="col-md-2">
                        <label class="form-label">Invoice</label>
                        <input readonly type="text" class="invoice form-control" placeholder="Enter Invoice Number">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Barcode</label>
                        <input type="text"  class="barcode form-control" placeholder="Enter Product Barcode">
                        <input type="hidden" class="product_id form-control">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Price</label>
                        <input readonly type="text" class="price form-control" placeholder="">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Quantity</label>
                        <input type="text" class="qnt form-control" placeholder="Enter Quantity">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Total</label>
                        <input readonly type="text" class="total form-control" placeholder="Total">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Stock</label>
                        <input readonly type="text" class="stock form-control" placeholder="Available Stock">
                        <button class="saddItem btn btn-info mt-2 float-right">Add Item</button>
                    </div>

                    <div class="col-12">
                        
                    </div>
                </div>


                <!-- show Sales table -->

                <div class="table-responsive mt-5">
                    <h4 class="mb-4">Sales Items List Control</h4>
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
                        <tbody class="stdata">

                        </tbody>
                    </table>
                </div>
                <!-- show Sales table end -->



                <!-- summary sales table start -->
                <form class="row g-3 mt-5">
                    <h4>Sales Summary</h4>
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
                <!-- summary Sales table End -->
                
                <!-- your content start here -->


            </div>
        </div>
    </div>




    <?php
    include "layout/footer.php";
    ?>