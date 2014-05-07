<?php 
	require_once(dirname(__FILE__).'/_includes/template.core.php');

	
	// Sets cookie data for Google ECommerce tracking
	 function cookievalues($input){  
	 
	 $email = $_GET["email"];
	 $ga_name = $_GET["firstname"];
	 $ga_name = $_GET["lastname"];
	$ga_transaction_id = $_GET["transaction_id"];
    $ga_storename = "TameHisHeart";
	$ga_total = "199.85";
	$ga_tax = "0.00";
    $ga_shipping = "0.00";
	$ga_city = $_GET["billing_city"];
	$ga_state = $_GET["billing_state"];
	$ga_country = $_GET["country"];
	$ga_skucode = "KTIC";
	$ga_product = "1. Keys to an Intimate Connection";
	$ga_category = "none";
	$ga_unit_price = "199.85";
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
        return 'KTIC_PP';
        break;
	 case "product":
        return 'Keys to an Intimate Connection';
        break;
	 case "category":
        return 'none';
        break;
	 case "unit_price":
        return '199.85';
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
	<title>Thank You For Purchasing: The Keys to a Lasting Intimate Connection</title>
	
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

</head>
<body><?php include_once("_includes/gathankyoums.php") ?>

	<div id="overlay">
	</div>	
	<div id="wrapper">
		  			  
		<nav id="navigation" class="navbar navbar-default navbar-inverse navbar-static-top" role="navigation">

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div>
	  <ul class="nav navbar-nav">
	  	<li class="{FRONT}"><a href="/home.html">Home</a></li>
        <li class="{ATTRACTION}"><a href="/attraction.html">Attraction</a></li>
        <li class="{MAN}"><a href="/the-right-man.html">Meet the Right Man</a></li>
        <li class="{DATING}"><a href="/dating-smarter.html">Dating Smarter</a></li>
        <li class="{RELATIONSHIPS}"><a href="/relationships.html">Relationships</a></li>
        <li class="{BREAKUPS}"><a href="/stopping-breakups.html">Stopping Break-ups</a></li>
        <li class="{CATALOG}"><a href="/training-catalog.html">Training Catalog</a></li>
        <li class="{ABOUT}"><a href="/about.html">About OneTaste</a></li>
	  </ul>
	</div><!-- /.navbar-collapse -->
	<div id="picture" class="hidden-xs">
    	<img src="https://onetaste.us/wp-content/uploads/2013/05/turnedonwomen.jpg" />
    </div>
</nav>
<div class="container">
	<div id="header">
		<div class="col-md-2">
			<a href="/"><img src="https://onetaste.us/wp-content/uploads/2013/09/Powered-by-Orgasm-OT.png" /></a>
		</div>
		<div class="title col-md-7">
			<h2>Tame His Heart and Turn Him ON <sub>"We're here to help you attract your ideal man, tell you his dating thoughts, reveal how to make his love lasting and intense and make him commit when <u>YOU</u> want..."</sub></h2>
		</div><br /><br />
		<div class="col-md-12 hidden" style="padding:0">
			<img src="/_img/trust-light.png" class="trust" alt="OneTaste seen on..." />
		</div>
	</div>
</div>

		<div class="container video clearfix">
			<img src="/_img/bar-2.png" class="img-responsive" alt="Checkout Now" />
			<div class="col-md-12">
				<h3>Order Receipt</h3>
				<h3>Your Order Has Been Approved</h3>
				<div class="article small clearfix">
					<p>Congratulations for taking an amazing step towards improving your
dating and relationship skills. I hope you'll remember this day as the first day
you started to change your love life for the better.</p>
					<p>Below I've listed your order details and your access page. Click on the link below to start watching your videos instantly and start having the loving relationship you deserve with the man who you desire.</p>
<p>I've also taken the liberty of emailing you all this information so
  that you have it in your inbox for your records.</p>
          <p>If you have any questions about your order, please visit:</p>
          <p><a href="http://www.tamehisheart.com/contact-us.php">http://www.tamehisheart.com/contact-us.php</a>
          
          </p>
          <p>I'm glad you've chosen me to help you better understand men and
improve your relationship. I hope you get a lot of value from my programs and
advice.</p>
          <p>Sincerely,<br/>
          Joanna Van Vleck</p>
          <p class="indent">Initial Charge: $0 (via Credit Card)</p>
          <p class="indent">Products Purchased:</p> <p class="indent"> <img src="/_img/book_only.png" height="150" /><br /><br />
          1. Keys to an Intimate Connection Video Series ($199.85 or 5 monthly payments of $39.97 after FREE 30 day trial):</p>
          <p class="indent">
            <a href="/download-videos.php">
              Access: Keys to an Intimate Connection Videos Now</a>
          </p>
          <p class="indent">Your download link will be valid for 60 days from
today</p>
          <hr/>
          <h4>This is How You Access Your &quot;<span class="indent"> Keys to an Intimate Connection Videos</span>"
Purchase</h4>
          <p>To access your online purchase, please click on the following
link:</p>
          <p>
            <a href="/download-videos.php">
              Access: Keys to an Intimate Connection Videos Now</a>
          </p>
          <p>In your inbox you&rsquo;ll receive an email order receipt that contains your unique URL. You may want to &quot;copy-and-paste&quot; the information in your email into a document on your computer for safekeeping.           </p> </div>
			</div>

		</div>
	</div>
	
<?=View::load('_frame-end')?>
