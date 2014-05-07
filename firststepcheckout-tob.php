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
   
    $email = $_GET['email'];
   if($email == NULL){
	   
	 $x = 1;
	   
   }
   else{
	   
	
   function callapi(){
  $email = $_GET['email'];
  $trans_id = getcookieinfo("transaction_id"); 

// Construct contact data in XML format
$data = <<<STRING
<contact>
    <Group_Tag name="Contact Information">
        <field name="First Name"></field>
        <field name="Last Name"></field>
        <field name="E-Mail">$email</field>
    </Group_Tag>
    <Group_Tag name="Sequences and Tags">
        <field name="Contact Tags">THH TOBVideo Email Grab</field>
		  <field name="Sequences">TOB EMAIL GRAB - Sequence</field>
    </Group_Tag>
</contact>
STRING;

$data = urlencode(urlencode($data));


// Replace the strings with your API credentials located in Admin > OfficeAutoPilot API Instructions and Key Manager
$appid = "2_12106_jiXs6k7H0";
$key = "tpdCJRLFD7PPBA0";

//Set your request type and construct the POST request
$reqType= "add";
$postargs = "appid=".$appid."&key=".$key."&return_id=1&reqType=".$reqType."&data=".$data;
$request = "http://api.moon-ray.com/cdata.php";

//Start the curl session and send the data
$session = curl_init($request);
curl_setopt ($session, CURLOPT_POST, true);
curl_setopt ($session, CURLOPT_POSTFIELDS, $postargs);
curl_setopt($session, CURLOPT_HEADER, false);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

//Store the response from the API for confirmation or to process return data
$response = curl_exec($session);

//Close the session
curl_close($session);
   }
   
   callapi();
   }

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<!-- Page Data -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Checkout</title>

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
<script type='text/javascript'>
function validateForm()
{
var x=document.forms["myForm"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a Valid E-Mail Address!!!");
  return false;
  }
}
</script>
<script type="text/javascript">

