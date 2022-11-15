<?php 
include "Sales.php";
if(!isset($_SESSION['branch_id'])){
		session_start();
	}
//echo $_SESSION['branch_id'];

class Purchase
	{
		public $con = "";
		function __construct()
		{
			$this->con = new mysqli("localhost","root","","pos_db");
		}

		// *** This Function Is used to find product details by barcode ***
		function findItem($barcode){
			$sql = $this->con->query("SELECT * FROM tbl_product WHERE barcode = '$barcode'");
			if($sql->num_rows > 0){
				$sql = $sql->fetch_assoc();
				return $sql;
			}
			
		}

		// *** This Function Is used to Insert in product details table ***
		public function addItem($pdate,$cName,$invoice,$product_id,$barcode,$price,$qnt,$total){
			$br_id = $_SESSION['branch_id'];
			$sql = $this->con->query("INSERT INTO tbl_purchase_details(pdate,cName,invoice,br_id,product_id,barcode,price,qnt,total)VALUES('$pdate','$cName','$invoice','$br_id','$product_id','$barcode','$price','$qnt','$total')");
			$this->stockInsertUpdate($product_id,$br_id,$qnt);
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

		public function showItem($invoice){
			$sql = $this->con->query("SELECT * FROM tbl_purchase_details WHERE invoice='$invoice'");
			return $sql;
		}

		public function findProductId($id){
			$sql = $this->con->query("SELECT * FROM tbl_purchase_details WHERE id='$id'");
			return $sql->fetch_assoc();
		}

		public function removeItem($id,$product_id,$qnt){
			$action = "sub";
			$br_id = $_SESSION['branch_id'];
			$obj = new Sales;
			$obj->stockUpdate($product_id,$br_id,$qnt,$action);
			$sql = $this->con->query("DELETE FROM tbl_purchase_details WHERE id='$id'");
			if($sql)
				echo "Item Removed";
		}

		// ***This function used to Insert data on tbl_purchase_summery Teble ***
		public function insertSummery($pdate,$company,$invoice,$total_quantity,$total_price,$dis,$dis_amaunt,$grand_total,$pay,$due){
			$br_id = $_SESSION['branch_id'];
			$sql = $this->con->query("INSERT INTO tbl_purchase_summery(pdate,company,invoice,total_quantity,total_price,dis,dis_amaunt,grand_total,pay,due,br_id)VALUES('$pdate','$company','$invoice','$total_quantity','$total_price','$dis','$dis_amaunt','$grand_total','$pay','$due','$br_id')");
			return $sql;
		}

		// ***This function used to show data on ManagePurchase page***
		public function purchaseSummeryShow(){
			$sql = $this->con->query("SELECT * FROM tbl_purchase_summery");
			return $sql;
		}

	}

