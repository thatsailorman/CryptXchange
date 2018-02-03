<?php
	$walletreceive = $_GET['walletreceive'];
	$walletreceive = htmlspecialchars($walletreceive);
	$walletreceive = strip_tags($walletreceive);

$walletrefund = $_GET['walletrefund'];
$walletrefund = htmlspecialchars($walletrefund);
$walletrefund = strip_tags($walletrefund);

$amountset = $_GET['amountset'];
$amountset = strip_tags($amountset);
    $message = json_encode(
        array('jsonrpc' => '2.0', 'id' => 1, 'method' => 'createTransaction', 'params' => array('from' => "$pair", 'to' => "$pairreceive", 'address' => "$walletreceive", 'amount' => "$amountset"))
    );
    $sign = hash_hmac('sha512', $message, $apiSecret);
    $requestHeaders = [
        'api-key:' . $apiKey,
        'sign:' . $sign,
        'Content-type: application/json'
    ];
    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $requestHeaders);
    
    $response = curl_exec($ch);
    curl_close($ch);

$obj = json_decode($response,true);
$payid = $obj["result"]["id"];
$payto = $obj["result"]["payinAddress"];
$payout = $obj["result"]["payoutAddress"];
$payamount = $obj["result"]["amountTo"];
$paycurrencyfrom = $obj["result"]["currencyFrom"];
$paycurrencyto = $obj["result"]["currencyTo"];
$paydate = $obj["result"]["createdAt"];
$ip = $_SERVER['REMOTE_ADDR'];
//Check if wallet receive address doesnt give an error and check if minimum amount is not too low
		 if($minimumtrade >=$amountset )
{
  echo "<br><b>Minimum amount ($amountset) is set too low</b>. Please try again with a trade amount of atleast $minimumtradeshort. <script>setTimeout(function(){ window.location.replace('index.php') }, 7500); </script>"; 
}
if($minimumtrade <=$amountset )
{
if(!empty($payout))
{
echo "<h2>Send $amountset <i class='cc $pairicon'></i> $pairicon</h2>
<center><div class='box'><a href='$pairfullname:$payto?amount=$amountset'><img src='https://chart.googleapis.com/chart?chs=150x150&chld=L|2&cht=qr&chl=$pairfullname:$payto?amount=$amountset'></a></div></center>
<br>Please transfer the exact amount of <b>$amountset $pairicon</b> to: <b>$payto</b>";

//add transaction to database
$mysqli->query("INSERT INTO transactions (payid, paydate, ip, payamount, paycurrencyfrom, paycurrencyto, payout, payto, walletrefund) VALUES ('$payid','$paydate','$ip','$amountset', '$paycurrencyfrom', '$paycurrencyto', '$payout', '$payto', '$walletrefund')");
}
}
?>
