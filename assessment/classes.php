<?php
class Student{
	public $con;
	function __construct(){
		$this->con = new mysqli("localhost","root","","student");
	}

	public function insert($formData){
		$studentName=$formData["studentName"];
        $fName=$formData["fName"];
        $mName=$formData["mName"];
        $email=$formData["email"];
        $status=$formData["status"];

        if($studentName == "")
        	echo '<div class="alert alert-warning"><strong>Error:</strong>Name Field is Empty</div>';
        elseif($fName == "")
        	echo '<div class="alert alert-warning"><strong>Error:</strong>Father Name Field is Empty</div>';
        elseif($mName == "")
        	echo '<div class="alert alert-warning"><strong>Error:</strong>Father Name Field is Empty</div>';
        elseif($email == "")
        	echo '<div class="alert alert-warning"><strong>Error:</strong>Father Name Field is Empty</div>';
        elseif($status == "")
        	echo '<div class="alert alert-warning"><strong>Error:</strong>Father Name Field is Empty</div>';
        else{
        	$sql = "INSERT INTO tbl_studentinfo (studentName, fName, mName,email,status)VALUES ('$studentName', '$fName', '$mName','$email','$status')";
            $check = $this->con->query($sql);
            if($check){
            	echo '<div class="alert alert-warning"><strong>Success:</strong>Data Saved</div>';
            }
            else
            	echo '<div class="alert alert-warning"><strong>Error:</strong>Data Not Saved</div>';

        }
        
	}
	public function show(){
        $data = $this->con->query("SELECT * FROM tbl_studentinfo");
        return $data;
    }

    public function find($id){
        $data = $this->con->query("SELECT * FROM tbl_studentinfo WHERE student_id='$id'");
        $all = $data->fetch_assoc();
        return $all;
    }

    public function edit($data,$id){
        $studentName = $data["studentName"];
        $fName = $data["mName"];
        $mName = $data["mName"];
        $email = $data["email"];
        $status = $data["status"];
        $check = $this->con->query("UPDATE tbl_studentinfo SET studentName='$studentName', fName='$fName', mName='$mName', email='$email', status='$status' WHERE student_id='$id'");
        if($check){
            header("location: show.php");
        }
        
    }

    public function delete($id){
        $check = $this->con->query("DELETE FROM tbl_studentinfo WHERE student_id='$id'");
        if($check){
            header("location: show.php");
        }
    }
    function active($id){
        $check = $this->con->query("UPDATE tbl_studentinfo SET  status='1' WHERE student_id='$id'");
        if($check){
            header("location: show.php");
        }
    }
    function inactive($id){
        $check = $this->con->query("UPDATE tbl_studentinfo SET  status='2' WHERE student_id='$id'");
        if($check){
            header("location: show.php");
        }
    }
} 
