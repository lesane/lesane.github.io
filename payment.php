<?php
$secret = 'ZzsMLGKe162CfA5EcG6j';

$my_xpub = 'xpub6C8RbMhfouA7FnfxcHhkWCHHbpf474mBFRHtxvvtaazgwai8knsDhY1hDinwPLyvNc5MfYuHXx4pB5Wt9AEnFfxRqghK3qCamgLCv8TnR9B';
$my_api_key = 'e2dfe929-f6f7-4157-9d4f-ea1259d3bfac';

$my_callback_url = 'https://mystore.com?invoice_id=058921123&secret='.$secret;

$root_url = 'https://api.blockchain.info/v2/receive';

$parameters = 'xpub=' .$my_xpub. '&callback=' .urlencode($my_callback_url). '&key=' .$my_api_key;

$response = file_get_contents($root_url . '?' . $parameters);

$object = json_decode($response);


$uniqid = $prefix . uniqid();
echo $uniqid;
echo 'Send Payment To : ' . $object->address;
?>
