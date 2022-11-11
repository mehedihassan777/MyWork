
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
            <h1 class="m-0">Branches</h1>
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
             
          	<!-- My Content Area -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>#SL</th>
                      <th>Brunch Name</th>
                      <th>Manager Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th colspan="2">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      include 'classes/Branch.php';
                      $branch = new Branch;
                        if(isset($_GET['inactive'])){
                          $id = $_GET['inactive'];
                          $branch->inactive($id);
                        }
                        if(isset($_GET['active'])){
                          $id = $_GET['active'];
                          $branch->active($id);
                        }
                        if(isset($_GET['delid'])){
                          $id = $_GET['delid'];
                          $branch->delete($id);
                        }
                      $res = $branch->allBranch();
                      $sl = 1;
                      if ($res->num_rows > 0) {
                      while($data = $res->fetch_assoc()){
                        if($data['status']==1){
                          $status = '<a href="branchmanage.php?inactive='.$data["id"].'"><i class="fas fa-eye"></i></a>';
                        }
                        else
                          $status = '<a href="branchmanage.php?active='.$data["id"].'"><i class="fas fa-eye-slash"></i></a>'; ?>
                        <tr>
                          <td><?php echo $sl ?></td>
                          <td><?php echo $data['branch_name'] ?></td>
                          <td><?php echo $data['manager_name'] ?></td>
                          <td><?php echo $data['phone'] ?></td>
                          <td><?php echo $data['email'] ?></td>
                          <td><?php echo $status ?></td>
                          <td>
                            <a class="btn btn-sm btn-info" href="editbranch.php?id=<?php echo $data['id'] ?>"><i class="fas fa-edit"></i></a>
                            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete<?php echo $data['id'] ?>"><i class="fas fa-trash"></i></button>
                          </td>
                        </tr>
                        
                            <!-- Modal -->
                            <div class="modal fade" id="delete<?php echo $data['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button  type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    Are you sure want to delete ?
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="branchmanage.php?delid=<?php echo $data['id'] ?>" type="button" class="btn btn-primary">Confirm</a>
                                  </div>
                                </div>
                              </div>
                            </div>

                    <?php  
                        $sl++; }
                        }
                        else{
                            echo '<tr><td class="text-center" colspan="10">Data Not Fount</td></tr>';
                          }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
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