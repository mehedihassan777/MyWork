<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>

	<div class="container">
		<div class="row mt-4 pt-5">
			<div class="col-md-4 p-4 border border-success rounded">
				<div class="mgs">
				</div>
				<h3>Add Student Information</h3>
				<div class="form-group mt-3">
					<label>Student Name</label>
					<input type="text" class="studentName form-control">
				</div>
				<div class="form-group mt-3">
					<label>Father's Name</label>
					<input type="text" class="fName form-control">
				</div>
				<div class="form-group mt-3">
					<label>Mother's Name</label>
					<input type="text" class="mName form-control">
				</div>
				<div class="form-group mt-3">
					<label>Email</label>
					<input type="text" class="email form-control">
				</div>
				<div class="form-group mt-3">
					<label>Status</label>
					<select class="status form-control">
						<option value="">---- Select Status ----</option>
						<option value="1">Active</option>
						<option value="2">Inactive</option>
					</select>
				</div>
				<button class="addStudent btn btn-info">Add Sutdent</button>
			</div>
			<div class="col-md-8 p-4 border border-success rounded">
				<h3>All Student Information</h3>
				<button data-bs-toggle="modal" data-bs-target="#add" class="btn btn-info">Add Sutdent</button>
				<table class="table">
					<thead>
						<tr>
							<th>#Sl No.</th>
							<th>Student Name</th>
							<th>Father's Name</th>
							<th>Mother's Name</th>
							<th>Email</th>
							<th>Status</th>
							<th colspan="2">Action</th>
						</tr>
					</thead>
					<tbody class="tData">
						
					</tbody>
				</table>
			</div>
		</div>
	</div>

<!--Delete Modal -->
<div class="modal fade" id="del" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are You Sure Want to Delete ??
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancle</button>
        <button type="button" class="mdel btn btn-danger">Confirm</button>
      </div>
    </div>
  </div>
</div>

<!--Edit Modal -->
<div class="modal fade" id="edt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Update Student Information</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group mt-3">
					<label>Student Name</label>
					<input type="text" class="ustudentName form-control">
				</div>
				<div class="form-group mt-3">
					<label>Father's Name</label>
					<input type="text" class="ufName form-control">
				</div>
				<div class="form-group mt-3">
					<label>Mother's Name</label>
					<input type="text" class="umName form-control">
				</div>
				<div class="form-group mt-3">
					<label>Email</label>
					<input type="text" class="uemail form-control">
				</div>
				<div class="form-group mt-3">
					<label>Status</label>
					<select class="ustatus form-control">
						<option value="">---- Select Status ----</option>
						<option value="1">Active</option>
						<option value="2">Inactive</option>
					</select>
				</div>
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancle</button>
        <button type="button" class="medt update btn btn-success">Update</button>
      </div>
    </div>
  </div>
</div>

<!--Add New Student Modal -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Add Student Information</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group mt-3">
					<label>Student Name</label>
					<input type="text" id="studentName" class=" form-control">
				</div>
				<div class="form-group mt-3">
					<label>Father's Name</label>
					<input type="text" id="fName" class="form-control">
				</div>
				<div class="form-group mt-3">
					<label>Mother's Name</label>
					<input type="text" id="mName" class="form-control">
				</div>
				<div class="form-group mt-3">
					<label>Email</label>
					<input type="text" id="email" class="form-control">
				</div>
				<div class="form-group mt-3">
					<label>Status</label>
					<select id="status" class="form-control">
						<option value="">---- Select Status ----</option>
						<option value="1">Active</option>
						<option value="2">Inactive</option>
					</select>
				</div>
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancle</button>
        <button type="button" id="addStudent" class="btn btn-success">Add Student</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
<script src="jquery.3.6.1.js"></script>
<script src="ajax.js"></script>
</body>
</html>