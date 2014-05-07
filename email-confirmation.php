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
   
callapi();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>

	<!-- Page Data -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Thanks For Becoming a Member</title>
	
	<!-- Page CSS -->
	<link type="text/css" media="screen" rel="stylesheet" href="/_css/main.css" />
	<link type="text/css" media="screen" rel="stylesheet" href="/_js/_bootstrap/css/bootstrap.css" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet" />

	<!-- Page JS -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.js" type="text/javascript"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js" type="text/javascript"></script>
	<script src="/_js/_bootstrap/js/bootstrap.js" type="text/javascript"></script>
	<script src="/_js/_lib/dataobject.core.js" type="text/javascript"></script>
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

</style>


<![endif]-->
<script>
$(document).ready(function() {
$.cookie('optinemail', '<?php echo $_GET["email"]; ?>');

$("#btn1").click(function () {
	var cookietest = $.cookie('optinemail');
    $("#test1").val(cookietest);

   });


});



</script>
<script>

/**
 * Create cookie with javascript
 *
 * @param {string} name cookie name
 * @param {string} value cookie value
 * @param {int} days2expire
 * @param {string} path
 */
function create_cookie(name, value, days2expire, path) {
  var date = new Date();
  date.setTime(date.getTime() + (days2expire * 24 * 60 * 60 * 1000));
  var expires = date.toUTCString();
  document.cookie = name + '=' + value + ';' +
                   'expires=' + expires + ';' +
                   'path=' + path + ';';
}

var cookie_name = 'jscookie';
var cookie_value = '<?php echo $_GET["email"]; ?>';
create_cookie(cookie_name, cookie_value, 300, "/");
</script>

</head>
<body><?php include_once("_includes/gaoptin.php") ?>


	<div id="overlay">
	</div>	
	<div id="wrapper">
	    
		<nav id="navigation" class="navbar navbar-default navbar-inverse navbar-static-top" role="navigation">
<!--[if lte IE 8]>
<div>
	  <ul class="nav navbar-nav">
	  	<a href="/home.html">&nbsp;&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;</a>
        <a href="/attraction.html">&nbsp;&nbsp;&nbsp;Attraction&nbsp;&nbsp;&nbsp;</a>
        <a href="/the-right-man.html">&nbsp;&nbsp;&nbsp;Meet the Right Man&nbsp;&nbsp;&nbsp;</a>
        <a href="/dating-smarter.html">&nbsp;&nbsp;&nbsp;Dating Smarter&nbsp;&nbsp;&nbsp;</a>
        <a href="/relationships.html">&nbsp;&nbsp;&nbsp;Relationships&nbsp;&nbsp;&nbsp;</a>
        <a href="/stopping-breakups.html">&nbsp;&nbsp;&nbsp;Stopping Break-ups&nbsp;&nbsp;&nbsp;</a>
        <a href="/training-catalog.html">&nbsp;&nbsp;&nbsp;Training Catalog&nbsp;&nbsp;&nbsp;</a>
        <a href="/about.html">&nbsp;&nbsp;&nbsp;About OneTaste&nbsp;&nbsp;&nbsp;</a>
	  </ul>
	</div>

<![endif]-->

<!--[if IE 9]>
<div>
	  <ul class="nav navbar-nav">
	  	<a href="/home.html">&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;</a>
        <a href="/attraction.html">&nbsp;&nbsp;&nbsp;Attraction&nbsp;&nbsp;&nbsp;</a>
        <a href="/the-right-man.html">&nbsp;&nbsp;&nbsp;Meet the Right Man&nbsp;&nbsp;&nbsp;</a>
        <a href="/dating-smarter.html">&nbsp;&nbsp;&nbsp;Dating Smarter&nbsp;&nbsp;&nbsp;</a>
        <a href="/relationships.html">&nbsp;&nbsp;&nbsp;Relationships&nbsp;&nbsp;&nbsp;</a>
        <a href="/stopping-breakups.html">&nbsp;&nbsp;&nbsp;Stopping Break-ups&nbsp;&nbsp;&nbsp;</a>
        <a href="/training-catalog.html">&nbsp;&nbsp;&nbsp;Training Catalog&nbsp;&nbsp;&nbsp;</a>
        <a href="/about.html">&nbsp;&nbsp;&nbsp;About OneTaste&nbsp;&nbsp;&nbsp;</a>
	  </ul>
	</div>

