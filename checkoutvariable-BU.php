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

	<div id="overlay">
	</div>

	
	<div id="wrapper">
	    
		<?=View::load('headermenuonly', array('checkout' => 'active', 'trust' => 'hidden'))?>

		<div class="container video clearfix" >
        <form action="checkoutvariable-step2.php" method="post" enctype="multipart/form-data">
			<img src="/_img/bar.png" class="img-responsive" alt="Checkout Now" style="margin:0px 0px 0px 0px 0px; display: block; margin-left: auto; margin-right: auto; width:100%; max-width:850px;" />
            <h3 style="margin:0px 0px 0px 0px; text-align:center;">Tame His Heart Secure Order Form</h3>
           <div style="max-width:800px; width:auto; margin: 0 auto;"> 
          
        <div style="max-width:200px; width:100%; margin: 0 auto; float:right;" align="left">
         
         <img src="_img/money_back_guarantee.png" style="max-width:180px; width:100%;" />
         <p style="max-width:180px; width:100%; font-size:12px; margin-top:3px;">
           Remember 100% Guaranteed. <span style="color:#C00; font-weight:bold;">You will NOT be charged</span>, and can try the popular Tame His Heart program, absolutely FREE for 7 Days.<br />
         </p>
         <img src="_img/secure_checkout.gif" style="max-width:180px; width:100%;" />
          <p style="max-width:180px; width:100%; font-size:20px;">Privacy Protection</p>
         <img src="_img/discreet_privacy.jpg" style="max-width:180px; width:100%;"  />
         <p style="max-width:180px; width:100%; font-size:12px;">We never disclose customer information. </p>
         
         
         
         </div> 
          
          
         <div style="max-width:600px; width:100% margin: 5 auto; float:left;">
         <br />
         <table width="500" border="0">
  <tr>
    <td valign="top" align="right"><img src="_img/red-checkmark.png" style="max-width:40px; width:100%;" /></td>
    <td colspan="2"> <p style="max-width:500px; width:auto; margin: 5 auto; float:left;"><span style="color:#C00; font-weight:bold;">YES Joanna!</span> I want to try the Tame His Heart program <strong>COMPLETELY FREE</strong>… and get the secrets to attracting and entrancing any man! It will show me step-by-step how to become fully irresistible to any man wheather I want to attract that new guy or completely reignite a dead relationship.</p>
        <br /><br /><br /><br /></td>
  </tr>
  <tr>
    <td valign="top"></td>
    <td colspan="2">          <p style="max-width:500px; width:auto; margin: 5 auto; float:left;">I understand this program is fully guaranteed and that if I’m unhappy with it for any reason I can simply contact customer support@tamehisheart.com and I will NEVER BE CHARGED, no questions asked. I understand that my credit card will be discreetly charged 29.97, ONLY if I try the program for seven days and decide it is worth every penny. I also understand <span style="color:#C00; font-weight:bold;"> I am getting a month of the complete Interview With Dating Experts Completely FREE!</span></p></td>

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
         
        
		<div class="container optin">
        
		</div>
          <div style="min-width:300px; max-width:800px; width:800px; margin: 0 auto;">
   <div class="small payment-one clearfix" style="text-align: center;">
  <h4>What credit card do you prefer?</h4>
  <div class="methods clearfix" style="max-width:800px; width:auto; margin: 0 auto;">
    <div class="radio col-sm-2">
      <label>
        <input name="type" type="radio" value="">
        <img src="/_img/visa.png" class="img-responsive" alt="" style="max-height:50px;">
      </label>
    </div>
    <div class="radio col-sm-2" style="margin-top: 10px;">
      <label>
        <input name="type" type="radio" value="">
        <img src="/_img/amex.png" class="img-responsive" alt="" style="max-height:50px;">
      </label>
    </div>
    <div class="radio col-sm-2" style="margin-top: 10px;">
      <label>
        <input name="type" type="radio" value="">
        <img src="/_img/mastercard.png" class="img-responsive" alt="" style="max-height:50px;">
      </label>
    </div>
    <div class="radio col-sm-2" style="margin-top: 10px;">
      <label>
        <input name="type" type="radio" value="">
        <img src="/_img/discover.png" class="img-responsive" alt="" style="max-height:50px;">
      </label>
    </div>
	</div>
  <h4>Which country are you from?</h4>
  <select name="country" class="input-lg"><option>Select a country</option>
