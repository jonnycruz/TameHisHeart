<?php
    $value = $_GET["email"];
    setcookie('optin', $value, time() + (10 * 365 * 24 * 60 * 60));
	require_once(dirname(__FILE__).'/_includes/template.core.php');

	
	// Sets cookie data for Google ECommerce tracking
	 function cookievalues($input){  
	 
	 $email = $_GET["email"];
	 $ga_name = $_GET["firstname"];
	 $ga_name = $_GET["lastname"];
	$ga_transaction_id = $_GET["transaction_id"];
    $ga_storename = "TameHisHeart";
	$ga_total = "0.50";
	$ga_tax = "0.00";
    $ga_shipping = "0.00";
	$ga_city = $_GET["billing_city"];
	$ga_state = $_GET["billing_state"];
	$ga_country = $_GET["country"];
	$ga_skucode = "THH-EBOOK-Optin";
	$ga_product = "1. Tame His Heart eBook optin";
	$ga_category = "none";
	$ga_unit_price = "0.50";
	$ga_quantity = "1";
	
	setcookie('email', $email, time() + (10 * 365 * 24 * 60 * 60));
	setcookie('firstname', $ga_name, time() + (10 * 365 * 24 * 60 * 60));
	setcookie('transaction_id', $ga_transaction_id, time() + (10 * 365 * 24 * 60 * 60));
	setcookie('storename', $ga_storename, time() + (10 * 365 * 24 * 60 * 60));
	setcookie('total', $ga_total, time() + (10 * 365 * 24 * 60 * 60));
	setcookie('tax', $ga_tax, time() + (10 * 365 * 24 * 60 * 60));
	setcookie('shipping', $ga_shipping, time() + (10 * 365 * 24 * 60 * 60));
	setcookie('city', $ga_city, time() + (10 * 365 * 24 * 60 * 60));
	setcookie('state', $ga_state, time() + (10 * 365 * 24 * 60 * 60));
	setcookie('country', $ga_country, time() + (10 * 365 * 24 * 60 * 60));
	setcookie('skucode', $ga_skucode, time() + (10 * 365 * 24 * 60 * 60));
	setcookie('product', $ga_product, time() + (10 * 365 * 24 * 60 * 60));
	setcookie('category', $ga_category, time() + (10 * 365 * 24 * 60 * 60));
	setcookie('unit_price', $ga_unit_price, time() + (10 * 365 * 24 * 60 * 60));
	setcookie('quantity', $ga_quantity, time() + (10 * 365 * 24 * 60 * 60));
	
	return $ga_name;
	 }
	 
    cookievalues($input);
	
      function getcookieinfo($input){
	 
	if( ! ini_get('date.timezone') )
		{
   			date_default_timezone_set('GMT');
		} 
		
		$micro = str_replace('.', '', microtime(true)); ; 
		$trans_id = substr($micro, 0, -1);
	  $email = $_COOKIE["email"];
	  $ga_name = $_COOKIE["firstname"];
	  $ga_transaction_id = $_COOKIE["transaction_id"];
	  $ga_storename = $_COOKIE["storename"];
	  $ga_total = $_COOKIE["total"];
	  $ga_tax = $_COOKIE["tax"];
	  $ga_shipping = $_COOKIE["shipping"];
	  $ga_city = $_COOKIE["city"];
	  $ga_state = $_COOKIE["state"];
	  $ga_country = $_COOKIE["country"];
	  $ga_skucode = $_COOKIE["skucode"];
	  $ga_product = $_COOKIE["product"];
	  $ga_category = $_COOKIE["category"];
	  $ga_unit_price = $_COOKIE["unit_price"];
	  $ga_quantity = $_COOKIE["quantity"];
	  	

	switch ($input) {
    case "firstname":
        return $ga_name;
        break;
	case "email":
        return $email;
        break;
    case "transaction_id":
        return $ga_transaction_id;
        break;
    case "storename":
        return $ga_storename;
        break;
	 case "total":
        return '139.99';
        break;
	 case "tax":
        return $ga_tax;
        break;
	 case "shipping":
        return $ga_shipping;
        break;
	 case "city":
        return $ga_city;
        break;
	 case "state":
        return $ga_state;
        break;
	 case "country":
        return $ga_country;
        break;
	 case "skucode":
        return 'THH-EBOOK';
        break;
	 case "product":
        return 'Tame His Heart ebook';
        break;
	 case "category":
        return 'none';
        break;
	 case "unit_price":
        return '29.97';
        break;
	 case "quantity":
        return '1';
        break;
    case "trans_id":
        return $trans_id;
        break;
	default;
		
}
   }
   function callapi(){
  $email = getcookieinfo("email");
  $trans_id = getcookieinfo("transaction_id"); 
	
	$data = <<<STRING
<search><equation>
<field>E-Mail</field>
<op>e</op>
<value>$email</value>
</equation>
</search>
STRING;

$data = urlencode(urlencode($data));
//echo($data);

// Replace the strings with your API credentials located in Admin > OfficeAutoPilot API Instructions and Key Manager
$appid = "2_12106_jiXs6k7H0";
$key = "tpdCJRLFD7PPBA0";

$reqType = "search";
$postargs = "appid=".$appid."&key=".$key."&return_id=1&reqType=".$reqType."&data=".$data;
$request = "http://api.moon-ray.com/cdata.php";

$session = curl_init($request);
curl_setopt ($session, CURLOPT_POST, true);
curl_setopt ($session, CURLOPT_POSTFIELDS, $postargs);
curl_setopt ($session, CURLOPT_HEADER, false);
curl_setopt ($session, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($session);
curl_close($session);
//header("Content-Type: text/xml");
//echo $response;
$xml = new SimpleXMLElement($response);
$contact_id = $xml->contact['id'];



$data = <<<STRING
<contact id="$contact_id">
<Group_Tag name="Google Analytics">
<field name="Last Transaction ID">$trans_id</field>
</Group_Tag>
</contact>
STRING;

//echo($data);
$data = urlencode(urlencode($data));
//echo($data);

// Replace the strings with your API credentials located in Admin > OfficeAutoPilot API Instructions and Key Manager
$appid = "2_12106_jiXs6k7H0";
$key = "tpdCJRLFD7PPBA0";


$reqType= "update";
$postargs = "appid=".$appid."&key=".$key."&return_id=1&reqType=".$reqType. "&data=".$data;
$request = "http://api.moon-ray.com/cdata.php";

$session = curl_init($request);
curl_setopt ($session, CURLOPT_POST, true);
curl_setopt ($session, CURLOPT_POSTFIELDS, $postargs);
curl_setopt($session, CURLOPT_HEADER, false);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($session);
curl_close($session);	
   }
   
//callapi();
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

	<!-- Page Data -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Checkout</title>
	
	<!-- Page CSS -->
	<link type="text/css" media="screen" rel="stylesheet" href="/_css/main.css" />
	<link type="text/css" media="screen" rel="stylesheet" href="/_js/_bootstrap/css/bootstrap.css" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet" />

	<!-- Page JS -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.js" type="text/javascript"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js" type="text/javascript"></script>
	<script src="/_js/_bootstrap/js/bootstrap.js" type="text/javascript"></script>
	<script src="/_js/_lib/dataobject.core.js" type="text/javascript"></script>
	
  <script type="text/javascript" src="https://orgasmhowto.com/wp-content/uploads/2013/11/jquery.popup-min.js"></script>
    <script src="/_js/_plugin/_cookie/jquery.cookie.js"></script>
	

<link rel="shortcut icon" href="_img/favicon-heart.ico" type="image/x-icon" />

<!-- Start Visual Website Optimizer Code -->
<script type='text/javascript'>
var _vis_opt_account_id = 66697;
var _vis_opt_protocol = (('https:' == document.location.protocol) ? 'https://' : 'http://');
document.write('<s' + 'cript src="' + _vis_opt_protocol + 
'dev.visualwebsiteoptimizer.com/deploy/js_visitor_settings.php?v=1&a='+_vis_opt_account_id+'&url='
+encodeURIComponent(document.URL)+'&random='+Math.random()+'" type="text/javascript">' + '<\/s' + 'cript>');
</script>

<script type='text/javascript'>
if(typeof(_vis_opt_settings_loaded) == "boolean") { document.write('<s' + 'cript src="' + _vis_opt_protocol + 
'd5phz18u4wuww.cloudfront.net/vis_opt.js" type="text/javascript">' + '<\/s' + 'cript>'); }
// if your site already has jQuery 1.4.2, replace vis_opt.js with vis_opt_no_jquery.js above
</script>

<script type='text/javascript'>
if(typeof(_vis_opt_settings_loaded) == "boolean" && typeof(_vis_opt_top_initialize) == "function") {
        _vis_opt_top_initialize(); vwo_$(document).ready(function() { _vis_opt_bottom_initialize(); });
}
</script>
<!-- End Visual Website Optimizer Code -->

<!--[if lte IE 8]>
<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

<script>
document.createElement('header');
document.createElement('nav');
document.createElement('section');
document.createElement('article');
document.createElement('aside');
document.createElement('footer');
document.createElement('hgroup');
</script>
<style type="text/css">
header, nav, article, footer, address {  
    display: block;  
}

.col-sm-3 {
max-width: 200px;
width:auto !important;
height:auto !important;

}

.col-md-8 {
float:left;
max-width: 760px;
width:auto !important;
height:auto !important;
}


.col-sm-9 {
float:right;
min-width: 200px;
max-width:400px;
width:auto !important;
height:auto !important;
}


.col-md-12 {
max-width: 1140px;
width:auto !important;
height:auto !important;
}

.col-md-7 {
float:left;
max-width: 600px;
width:auto !important;
height:auto !important;
}

.col-md-5 {
float: left;
max-width: 475px;
width:auto !important;
height:auto !important;
}

.col-md-4 {
float:left;
max-width: 380px;
width:auto !important;
height:auto !important;
}

.container {
max-width: 1170px;
width:auto !important;
height:auto !important;
}

</style>


<![endif]-->

<style>
@media screen and (max-width: 481px){
.moonray-form
{
width: 100%!important;
}
}
</style>
</head>
<body><?php include_once("_includes/gacheckoutvariable.php") ?><script src='https://www1.moon-ray.com/v2.4/analytics/tracking.js' type="text/javascript"></script>
<script type="text/javascript">
_mri = "12106_3_2";
mrtracking();
</script>
<div id="wrapper">
	    
		<?=View::load('headermenuonly', array('checkout' => 'active', 'trust' => 'hidden'))?>

		<div style="width:auto; max-width:900px; background-color:#FFFFFF !important; margin: 0 auto;">
<form action="checkoutcontrol-step2.php" method="get" enctype="multipart/form-data"></form><div style="width:auto:; max-width:900px; width:auto; margin: 0 auto; background-color:#333;">
			<img src="_img/tamehisheartlogo.png" style="width:100%; max-width:200px; float:left;" / ><img src="_img/toastepbanner.png" style="width:100%; max-width:700px; float:left; vertical-align: middle;"/></div><div style="clear:both;"></div>
          

          
          
              <div style="background:url(_img/bartop.png) repeat-x; max-width:900px; width:auto; max-height:90px; height:40px;"></div> 
              
              
              <div style="max-width:600px; width:100% margin: 5 auto; float:left;">
         <br />
         <table width="500" border="0">
  <tr>
    <td colspan="3"> <p style="max-width:500px; width:auto; margin: 5 auto; float:left;"><span style="color:#C00; font-weight:bold;"><img src="_img/checkyes.png" style="float:left; width:auto; max-width:130px;" /></span> I want to try the Tame His Heart program <strong>COMPLETELY FREE</strong>… and get the secrets to attracting and entrancing any man! It will show me step-by-step how to become fully irresistible to any man wheather I want to attract that new guy or completely reignite a dead relationship. I understand this program is fully guaranteed and that if I’m unhappy with it for any reason I can simply contact customer support@tamehisheart.com and I will NEVER BE CHARGED, no questions asked. I understand that my credit card will be discreetly charged 29.97, ONLY if I try the program for seven days and decide it is worth every penny. I also understand <span style="color:#C00; font-weight:bold;"> I am getting a month of the complete Interview With Dating Experts Completely FREE!</span></p>
        <br /><br /><br /><br /></td>
  </tr>
  <tr>
    <td valign="top"></td>
    <td colspan="2">          <p style="max-width:500px; width:auto; margin: 5 auto; float:left;">&nbsp;</p></td>

  </tr>
  <tr>
    <td valign="top" align="right"><img src="_img/red-checkmark.png" style="max-width:40px; width:100%;" /></td>
    <td> <p style="max-width:500px; width:auto; margin: 5 auto; float:left;"><strong>Tame His heart eBook</strong></td> 
    <td>Valued at $97.00</td>
  </tr>
    <tr>
    <td valign="top" align="right"><img src="_img/red-checkmark.png" style="max-width:40px; width:100%;" /></td>
    <td>  <p style="max-width:500px; width:auto; margin: 5 auto; float:left;">PLUS BONUS Dating Interviews </td>
     <td>Valued at $197.00</strong></p></td>
  </tr>
   <tr>
    <td colspan="3">
    <br />
      </td>
      </tr>
   <tr>
   <td valign="top" align="right"></td>
       <tr>
       <td valign="top" align="right"></td>
      <td>
    <p style="max-width:500px; width:auto; margin: 3 auto; float:left;"><span style="font-weight:bold;">Total Value: </span><br/></p></td>
    <td>Valued at $294.00</td>
     <tr>
    <td colspan="3">
      <hr style="height:1px;border:none;color:#CCC;background-color:#333;" />
      </td>
      </tr>
      <tr>
       <td valign="top" align="right"></td>
      <td>
    <p style="max-width:500px; width:auto; margin: 3 auto; float:left;"><span style="color:#C00; font-weight:bold;">Your Price Today</span><br/></p></td>
    <td><span style="color:#C00; font-weight:bold;">$0.00</span></td>
  <tr>
    <td colspan="3">
      <hr style="height:1px;border:none;color:#CCC;background-color:#333; margin-bottom: 3px;" />
      </td>
      </tr>
     
</table>
      

         
         </div>
              
              
              
              
          
          </div>
          
               
          
          
          
          
          
          </div>

<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?1xW7z6SZOxFxZraQZ2TurTnt6sgeLBJi';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>

<!--End of Zopim Live Chat Script-->	
<?=View::load('_frame-endd')?>