<![endif]-->

	<!--[if !IE]><!-->
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
	</div>
 <!--<![endif]-->
	
  <!--[if lte IE 8]>
	<div id="picture" class="hidden-xs" style="width:auto; height:auto; margin-top:-80px;">
    <![endif]-->
    
    <!--[if IE 9]>
       <div id="picture" class="hidden-xs" style="width:auto; height:auto;">
    <![endif]-->
    
    	<!--[if !IE]><!-->
        <div id="picture" class="hidden-xs" style="width:auto; height:auto;">
         <!--<![endif]-->
         
     <div id="toprightpic">
    	<img src="/_img/turnedonwomen.jpg" alt="Joanna Van Vleck and her dating experts" /><br /> <img src="/_img/picsub.png" alt="Joanna Van Vleck and her dating experts" />
    </div></div>
</nav>


<div class="container">

  <div id="header" style="margin-top:0px;">
      
	</div>
</div>
		<div class="container video clearfix">
			<div class="clearfix">
            <div style="padding-left:10px;">
            <h1> &nbsp;&nbsp;&nbsp;Thanks For Becoming A Member!</h1></div>
			

<div style="float:left; width:100%; max-width:650px; padding-right:20px">
<iframe src="//fast.wistia.net/embed/iframe/dkutiml9io?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" autoPlay="1" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="440" height="248"></iframe><script src="//fast.wistia.net/assets/external/iframe-api-v1.js"></script>
</div>
				<div class="col-md-5 sidebar" style="margin-top:0px;"><br /><br />

					<div class="widget hidden-sm hidden-xs clearfix">
	<h2>Try Our e-Book RISK FREE </h2>
    <strong>Special Bonus Offer: 7-day Risk Free Trial</strong>
	<ul class="feature pull-left" style="margin:10px 0 0">
		<li>The <strong>Tame His Heart and Turn Him ON</strong> e-Book</li>
		<li>Bonus Monthly Discussions with OneTaste's Dating Experts <label class="label label-default">$20 Value</label></li>
    </ul>
    <img src="/_img/thhbookcd.png" style="float:left; padding-right:20px;" height="100" alt="" />
	<!--<h4>You get:</h4>-->
	<div class="clearfix" style="margin-top:34px">
		<!--<div class="book-feature col-sm-5">
			<img class="img-responsive product-small" src="/_img/product-front.png" alt="Relationships by Design" />
		</div>-->
		<div class="col-sm-12" style="padding-left:4px">
			<div class="action" style="padding-top:30px;margin-bottom: 40px;">
				<span class="price special pull-left" style="line-height: 1.1em;font-size: 26pt;margin-right: 14px;margin-top: -7px;">40%<br/>
OFF</span>
				<label class="label label-success label-lg pull-left"><i class="fa fa-dollar"></i>29.97</label>
        <a href="/checkout.php" class="download btn btn-primary">
				  <i class="fa fa-download fa-md"></i>Download Now!</a>
				<ul class="links list-inline">
					<li><a href="#" onclick="window.open('purchase-policies.html', 'purchasepolicies', 'width=500, height=800, resizable=0, scrollbars=yes')">Purchase Policy</a></li>
				
				</ul>
			</div>
		</div>
	</div>
	<div class="actions hide">
		<div class="discount col-md-3" discount="40% OFF">
			<i class="fa fa-certificate fa-lg"></i>
		</div>
		<br /><br />
	</div>
