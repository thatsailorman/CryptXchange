<?php include('config.php');?>
<?php include('db.php');?>
<?php include('api/api-call-minimum.php');?>
<!doctype html>
<html lang="en">
<?php include('header.php');?>
<body>



               <form method = "post" action = "<?php $_PHP_SELF ?>" id = "report">
  <body class="text-center">
    <form class="form-signin">
      
      
	  <img class="mb-4" src="img/favicon.png" alt="" width="150" height="150">
	  <br><b>Receiving wallet address <?php echo $pairreceivefullname;?></b>
      <label for="inputWallet" class="sr-only"></label>
      <input type="text" name="inputWallet" id="inputWallet" class="form-control" placeholder="Traded coins will be send to this address" required autofocus>
      <label for="inputAantal" class="sr-only"></label>
	  <br><b>Amount to trade</b> (Minimum amount <i class="cc <?php echo $pairicon;?>"></i> <?php echo $minimumtradeshort;?> <?php echo $pairicon;?>)<br>
      <input type="text" name="inputAantal" id="inputAantal" class="form-control" placeholder="Amount of coins. Example: 0.12" required>
	  <label for="inputRefund" class="sr-only"></label>
	  <br><b>Wallet adres in case of an error (refund)</b> (Your <?php echo $pairfullname;?> wallet)<br>
      <input type="text" name="inputRefund" id="inputRefund" class="form-control" placeholder="Your Wallet address, in case of a refund!" required>
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="report" id="report">Trade coins</button>
	  <br>
	</form>
	</form>
	
	<footer class="footer">
      <div class="container">
        <span class="text-muted">
  <?php
  
include('api/api-call-tradeamount.php');
            ?>
			<br>
			<?php include('footertext.php');?>
      </span></div>
    </footer> 
      
    	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
  </body>
</html>
