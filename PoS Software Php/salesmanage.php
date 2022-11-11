
  <?php
    include 'includes/header.php';

    include 'includes/loader.php';
  ?>

 

  <!-- Navbar -->
  <?php 
    include 'includes/navbar.php';
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
   <?php 
     include 'includes/sidebar.php';
    ?> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Sales Summery</h1>
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
          <div class="col-md-12">
            
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
             		<?php	}
             		?>
             	</tbody>	
             </table>
          	
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