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
        <field name="Contact Tags">Completed checkout form step1</field>
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
@media screen and (max-width: 481px) {
.moonray-form {
	width: 100%!important;
}
}
</style>
</head>
<body>
<?php include_once("_includes/gacheckoutvariable-step2.php") ?>
<script src='https://www1.moon-ray.com/v2.4/analytics/tracking.js' type="text/javascript"></script> 
<script type="text/javascript">
_mri = "12106_3_2";
mrtracking();
</script>
<div id="overlay"> </div>
<script type="text/javascript">

$(function() { // Shorthand for $(document).ready(function() {	
$("#soloform").hide();
$("input[name=email]").val('<?=$_GET['email']?>');
$("select[name=billing_country]").val('<?=$_GET['country']?>');



 
 $("#add_subscription").on("change", function(){
		var intro_fn = $("input[name=firstname]").val();
		var intro_ln = $("input[name=lastname]").val();
		var intro_address1 = $("input[name=billing_address1]").val();
		var intro_address2 = $("input[name=billing_address2]").val();
		var intro_cell_phone = $("input[name=cell_phone]").val();
		var intro_zip = $("input[name=billing_zip]").val();
		var intro_city = $("input[name=billing_city]").val();
		var intro_state = $("select[name=billing_state]").val();
		var intro_payment_number = $("input[name=payment_number]").val();
		var intro_payment_code = $("input[name=payment_code]").val();
		var intro_payment_expire_month = $("select[name=payment_expire_month]").val();
		var intro_payment_expire_year = $("select[name=payment_expire_year]").val();
	    var intro_email = $("input[name=email]").val();
        var intro_billing = $("select[name=billing_country]").val();
      if ($(this).attr("checked")) {
        $("#subscription").show();
        $("#comboform").show();
        $("#soloform").hide();
			 $("input[name=firstname]").val(intro_fn);
		$("input[name=lastname]").val(intro_ln);
		$("input[name=cell_phone]").val(intro_cell_phone);
		$("input[name=billing_address1]").val(intro_address1);
		$("input[name=billing_address2]").val(intro_address2);
		$("input[name=billing_zip]").val(intro_zip);
		$("input[name=billing_city]").val(intro_city);
	    $("select[name=billing_state]").val(intro_state);
		$("input[name=payment_number]").val(intro_payment_number);
	    $("input[name=payment_code]").val(intro_payment_code);
		$("select[name=payment_expire_month]").val(intro_payment_expire_month);
		$("select[name=payment_expire_year]").val(intro_payment_expire_year);
	    $("input[name=email]").val(intro_email);
        $("select[name=billing_country]").val(intro_billing);
	
      } else {
        $("#subscription").hide();
        $("#comboform").hide();
        $("#soloform").show();
	    $("input[name=firstname]").val(intro_fn);
		$("input[name=lastname]").val(intro_ln);
		$("input[name=cell_phone]").val(intro_cell_phone);
		$("input[name=billing_address1]").val(intro_address1);
		$("input[name=billing_address2]").val(intro_address2);
		$("input[name=billing_zip]").val(intro_zip);
		$("input[name=billing_city]").val(intro_city);
	    $("select[name=billing_state]").val(intro_state);
		$("input[name=payment_number]").val(intro_payment_number);
	    $("input[name=payment_code]").val(intro_payment_code);
		$("select[name=payment_expire_month]").val(intro_payment_expire_month);
		$("select[name=payment_expire_year]").val(intro_payment_expire_year);
		$("input[name=email]").val(intro_email);
        $("select[name=billing_country]").val(intro_billing);
      }
    });

});
	

</script>
<div id="wrapper">
  <?=View::load('headermenuonly', array('checkout' => 'active', 'trust' => 'hidden'))?>
  <div class="container video clearfix" > <img src="_img/bar.png" class="img-responsive" alt="Checkout Now" style="margin:0px 0px 0px 0px 0px; display: block; margin-left: auto; margin-right: auto; width:100%; max-width:850px;" />
    <h3 style="margin:0px 0px 0px 0px; text-align:center;">Tame His Heart Secure Order Form</h3>
    <div style="max-width:800px; width:auto; margin: 0 auto;">
      <hr style="height:1px;border:none;color:#CCCCCC;;background-color:#CCC; margin: 2px 0px 2px 0px;" />
      <div class="article small" style="margin-top:1px;">
        <div class="widget-basic col-md-12" style="width:100%; max-width:400px; padding: 1px 3px 1px 3px; margin-top: 10px; margin-right:auto; margin-left:auto;">
          <div class="checkbox">
            <label>
              <input type="checkbox" value="" checked="checked" id="add_subscription">
              YES! For FREE, please send me the $20 value Bonus Discussions with OneTaste Dating Experts, and pay the shipping for me. I understand here is no obligation and I can cancel my subscription at any time (even if I want to just keep the Bonus and cancel before I receive anything else). </label>
          </div>
        </div>
        <br />
        <style>
  fieldset.contactInfo:before {
    box-sizing: border-box;
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    font-size: 21px;
    font-weight: bold;
    line-height: 30px;
    border-bottom: 1px solid #ccc;
    margin-bottom: 3px;
  }
  fieldset.shippingAddress:before {
    content: "Where do you want it shipped?";
    box-sizing: border-box;
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    font-size: 21px;
    line-height: 30px;
    border-bottom: 1px solid #ccc;
    margin-bottom: 3px;
  }
  div.moonray_forms input[type=submit] {
    padding: 10px 16px !important;
    background: #5cb85c !important;
    border: #4cae4c !important;
  }
  .credit_cards { display: none; }
  div.moonray_forms div.row label[for=differentShippingAddress] {
    clear: none;
  }
  fieldset {
    margin-bottom: 0px !important;
  }
  .row {
    margin-left: 5px;
  }
