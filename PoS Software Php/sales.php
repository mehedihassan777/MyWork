
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
          <div class="col-md-2">
            <input readonly type="text" class="invoice form-control" placeholder="Enter Invoice Number">
          </div>
          <div class="col-md-2">
            <input type="text"  class="barcode form-control" placeholder="Enter Product Barcode">
            <input type="hidden" class="product_id form-control">
          </div>
          <div class="col-md-2">
            <input type="text" class="price form-control" placeholder="Price">
          </div>
          <div class="col-md-2">
            <input type="text" class="qnt form-control" placeholder="Enter Quantity">
          </div>
          <div class="col-md-2">
            <input type="text" class="total form-control" placeholder="Total">
          </div>
          <div class="col-md-2">
            <input readonly type="text" class="stock form-control" placeholder="Available Stock">
            <button class="saddItem btn btn-info mt-2 float-right">Add Item</button>
          </div>
        </div>
        <div class="row mt-3">
            <table class="table" border="1">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Invoice</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th>Remove</th>
                </tr>
              </thead>
              <tbody class="stdata"> 
                
              </tbody>
            </table>
        </div>
        <div class="row mt-2">
           <div class="col-md-3">
               <div class="form-group">
                 <input type="text" id="totalQnt" class="totalQnt form-control" placeholder="Total Quantity">
               </div>
            </div>
            <div class="col-md-3">
               <div class="form-group">
                 <input type="text" id="totalAmount" class="totalAmount form-control" placeholder="Total Amount">
               </div>
            </div>
            <div class="col-md-3">
               <div class="form-group">
                 <select id="dis" class="dis form-control">
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
                 <input type="text" id="disAmount" class="disAmount form-control" placeholder="Dis Amount">
               </div>
            </div>
            <div class="col-md-3">
               <div class="form-group">
                 <input type="text"id="grandTotal" class="grandTotal form-control" placeholder="Grand Total">
               </div>
            </div>
            <div class="col-md-3">
               <div class="form-group">
                 <input type="text"id="pay" class="pay form-control" placeholder="Enter Payment Amount">
               </div>
            </div>
            <div class="col-md-3">
               <div class="form-group">
                 <input type="text" id="due" class="due form-control" placeholder="Due Amount">
               </div>
           </div>
            <div class="col-md-3">
               <div class="form-group">
                 <input type="button" class="ssave form-control btn btn-info" value="Save & Print">
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