</div>

				</div>
			</div>
		</div>
		<div class="container">
        <br /><br />
			<img id="trust" src="/_img/trust-light.png" class="trust" style="margin:-14px 0 20px 6px" alt="OneTaste seen on..." />
		</div>
		<div id="video-feature" class="video">
			<script type="text/javascript">
				$(document).ready(function() {
					$(window).on('scroll', function() {
						if ($(this).scrollTop() >= 828 && $(window).width() >= 1200) $('#video-feature').find('.widget.feature').css({ position: 'fixed', top: '22px' }); else $('#video-feature').find('.widget.feature').css({ position: 'static' });
					});
				});
			</script>
			<div class="container">
				
				<div class="clearfix">
					<div class="col-md-8 nopad">

						<div class="widget feature clearfix">
	
	<div class="special clearfix">
		<div class="discount-header">
			<div class="special special-hang" style="margin-bottom:26px;display:inline-block">
				<label class="label label-success label-lg">Special Offer</label>
			</div>
			<h2 style="margin:0">Try Our e-Book Risk Free</h2>
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
				<li><strong>Tame His Heart and Turn Him ON</strong> e-Book</li>
				
				<li><strong>Free Bonus:</strong> Discussions with OneTaste's Dating Experts CD <label class="label label-default">$20 Value</label></li>
			</ul>
			<div class="actions clearfix">
				<div class="discount col-sm-4" discount="40% OFF">
					<i class="fa fa-certificate fa-lg"></i>
				</div>
				<div class="action col-sm-7">
					<span class="price special">Your Price: $29.97</span>
          <a href="/checkout.php" class="download btn btn-success">
					<i class="fa fa-download fa-lg"></i>Download Now!</a>
					<ul class="links list-inline">
						<li><a href="#" onclick="window.open('purchase-policies.html', 'purchasepolicies', 'width=500, height=800, resizable=0, scrollbars=yes')">Purchase Policy</a></li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

					</div>
					<div class="col-md-4 sidebar testimonials">

						<div class="widget testimonials clearfix">
	<h2>Customer Feedback</h2>
	<div class="note">
		<h4>"I started dating again 6 months after my break-up...</h4>
		<p>...I was with my ex since college. Dating again was  completely awkward for me. My friends all had advice, like 'be yourself,' the sort of stuff that doesn’t really help. I read a few dating books and blogs, they all seem like they were written by my mom!</p>  
		<p>From the start your blog and e-book were different. I can tell there’s real dating experience in your philosophies. I’ve dated some since reading your book and recently found a man worth my love and time. Thank you OneTaste.."</p>
		<div class="credit"><strong>M.J.</strong> Santa Fe, NM</div>
	</div>
	<div class="note">
		<h4>"You're the friends I wish I had...</h4>
		<p>...because it’s so rare that actually get good advice from my girlfriends. Why do women have to always be out to get each other… even when they’re friends?</p>
		<p>After I met you I knew you really cared about helping me be happy in my lovelife. Every OneTaste expert I spoke with gave advice truly from their hearts. </p>
		<p>I feel hopeful again about relationships. My perspective has completely flipped. I know the power to be happy in love is in my control."</p>
		<div class="credit"><strong>W.T.</strong> San Francisco, CA</div>
	</div>
	<div class="note">
		<h4>"I’ve got a master’s degree in Gender Studies and Psychology...</h4>
		<p>...I admit I learned more about realtionships from your e-book than my grad school textbooks. Thanks for standing up for women!</p>
		<p>Despite everything I know about relationships I started thinking I’d be happier alone. Your book gave me hope and power to say what’s on my mind to men. This is the sort of wisdom I’ll pass to my daughter (one day).</p>
		<p>I've already recommended your program and book to many of my girlfriends. And I hope you don’t mind that I teach a few workshops in the Vancouver area and show some of your DVDs."</p>
		<div class="credit"><strong>S.C.</strong> Vancouver, Canada</div>
	</div>
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
	<?=View::load('_frame-end')?>