<option value="US">United States</option><option value="CA">Canada</option><option value="GB">United Kingdom</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AG">Antigua And Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia And Herzegowina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CIS">Channel Islands</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Cote D'Ivoire</option><option value="HR">Croatia (Local Name=&gt; Hrvatska)</option><option value="CU">Cuba</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="TP">East Timor</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard And Mc Donald Islands</option><option value="VA">Holy See (Vatican City State)</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran (Islamic Republic Of)</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KP">Korea, Dem People'S Republic</option><option value="KR">Korea, Republic Of</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Lao People'S Dem Republic</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libyan Arab Jamahiriya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macau</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia, Federated States</option><option value="MD">Moldova, Republic Of</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Ant Illes</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="KN">Saint K Itts And Nevis</option><option value="LC">Saint Lucia</option><option value="VC">Saint Vincent, The Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome And Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia (Slovak Republic)</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia , S Sandwich Is.</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SH">St. Helena</option><option value="PM">St. Pierre And Miquelon</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard, Jan Mayen Islands</option><option value="SZ">Sw Aziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syrian Arab Republic</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania, United Republic Of</option><option value="TH">Thailand</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad And Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks And Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="UM">United States Minor Is.</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Viet Nam</option><option value="VG">Virgin Islands (British)</option><option value="VI">Virgin Islands (U.S.)</option><option value="WF">Wallis And Futuna Islands</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="YU">Yugoslavia</option><option value="ZR">Zaire</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option>
  </select>
  <h4>Which email should we send it to?</h4>
   <input type="text" class="email_intro input-lg" name="email"  placeholder="Email" style="width: 240px;" />
  
  <div>
    <button id="payment-two" class="btn btn-lg btn-primary" style="margin-top:40px;margin-bottom:30px">Continue</button>
  </div>

  <small style="text-align: left;">Please scroll to read all terms.  By continuing with your purchase, you are agreeing to abide by the terms listed</small>
  <textarea class="form-control" rows="4" style="max-width:500px; width:100%; margin: 0 auto;">
TERMS AND CONDITIONS
CAREFULLY READ AND AGREE TO PURCHASE TERMS BELOW BEFORE ORDERING:

ATTENTION: This is a binding agreement between You, the person or entity agreeing to the terms contained in this document ("You", "Your" or "Customer"), and OneTaste Media LLC ("OneTaste", "Our" or "Company") the owner and administrator of this Website and all content and functionality contained herein.
IT IS STRONGLY RECOMMENDED THAT YOU REVIEW THIS DOCUMENT IN ITS ENTIRETY BEFORE ACCESSING, USING OR BUYING ANY PRODUCT THROUGH THE WEBSITE.

1. INTRODUCTION
A. These Terms of Use, as well as any additional terms, conditions and convenants referenced in or made available by hyperlink in this document (“Terms” or this “Agreement”) constitute a binding agreement between you and OneTaste and govern your use of www.relationshipbydesign.us (the “Website”) and the content, materials, products and services offered through the Website (collectively with the Website, the “Services”). By accessing, viewing or using any Services, you represent and warrant that you are at least 18 years old and the age of majority and legal consent in the jurisdiction in which you live or reside, and you agree to be bound by and subject to these Terms. If you do not agree to these Terms, you should immediately leave this page and not access or use the Website or any other Services. Upon our request, you agree to sign a non-electronic version of these Terms.
B. This Agreement is intended to be governed by the Electronic Signatures in Global and National Commerce Act. You manifest Your agreement to the terms in this document by any act demonstrating Your assent thereto, including clicking any button containing the words "I agree" or similar syntax, or by merely accessing the Website, whether You have read these terms or not. It is suggested that You print this form for Your personal records.
C. OneTaste reserves the right to revise, amend, or modify this policy and Our other policies and agreements related to the Website at any time and in any manner, without prior notice to You. Accordingly, You should periodically check this page for any modifications of these Terms.
D. If You do not agree to be bound by these Terms, You may not enter, access or use the Website, or purchase any Services or Materials through this Website, and You should exit the Website immediately. By accessing, using or ordering Services or Materials through the Website, You affirm that You have read this Agreement and understand, agree and consent to all Terms contained herein. You further agree not to use or access Website if doing so would violate the laws of Your state, province or country.
E. At the bottom of this page appears a "last modified" date. If the "last modified" date remains unchanged, then You may presume that no changes have been made since the "last modified" date. A changed "last modified" dates indicates that this document has been updated or edited, and the updated or edited version supersedes any prior versions immediately upon posting.

