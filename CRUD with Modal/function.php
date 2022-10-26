<?php 
	function insert($formData,$con){
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
            $con->query($sql);
            if($con){
            	echo '<div class="alert alert-warning"><strong>Success:</strong>Data Saved</div>';
            }
            else
            	echo '<div class="alert alert-warning"><strong>Error:</strong>Data Not Saved</div>';

        }
        
	}

    function show(){
        $con = new mysqli("localhost","root","","student");
        $data = $con->query("SELECT * FROM tbl_studentinfo");
        return $data;
    }