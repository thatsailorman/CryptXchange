<?php
	$transaction = strip_tags($_GET['transaction']);
	$transaction = htmlspecialchars($transaction);
	$amount = $transactionrow['payamount'];
	$address = $transactionrow['payto'];
	
    $message = json_encode(
        array('jsonrpc' => '2.0', 'id' => 1, 'method' => 'getStatus', 'params' => array('id' =>"$transaction"))
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
$payidstatus = $obj["result"];
?>

<?php
if($minimumtrade >=$amount )
{
$finalstatus = '<b>Failed</b>. Minumum amount to trade is set too low.';
}
if($minimumtrade <=$amount )
{
if ( $payidstatus == "waiting" ) {
	$finalstatus = "<b>Waiting for payment</b>. Please send <b>$amount $pairicon</b> to the following wallet address: <b>$address</b>";
}
if ( $payidstatus == "confirmed" ) {
	$finalstatus = '<b>Payment confirmed</b>. Processing trade now, this might take a couple of minutes.';
}
if ( $payidstatus == "finished" ) {
	$finalstatus = '<b>Payment received and the trade has been completed with success.</b>.';
}
if ( $payidstatus == "failed" ) {
	$finalstatus = '<b>Failed!</b>.';
}
if ( $payidstatus == "refunded" ) {
	$finalstatus = '<b>Error</b>. Your coins have been refunded to your refund wallet address.';
}
if ( $payidstatus == "" ) {
$finalstatus = "<b>Error: Transaction ID not found</b>. <script>setTimeout(function(){ window.location.replace('') }, 3000); </script>";
}
}
?>

<?php echo "Status van transactieID: $finalstatus<br><br>";?>


