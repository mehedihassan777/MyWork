<?php 

	$con = "";
	if(!isset($_SESSION['check'])){
		session_start();
	}

	class Branch
	{
		
		function __construct()
		{
			$this->con = new mysqli("localhost","root","","pos_db");
		}

		public function login($username,$password){
			$data = $this->con->query("SELECT * FROM tbl_branch WHERE(manager_name = '$username' OR email = '$username' OR phone = '$username') AND password='$password' AND status = '1'");
			if($data->num_rows > 0){
				$data = $data->fetch_assoc();
				$_SESSION['branch_id']= $data['id'];
				$_SESSION['check']= 'Yes';
				$_SESSION['name']= $data['branch_name'];
				header('location:dashboard.php');
			}
			else
				echo '<div class="alert alert-danger">
      						<strong>Error</strong> Login Failed
    					</div>';
		}

		public function addBranch($all){
			$branch_name = $all['bname'];
			$manager_name = $all['mname'];
			$phone = $all['phone'];
			$email = $all['email'];
			$pass = $all['pass'];
			$cpass = $all['cpass'];
			$status = "2";

			if($pass!="" && $pass == $cpass){
				$res = $this->con->query("INSERT INTO tbl_branch (branch_name,manager_name,phone,email,password,status)VALUES('$branch_name','$manager_name','$phone','$email','$pass','$status')");
				if($res)
					echo '<div class="alert alert-success">
      						<strong>Success</strong>Registration successfull
    					</div>';
    			else
    				echo '<div class="alert alert-danger">
      						<strong>Error</strong> Registration Unsuccessfull
    					</div>';
			}

			else
				echo '<div class="alert alert-danger">
      						<strong>Error</strong> Registration Unsuccessfull
    					</div>';
		}

	public function allBranch(){
			$res = $this->con->query("SELECT * FROM tbl_branch");
			return $res;
		}
	public function inactive($id){
		$this->con->query("UPDATE tbl_branch SET status='2' WHERE id='$id'");
		}

	public function active($id){
		$this->con->query("UPDATE tbl_branch SET status='1'  WHERE id='$id'");
	}

	public function delete($id){
		$result = $this->con->query("DELETE FROM tbl_branch WHERE id='$id'");
	}

	public function find($id){
    	$data = $this->con->query("SELECT * FROM tbl_branch WHERE id='$id'");
    	$all = $data->fetch_assoc();
    	return $all;
	}

	public function updateBranch($all,$id){
		$branch_name = $all['bname'];
		$manager_name = $all['mname'];
		$phone = $all['phone'];
		$email = $all['email'];	
		$result = $this->con->query("UPDATE tbl_branch SET branch_name='$branch_name',manager_name='$manager_name',phone='$phone',email='$email' WHERE id='$id'");
		if($result){
			header('location:branchmanage.php');
		}
	}
	}