2. SUBSCRIPTION FEES
A. The Services are subject to subscription fees ("Subscription Fees"). These Subscription Fees are provided to you upon registration and may change from time to time. Unless otherwise indicated, Subscriptions Fees cover an initial period, for which there is a one time charge, followed by recurring periodic charges for subsequent periods as agreed to by you upon registration. You acknowledge that your subscription has an initial and recurring payment feature and you accept responsibility for all recurring charges prior to cancellation. WE MAY SUBMIT PERIODIC CHARGES (E.G., MONTHLY) WITHOUT FURTHER AUTHORIZATION FROM YOU, UNTIL YOU PROVIDE PRIOR NOTICE (CONFIRMED IN WRITING AT OUR REQUEST) THAT YOU HAVE TERMINATED THIS AUTHORIZATION OR WISH TO CHANGE YOUR PAYMENT METHOD. SUCH NOTICE WILL NOT AFFECT CHARGES APPLIED BEFORE WE CAN REASONABLY ACT. TO TERMINATE YOUR AUTHORIZATION OR CHANGE YOUR PAYMENT METHOD FOR SUBSCRIPTIONS, GO TO THE CHECKOUT PAGE.
B. Your non-termination or continued use of the Services reaffirms that we are authorized to charge your chosen payment provider. We may submit those charges for payment and you will be responsible for such charges. This does not waive our right to seek payment directly from you. Your charges may be payable in advance, in arrears, per usage, or as otherwise described when you initially subscribed to, or otherwise joined, the Services.
C. If You have any questions please contact Our Customer Service Department toll-free at 1-800-994-0041. 

3. OWNERSHIP; INTELLECTUAL PROPERTY.
A. The Website, the Services, and all images and content at the Website (collectively, "Materials"), are the sole and exclusive property of OneTaste or its licensors. No license or ownership rights in or to any of the Materials are conveyed to You by virtue of this Agreement or by Your purchase of any Product from the Website.
B. The Materials are protected by the copyright and trademark laws of the United States. Unless otherwise permitted by law, none of the Materials may be reproduced by You without OneTaste’s prior written permission.

5. YOUR REPRESENTATIONS. You hereby represent and warrant that:
A. You are age eighteen or older;
B. You have read this Agreement and thoroughly understand the terms contained in this Agreement;
C. Any Materials or Services You purchase from the Website will be used for Your personal, non-commercial use;
D. You will not re-sell, re-distribute or export any Materials that You order from the Website;
E. OneTaste has the right to rely upon all information provided to OneTaste by You;
F. OneTaste may contact You by email, telephone or postal mail for any purpose, including but not limited to (i) follow-up calls, (ii) customer satisfaction surveys, and (iii) inquiries about any orders You placed, or considered placing, at or through the Website.

6. RESTRICTIONS: Without the express prior written authorization of  OneTaste, You may not:
A. Duplicate the Website or Materials (except as expressly provided elsewhere in this Agreement or as permitted by law);
B. Create derivative works based on the Website or any of the Materials;
C. Remove any copyright or other proprietary notices from the Website or any of the Materials contained therein;
D. Frame or utilize any framing techniques in connection with the Website or any of the Materials;
E. Use any meta-tags or any other "hidden text" using the Website’s name or marks;
F. "Deep-link" to any page of the Website;
G. Circumvent any encryption or other security tools used anywhere on the Website (including the theft of user names and passwords or using another person’s user name and password in order to gain access to a restricted area of the Website);
H. Use any data mining, bots, or similar data gathering and extraction tools on the Website;
I. Use any device, software or routine to bypass any operational element or to interfere, or attempt to interfere, with the proper working of the Website, server or activities conducted therein; or,
J. Take any action that imposes an unreasonable or disproportionately large load on the Website or its network infrastructure.
K. Use any Materials for other than personal, non-commercial use.  

