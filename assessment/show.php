<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Show</title>
</head>
<body>
<?php
    include "classes.php";
    $student = new Student;
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $student->delete($id);
    }
    if(isset($_GET['in'])){
        $id = $_GET['in'];
        $student->inactive($id);
    }
    elseif(isset($_GET['ac'])){
        $id = $_GET['ac'];
        $student->active($id);
    }
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
            	<a class="btn btn-info" href="index.php">Insert</a>
                <table class="table" border="1">
                	<thead>
                		<tr>
                			<th>#SL Number</th>
                			<th>Student Name</th>
                			<th>Father Name</th>
                			<th>Mother Name</th>
                			<th>Email</th>
                			<th>Status</th>
                		</tr>
                		<?php
                			$data = $student->show();
                            $sl=1;
                			while($all = $data->fetch_assoc()){
                                if($all["status"]==1)
                                    $status="<a class='btn btn-success btn-sm' href='show.php?in=".$all["student_id"]."'>Active</a>";
                                else
                                    $status="<a class='btn btn-warning btn-sm' href='show.php?ac=".$all["student_id"]."'>Inctive</a>";
                				echo "<tr>
                					<td>".$sl."</td>
                					<td>".$all["studentName"]."</td>
                					<td>".$all["fName"]."</td>
                					<td>".$all["mName"]."</td>
                					<td>".$all["email"]."</td>
                					<td>".$status."</td>
                                    <td><button data-bs-toggle='modal' data-bs-target='#delete".$all["student_id"]."' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></button></td>
                                    <td><a class='btn btn-success btn-sm' href='edit.php?id=".$all["student_id"]."'><i class='fa fa-edit'></i></a></td>
                				</tr>"; ?>

                                <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="delete<?php echo $all["student_id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confermation Message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Do You Want to Delete ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancel</button>
        <a href="show.php?id=<?php echo $all["student_id"]; ?>" class="btn btn-danger">Confirm</a>
      </div>
    </div>
  </div>
</div>
                        <?php
                        $sl++;
                			}
                		?>
                	</thead>
                </table>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
</body>
</html>