$(function() { // Shorthand for $(document).ready(function() {	
 $("#email").val('<?=$_GET['email']?>');
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

<style type="text/CSS">
@media screen and (max-width: 481px) {
.moonray-form {
	width: 100%!important;
}
</style>
<style type="text/CSS">
input[type="text"], #orderform textarea, #orderform select {
	margin: 3px 0 0;
	padding: 4px;
	background: #E9F5FE;
	border: 1px solid #2D96D5;
	box-shadow: inset 1px 1px 1px rgba(0,0,0,0.1);
	-moz-box-shadow: inset 1px 1px 1px rgba(0,0,0,0.1);
	-webkit-box-shadow: inset 1px 1px 1px rgba(0,0,0,0.1);
	height: 30px;
}
.bottom {
	position: fixed;
	bottom: 0%;
	left: 0%
}
#red {
	color:#F00;
	font-weight:bold;
	
}
</style>
</head>
<body>
<?php include_once("_includes/gatobcheckout1.php") ?>
<script src='https://www1.moon-ray.com/v2.4/analytics/tracking.js' type="text/javascript"></script> 
<script type="text/javascript">
_mri = "12106_3_2";
mrtracking();
</script>
<div id="wrapper"> <img class="bottom" src="_img/safepurchase.png" />
  <?=View::load('headermenuonly', array('checkout' => 'active', 'trust' => 'hidden'))?>
  <div style="width:auto; max-width:900px; background-color:#FFFFFF !important; margin: 0 auto; border:1px solid grey;">

    <div style="width:auto:; max-width:900px; width:auto; margin: 0 auto; background-color:#FFF;"> <div id="toplogo"><img src="_img/tamehisheartlogo.png" style="width:100%; max-width:170px; float:left;" / ></div>
    
    <div class="sixteen cols">
    <div class="stepbar">
      <ul class="steps">
        <li class="step1 step selected"><span>Step 1: Join The Elite</span></li>
        <li class="step2 step"><span>Step 2: Hack Attraction</span></li>
        <li class="step3 step"><span>Step 3: Accelerate Success</span></li>
      </ul>
    </div>
  </div>
  
    
    <br />
    </div>
    <div style="clear:both;"></div>
    <div style="background-image:url(_img/bartop.png); width:100%; height:40px;"></div>
    <div class="container">
      <div class="ten cols omega">
        <div class="innercontainer">
          <div class="para main"> <span style="float:left;"><img src="_img/checkyes.png" alt="Yes"></span>I want to get The Complete Tame His Heart &amp; Turn Him ON System... and finally get complete control over attracting and keeping a man in my life. I understand the Tame His Heart &amp; Turn Him ON System is backed by a complete <span id="red">7-Day Free Trial</span> and that if I'm unhappy with it for any reason I can simply send you an email within 7 Days and never be billed, no questions asked. <span id="red">I also understand that my FREE BONUS download of Discussions with Dating Experts is mine to keep even if I decide not to keep the Tame His Heart System!</span></div>
          <div class="tablebox">
            <div class="cart-title">Please Review Your Shopping Cart</div>
            <div class="tablecontainer">
              <table class="bonus" cellpadding="0" cellspacing="0" border="0">
                <tbody>
                  <tr>
                    <td valign="middle" width="15"><img src="_img/smalltick.png"></td>
                    <td><p>Tame His Heart eBook<p></td>
                    <td class="right"><p>Valued at <span style="text-decoration:line-through;">$29.97</span></p></td>
                  </tr>
                  <tr>
                    <td valign="middle" width="15"><img src="_img/smalltick.png"></td>
                    <td><p>Discussions With Dating Experts</p></td>
                    <td class="right"><p>Valued at <span style="text-decoration:line-through;">$19.97</span><p></td>
                  </tr>
                  <tr>
                    <td valign="middle" width="15"><img src="_img/smalltick.png"></td>
                    <td><p>BONUS Interview with Nicole Daedone</p></td>
                    <td class="right"><p style="font-size:16px;">Valued at <span style="text-decoration:line-through;">$19.97</span></p></td>
                  </tr>
                   <tr>
                    <td valign="middle" width="15"><img src="_img/smalltick.png"></td>
                    <td><p>Keys to Intimate Connections</p></td>
                    <td class="right"><p style="font-size:16px;">Valued at <span style="text-decoration:line-through;">$199.85</span></p></td>
                  </tr>
                  <tr>
                    <td valign="middle" width="15"><img src="_img/smalltick.png"></td>
                    <td><p>TOTAL VALUE</p></td>
                    <td class="right"><p><span style="text-decoration:line-through;">269.76</span></p></td>
                  </tr>
  <tr>
   <td style="width:40px">&nbsp;</td>
    <td><p><strong>TRY IT ALL FREE FOR 7 DAYS</strong></p></td>
    <td align="right"><p><span style="color:#F00;">0.00</span></p></td>
  </tr>
                </tbody>
              </table>
            </div>
          </div>
          
        </div>
        <!-- innercontainer --> 
      </div>
      <div class="six cols omega">
		<form action="checkouttob-step2.php" method="get" enctype="multipart/form-data" onsubmit="return validateForm()" name="myForm">
          <span class="jumptoerror" data-value="error2"></span>
          <div class="title" style="text-align:center;margin-bottom: 20px;">
            <h4 style="padding: 0px 10px 0px 10px;">Submit My Application To
              Join The Tame His Heart Movement</h4>
          </div>
          <a name="error2"></a>
          <div class="errorcontainer2"></div>
          <h3 class="checkout-form-title" style="display:none;">Personal Information</h3>
          <table id="myForm" cellpadding="0" cellspacing="0" align="center">
            <tbody>
              <tr>
                <td width="80px"><p>Full Name</p></td>
                <td colspan="2"><input type="text" class="email_intro input-lg" name="name"  style="width: 200px;" required /></td>
              </tr>
              <tr>
                <td><p>Email</p></td>
                <td colspan="2"><input type="text" class="email_intro input-lg" name="email" data-type="email" id="email" style="width: 200px;" required /></td>
              </tr>
              <tr>
                <td colspan="2" height="10"></td>
              </tr>
              <tr class="order_summary">
    			<td>&nbsp;</td>
                <td><h4>Total:<h4></td>
                <td><h4>$0.00<h4></td>
              </tr>
              <tr>
                <td colspan="3"><fieldset id="submits" style="margin:0!important;">
                    <div id="submit_button" align="center">
                      <input value="yes" id="agree_terms" class="agree_terms" name="agree_terms" checked="checked" style="display:none" type="checkbox">
                      <h4 style="margin-top:10px; margin-bottom:5px;">7 DAY FREE TRIAL</h4>
                      <input type="image" src="_img/getstarted.jpg" style="max-width:278px; width:100%;" alt="Submit Form" />
                      <img src="_img/3in1guarantee.png" style="width:100%;"/> </div>
                  </fieldset></td>
              </tr>

            </tbody>
          </table>
          <div class="space_oform">
            <center>
              <h5 style="margin-top:1px;">Proudly Published By <br />
                One Taste Inc.</h5>
              <address>
              1072 Folsom Street, Suite 483<br />
              San Francisco, CA94103<br />
              Contact Us
              </address>
            </center>
          </div>
        </form>
      </div>
    </div>
    <div style="clear:both;"></div>
    <div style="border:5px solid black; width:auto; max-width:800px; margin: 0 auto;"><img src="_img/guarantee-long.jpg" style="display: block; margin-left: auto;
    margin-right: auto; max-width:700px; width:100%;" > <img src="_img/robots.jpg" style="float:right;">
      <p style="padding: 0px 10px 0px 10px; ">Our guarantee is simple… If you don&rsquo;t get much more success with men and feel significantly like a new woman, I want you to ask me for a full refund. I only ask that you go through all the materials, apply the techniques, do the exercises and revisit the material regularly for 7 days. If you still don&rsquo;t see massive results by then send me an email and just type "CANCEL" and you'll never be charged anything with no questions asked. </p>
      <h4 style="padding: 0px 10px 0px 10px; ">Your satisfaction is 100% guaranteed.</h4>
      <img src="_img/signature.png" />
      <p style="padding: 0px 10px 0px 10px; "> - Joanna Van Vleck</p>
    </div>
    <div style="width:auto; max-width:800px; margin: 20px auto;"><img src="_img/red-checkmark.png" style="float:left; width:100%; max-width:80px;">
      <h3>What Payment Methods Do We Accept?</h3>
      <p style="padding: 0px 10px 0px 10px; ">We accept Visa, MasterCard, American Express and Debit or Bank Cards with a Visa or MasterCard logo on them. And of course we accept PayPal.</p>
      <br />
      <br />
      <img src="_img/paymentmethods2.jpg" /> </div>
    <div style="width:auto; max-width:800px; margin: 20px auto;"><img src="_img/red-checkmark.png" style="float:left; width:100%; max-width:80px;">
      <h3>Got Questions?</h3>
      <p style="padding: 0px 10px 0px 10px; ">Let’s hear them! If you have any questions about Tame His Heart &amp; Turn Him ON System ordering or even questions please send them to joanna@tamehisheart.com. We will be happy to answer anything you want to know.</p>
      <p style="padding: 0px 10px 0px 10px;">NOTICE: This material is for for ADULTS ONLY</p>
      <p style="padding: 0px 10px 0px 10px;">I am at least 18 years of age.The explicit material on the videos and audio is for my own personal use and I will not expose minors to the material. I desire to receive/view explicit material.I believe that as an adult it is my inalienable right to receive/view explicit material.The viewing, reading and downloading of such explicit materials does not violate the standards of my community, town, city, state or country.I am solely responsible for any false disclosures or legal ramifications of viewing, reading or downloading any material in this site. Furthermore this website nor its affiliates will be held responsible for any legal ramifications arising from fraudulent entry into or use of this website.I agree that by viewing the videos, I am subjecting myself and any business entity of which I have any legal or equitable interest to the personal jurisdiction of the State of California should any dispute arise at any time between this website and myself and/or such business entity.This warning page constitutes a legal agreement between this website and you and/or any business in which you have any legal or equitable interest. If any portion of this agreement is deemed unenforceable by a court of competent jurisdiction it shall not affect the enforceability of the other portions of the agreement.The videos and images on the videos and all the advice therein is intended to be used by responsible adults to provide education and to provide entertainment.If you’ve read and fully understand the above agreement, and you affirm and swear that viewing/downloading/receiving explicit materials does not violate the standards of your community, that you won’t make any of the materials available to minors in any form, that you believe it is your constitutional right to view these materials, that you are wholly liable for any legal ramifications that may arise for your receiving or viewing of these materials and that you are over the age of 18…If you do not agree exit immediately.</p>
    </div>
    <div style="width:auto; max-width:800px; margin: 20px auto; text-align:center;">
      <h2 align="center">Your Story Can Be Next!</h2>
      <p style="padding: 0px 10px 0px 10px; ">Try <strong>Tame His Heart &amp; Turn Him On System</strong> free for 7 Days. Get a man you like, <br>
        read his mind, and make him completely devoted to you - guaranteed. <br>
        Send your success story in, to inspire others. <br>
        Or get 100% of your money back. No questions asked.</p>
    </div>
    <div style="clear:both;"></div>
    <div style="width:auto; max-width:800px; margin: 20px auto; text-align:center;">
      <div class="widget testimonials clearfix">
        <h2>Customer Feedback</h2>
        <div class="note">
          <h4>"I started dating again 6 months after my break-up...</h4>
          <p>...I was with my ex since college. Dating again was  completely awkward for me. My friends all had advice, like 'be yourself,' the sort of stuff that doesn’t really help. I read a few dating books and blogs, they all seem like they were written by my mom!</p>
          <p>From the start your blog and e-book were different. I can tell there’s real dating experience in your philosophies. I’ve dated some since reading your book and recently found a man worth my love and time. Thank you Joanna.."</p>
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
          <div class="credit"><strong>S.C.</strong> Vancouver, Canada<br />
            <br />
          </div>
        </div>
        <br />
        * Disclaimer: Results are not typical. Results may vary from individual to individual. </div>
    </div>
    <div style="clear:both;"></div>
    <div style="clear:both;"></div>
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

<div id="footer">
  <div class="container clearfix">
    <div style=" max-width:700px; margin-left:auto; margin-right:auto; text-align:center;" align="center">
      <p style="color:#999"> OneTaste inc., 1072 Folsom Street, Suite 483, San Francisco, CA 94103</p>
    </div>
    <div style=" max-width:600px; margin-left:auto; margin-right:auto; text-align:center; font-size:12px;" align="center" >
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