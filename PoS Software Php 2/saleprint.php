<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sale Print</title>

<link href="src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

  <style>
  body,
  html{
    background: white !important;
  }
  p{
    margin: 5px 0;
  }

  @media print{
    body{
      width: 3.14 inch;
    }
  }
</style>

</head>
<body>

<?php 
    include "classes/Sales.php";
    if(isset($_GET['inv'])){
    $invoice = $_GET['inv'];
    $invoice = ($invoice/45);
    $obj = new Sales;
    $details = $obj->showSItem($invoice);
    $summery = $obj->showSummery($invoice);
    $summery = $summery->fetch_assoc();
    $sl = 1;
?>


<div class="container bg-white">
  <div class="row mt-5">
    <div class="col-md-4 offset-md-4">
      <p>Date: <?php if(isset($_GET['inv'])) echo $summery["sdate"] ?></p>
      <p>Time: <?php
                    date_default_timezone_set("Asia/Dhaka");
                    echo date("h:i:sa");
                ?>
      </p>
      <p>Branch Name: <?php echo $_SESSION['name']; ?>
      </p>
      ------------------------------------------------------------
      <h4 class="text-center">SoftnessIT</h4>
      ------------------------------------------------------------

      <table>
        <thead>
          <th>#Sl</th>
          <th>Price</th>
          <th>Qnt</th>
          <th>Seb T.</th>
        </thead>
        <tbody>
              <?php
              while($all = $details->fetch_assoc()){
                echo'
                  <tr>
                    <td>'.$sl.'</td>
                    <td>'.$all["sale_price"].'</td>
                    <td>'.$all["qnt"].'</td>
                    <td>'.$all["total_amount"].'</td>
                  </tr>
                ';
                $sl++;
              }
            }
          ?>
          
          <tr><td colspan="8">------------------------------------------------------------</td></tr>
          <tr>
            <td colspan="3"><strong>Total Amount</strong></td>
            <td><?php if(isset($_GET['inv'])) echo $summery["total_price"] ?></td>
          </tr>
          <tr>
            <td colspan="3"><strong>Dis Amount</strong></td>
            <td><?php if(isset($_GET['inv'])) echo $summery["dis_amaunt"] ?></td>
          </tr>
          <tr>
            <td colspan="3"><strong>Payable</strong></td>
            <td><?php if(isset($_GET['inv'])) echo $summery["grand_total"] ?></td>
          </tr>
          <tr>
            <td colspan="3"><strong>Paid</strong></td>
            <td><?php if(isset($_GET['inv'])) echo $summery["pay"] ?></td>
          </tr>
          <tr>
            <td colspan="3"><strong>Back</strong></td>
            <td><?php if(isset($_GET['inv'])) echo $summery["due"] ?></td>
          </tr>
        </tbody>
      </table>

    </div>
  </div>
</div>

<script src="src/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>