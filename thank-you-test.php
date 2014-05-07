<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
	//include '_includes/get_fields.php';
	

      function getcookieinfo($input){
	 
	if( ! ini_get('date.timezone') )
		{
   			date_default_timezone_set('GMT');
		} 
		
		//$micro = str_replace('.', '', microtime(true)); ; 
		//$trans_id = substr($micro, 0, -1);
		
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
        return '249.79';
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
   
callapi();
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

	<!-- Page Data -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>OneTaste: Thanks For Becoming a Member</title>
	
	<!-- Page CSS -->
	<link type="text/css" media="screen" rel="stylesheet" href="/_css/main.css" />
	<link type="text/css" media="screen" rel="stylesheet" href="/_js/_bootstrap/css/bootstrap.css" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet" />

	<!-- Page JS -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.js" type="text/javascript"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js" type="text/javascript"></script>
	<script src="/_js/_bootstrap/js/bootstrap.js" type="text/javascript"></script>
	<script src="/_js/_lib/dataobject.core.js" type="text/javascript"></script>

<link rel="shortcut icon" href="_img/favicon-heart.ico" type="image/x-icon" />	


<style type="text/css">
  p.indent {
    margin-left: 30px;
  }
  hr {border-top: 1px solid black;}
</style>
</head>
<body><?php include_once("_includes/gathankyoutest.php") ?>

<script src='//www1.moon-ray.com/v2.4/analytics/tracking.js' type='text/javascript'></script>
<script type='text/javascript'>
_mri = "12106_3_2";
mrtracking();
</script>

	<div id="overlay">
	</div>
	
	<div id="wrapper">
	    
		<?=View::load('header', array('checkout' => 'active', 'trust' => 'hidden'))?>

		<div class="container video clearfix">
			<img src="/_img/bar-2.png" class="img-responsive" alt="Checkout Now" />
			<div class="col-md-12">
				<h3>Order Receipt</h3>
				<h3>Your Order Has Been Approved</h3>
			  <div class="article small clearfix">
					<p>Congratulations for taking an amazing step towards improving your
dating and relationship skills. I hope you'll remember this day as the first day
you started to change your love life for the better.</p>
					<p>Below I've listed your order details and your access pages. Click
on the link below to start reading my eBook instantly and start having the
loving relationship you deserve with the man who you desire.</p>
          <p>I've also taken the liberty of emailing you all this information so
that you have it in your inbox for your records.</p>
          <p>If you have any questions about your order, please visit:</p>
          <p><a href="/contact-us.php">https://tamehisheart.com/contact-us.php</a> </p>
          <p>I'm glad you've chosen me to help you better understand men and
improve your relationship. I hope you get a lot of value from my programs and
advice.</p>
          <p>Sincerely,<br/>
          Joanna Van Vleck</p>
          <p class="indent">Initial Charge: $0 (via Credit Card)</p>
          <p class="indent">Products Purchased: <br /><br />
           <img src="/_img/product.png" height="150" /></p>
          <p class="indent">1. Tame His Heart and Turn Him ON Downloadable eBook ($29.97 after FREE 7 day trial)</p>
          <p class="indent">
            <a href="/download-ebook.php">
              Access Tame His Heart and Turn Him ON Downloadable eBook Now</a>
          </p>
                       
          <hr/>
          <h4>This is How You Access Your Discussions with OneTaste's Dating Experts, Keys To An Intimate Connection and your eBook Tame His Heart and Turn Him ON Purchases</h4>
          <p>To access your online purchases, please click on the following
links:          </p>
          <p> <a href="/download-all.php">
              Access Tame His Heart and Turn Him ON Downloadable eBook Now</a></p>
          <p>In your inbox you&rsquo;ll receive an email order receipt that contains your unique URL.         </p>  </div>
			</div>

		</div>
		<div class="container optin">
		</div>
	</div>
	
<?=View::load('_frame-end')?>
