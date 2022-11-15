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
                        <li class="breadcrumb-item active" aria-current="page">Branch Information</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <div class="row layout-top-spacing">
                <!-- your content start here -->

                <div class="table-responsive">
                    <table class="table table-bordered">
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
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?php echo $data['id'] ?>"><i class="fas fa-trash"></i></button>
                          </td>
                        </tr>
                        
                            <!-- Modal -->
                            <div class="modal fade" id="delete<?php echo $data['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      Are Youe Sure Want to Delete ?
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <a href="usercontrol.php?delid=<?php echo $data['id'] ?>" type="button" class="btn btn-primary">Confirm</a>
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


                <!-- your content end here -->


            </div>
        </div>
    </div>




    <?php
    include "layout/footer.php";
    ?>