7. TERMINATION.
A. This Agreement shall remain in force as long as You access the Website, use any functions or features of the Website, or order anything from the Website.
B. We reserve the right to terminate this Agreement without notice and/or refuse to sell to anyone who We believe, in Our sole discretion,
(i) has violated any of the terms of this Agreement,
(ii) is abusing the Materials or the services we provide, or
(iii) is unable to provide us with sufficient information to allow us to properly identify the customer’s real name, address, or other contact information.
(iv) You may terminate your Account, membership and/or subscription with us at any time, and termination will be effective immediately upon receipt of notice.  WE DO NOT PROVIDE REFUNDS OR CREDITS FOR ANY AMOUNTS PREPAID BY YOU AND YOU WILL NOT RECEIVE ANY REFUND FOR ANY UNUSED DAYS OF ANY SUBSCRIPTION TERM.

8. LIMITATION OF LIABILITY; NO WARRANTIES.
A. In no event shall OneTaste or its officers, directors, employees or subcontractors be liable for any indirect, special, incidental, exemplary, consequential or punitive damages, under any cause of action whatsoever including but not limited to contract, tort, strict liability, warranty or otherwise, for any claim, cause of action, fee, expense, cost or loss (collectively, "Claims") arising from or related to this Agreement, the Services, or Customer’s use of the Website or any Materials.
B. Except as otherwise specifically stated in this Agreement, the Website and all Materials and Services provided to You are provided "as is", without any warranty whatsoever.
C. You agree that OneTaste’s entire liability for all Claims shall be limited, in the aggregate, to the lesser of (i) USD $30.00, or (ii) the total amount of money You paid to OneTaste in the one (1) month period immediately preceding the incident on which Your Claim is based. This limitation of liability shall apply for all Claims, regardless of whether OneTaste was aware of or advised in advance of the possibility of damages or such Claims.
D. The warranties and representations specifically set forth in this agreement are the only warranties and representations with respect to this Agreement, and are in lieu of any and all other warranties, written or oral, express or implied, that may arise either by agreement between the parties or by operation of law, including warranties of merchantability and fitness for a particular purpose. None of these warranties and representations will extend to any third person. Some jurisdictions do not allow the exclusion of certain warranties, so some of the above exclusions may not apply to You.

9. INDEMNIFICATION. You agree to defend, indemnify, and hold harmless OneTaste, its officers, directors, shareholders, employees, independent contractors, telecommunication providers, and agents, from and against any and all claims, actions, loss, liabilities, expenses, costs, or demands, including without limitation legal and accounting fees, for all damages directly, indirectly, and/or consequentially resulting or allegedly resulting from Your misuse or inability to use the Website or Services, or Your breach of any of these terms and conditions of this Agreement. We shall promptly notify You by electronic mail of any such claim or suit, and cooperate fully (at Your expense) in the defense of such claim or suit. If we do not hear from You promptly, we reserve the right to defend such claim or suit and seek full recompense from You.

10. NOTICE. Any notice required to be given under this Agreement to You may be provided to You by postal mail or by email. If notice is sent by email, such notice shall be sent to the last known email address that You provided to Us, and shall be deemed delivered once sent. Notices by customers to OneTaste must be sent in writing to the following address: Relationship By Design, Attention: Customer Service, 347 9th St, Suite 483, San Francisco CA 94103.  

11. FORCE MAJEURE. OneTaste shall not be responsible for any failure to perform due to unforeseen circumstances or to causes beyond Our reasonable control, including but not limited to: acts of God, such as fire, flood, earthquakes, hurricanes, tropical storms or other natural disasters; war, riot, arson, embargoes, acts of civil or military authority, or terrorism; strikes, or shortages in transportation, facilities, fuel, energy, labor or materials; failure of the telecommunications or information services infrastructure; hacking, SPAM, or any failure of a computer, server or software, for so long as such event continues to delay OneTaste’s performance.

