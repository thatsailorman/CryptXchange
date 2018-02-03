<?php
// check minimum amount for trading pair
    $message = json_encode(
        array('jsonrpc' => '2.0', 'id' => 1, 'method' => 'getMinAmount', 'params' => array('from' =>"$pair", 'to' =>"$pairreceive"))
    );
    $sign = hash_hmac('sha512', $message, $apiSecret);
    $requestHeaders = [
        'api-key:' . $apiKey,
        'sign:' . $sign,
        'Content-type: application/json'
    ];
	// start curl
    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $requestHeaders);
    
    $response = curl_exec($ch);
    curl_close($ch); // close curl

$obj = json_decode($response,true);
$minimumtrade = $obj["result"];
$minimumtradecalc = $minimumtrade / 100;
$minimumtradecalc2 = $minimumtradecalc * 102;
$minimumtradeshort = number_format($minimumtradecalc2, 4);

?>