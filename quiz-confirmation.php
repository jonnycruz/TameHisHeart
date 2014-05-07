<?php
    $value = $_GET["email"];
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

// SDLKFJSDLKFJLSKDJFLSKDJFLSDKJFLSKDJFLSDJFLSDJFLSDKJFLSKDJFLSDKJFLSKDJFLKSDJF

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
<Group_Tag name="Relationship Quiz Section">
<field name="1.	When do you start calling a guy your boyfriend?">$question1</field>
</Group_Tag>
</contact>
STRING;

//echo($data);
$data = urlencode(urlencode($data));
//echo($data);


// SDLKFJSDLKFJLSKDJFLSKDJFLSDKJFLSKDJFLSDJFLSDJFLSDKJFLSKDJFLSDKJFLSKDJFLKSDJF



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
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Joanna Van Vleck's Tame His Heart and Turn Him ON eBook | Expert Dating Advice</title>
	
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

.col-md-8.nopad {
float:left;
max-width: 780px;
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
.discount {
visibility:hidden;
}

</style>


<![endif]-->
<style type="text/css">

.myIframe {
position: relative;
padding-bottom: 65.25%;
padding-top: 30px;
height: 0;
overflow: auto; 
-webkit-overflow-scrolling:touch; <<--- THIS IS THE KEY 
border: solid black 1px;
} 
.myIframe iframe {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
}

.btn {
display: inline-block;
padding: 6px 12px;
margin-bottom: 0;
font-size: 35px;
font-weight: normal;
line-height: 1.428571429;
text-align: center;
white-space: nowrap;
vertical-align: middle;
cursor: pointer;
border: 1px solid transparent;
border-radius: 4px;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
-o-user-select: none;
user-select: none;
}

.btn-success {
color: #ffffff;
background-color: #CE0C0C;
border-color: #FF00A3;

}
</style>


<script type="text/javascript">
	
	$(function() { // Shorthand for $(document).ready(function() {
      $('.fader').hide().delay(120000).fadeIn(2200);
	  $('.btn').hide().delay(120000).fadeIn(2200);
});
	

</script>
</head>
<body><?php include_once("_includes/gaquizoptin.php") ?>

	<div id="wrapper">
  

		<div class="container video clearfix" style="margin-top:0px; text-align:center;">

		  <div id="header" style="margin: 0 auto; max-width:800px; width:100%;">
			<h2 align="center" style="margin-top:2px; margin-bottom:2px;"><span style="font-size:30px;">Your QUIZ results are processing!<br>
Watch this entire VIDEO to understand your results…</span></h2>
		  </div>
           
		
            
		</div>

<div style=" max-width:700px; margin-left:auto; margin-right:auto; text-align:center;" align="center">
<iframe src="//fast.wistia.net/embed/iframe/r8wgow24tr?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="440" height="248"></iframe><script src="//fast.wistia.net/assets/external/iframe-api-v1.js"></script>
</div>

			<br/>		
	
       <div align="center">     <a href="/checkout.php" class="download btn btn-success">
					<i class="fa fa-download fa-lg"></i>READ IT FREE!</a> </div>

	    <div id="header"><br />
		<img id="trust" src="/_img/trust-light.png" class="trust" style="margin:-14px 0 0px 6px" alt="OneTaste seen on..." />
	</div>			
 
</div>

	
</div>

			
		<div class="container">
		</div>
        
         <div class="fader">
        
		<div id="video-feature" class="video">
			<div class="container">
				
				<div class="clearfix">
               
                <div class="col-md-7">
                 <div class="widget clearfix">
	<div class="special">
		<h2>Letter From Joanna</h2>
	</div>
	<div class="letter">
		<img src="../_img/joannanice.jpg" class="img-responsive img-default" alt="Nicole Dadone" style="width:auto; max-width:200px;" />
	  <p>Joanna Van Vleck here,</p>
		<p>Well, my educational background is in psychology and business development. For the last five years I’ve lived and worked in San Francisco. Here I’ve had the pleasure of meeting a group of women who are passionate about putting the POWER of dating in relationships into the hands of women! </p>
		<p>I created the Tame His Heart website and wrote my eBook, <em>Tame His Heart and Turn Him ON</em>, with the help of multiple dating &amp; relationship experts, life coaches and empowered women who are my circle of friends and closest confidants. We’ve studied our own dating lives and the relationships of the thousands of women we’ve trained and helped. We’ve used all of this data to create a proven and successful method for finding and keeping your perfect man. 
</p>
<h3>How I Can Help You…</h3>
		<p>I believe every woman deserves to feel loved, be respected and desired in a committed relationship with the man who is her ideal partner. I’ve studied human connection, social dynamics and social psychology my whole life… yet it was life experience that showed me the true light. </p>
		<p>One of the great pearls of wisdom I realized after talking to thousands of women who needed dating and relationship help is - "many women have no idea what to do to make a man commit." And one of the biggest challenges is successfully communicating desires and feelings to men.</p>
        <p>Of course, popular culture: movies, TV and magazines, don’t help. They only display a candy-coated reality and give bite-sized dating advice that never solves the problem. Because the truth is, modern women have forgotten how to be strong. Think of a strong female figure in your life. For many of us we have to think back to our grandmothers!</p>
        <p>A confident woman is universally attractive to all men. If you want a man to love you, it starts with loving yourself. Women who have great relationships also have strong, self-supportive beliefs. </p>
        <p>relationship, on her terms with her ideal man, can choose to be the woman who is always in charge of her love life. This is true, whether it’s dating a new man or empowering yourself in your current committed relationship or marriage. </p>
        <p>There is a way to be that strong woman who gets everything she wants from her man. I have the proof, if you're ready to listen.</p>
        <p>Best of luck in love and life, <br />
Joanna Van Vleck</p>
	</div>
	<br />
	
</div>
        

				  <div class="widget feature clearfix">
	
	<div class="special clearfix">
		<div class="discount-header">
		  <h2 style="margin:0">Try My e-Book Risk Free</h2>
            <strong>Speical Bonus Offer: 7-day Risk Free Trial</strong>
		</div>
	</div>
	<h4 style="margin-top:0;text-align:center">Try our <strong>Tame His Heart and Turn Him ON</strong><br /> e-Book and you will learn...</h4>
	<div class="book clearfix">
		<div class="col-sm-4">
			<img src="/_img/product.png" class="img-responsive" alt="Relationships by Design" />
		</div>
		<div class="col-sm-8">
			<ul class="feature">
				<li><strong>Tame His Heart and Turn Him ON</strong> e-Book</em></li>
				
				<li><strong>Free Bonus:</strong> Discussions with OneTaste's Dating Experts CD <label class="label label-default">$20 Value</label></li>
			</ul>
			<div class="actions clearfix">
				<div class="discount col-sm-4" discount="40% OFF">
					<i class="fa fa-certificate fa-lg"></i>
				</div>
				<div class="action col-sm-7" style="max-width:210px;">
					<span class="price special">Your Price: $29.97</span>
          <a href="/checkout.php" class="download btn btn-success">
					<i class="fa fa-download fa-lg" style="font-size:18px; padding-right:10px;"></i>READ IT FREE!</a>
					<ul class="links list-inline">
					  <li><a href="#" onclick="window.open('purchase-policies.html', 'purchasepolicies', 'width=500, height=800, resizable=0, scrollbars=yes');return false;">Purchase Policy</a></li>
						
					</ul>
		
			</div>
		</div>
	</div>
</div>

					</div>
                 </div>
				  	<div class="col-md-5 sidebar" style="padding-top:26px">

					  <?=View::load('testimonials-widget')?>
                      
				  </div>
				</div>
			</div>
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
<?=View::load('_frame-endc')?>