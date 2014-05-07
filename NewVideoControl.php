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
    <meta http-equiv="X-UA-Compatible" content="IE=9">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Tame His Heart</title>
	
	<!-- Page CSS -->
	<link type="text/css" media="screen" rel="stylesheet" href="_css/main.css" />
	<link type="text/css" media="screen" rel="stylesheet" href="_js/_bootstrap/css/bootstrap.css" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet" />
    <link type="text/css" media="screen" rel="stylesheet" href="layout.css" />

	<!-- Page JS -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.js" type="text/javascript"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js" type="text/javascript"></script>
	<script src="/_js/_bootstrap/js/bootstrap.js" type="text/javascript"></script>
	<script src="/_js/_lib/dataobject.core.js" type="text/javascript"></script>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
 <!-- <script>
  window.onbeforeunload = function () {
    return "ARE YOU SURE YOU WANT TO LEAVE???\n\nWithout these secret psychological\ntricks, your success with Men may NEVER improve...\n\nSo if you want to STAY and learn all of these POWERFUL DARK SECRETS of attraction...\n\n~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n\nCLICK THE *STAY ON THIS PAGE* BUTTON BELOW\n\n~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";
};
  </script> -->

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

<script type="text/javascript">
	$(function() { 
	// $("#vid-cap").fadeIn().delay(548000).fadeOut(1200);
	// $('#form-click').hide().delay(548000).fadeIn(1200);
	// $('#safe-purchase').hide().delay(548000).fadeIn(1200);
	  $("#vid-cap").fadeIn().delay(1000).fadeOut(1200);
	 $('#form-click').hide().delay(1000).fadeIn(1200);
	 $('#safe-purchase').hide().delay(1000).fadeIn(1200);
});
	

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

#vidcontainer{max-width:700px; margin-left:auto; margin-right:auto; text-align:center;}
</style>


<![endif]-->

<!--[if gte IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<style>
#vidcontainer{max-width:700px!important; margin-left:auto; margin-right:auto; text-align:center; width:100%;}
</style>
<![endif]-->

<style type="text/css">

    html{
		background-color:#000000;
		
		
	}
	body { 
	
    background-color:#000000; 
	background-size:100% 100%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	
	
}
 #footer{
	background-color:#000000; 
	color:#999;
	font-size:10px;
	 
 }
 
#footer a:link {color:#999;}      /* unvisited link */
#footer a:visited {color:#999;}  /* visited link */
#footer a:hover {color:#999; text-decoration:underline;}  /* mouse over link */
#footer a:active {color:#999;;}  /* selected link */
.bottom { position:fixed; bottom:0%; left:0% }

</style>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-47458202-1']);
  _gaq.push(['_setDomainName', 'tamehisheart.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?1xW7z6SZOxFxZraQZ2TurTnt6sgeLBJi';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->	
<div id="whitespace">
  <div id="header" style="margin: 0 auto; max-width:1000px; width:100%;">
			<h2 align="center" style="margin-top:2px; margin-bottom:2px;"><span style="font-size:30px; color:#CE0C0C;"><img src="_img/7simpletitle.png" style="max-width:800px; width:100%;" /></span></h2>
  </div>
           
	<p style="color:#999; margin: 0 auto; max-width:650px; width:100%; font-weight:bold;" id="vid-cap">(This video could be taken down without notice so we urge you to WATCH TO THE VERY END)<br /><br /><br />
	</p>	
            
</div>

<div id="vidcontainer" align="center">
<iframe src="//fast.wistia.net/embed/iframe/7bqzz9ecig?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="1000" height="563"></iframe><script src="//fast.wistia.net/assets/external/iframe-api-v1.js"></script>
</div>

			<br/>		
	
       <div align="center" id="form-click"> 
       <form action="firststepcheckoutvariable.php" method="get">
      <input type="text" class="email_intro input-lg" name="email"  placeholder="Enter Your Primary Email" style="max-width: 400px; width:100%" /> <br />
      

      <input type="image" src="_img/clickherenow.png" alt="Submit Form" style="max-width: 450px; width:100%" />
       </form>
      <img src="_img/3in1guarantee.png" alt="Money Back Guarantee" style="max-width:300px; width:100%; "></div>


	
	     
       
<div id="footer">
		<div class="container clearfix">
					
            <div style=" max-width:700px; margin-left:auto; margin-right:auto; text-align:center;" align="center">
			<p style="color:#999">
	<br />  OneTaste inc., 1072 Folsom Street, Suite 483, San Francisco, CA 94103</p>
		</div><br /><br />
        <div style=" max-width:500px; margin-left:auto; margin-right:auto; text-align:center;" align="center">
         	<ul class="pull-left">              
	  	<li><a href="/home.html">Home</a></li>
       <li> <a href="/training-catalog.html">Training Catalog</a></li>
       <li> <a href="/about.html">About OneTaste</a></li>
       	<li><a href="/contact-us.php">Contact Us</a></li>
	   <li><a href="/privacy2.php">Privacy</a></li>
		<li><a href="/terms2.php">Terms &amp; Conditions</a></li>       
                
			</ul>

</div>

		</div>
	</div>
    <div>
    
    <img class="bottom" src="_img/safepurchase.png" id="safe-purchase" />
    </div>
<script src="//fast.wistia.net/static/embed_shepherd-v1.js"></script>
<script>
  wistiaEmbeds.onFind(function(video){
    video.bind("play", function(){
      _gaq.push(['_trackEvent', 'Video', 'Play', video.name()]);
      return this.unbind;
    }).bind("end", function(){
      _gaq.push(['_trackEvent', 'Video', 'Complete', video.name()]);
      return this.unbind;
    });
  });
</script>
<script type="text/javascript">
   var _mfq = _mfq || [];
   (function() {
       var mf = document.createElement("script"); mf.type = "text/javascript"; mf.async = true;
       mf.src = "//cdn.mouseflow.com/projects/49925872-0769-470f-a410-54d67f32f59e.js";
       document.getElementsByTagName("head")[0].appendChild(mf);
   })();
</script>
</body>
</html>