</style>
        
        <!-- Start Combo Form -->
        <div id="comboform" class="row col-md-12" style="max-width:400px;margin:0 auto;">
          <link type="text/css" rel="stylesheet" href="https://forms.moon-ray.com/v2.4/include/minify/?g=moonrayCSS" />
          <link type="text/css" rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/smoothness/jquery-ui.css" />
          <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 
          <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js"></script> 
          <script type="text/javascript" src="https://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script> 
          <script type="text/javascript" src="https://forms.moon-ray.com/v2.4/include/minify/?g=moonrayJS"></script> 
          <script type="text/javascript" src="https://forms.moon-ray.com/v2.4/include/minify/?g=moonrayJSCart"></script> 
          <script type="text/javascript">
	(function($){
    $(document).bind('ready.moonray_order_form_jb_679',function(){
        $("div.jb_679 form").moonrayOrderForm({
            timeZoneOffset:8,
            products:{"4":{"chargedToday":0,"chargedLater":[{"amount":"19.97","count":"1","unit":"month","type":"sub","date":false},{"amount":"0","count":"1","unit":"month","type":"trial"}],"delayDate":false,"taxable":false,"shippable":false,"hasPaymentPlans":false},"1":{"chargedToday":0,"chargedLater":[{"amount":29.97,"count":"1","unit":"week","type":"delay_price"},{"amount":"0.01","count":"1","unit":"week","type":"trial"}],"delayDate":false,"taxable":false,"shippable":false,"hasPaymentPlans":false}}
        }); 
    });
})(jQuery);
	</script> 
          <!--[if IE]> 
            <style>
                div.moonray_forms div.mr_error_wrapper{
                    width:auto !important;
                    width:300px;
                }
                div.moonray_forms div.mr_error_wrapper .mr_arrow{
                    display:inherit;
                }
                div.moonray_forms div.row{
                    margin:0px 0px .5em 0px;
                }
            </style>
            
        <![endif]-->
			<div class="row moonray_forms jb_679 moon-ray-hide-quick-cost" style="max-width:320px;">
              <form action="https://forms.moon-ray.com/v2.4/form_processor.php?" method="post" class="form-horizontal">
                <input type="hidden" name="hash" value="e4da3b7fbbce2345d7772b0674a318d5">
                <input type="hidden" name="uid" value="p2c12106f5">
                <input type="hidden" name="tags" value="">
                <input type="hidden" name="sequence" value="">
                <input type="hidden" name="contact_id" id="contact_id_jb_679" value="" />
                <input type="hidden" id="afft_jb_679" name="afft_" value="" />
                <input type="hidden" id="aff_jb_679" name="aff_" value="" />
                <input type="hidden" id="sess_jb_679" name="sess_" value="" />
                <input type="hidden" id="ref_jb_679" name="ref_" value="" />
                <input type="hidden" id="own_jb_679" name="own_" value="" />
                <input type="hidden" id="oprid_jb_679" name="oprid" value="" />
                <h2 style="font-size:22px; margin:2px 0px 10px 0px;">Enter Your Payment Details</h2>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" name="firstname" value="" class="form-control" size="50" placeholder="First Name*"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" name="lastname" value="" class="form-control" size="50" placeholder="Last Name*"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" name="email" value="" class="form-control" size="50" placeholder="Email Address*"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" name="cell_phone" value="" class="form-control" size="50" placeholder="Phone Number"/>
                  </div>
                </div>
                <h2 style="font-size:22px; margin:2px 0px 10px 0px;">Billing Information</h2>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" name="billing_address1" value="" class="form-control" size="50" placeholder="Billing Address*"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" name="billing_address2" value="" class="form-control" size="50" placeholder="Address 2"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-7">
                    <select name="billing_country" id="billing_country" class="moonray_input required form-control">
                      <option value=''>Select Country</option>
                      <option value='US'>United States</option>
                      <option value='CA'>Canada</option>
                      <option value='GB'>United Kingdom</option>
                      <option value='AF'>Afghanistan</option>
                      <option value='AL'>Albania</option>
                      <option value='DZ'>Algeria</option>
                      <option value='AS'>American Samoa</option>
                      <option value='AD'>Andorra</option>
                      <option value='AO'>Angola</option>
                      <option value='AI'>Anguilla</option>
                      <option value='AG'>Antigua And Barbuda</option>
                      <option value='AR'>Argentina</option>
                      <option value='AM'>Armenia</option>
                      <option value='AW'>Aruba</option>
                      <option value='AU'>Australia</option>
                      <option value='AT'>Austria</option>
                      <option value='AZ'>Azerbaijan</option>
                      <option value='BS'>Bahamas</option>
                      <option value='BH'>Bahrain</option>
                      <option value='BD'>Bangladesh</option>
                      <option value='BB'>Barbados</option>
                      <option value='BY'>Belarus</option>
                      <option value='BE'>Belgium</option>
                      <option value='BZ'>Belize</option>
                      <option value='BJ'>Benin</option>
                      <option value='BM'>Bermuda</option>
                      <option value='BT'>Bhutan</option>
                      <option value='BO'>Bolivia</option>
                      <option value='BA'>Bosnia And Herzegowina</option>
                      <option value='BW'>Botswana</option>
                      <option value='BV'>Bouvet Island</option>
                      <option value='BR'>Brazil</option>
                      <option value='IO'>British Indian Ocean Territory</option>
                      <option value='BN'>Brunei Darussalam</option>
                      <option value='BG'>Bulgaria</option>
                      <option value='BF'>Burkina Faso</option>
                      <option value='BI'>Burundi</option>
                      <option value='KH'>Cambodia</option>
                      <option value='CM'>Cameroon</option>
                      <option value='CV'>Cape Verde</option>
                      <option value='KY'>Cayman Islands</option>
                      <option value='CF'>Central African Republic</option>
                      <option value='TD'>Chad</option>
                      <option value='CIS'>Channel Islands</option>
                      <option value='CL'>Chile</option>
                      <option value='CN'>China</option>
                      <option value='CX'>Christmas Island</option>
                      <option value='CC'>Cocos (Keeling) Islands</option>
                      <option value='CO'>Colombia</option>
                      <option value='KM'>Comoros</option>
                      <option value='CG'>Congo</option>
                      <option value='CK'>Cook Islands</option>
                      <option value='CR'>Costa Rica</option>
                      <option value='CI'>Cote D'Ivoire</option>
                      <option value='HR'>Croatia (Local Name=> Hrvatska)</option>
                      <option value='CU'>Cuba</option>
                      <option value='CY'>Cyprus</option>
                      <option value='CZ'>Czech Republic</option>
                      <option value='DK'>Denmark</option>
                      <option value='DJ'>Djibouti</option>
                      <option value='DM'>Dominica</option>
                      <option value='DO'>Dominican Republic</option>
                      <option value='TP'>East Timor</option>
                      <option value='EC'>Ecuador</option>
                      <option value='EG'>Egypt</option>
                      <option value='SV'>El Salvador</option>
                      <option value='GQ'>Equatorial Guinea</option>
                      <option value='ER'>Eritrea</option>
                      <option value='EE'>Estonia</option>
                      <option value='ET'>Ethiopia</option>
                      <option value='FK'>Falkland Islands (Malvinas)</option>
                      <option value='FO'>Faroe Islands</option>
                      <option value='FJ'>Fiji</option>
                      <option value='FI'>Finland</option>
                      <option value='FR'>France</option>
                      <option value='GF'>French Guiana</option>
                      <option value='PF'>French Polynesia</option>
                      <option value='TF'>French Southern Territories</option>
                      <option value='GA'>Gabon</option>
                      <option value='GM'>Gambia</option>
                      <option value='GE'>Georgia</option>
                      <option value='DE'>Germany</option>
                      <option value='GH'>Ghana</option>
                      <option value='GI'>Gibraltar</option>
                      <option value='GR'>Greece</option>
                      <option value='GL'>Greenland</option>
                      <option value='GD'>Grenada</option>
                      <option value='GP'>Guadeloupe</option>
                      <option value='GU'>Guam</option>
                      <option value='GT'>Guatemala</option>
                      <option value='GN'>Guinea</option>
                      <option value='GW'>Guinea-Bissau</option>
                      <option value='GY'>Guyana</option>
                      <option value='HT'>Haiti</option>
                      <option value='HM'>Heard And Mc Donald Islands</option>
                      <option value='VA'>Holy See (Vatican City State)</option>
                      <option value='HN'>Honduras</option>
                      <option value='HK'>Hong Kong</option>
                      <option value='HU'>Hungary</option>
                      <option value='IS'>Iceland</option>
                      <option value='IN'>India</option>
                      <option value='ID'>Indonesia</option>
                      <option value='IR'>Iran (Islamic Republic Of)</option>
                      <option value='IQ'>Iraq</option>
                      <option value='IE'>Ireland</option>
                      <option value='IL'>Israel</option>
                      <option value='IT'>Italy</option>
                      <option value='JM'>Jamaica</option>
                      <option value='JP'>Japan</option>
                      <option value='JO'>Jordan</option>
                      <option value='KZ'>Kazakhstan</option>
                      <option value='KE'>Kenya</option>
                      <option value='KI'>Kiribati</option>
                      <option value='KP'>Korea, Dem People'S Republic</option>
                      <option value='KR'>Korea, Republic Of</option>
                      <option value='KW'>Kuwait</option>
                      <option value='KG'>Kyrgyzstan</option>
                      <option value='LA'>Lao People's Democratic Republic</option>
                      <option value='LV'>Latvia</option>
                      <option value='LB'>Lebanon</option>
                      <option value='LS'>Lesotho</option>
                      <option value='LR'>Liberia</option>
                      <option value='LY'>Libyan Arab Jamahiriya</option>
                      <option value='LI'>Liechtenstein</option>
                      <option value='LT'>Lithuania</option>
                      <option value='LU'>Luxembourg</option>
                      <option value='MO'>Macau</option>
                      <option value='MK'>Macedonia</option>
                      <option value='MG'>Madagascar</option>
                      <option value='MW'>Malawi</option>
                      <option value='MY'>Malaysia</option>
                      <option value='MV'>Maldives</option>
                      <option value='ML'>Mali</option>
                      <option value='MT'>Malta</option>
                      <option value='MH'>Marshall Islands</option>
                      <option value='MQ'>Martinique</option>
                      <option value='MR'>Mauritania</option>
                      <option value='MU'>Mauritius</option>
                      <option value='YT'>Mayotte</option>
                      <option value='MX'>Mexico</option>
                      <option value='FM'>Micronesia, Federated States</option>
                      <option value='MD'>Moldova, Republic Of</option>
                      <option value='MC'>Monaco</option>
                      <option value='MN'>Mongolia</option>
                      <option value='MS'>Montserrat</option>
                      <option value='MA'>Morocco</option>
                      <option value='MZ'>Mozambique</option>
                      <option value='MM'>Myanmar</option>
                      <option value='NA'>Namibia</option>
                      <option value='NR'>Nauru</option>
                      <option value='NP'>Nepal</option>
                      <option value='NL'>Netherlands</option>
                      <option value='AN'>Netherlands Antilles</option>
                      <option value='NC'>New Caledonia</option>
                      <option value='NZ'>New Zealand</option>
                      <option value='NI'>Nicaragua</option>
                      <option value='NE'>Niger</option>
                      <option value='NG'>Nigeria</option>
                      <option value='NU'>Niue</option>
                      <option value='NF'>Norfolk Island</option>
                      <option value='MP'>Northern Mariana Islands</option>
                      <option value='NO'>Norway</option>
                      <option value='OM'>Oman</option>
                      <option value='PK'>Pakistan</option>
                      <option value='PW'>Palau</option>
                      <option value='PA'>Panama</option>
                      <option value='PG'>Papua New Guinea</option>
                      <option value='PY'>Paraguay</option>
                      <option value='PE'>Peru</option>
                      <option value='PH'>Philippines</option>
                      <option value='PN'>Pitcairn</option>
                      <option value='PL'>Poland</option>
                      <option value='PT'>Portugal</option>
                      <option value='PR'>Puerto Rico</option>
                      <option value='QA'>Qatar</option>
                      <option value='RE'>Reunion</option>
                      <option value='RO'>Romania</option>
                      <option value='RU'>Russian Federation</option>
                      <option value='RW'>Rwanda</option>
                      <option value='KN'>Saint Kitts And Nevis</option>
                      <option value='LC'>Saint Lucia</option>
                      <option value='VC'>Saint Vincent, The Grenadines</option>
                      <option value='WS'>Samoa</option>
                      <option value='SM'>San Marino</option>
                      <option value='ST'>Sao Tome And Principe</option>
                      <option value='SA'>Saudi Arabia</option>
                      <option value='SN'>Senegal</option>
                      <option value='SC'>Seychelles</option>
                      <option value='SL'>Sierra Leone</option>
                      <option value='SG'>Singapore</option>
                      <option value='SK'>Slovakia (Slovak Republic)</option>
                      <option value='SI'>Slovenia</option>
                      <option value='SB'>Solomon Islands</option>
                      <option value='SO'>Somalia</option>
                      <option value='ZA'>South Africa</option>
                      <option value='GS'>South Georgia , S Sandwich Is.</option>
                      <option value='ES'>Spain</option>
                      <option value='LK'>Sri Lanka</option>
                      <option value='SH'>St. Helena</option>
                      <option value='PM'>St. Pierre And Miquelon</option>
                      <option value='SD'>Sudan</option>
                      <option value='SR'>Suriname</option>
                      <option value='SJ'>Svalbard, Jan Mayen Islands</option>
                      <option value='SZ'>Swaziland</option>
                      <option value='SE'>Sweden</option>
                      <option value='CH'>Switzerland</option>
                      <option value='SY'>Syrian Arab Republic</option>
                      <option value='TW'>Taiwan</option>
                      <option value='TJ'>Tajikistan</option>
                      <option value='TZ'>Tanzania (United Republic of)</option>
                      <option value='TH'>Thailand</option>
                      <option value='TG'>Togo</option>
                      <option value='TK'>Tokelau</option>
                      <option value='TO'>Tonga</option>
                      <option value='TT'>Trinidad And Tobago</option>
                      <option value='TN'>Tunisia</option>
                      <option value='TR'>Turkey</option>
                      <option value='TM'>Turkmenistan</option>
                      <option value='TC'>Turks And Caicos Islands</option>
                      <option value='TV'>Tuvalu</option>
                      <option value='UG'>Uganda</option>
                      <option value='UA'>Ukraine</option>
                      <option value='AE'>United Arab Emirates</option>
                      <option value='UM'>United States Minor Is.</option>
                      <option value='UY'>Uruguay</option>
                      <option value='UZ'>Uzbekistan</option>
                      <option value='VU'>Vanuatu</option>
                      <option value='VE'>Venezuela</option>
                      <option value='VN'>Viet Nam</option>
                      <option value='VG'>Virgin Islands (British)</option>
                      <option value='VI'>Virgin Islands (U.S.)</option>
                      <option value='WF'>Wallis And Futuna Islands</option>
                      <option value='EH'>Western Sahara</option>
                      <option value='YE'>Yemen</option>
                      <option value='YU'>Yugoslavia</option>
                      <option value='ZR'>Zaire</option>
                      <option value='ZM'>Zambia</option>
                      <option value='ZW'>Zimbabwe</option>
                    </select>
                  </div>
                  <div class="col-sm-5">
                    <input type="text" name="billing_zip" value="" class="form-control" size="30" placeholder="Postal Code*"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-7">
                    <input type="text" name="billing_city" value="" class="form-control" size="50" placeholder="City*"/>
                  </div>
                  <div class="col-sm-5">
                    <select name="billing_state" class="moonray_input required form-control">
                      <option value='State' selected="selected">State</option>
                      <option value='AL'>Alabama</option>
                      <option value='AK'>Alaska</option>
                      <option value='AZ'>Arizona</option>
                      <option value='AR'>Arkansas</option>
                      <option value='CA'>California</option>
                      <option value='CO'>Colorado</option>
                      <option value='CT'>Connecticut</option>
                      <option value='DE'>Delaware</option>
                      <option value='DC'>D.C.</option>
                      <option value='FL'>Florida</option>
                      <option value='GA'>Georgia</option>
                      <option value='HI'>Hawaii</option>
                      <option value='ID'>Idaho</option>
                      <option value='IL'>Illinois</option>
                      <option value='IN'>Indiana</option>
                      <option value='IA'>Iowa</option>
                      <option value='KS'>Kansas</option>
                      <option value='KY'>Kentucky</option>
                      <option value='LA'>Louisiana</option>
                      <option value='ME'>Maine</option>
                      <option value='MD'>Maryland</option>
                      <option value='MA'>Massachusetts</option>
                      <option value='MI'>Michigan</option>
                      <option value='MN'>Minnesota</option>
                      <option value='MS'>Mississippi</option>
                      <option value='MO'>Missouri</option>
                      <option value='MT'>Montana</option>
                      <option value='NE'>Nebraska</option>
                      <option value='NV'>Nevada</option>
                      <option value='NH'>New Hampshire</option>
                      <option value='NM'>New Mexico</option>
                      <option value='NJ'>New Jersey</option>
                      <option value='NY'>New York</option>
                      <option value='NC'>North Carolina</option>
                      <option value='ND'>North Dakota</option>
                      <option value='OH'>Ohio</option>
                      <option value='OK'>Oklahoma</option>
                      <option value='OR'>Oregon</option>
                      <option value='PA'>Pennsylvania</option>
                      <option value='RI'>Rhode Island</option>
                      <option value='SC'>South Carolina</option>
                      <option value='SD'>South Dakota</option>
                      <option value='TN'>Tennessee</option>
                      <option value='TX'>Texas</option>
                      <option value='UT'>Utah</option>
                      <option value='VT'>Vermont</option>
                      <option value='VA'>Virginia</option>
                      <option value='WA'>Washington</option>
                      <option value='WV'>West Virginia</option>
                      <option value='WI'>Wisconsin</option>
                      <option value='WY'>Wyoming</option>
                      <option value='AB'>Alberta</option>
                      <option value='BC'>British Columbia</option>
                      <option value='MB'>Manitoba</option>
                      <option value='NB'>New Brunswick</option>
                      <option value='NL'>Newfoundland and Labrador</option>
                      <option value='NS'>Nova Scotia</option>
                      <option value='NT'>Northwest Territories</option>
                      <option value='NU'>Nunavut</option>
                      <option value='ON'>Ontario</option>
                      <option value='PE'>Prince Edward Island</option>
                      <option value='QC'>Quebec</option>
                      <option value='SK'>Saskatchewan</option>
                      <option value='YT'>Yukon</option>
                      <option value='ACT'>(AU) Australian Capital Territory</option>
                      <option value='NSW'>(AU) New South Wales</option>
                      <option value='VIC'>(AU) Victoria</option>
                      <option value='QLD'>(AU) Queensland</option>
                      <option value='AU_NT'>(AU) Northern Territory</option>
                      <option value='AU_WA'>(AU) Western Australia</option>
                      <option value='SA'>(AU) South Australia</option>
                      <option value='TAS'>(AU) Tasmania</option>
                      <option value='GP'>(AF) Gauteng</option>
                      <option value='WP'>(AF) Western Cape</option>
                      <option value='EC'>(AF) Eastern Cape</option>
                      <option value='KZN'>(AF) Kwa-Zulu Natal</option>
                      <option value='NW'>(AF) North West</option>
                      <option value='AF_NC'>(AF) Northern Cape</option>
                      <option value='MP'>(AF) Mpumulanga</option>
                      <option value='FS'>(AF) Free State</option>
                      <option value='_NOTLISTED_'>My State is not listed</option>
                    </select>
                  </div>
                </div>
                <h2 style="font-size:22px; margin:0px 0px 10px 0px;">Credit Card Details</h2>
                <div class="form-group">
                  <div class="col-sm-7">
                    <input type="text" name="payment_number" value="" class="form-control" size="30" placeholder="Card Number*"/>
                  </div>
                  <div class="col-sm-3">
                      <input type="text" name="payment_code" value="" class="form-control" size="30" placeholder="CVC"/>
                  </div>
                  <div class="col-sm-1">
                      <a href="" class="ui-state-default ui-corner-all cvchelp"><span class="ui-icon ui-icon-help"></span></a> 
                  </div>
                </div>
                <h2 style="font-size:15px; margin:0px 0px 5px 0px; font-weight:">Expiration Date <span style="color:#C00;"> *</span></h2>
                <div class="form-group">
                  <div class="col-sm-7">
                    <select name="payment_expire_month" class="form-control">
                      <option value="01">01 - January</option>
                      <option value="02">02 - February</option>
                      <option value="03">03 - March</option>
                      <option value="04">04 - April</option>
                      <option value="05">05 - May</option>
                      <option value="06">06 - June</option>
                      <option value="07">07 - July</option>
                      <option value="08">08 - August</option>
                      <option value="09">09 - September</option>
                      <option value="10">10 - October</option>
                      <option value="11">11 - November</option>
                      <option value="12">12 - December</option>
                    </select>
                  </div>
                  <div class="col-sm-5">
                    <select name="payment_expire_year" class="form-control">
                      <option value="2014">2014</option>
                      <option value="2015">2015</option>
                      <option value="2016">2016</option>
                      <option value="2017">2017</option>
                      <option value="2018">2018</option>
                      <option value="2019">2019</option>
                      <option value="2020">2020</option>
                      <option value="2021">2021</option>
                      <option value="2022">2022</option>
                      <option value="2023">2023</option>
                      <option value="2024">2024</option>
                      <option value="2025">2025</option>
                      <option value="2026">2026</option>
                      <option value="2027">2027</option>
                      <option value="2028">2028</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <table class="moonray_order_form_totals">
                      <tbody>
                        <tr class="priceDisplay">
                          <td class="label">Purchase</td>
                          <td class="total"><span class="totalDueNow">$<span class="purchase_sum"></span> now </span></td>
                        </tr>
                        <tr style="display:none">
                          <td class="label">Shipping</td>
                          <td><select name="shipping_options">
                            </select></td>
                        </tr>
                        <tr class="priceDisplay">
                          <td class="label">Tax</td>
                          <td>$<span class="tax_sum">0</span></td>
                        </tr>
                        <tr class="priceDisplay" >
                          <td colspan="2"><hr /></td>
                        </tr>
                        <tr class="priceDisplay">
                          <td class="label">Order Total</td>
                          <td class="total"><span class="totalDueNow">$<span class="order_total"></span> now </span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12 pull-right">
                    <div class="row termsWrapper">
                      <input type="checkbox" class="checkbox terms required auto" name="terms" />
                      <label for="agreeToTerms" class="checkbox" name="agreeToTerms">I agree to these <a href="#" class="termsLink">terms and conditions</a></label>
                      <br>
                    </div>
                    <input type="submit" value="Finish Order" class="mr-submit" style="float:right; color:#FFF; font-weight:bold; background-color:#C00 !important; font-size:18px; height:40px; width:130px; border-radius:10px;">
                  </div>
                </div>
              </form>
            </div>           

          
          <div class="ui-helper-hidden termsContent"><br>
            <br>
          </div>
        </div>
        <div id="soloform" class="row col-md-12" style="max-width:400px;margin:0 auto;"> 
          <script type="text/javascript">
	(function($){
    $(document).bind('ready.moonray_order_form_jb_856',function(){
        $("div.jb_856 form").moonrayOrderForm({
            timeZoneOffset:8,
            products:{"1":{"chargedToday":0,"chargedLater":[{"amount":29.97,"count":"1","unit":"week","type":"delay_price"},{"amount":"0.01","count":"1","unit":"week","type":"trial"}],"delayDate":false,"taxable":false,"shippable":false,"hasPaymentPlans":false}}
        }); 
    });
})(jQuery);
	</script> 
          <!--[if IE]> 
            <style>
                div.moonray_forms div.mr_error_wrapper{
                    width:auto !important;
                    width:300px;
                }
                div.moonray_forms div.mr_error_wrapper .mr_arrow{
                    display:inherit;
                }
                div.moonray_forms div.row{
                    margin:0px 0px .5em 0px;
                }
            </style>
            
        <![endif]-->
	<div class="row moonray_forms moonray_order_form jb_856 moon-ray-hide-quick-cost" style="max-width:320px;">
              <form action="https://forms.moon-ray.com/v2.4/form_processor.php?" method="post"  class="form-horizontal">
                <input type="hidden" name="hash" value="a87ff679a2f3e71d9181a67b7542122c">
                <input type="hidden" name="uid" value="p2c12106f4">
                <input type="hidden" name="tags" value="">
                <input type="hidden" name="sequence" value="">
                <input type="hidden" name="contact_id" id="contact_id_jb_856" value="" />
                <input type="hidden" id="afft_jb_856" name="afft_" value="" />
                <input type="hidden" id="aff_jb_856" name="aff_" value="" />
                <input type="hidden" id="sess_jb_856" name="sess_" value="" />
                <input type="hidden" id="ref_jb_856" name="ref_" value="" />
                <input type="hidden" id="own_jb_856" name="own_" value="" />
                <input type="hidden" id="oprid_jb_856" name="oprid" value="" />
                <h2 style="font-size:22px; margin:2px 0px 10px 0px;">Enter Your Payment Details</h2>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" name="firstname" value="" class="form-control" size="50" placeholder="First Name*"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" name="lastname" value="" class="form-control" size="50" placeholder="Last Name*"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" name="email" value="" class="form-control" size="50" placeholder="Email Address*"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" name="cell_phone" value="" class="form-control" size="50" placeholder="Phone Number"/>
                  </div>
                </div>
                <h2 style="font-size:22px; margin:2px 0px 10px 0px;">Billing Information</h2>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" name="billing_address1" value="" class="form-control" size="50" placeholder="Billing Address*"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" name="billing_address2" value="" class="form-control" size="50" placeholder="Address 2"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-7">
                    <select name="billing_country" id="billing_country" class="moonray_input required form-control">
                      <option value=''>Select Country</option>
                      <option value='US'>United States</option>
                      <option value='CA'>Canada</option>
                      <option value='GB'>United Kingdom</option>
                      <option value='AF'>Afghanistan</option>
                      <option value='AL'>Albania</option>
                      <option value='DZ'>Algeria</option>
                      <option value='AS'>American Samoa</option>
                      <option value='AD'>Andorra</option>
                      <option value='AO'>Angola</option>
                      <option value='AI'>Anguilla</option>
                      <option value='AG'>Antigua And Barbuda</option>
                      <option value='AR'>Argentina</option>
                      <option value='AM'>Armenia</option>
                      <option value='AW'>Aruba</option>
                      <option value='AU'>Australia</option>
                      <option value='AT'>Austria</option>
                      <option value='AZ'>Azerbaijan</option>
                      <option value='BS'>Bahamas</option>
                      <option value='BH'>Bahrain</option>
                      <option value='BD'>Bangladesh</option>
                      <option value='BB'>Barbados</option>
                      <option value='BY'>Belarus</option>
                      <option value='BE'>Belgium</option>
                      <option value='BZ'>Belize</option>
                      <option value='BJ'>Benin</option>
                      <option value='BM'>Bermuda</option>
                      <option value='BT'>Bhutan</option>
                      <option value='BO'>Bolivia</option>
                      <option value='BA'>Bosnia And Herzegowina</option>
                      <option value='BW'>Botswana</option>
                      <option value='BV'>Bouvet Island</option>
                      <option value='BR'>Brazil</option>
                      <option value='IO'>British Indian Ocean Territory</option>
                      <option value='BN'>Brunei Darussalam</option>
                      <option value='BG'>Bulgaria</option>
                      <option value='BF'>Burkina Faso</option>
                      <option value='BI'>Burundi</option>
                      <option value='KH'>Cambodia</option>
                      <option value='CM'>Cameroon</option>
                      <option value='CV'>Cape Verde</option>
                      <option value='KY'>Cayman Islands</option>
                      <option value='CF'>Central African Republic</option>
                      <option value='TD'>Chad</option>
                      <option value='CIS'>Channel Islands</option>
                      <option value='CL'>Chile</option>
                      <option value='CN'>China</option>
                      <option value='CX'>Christmas Island</option>
                      <option value='CC'>Cocos (Keeling) Islands</option>
                      <option value='CO'>Colombia</option>
                      <option value='KM'>Comoros</option>
                      <option value='CG'>Congo</option>
                      <option value='CK'>Cook Islands</option>
                      <option value='CR'>Costa Rica</option>
                      <option value='CI'>Cote D'Ivoire</option>
                      <option value='HR'>Croatia (Local Name=> Hrvatska)</option>
                      <option value='CU'>Cuba</option>
                      <option value='CY'>Cyprus</option>
                      <option value='CZ'>Czech Republic</option>
                      <option value='DK'>Denmark</option>
                      <option value='DJ'>Djibouti</option>
                      <option value='DM'>Dominica</option>
                      <option value='DO'>Dominican Republic</option>
                      <option value='TP'>East Timor</option>
                      <option value='EC'>Ecuador</option>
                      <option value='EG'>Egypt</option>
                      <option value='SV'>El Salvador</option>
                      <option value='GQ'>Equatorial Guinea</option>
                      <option value='ER'>Eritrea</option>
                      <option value='EE'>Estonia</option>
                      <option value='ET'>Ethiopia</option>
                      <option value='FK'>Falkland Islands (Malvinas)</option>
                      <option value='FO'>Faroe Islands</option>
                      <option value='FJ'>Fiji</option>
                      <option value='FI'>Finland</option>
                      <option value='FR'>France</option>
                      <option value='GF'>French Guiana</option>
                      <option value='PF'>French Polynesia</option>
                      <option value='TF'>French Southern Territories</option>
                      <option value='GA'>Gabon</option>
                      <option value='GM'>Gambia</option>
                      <option value='GE'>Georgia</option>
                      <option value='DE'>Germany</option>
                      <option value='GH'>Ghana</option>
                      <option value='GI'>Gibraltar</option>
                      <option value='GR'>Greece</option>
                      <option value='GL'>Greenland</option>
                      <option value='GD'>Grenada</option>
                      <option value='GP'>Guadeloupe</option>
                      <option value='GU'>Guam</option>
                      <option value='GT'>Guatemala</option>
                      <option value='GN'>Guinea</option>
                      <option value='GW'>Guinea-Bissau</option>
                      <option value='GY'>Guyana</option>
                      <option value='HT'>Haiti</option>
                      <option value='HM'>Heard And Mc Donald Islands</option>
                      <option value='VA'>Holy See (Vatican City State)</option>
                      <option value='HN'>Honduras</option>
                      <option value='HK'>Hong Kong</option>
                      <option value='HU'>Hungary</option>
                      <option value='IS'>Iceland</option>
                      <option value='IN'>India</option>
                      <option value='ID'>Indonesia</option>
                      <option value='IR'>Iran (Islamic Republic Of)</option>
                      <option value='IQ'>Iraq</option>
                      <option value='IE'>Ireland</option>
                      <option value='IL'>Israel</option>
                      <option value='IT'>Italy</option>
                      <option value='JM'>Jamaica</option>
                      <option value='JP'>Japan</option>
                      <option value='JO'>Jordan</option>
                      <option value='KZ'>Kazakhstan</option>
                      <option value='KE'>Kenya</option>
                      <option value='KI'>Kiribati</option>
                      <option value='KP'>Korea, Dem People'S Republic</option>
                      <option value='KR'>Korea, Republic Of</option>
                      <option value='KW'>Kuwait</option>
                      <option value='KG'>Kyrgyzstan</option>
                      <option value='LA'>Lao People's Democratic Republic</option>
                      <option value='LV'>Latvia</option>
                      <option value='LB'>Lebanon</option>
                      <option value='LS'>Lesotho</option>
                      <option value='LR'>Liberia</option>
                      <option value='LY'>Libyan Arab Jamahiriya</option>
                      <option value='LI'>Liechtenstein</option>
                      <option value='LT'>Lithuania</option>
                      <option value='LU'>Luxembourg</option>
                      <option value='MO'>Macau</option>
                      <option value='MK'>Macedonia</option>
                      <option value='MG'>Madagascar</option>
                      <option value='MW'>Malawi</option>
                      <option value='MY'>Malaysia</option>
                      <option value='MV'>Maldives</option>
                      <option value='ML'>Mali</option>
                      <option value='MT'>Malta</option>
                      <option value='MH'>Marshall Islands</option>
                      <option value='MQ'>Martinique</option>
                      <option value='MR'>Mauritania</option>
                      <option value='MU'>Mauritius</option>
                      <option value='YT'>Mayotte</option>
                      <option value='MX'>Mexico</option>
                      <option value='FM'>Micronesia, Federated States</option>
                      <option value='MD'>Moldova, Republic Of</option>
                      <option value='MC'>Monaco</option>
                      <option value='MN'>Mongolia</option>
                      <option value='MS'>Montserrat</option>
                      <option value='MA'>Morocco</option>
                      <option value='MZ'>Mozambique</option>
                      <option value='MM'>Myanmar</option>
                      <option value='NA'>Namibia</option>
                      <option value='NR'>Nauru</option>
                      <option value='NP'>Nepal</option>
                      <option value='NL'>Netherlands</option>
                      <option value='AN'>Netherlands Antilles</option>
                      <option value='NC'>New Caledonia</option>
                      <option value='NZ'>New Zealand</option>
                      <option value='NI'>Nicaragua</option>
                      <option value='NE'>Niger</option>
                      <option value='NG'>Nigeria</option>
                      <option value='NU'>Niue</option>
                      <option value='NF'>Norfolk Island</option>
                      <option value='MP'>Northern Mariana Islands</option>
                      <option value='NO'>Norway</option>
                      <option value='OM'>Oman</option>
                      <option value='PK'>Pakistan</option>
                      <option value='PW'>Palau</option>
                      <option value='PA'>Panama</option>
                      <option value='PG'>Papua New Guinea</option>
                      <option value='PY'>Paraguay</option>
                      <option value='PE'>Peru</option>
                      <option value='PH'>Philippines</option>
                      <option value='PN'>Pitcairn</option>
                      <option value='PL'>Poland</option>
                      <option value='PT'>Portugal</option>
                      <option value='PR'>Puerto Rico</option>
                      <option value='QA'>Qatar</option>
                      <option value='RE'>Reunion</option>
                      <option value='RO'>Romania</option>
                      <option value='RU'>Russian Federation</option>
                      <option value='RW'>Rwanda</option>
                      <option value='KN'>Saint Kitts And Nevis</option>
                      <option value='LC'>Saint Lucia</option>
                      <option value='VC'>Saint Vincent, The Grenadines</option>
                      <option value='WS'>Samoa</option>
                      <option value='SM'>San Marino</option>
                      <option value='ST'>Sao Tome And Principe</option>
                      <option value='SA'>Saudi Arabia</option>
                      <option value='SN'>Senegal</option>
                      <option value='SC'>Seychelles</option>
                      <option value='SL'>Sierra Leone</option>
                      <option value='SG'>Singapore</option>
                      <option value='SK'>Slovakia (Slovak Republic)</option>
                      <option value='SI'>Slovenia</option>
                      <option value='SB'>Solomon Islands</option>
                      <option value='SO'>Somalia</option>
                      <option value='ZA'>South Africa</option>
                      <option value='GS'>South Georgia , S Sandwich Is.</option>
                      <option value='ES'>Spain</option>
                      <option value='LK'>Sri Lanka</option>
                      <option value='SH'>St. Helena</option>
                      <option value='PM'>St. Pierre And Miquelon</option>
                      <option value='SD'>Sudan</option>
                      <option value='SR'>Suriname</option>
                      <option value='SJ'>Svalbard, Jan Mayen Islands</option>
                      <option value='SZ'>Swaziland</option>
                      <option value='SE'>Sweden</option>
                      <option value='CH'>Switzerland</option>
                      <option value='SY'>Syrian Arab Republic</option>
                      <option value='TW'>Taiwan</option>
                      <option value='TJ'>Tajikistan</option>
                      <option value='TZ'>Tanzania (United Republic of)</option>
                      <option value='TH'>Thailand</option>
                      <option value='TG'>Togo</option>
                      <option value='TK'>Tokelau</option>
                      <option value='TO'>Tonga</option>
                      <option value='TT'>Trinidad And Tobago</option>
                      <option value='TN'>Tunisia</option>
                      <option value='TR'>Turkey</option>
                      <option value='TM'>Turkmenistan</option>
                      <option value='TC'>Turks And Caicos Islands</option>
                      <option value='TV'>Tuvalu</option>
                      <option value='UG'>Uganda</option>
                      <option value='UA'>Ukraine</option>
                      <option value='AE'>United Arab Emirates</option>
                      <option value='UM'>United States Minor Is.</option>
                      <option value='UY'>Uruguay</option>
                      <option value='UZ'>Uzbekistan</option>
                      <option value='VU'>Vanuatu</option>
                      <option value='VE'>Venezuela</option>
                      <option value='VN'>Viet Nam</option>
                      <option value='VG'>Virgin Islands (British)</option>
                      <option value='VI'>Virgin Islands (U.S.)</option>
                      <option value='WF'>Wallis And Futuna Islands</option>
                      <option value='EH'>Western Sahara</option>
                      <option value='YE'>Yemen</option>
                      <option value='YU'>Yugoslavia</option>
                      <option value='ZR'>Zaire</option>
                      <option value='ZM'>Zambia</option>
                      <option value='ZW'>Zimbabwe</option>
                    </select>
                  </div>
                  <div class="col-sm-5">
                    <input type="text" name="billing_zip" value="" class="form-control" size="30" placeholder="Postal Code*"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-7">
                    <input type="text" name="billing_city" value="" class="form-control" size="50" placeholder="City*"/>
                  </div>
                  <div class="col-sm-5">
                    <select name="billing_state" class="moonray_input required form-control">
                      <option value='State' selected="selected">State</option>
                      <option value='AL'>Alabama</option>
                      <option value='AK'>Alaska</option>
                      <option value='AZ'>Arizona</option>
                      <option value='AR'>Arkansas</option>
                      <option value='CA'>California</option>
                      <option value='CO'>Colorado</option>
                      <option value='CT'>Connecticut</option>
                      <option value='DE'>Delaware</option>
                      <option value='DC'>D.C.</option>
                      <option value='FL'>Florida</option>
                      <option value='GA'>Georgia</option>
                      <option value='HI'>Hawaii</option>
                      <option value='ID'>Idaho</option>
                      <option value='IL'>Illinois</option>
                      <option value='IN'>Indiana</option>
                      <option value='IA'>Iowa</option>
                      <option value='KS'>Kansas</option>
                      <option value='KY'>Kentucky</option>
                      <option value='LA'>Louisiana</option>
                      <option value='ME'>Maine</option>
                      <option value='MD'>Maryland</option>
                      <option value='MA'>Massachusetts</option>
                      <option value='MI'>Michigan</option>
                      <option value='MN'>Minnesota</option>
                      <option value='MS'>Mississippi</option>
                      <option value='MO'>Missouri</option>
                      <option value='MT'>Montana</option>
                      <option value='NE'>Nebraska</option>
                      <option value='NV'>Nevada</option>
                      <option value='NH'>New Hampshire</option>
                      <option value='NM'>New Mexico</option>
                      <option value='NJ'>New Jersey</option>
                      <option value='NY'>New York</option>
                      <option value='NC'>North Carolina</option>
                      <option value='ND'>North Dakota</option>
                      <option value='OH'>Ohio</option>
                      <option value='OK'>Oklahoma</option>
                      <option value='OR'>Oregon</option>
                      <option value='PA'>Pennsylvania</option>
                      <option value='RI'>Rhode Island</option>
                      <option value='SC'>South Carolina</option>
                      <option value='SD'>South Dakota</option>
                      <option value='TN'>Tennessee</option>
                      <option value='TX'>Texas</option>
                      <option value='UT'>Utah</option>
                      <option value='VT'>Vermont</option>
                      <option value='VA'>Virginia</option>
                      <option value='WA'>Washington</option>
                      <option value='WV'>West Virginia</option>
                      <option value='WI'>Wisconsin</option>
                      <option value='WY'>Wyoming</option>
                      <option value='AB'>Alberta</option>
                      <option value='BC'>British Columbia</option>
                      <option value='MB'>Manitoba</option>
                      <option value='NB'>New Brunswick</option>
                      <option value='NL'>Newfoundland and Labrador</option>
                      <option value='NS'>Nova Scotia</option>
                      <option value='NT'>Northwest Territories</option>
                      <option value='NU'>Nunavut</option>
                      <option value='ON'>Ontario</option>
                      <option value='PE'>Prince Edward Island</option>
                      <option value='QC'>Quebec</option>
                      <option value='SK'>Saskatchewan</option>
                      <option value='YT'>Yukon</option>
                      <option value='ACT'>(AU) Australian Capital Territory</option>
                      <option value='NSW'>(AU) New South Wales</option>
                      <option value='VIC'>(AU) Victoria</option>
                      <option value='QLD'>(AU) Queensland</option>
                      <option value='AU_NT'>(AU) Northern Territory</option>
                      <option value='AU_WA'>(AU) Western Australia</option>
                      <option value='SA'>(AU) South Australia</option>
                      <option value='TAS'>(AU) Tasmania</option>
                      <option value='GP'>(AF) Gauteng</option>
                      <option value='WP'>(AF) Western Cape</option>
                      <option value='EC'>(AF) Eastern Cape</option>
                      <option value='KZN'>(AF) Kwa-Zulu Natal</option>
                      <option value='NW'>(AF) North West</option>
                      <option value='AF_NC'>(AF) Northern Cape</option>
                      <option value='MP'>(AF) Mpumulanga</option>
                      <option value='FS'>(AF) Free State</option>
                      <option value='_NOTLISTED_'>My State is not listed</option>
                    </select>
                  </div>
                </div>
                <h2 style="font-size:22px; margin:0px 0px 10px 0px;">Credit Card Details</h2>
                <div class="form-group">
                  <div class="col-sm-7">
                    <input type="text" name="payment_number" value="" class="form-control" size="30" placeholder="Card Number*"/>
                  </div>
                  <div class="col-sm-3">
                      <input type="text" name="payment_code" value="" class="form-control" size="30" placeholder="CVC"/>
                  </div>
                  <div class="col-sm-1">
                      <a href="" class="ui-state-default ui-corner-all cvchelp"><span class="ui-icon ui-icon-help"></span></a> 
                  </div>
                </div>
                <h2 style="font-size:15px; margin:0px 0px 5px 0px; font-weight:">Expiration Date <span style="color:#C00;"> *</span></h2>
                <div class="form-group">
                  <div class="col-sm-7">
                    <select name="payment_expire_month" class="form-control">
                      <option value="01">01 - January</option>
                      <option value="02">02 - February</option>
                      <option value="03">03 - March</option>
                      <option value="04">04 - April</option>
                      <option value="05">05 - May</option>
                      <option value="06">06 - June</option>
                      <option value="07">07 - July</option>
                      <option value="08">08 - August</option>
                      <option value="09">09 - September</option>
                      <option value="10">10 - October</option>
                      <option value="11">11 - November</option>
                      <option value="12">12 - December</option>
                    </select>
                  </div>
                  <div class="col-sm-5">
                    <select name="payment_expire_year" class="form-control">
                      <option value="2014">2014</option>
                      <option value="2015">2015</option>
                      <option value="2016">2016</option>
                      <option value="2017">2017</option>
                      <option value="2018">2018</option>
                      <option value="2019">2019</option>
                      <option value="2020">2020</option>
                      <option value="2021">2021</option>
                      <option value="2022">2022</option>
                      <option value="2023">2023</option>
                      <option value="2024">2024</option>
                      <option value="2025">2025</option>
                      <option value="2026">2026</option>
                      <option value="2027">2027</option>
                      <option value="2028">2028</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <table class="moonray_order_form_totals">
                      <tbody>
                        <tr class="priceDisplay">
                          <td class="label">Purchase</td>
                          <td class="total"><span class="totalDueNow">$<span class="purchase_sum"></span> now </span></td>
                        </tr>
                        <tr style="display:none">
                          <td class="label">Shipping</td>
                          <td><select name="shipping_options">
                            </select></td>
                        </tr>
                        <tr class="priceDisplay">
                          <td class="label">Tax</td>
                          <td>$<span class="tax_sum">0</span></td>
                        </tr>
                        <tr class="priceDisplay" >
                          <td colspan="2"><hr /></td>
                        </tr>
                        <tr class="priceDisplay">
                          <td class="label">Order Total</td>
                          <td class="total"><span class="totalDueNow">$<span class="order_total"></span> now </span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12 pull-right">
                    <div class="row termsWrapper">
                      <input type="checkbox" class="checkbox terms required auto" name="terms" />
                      <label for="agreeToTerms" class="checkbox" name="agreeToTerms">I agree to these <a href="#" class="termsLink">terms and conditions</a></label>
                      <br>
                    </div>
                    <input type="submit" value="Finish Order" class="mr-submit" style="float:right; color:#FFF; font-weight:bold; background-color:#C00 !important; font-size:18px; height:40px; width:130px; border-radius:10px;">
                  </div>
                </div>
              </form>
            </div>
            
        </div>
      </div>
      <br/>
      <br />
      <div id="smlink"><a href="#" onclick="window.open('purchase-policies.html', 'purchasepolicies', 'width=500, height=800, resizable=0, scrollbars=yes');return false;">Purchase Policy</a></div>
      ©2013 OneTaste Inc., All Rights Reserved. Terms and conditions can be reviewed here. </div>
  </div>
</div>
</div>
<div class="container optin"> </div>
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
