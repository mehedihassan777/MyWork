<?php 
if(!isset($_SESSION['branch_id'])){
		session_start();
	}
//echo $_SESSION['branch_id'];
	// $obj = new Sales;
	// $obj->totalSAmount();

class Sales
	{
		public $con = "";
		function __construct()
		{
			$this->con = new mysqli("localhost","root","","pos_db");
		}

		// *** This Function Is used to find product details by barcode ***
		function findInvoice(){
			$sql = $this->con->query("SELECT MAX(invoice) as invoice FROM tbl_sales_details");
			if($sql->num_rows > 0){
				$sql = $sql->fetch_assoc();
				return $sql['invoice'];
			}
			else
				return 0;
			
		}

		// *** This Function Is used to Insert in product details table ***
		public function sAddItem($sdate,$invoice,$product_id,$sale_price,$qnt,$total_amount){
			$br_id = $_SESSION['branch_id'];
			$sql = $this->con->query("INSERT INTO tbl_sales_details(sdate,invoice,product_id,sale_price,qnt,total_amount,br_id)VALUES('$sdate','$invoice','$product_id','$sale_price','$qnt','$total_amount','$br_id')");
			$action = "sub";
			if($sql)
			echo "Sales Added";
			$this->stockUpdate($product_id,$br_id,$qnt,$action);
		}

		public function stockUpdate($product_id,$br_id,$qnt,$action){
			$find = $this->con->query("SELECT * FROM tbl_stock WHERE product_id = '$product_id'");
			$data = $find->fetch_assoc();
			if($action == "add")
				$total = $qnt + $data['qnt'];
			elseif($action == "sub")
				$total = $data['qnt'] - $qnt;
			$sql = $this->con->query("UPDATE tbl_stock SET qnt = '$total' WHERE product_id = '$product_id' AND br_id = '$br_id'");
		}

		public function stockInsertUpdate($product_id,$br_id,$qnt){
			$find = $this->con->query("SELECT * FROM tbl_stock WHERE product_id = '$product_id'");
			if($find->num_rows > 0){
				$data = $find->fetch_assoc();
				$total = $qnt + $data['qnt'];
				$sql = $this->con->query("UPDATE tbl_stock SET qnt = '$total' WHERE product_id = '$product_id'");
				echo "Purchase Added";
			}
			else{
				$sql = $this->con->query("INSERT INTO tbl_stock(product_id,br_id,qnt)VALUES('$product_id','$br_id','$qnt')");
				echo "Purchase Added";
			}
		}

		public function findStock($product_id){
			$sql = $this->con->query("SELECT * FROM tbl_stock WHERE product_id='$product_id'");
			return $sql->fetch_assoc();
		}

		public function showSItem($invoice){
			$sql = $this->con->query("SELECT * FROM tbl_sales_details WHERE invoice='$invoice'");
			return $sql;
		}

		public function showSummery($invoice){
			$sql = $this->con->query("SELECT * FROM tbl_sales_summery WHERE invoice='$invoice'");
			return $sql;
		}

		public function findProductId($id){
			$sql = $this->con->query("SELECT * FROM tbl_sales_details WHERE id='$id'");
			return $sql->fetch_assoc();
		}

		public function totalSAmount($invoice){
			//$invoice = "2022003";
			$sql = $this->con->query("SELECT SUM(qnt) as qnt, SUM(total_amount) as amount FROM tbl_sales_details WHERE invoice='$invoice'");
			$data = $sql->fetch_assoc();
			return $data;
		}

		public function sremoveItem($id,$product_id,$qnt ){
			$action = "add";
			$br_id = $_SESSION['branch_id'];
			$this->stockUpdate($product_id,$br_id,$qnt,$action);
			$sql = $this->con->query("DELETE FROM tbl_sales_details WHERE id='$id'");
			if($sql)
				echo "Item Removed";
		}

		// ***This function used to Insert data on tbl_purchase_summery Teble ***
		public function insertSalesSummery($sdate,$invoice,$total_quantity,$total_price,$dis,$dis_amaunt,$grand_total,$pay,$due){
			$br_id = $_SESSION['branch_id'];
			$sql = $this->con->query("INSERT INTO tbl_sales_summery(sdate,invoice,total_quantity,total_price,dis,dis_amaunt,grand_total,pay,due,br_id)VALUES('$sdate','$invoice','$total_quantity','$total_price','$dis','$dis_amaunt','$grand_total','$pay','$due','$br_id')");
			return $sql;
		}

		// ***This function used to show data on ManagePurchase page***
		public function salesSummeryShow(){
			$sql = $this->con->query("SELECT * FROM tbl_sales_summery");
			return $sql;
		}

		public function salesdetailsShow($invoice){
			$sql = $this->con->query("SELECT * FROM tbl_sales_summery WHERE invoice = '$invoice'");
			return $sql;
		}

		public function salesSummeryAndDetailsShow($invoice){
			$sql = $this->con->query("SELECT * FROM tbl_sales_details WHERE invoice = '$invoice'");
			return $sql;
		}

		public function salesDateSummeryShow($sdate){
			$sql = $this->con->query("SELECT * FROM tbl_sales_summery WHERE sdate = '$sdate'");
			return $sql;
		}


	}

