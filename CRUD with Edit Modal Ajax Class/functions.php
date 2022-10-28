<?php

$std = new Student($_POST['action']);

class Student{
	public $con;
	function __construct($action){
		$this->con = new mysqli("localhost","root","","student");
		$this->$action();
	}


	private function show(){
		$obj = $this->con->query("SELECT * FROM tbl_studentinfo");
		$tData = "";
		$sl = 0;
		if($obj->num_rows>0){
			while($all = $obj->fetch_assoc()){
				$sl++;
				if($all["status"]==1){
					$status ='<button value="'.$all["student_id"].'" class="active btn btn-info btn-sm">Active</button>';
				}
				else
					$status ='<button value="'.$all["student_id"].'" class="inactive btn btn-warning btn-sm">Inactive</button>';
				$tData .='
				<tr>
						<td>'.$sl.'</td>
						<td>'.$all["studentName"].'</td>
						<td>'.$all["fName"].'</td>
						<td>'.$all["mName"].'</td>
						<td>'.$all["email"].'</td>
						<td>'.$status.'</td>
						<td><button data-bs-toggle="modal" data-bs-target="#del" value="'.$all["student_id"].'" class="del btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
						<td><button data-bs-toggle="modal" data-bs-target="#edt" value="'.$all["student_id"].'" class="edt btn btn-info btn-sm"><i class="fa fa-edit"></i></button></td>
				</tr>';
			}
			echo $tData;
		}
		else
			echo "<tr><td class='text-center alert alert-denger' colspan='8'>No Data Found</td></tr>";
	}

	private function insert(){
		$studentName = $_POST['studentName'];
		$fName = $_POST['fName'];
		$mName = $_POST['mName'];
		$email = $_POST['email'];
		$status = $_POST['status'];
		$result = $this->con->query("INSERT INTO tbl_studentinfo(studentName,fName,mName,email,status)VALUES('$studentName','$fName','$mName','$email','$status')");
		if($result){
			echo "<div class='alert alert-success'><strong>Success:</strong>
						Data Inserted
					</div>";
		}
	}

	private function inactive(){
		$student_id = $_POST['student_id'];
		$this->con->query("UPDATE tbl_studentinfo SET status='2' WHERE student_id='$student_id'");
	}

	private function active(){
		$student_id = $_POST['student_id'];
		$this->con->query("UPDATE tbl_studentinfo SET status='1'  WHERE student_id='$student_id'");
	}

	private function delete(){
		$student_id = $_POST['student_id'];
		$result = $this->con->query("DELETE FROM tbl_studentinfo WHERE student_id='$student_id'");
		if($result){
			echo "<div class='alert alert-success'><strong>Success:</strong>
						Data Deleted
					</div>";
		}
	}

	private function find(){
		$student_id = $_POST['student_id'];
    	$data = $this->con->query("SELECT * FROM tbl_studentinfo WHERE student_id='$student_id'");
    	$all = $data->fetch_assoc();
    	echo json_encode($all);
	}

	private function update(){
		$student_id = $_POST['student_id'];
		$studentName = $_POST['studentName'];
		$fName = $_POST['fName'];
		$mName = $_POST['mName'];
		$email = $_POST['email'];
		$status = $_POST['status'];
		$result = $this->con->query("UPDATE tbl_studentinfo SET studentName='$studentName',fName='$fName',mName='$mName',email='$email',status='$status' WHERE student_id='$student_id'");
		if($result){
			echo "<div class='alert alert-success'><strong>Success:</strong>
						Data Updated Successfully
					</div>";
		}
	}

}