<?php

if(!isset($_SESSION['check'])){
		session_start();
	}

class Dashboard{
	private $con = "";

	function __construct()
	{
		$this->con = new mysqli("localhost","root","","pos_db");
	}

	public function totalBranch(){
		$sql = $this->con->query("SELECT count(id) as totalBranch FROM tbl_branch");
		return $sql->fetch_assoc();
	}

	public function totalStock(){
		$sql = $this->con->query("SELECT SUM(qnt) as stock FROM tbl_stock");
		return $sql->fetch_assoc();
	}

	public function totalSales(){
		$br_id = $_SESSION['branch_id'];
		$sql = $this->con->query("SELECT SUM(total_quantity) as sales FROM tbl_sales_summery WHERE br_id ='$br_id'");
		return $sql->fetch_assoc();
	}

	public function totalPurchase(){
		$br_id = $_SESSION['branch_id'];
		$sql = $this->con->query("SELECT SUM(total_quantity) as purchase FROM tbl_purchase_summery WHERE br_id ='$br_id'");
		return $sql->fetch_assoc();
	}
}