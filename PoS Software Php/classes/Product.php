<?php 

	$con = "";
	if(!isset($_SESSION['check'])){
		session_start();
	}

	class Product
	{
		
		function __construct()
		{
			$this->con = new mysqli("localhost","root","","pos_db");
		}

		public function addNewProduct($all){
			$name = $all['name'];
			$des = $all['des'];
			$size = $all['size'];
			$color = $all['color'];
			$costPrice = $all['costPrice'];
			$salePrice = $all['salePrice'];
			$barcode = $all['barcode'];

			
			$res = $this->con->query("INSERT INTO tbl_product (name,des,size,color,costPrice,salePrice,barcode)VALUES('$name','$des','$size','$color','$costPrice','$salePrice','$barcode')");
			if($res)
				return '<div class="alert alert-success">
      					<strong>Success</strong>Product Added successfully
    				</div>';
    		else
    			return '<div class="alert alert-danger">
      					<strong>Error</strong> Product Add Unsuccessfull
    				</div>';
			}

		public function allProduct(){
				$res = $this->con->query("SELECT * FROM tbl_product");
				return $res;
		}

		public function delete($id){
			$result = $this->con->query("DELETE FROM tbl_product WHERE id='$id'");
		}

		public function find($id){
	    	$data = $this->con->query("SELECT * FROM tbl_product WHERE id='$id'");
	    	$all = $data->fetch_assoc();
	    	return $all;
		}

		public function updateProduct($all,$id){
			$name = $all['name'];
			$des = $all['des'];
			$size = $all['size'];
			$color = $all['color'];
			$costPrice = $all['costPrice'];
			$salePrice = $all['salePrice'];
			$barcode = $all['barcode'];
			$result = $this->con->query("UPDATE tbl_product SET name='$name',des='$des',size='$size',color='$color',costPrice='$costPrice',salePrice='$salePrice',barcode='$barcode' WHERE id='$id'");
			if($result){
				header('location:manageproduct.php');
			}
		}
	}