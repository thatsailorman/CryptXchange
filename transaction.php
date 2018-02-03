<?php include('config.php');?>
<?php include('db.php');?>
<?php include('api/api-call-minimum.php');?>
<!doctype html>
<html lang="en">
<?php include('header.php');?>
<body>



               
  <body class="text-center">
 

    <form class="form-signin">
      
	  
	  <img class="mb-4" src="img/favicon.png" alt="" width="150" height="150">
	  

  <?php
include('api/api-call.php');
            ?>
      
 </form> 
<footer class="footer">
      <div class="container">
        <span class="text-muted"><?php if($minimumtrade <=$amountset )
{
if(!empty($payout))
{?>
<a href='statusid.php?transaction=<?php echo$payid;?>' target='_blank'><button class='btn btn-lg btn-primary btn-block'>View status of transaction ID: <b><?php echo$payid;?></b></button></a>
Your traded coins will be send to <?php echo $pairreceiveicon;?> <i class="cc <?php echo $pairreceiveicon;?>"></i> wallet address: <?php echo $walletreceive;?>.<?php }
}
if(empty($payout))
{
echo "There seems to be an error with not having set a valid receiving coin wallet address... <script>setTimeout(function(){ window.location.replace('http://cointools.nl') }, 4000); </script>"; // if receiving wallet address returns an error redirect to url
}
?>
      <br>
	  <br>
	  <?php include('footertext.php');?></span></div>
    </footer> 
	
	
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
