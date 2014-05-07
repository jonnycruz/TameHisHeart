<?php
// Replace the strings with your API credentials located in Admin > OfficeAutoPilot API Instructions and Key Manager

$appid = "2_12106_jiXs6k7H0";
$key = "tpdCJRLFD7PPBA0";

$reqType= "key";
$postargs = "appid=".$appid."&key=".$key."&return_id=1&reqType=".$reqType;
$request = "https://api.moon-ray.com/cdata.php";

$session = curl_init($request);
curl_setopt ($session, CURLOPT_POST, true);
curl_setopt ($session, CURLOPT_POSTFIELDS, $postargs);
curl_setopt($session, CURLOPT_HEADER, false);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($session);
curl_close($session);
header("Content-Type: text/xml");
echo $response;


?>