12. MISCELLANEOUS. 
* Governing Law. This Agreement and all matters arising out of, or otherwise relating to, this Agreement shall be governed exclusively by the laws of the State of California, excluding its conflict of law provisions. Venue for any matter arising from or related to this Agreement shall exist solely and exclusively in Northern California, and the parties hereby submit to the personal jurisdiction of the state and federal courts sitting in San Francisco County, California for such purpose.
* Arbitration of Disputes. ANY CLAIM, DISPUTE, OR CONTROVERSY (WHETHER IN CONTRACT, TORT, OR OTHERWISE, WHETHER PREEXISTING, PRESENT OR FUTURE, AND INCLUDING STATUTORY, CONSUMER PROTECTION, COMMON LAW, INTENTIONAL TORT AND EQUITABLE CLAIMS) BETWEEN YOU AND US OR ANY OF OUR AFFILIATED ENTITIES OR OURS OR THEIR AGENTS, EMPLOYEES, PRINCIPALS, SUCCESSORS, OR ASSIGNS ARISING FROM OR RELATING TO THESE TERMS, ITS INTERPRETATION, OR THE BREACH, TERMINATION OR VALIDITY HEREOF, OR THE RELATIONSHIPS WHICH RESULT FROM THESE TERM (INCLUDING, TO THE FULLEST EXTENT PERMITTED BY APPLICABLE LAW, RELATIONSHIPS WITH THIRD PARTIES WHO ARE NOT SIGNATORIES TO THIS AGREEMENT), SHALL BE RESOLVED EXCLUSIVELY AND FINALLY BY BINDING ARBITRATION ADMINISTERED BY JAMS before a retired judge in San Francisco County, California. In the event such a JAMS proceeding is unavailable for any reason, such disputes shall be governed by the Commercial Arbitration Rules and the Supplementary Procedures for Consumer Related Disputes (collectively, "AAA Rules") of the American Arbitration Association ("AAA"), as modified by these Terms, and will be administered by the AAA before a single retired judge. The arbitrator shall be empowered to grant whatever relief would be available in a court under law or in equity. This Section and Section 25 below are subject to the Federal Arbitration Act, 9 U.S.C. sec. 1-16 (FAA), as amended. Any award of the arbitrator shall be final and binding on each of the parties, and may be entered as a judgment in any court of competent jurisdiction. The arbitration proceeding will be limited solely to the dispute or controversy between you and us. YOU ACKNOWLEDGE THAT YOU ARE GIVING UP YOUR RIGHTS TO LITIGATE CLAIMS IN A COURT OR BEFORE A JURY WITH RESPECT TO ANY SUCH CLAIM. 
* Rights to Injunctive Relief. Both parties acknowledge that remedies at law may be inadequate to provide an aggrieved party with full compensation in the event of the other party’s breach, and that an aggrieved party shall therefore be entitled to seek injunctive relief in the event of any such breach, in addition to seeking all other remedies available at law or in equity.
* Assignment. The rights and liabilities of the parties hereto will bind and inure to the benefit of their respective assignees, successors, executors, and administrators, as the case may be.
* Severability. If for any reason a court of competent jurisdiction or an arbitrator finds any provision of this Agreement, or any portion thereof, to be unenforceable, that provision will be enforced to the maximum extent permissible and the remainder of these Terms and Conditions will continue in full force and effect.
* Attorneys’ Fees. In the event any Party shall commence any claims, actions, formal legal action, or arbitration to interpret and/or enforce the terms and conditions of this Agreement, or relating in any way to this Agreement, including without limitation asserted breaches of representations and warranties, the prevailing party in any such action or proceeding shall be entitled to recover, in addition to all other available relief, its reasonable attorney’s fees and costs incurred in connection therewith, including attorney’s fees incurred on appeal.
* No Waiver. No waiver of or by OneTaste shall be deemed a waiver of any subsequent default of the same provision of this Agreement. If any term, clause or provision hereof is held invalid or unenforceable by a court of competent jurisdiction, such invalidity shall not affect the validity or operation of any other term, clause or provision and such invalid term, clause or provision shall be deemed to be severed from this Agreement.
* Headings. All headings are solely for the convenience of reference and shall not affect the meaning, construction or effect of this Agreement.
* Complete Agreement. This Agreement constitute the entire agreement between the parties with respect to Your access and use of the Website and Your ordering and use of the Materials or Services, and supersedes and replaces all prior understandings or agreements, written or oral, regarding such subject matters.
* Modifications. OneTaste reserves the right to change any of the provisions posted herein and You agree to review these terms and conditions each time You visit the Website. Your continued use of the Website following the posting of any changes to these terms and conditions constitutes Your acceptance of such changes.
OneTaste does not and will not assume any obligation to provide You with notice of any change to this document. Unless accepted by OneTaste in writing, these terms and conditions may not be amended by You.
© 2013 OneTaste Media LLC
</textarea>
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
<?=View::load('_frame-endd')?>
