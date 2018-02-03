<?php include('config.php');?>
<?php include('db.php');?>
<?php include('api/api-call-minimum.php');?>
<?php $transaction = strip_tags($_GET['transaction']);?>
<?php $idtransaction = $mysqli->escape_string($transaction);
// call database
$trans = $mysqli->query("SELECT * FROM transactions WHERE payid='$idtransaction'");
$transactionrow = mysqli_fetch_array($trans);
?>
<!doctype html>
<html lang="en">
  <?php include('header.php');?>
<body>



               
  <body class="text-center">
 

    <form class="form-signin">
      
	  
	  <img class="mb-4" src="img/favicon.png" alt="" width="150" height="150">
	  <br>

  <?php
include('api/api-call-status.php');
            ?>
  <img src='img/loading-gif.gif' width="127px" height="127px">    
 </form> 
<footer class="footer">
      <div class="container">
        <span class="text-muted">Transaction ID: <b><?php echo $transaction;?></b>
		<br>
		<?php include('footertext.php');?>
</span>
      </div>
    </footer> 
	
	
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
