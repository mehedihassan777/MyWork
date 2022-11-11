
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
            <h1 class="m-0">Softness IT</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
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
          <div class="col-md-3">
            <input type="date" id="pdate" class="form-control">
          </div>
          <div class="col-md-3">
            <input type="text" id="cname" class="form-control" placeholder="Enter Company Name">
            <input type="hidden" id="product_id" class="form-control" placeholder="Enter Company Name">
          </div>
          <div class="col-md-3">
            <input type="text" id="invoice" class="form-control" placeholder="Enter Invoice Number">
          </div>
          <div class="col-md-3">
            <input readonly type="text" id="stock" class="form-control" placeholder="Available Stock">
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-md-3">
            <input type="text" id="barcode" class="form-control" placeholder="Enter Product Barcode">
          </div>
          <div class="col-md-3">
            <input readonly type="text" id="costPrice" class="form-control" placeholder="Cost Price">
          </div>
          <div class="col-md-3">
            <input type="text" id="quantity" class="form-control" placeholder="Enter Quantity">
          </div>
          <div class="col-md-3">
            <input readonly type="text" id="total" class="form-control" placeholder="Total Price">
            <button class="addItem btn btn-info mt-2">Add Item</button>
          </div>

        </div>
        <div class="row mt-3">
            <table class="table" border="1">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Barcode</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th>Remove</th>
                </tr>
              </thead>
              <tbody class="tdata"> 
                
              </tbody>
            </table>
        </div>
        <div class="row mt-2">
           <div class="col-md-3">
               <div class="form-group">
                 <input type="text" id="totalQnt" class="form-control" placeholder="Total Quantity">
               </div>
            </div>
            <div class="col-md-3">
               <div class="form-group">
                 <input type="text" id="totalAmount" class="form-control" placeholder="Total Amount">
               </div>
            </div>
            <div class="col-md-3">
               <div class="form-group">
                 <select id="dis" class="form-control">
                     <option value="0">0</option>
                     <option value="5">5%</option>
                     <option value="10">10%</option>
                     <option value="15">15%</option>
                     <option value="20">20%</option>
                     <option value="25">25%</option>
                     <option value="30">30%</option>
                 </select>
               </div>
              </div>
            <div class="col-md-3">
               <div class="form-group">
                 <input type="text" id="disAmount" class="form-control" placeholder="Dis Amount">
               </div>
            </div>
            <div class="col-md-3">
               <div class="form-group">
                 <input type="text" id="grandTotal" class="form-control" placeholder="Grand Total">
               </div>
            </div>
            <div class="col-md-3">
               <div class="form-group">
                 <input type="text" id="pay" class="form-control" placeholder="Enter Payment Amount">
               </div>
            </div>
            <div class="col-md-3">
               <div class="form-group">
                 <input type="text" id="due" class="form-control" placeholder="Due Amount">
               </div>
           </div>
            <div class="col-md-3">
               <div class="form-group">
                 <input type="button" id="save" class="form-control btn btn-info" value="Save & Print">
               </div>
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