<?php

include_once("Purchase.php");
include_once("Sales.php");

$action = $_POST['action'];
$action();



// *** This function is used to get barcode from ajax, Get data from Purchase class and send to ajax ***
function findItem(){
	$barcode = $_POST['barcode'];
	$obj = new Purchase;
	$info = $obj->findItem($barcode);
	echo json_encode($info);
	
}
function addItem(){
	$pdate = $_POST['pdate'];
	$cName = $_POST['cName'];
	$invoice = $_POST['invoice'];
	$product_id = $_POST['product_id'];
	$barcode = $_POST['barcode'];
	$price = $_POST['price'];
	$qnt = $_POST['qnt'];
	$total = $_POST['total'];
	$obj = new Purchase;
	$obj->addItem($pdate,$cName,$invoice,$product_id,$barcode,$price,$qnt,$total);
}
function showStock(){
	$product_id = $_POST['product_id'];
	$obj = new Purchase;
	$stock = $obj->findStock($product_id);
	echo json_encode($stock);
}

function showItem(){
	$invoice = $_POST['invoice'];
	$obj = new Purchase;
	$all = $obj->showItem($invoice);
	$tdata = "";
	while($item = $all->fetch_assoc()){
		$tdata .= '<tr>
	      <td>'.$item["pdate"].'</td>
	      <td>'.$item["barcode"].'</td>
	      <td>'.$item["price"].'</td>
	      <td>'.$item["qnt"].'</td>
	      <td>'.$item["total"].'</td>
	      <td><button value="'.$item["id"].'" class="remove btn btn-sm btn-danger">X</button></td>
	    </tr>';
	}
	echo $tdata;
	
}

function removeItem(){
	$id = $_POST['id'];
	$obj = new Purchase;
	$data = $obj->findProductId($id);
	$product_id = $data['product_id'];
	$qnt = $data['qnt'];
	$obj->removeItem($id,$product_id,$qnt);
}

function totalQnt(){
	$invoice = $_POST['invoice'];
	$obj = new Purchase;
	$all = $obj->showItem($invoice);
	$sum = 0;
	while($item = $all->fetch_assoc()){
		$sum = $sum + $item['qnt'];
	}
	echo $sum;
}

function totalAmount(){
	$invoice = $_POST['invoice'];
	$obj = new Purchase;
	$all = $obj->showItem($invoice);
	$sum = 0;
	while($item = $all->fetch_assoc()){
		$sum = $sum + $item['total'];
	}
	echo $sum;
}

function insertSummery(){ 
	$pdate = $_POST['pdate'];
	$company = $_POST['company']; 
	$invoice = $_POST['invoice']; 
	$total_quantity = $_POST['total_quantity']; 
	$total_price = $_POST['total_price']; 
	$dis = $_POST['dis']; 
	$dis_amaunt = $_POST['dis_amaunt']; 
	$grand_total = $_POST['grand_total']; 
	$pay = $_POST['pay']; 
	$due = $_POST['due'];
	$obj = new Purchase;
	$sql = $obj->insertSummery($pdate,$company,$invoice,$total_quantity,$total_price,$dis,$dis_amaunt,$grand_total,$pay,$due);
	if($sql){
		echo "Summery Inserted";
	}
}

function findInvoice(){
	$obj = new Sales;
	echo $obj->findInvoice();
}

function sAddItem(){
	$sdate = $_POST['sdate'];
	$invoice = $_POST['invoice'];
	$product_id = $_POST['product_id'];
	$sale_price = $_POST['sale_price'];
	$qnt = $_POST['qnt'];
	$total_amount = $_POST['total_amount'];
	$obj = new Sales;
	$obj->sAddItem($sdate,$invoice,$product_id,$sale_price,$qnt,$total_amount);
}

//sdate,invoice,product_id,sale_price,qnt,total_amount

function showSItem(){
	$invoice = $_POST['invoice'];
	$obj = new Sales;
	$all = $obj->showSItem($invoice);
	$tdata = "";
	while($item = $all->fetch_assoc()){
		$tdata .= '<tr>
	      <td>'.$item["sdate"].'</td>
	      <td>'.$item["invoice"].'</td>
	      <td>'.$item["sale_price"].'</td>
	      <td>'.$item["qnt"].'</td>
	      <td>'.$item["total_amount"].'</td>
	      <td><button value="'.$item["id"].'" class="sremove btn btn-sm btn-danger">X</button></td>
	    </tr>';
	}
	echo $tdata;
	
}

function totalSAmount(){
	$invoice = $_POST['invoice'];
	$obj = new Sales;
	$all = $obj->totalSAmount($invoice);
	echo json_encode($all);
	
}

function sremoveItem(){
	$id = $_POST['id'];
	$obj = new Sales;
	$data = $obj->findProductId($id);
	$product_id = $data['product_id'];
	$qnt = $data['qnt'];
	$obj->sremoveItem($id,$product_id,$qnt );
}

function insertSalesSummery(){
	$sdate = $_POST['sdate']; 
	$invoice = $_POST['invoice']; 
	$total_quantity = $_POST['total_quantity']; 
	$total_price = $_POST['total_price']; 
	$dis = $_POST['dis']; 
	$dis_amaunt = $_POST['dis_amaunt']; 
	$grand_total = $_POST['grand_total']; 
	$pay = $_POST['pay']; 
	$due = $_POST['due'];
	$obj = new Sales;
	$sql = $obj->insertSalesSummery($sdate,$invoice,$total_quantity,$total_price,$dis,$dis_amaunt,$grand_total,$pay,$due);
	if($sql){
		echo "Summery Inserted";
	}
}