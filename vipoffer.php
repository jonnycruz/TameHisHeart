<?php	
require_once(dirname(__FILE__).'/_includes/template.core.php');	
	
	// Sets cookie data for Google ECommerce tracking
	 function cookievalues($input){  
	 
	 $email = $_GET["email"];
	 $ga_name = $_GET["firstname"];
	 $ga_name = $_GET["lastname"];
	$ga_transaction_id = $_GET["transaction_id"];
    $ga_storename = "TameHisHeart";
	$ga_total = "29.97";
	$ga_tax = "0.00";
    $ga_shipping = "0.00";
	$ga_city = $_GET["billing_city"];
	$ga_state = $_GET["billing_state"];
	$ga_country = $_GET["country"];
	$ga_skucode = "THH-EBOOK";
	$ga_product = "1. Tame His Heart eBook";
	$ga_category = "none";
	$ga_unit_price = "29.97";
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

	
	
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

	<!-- Page Data -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- no cache headers -->
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="no-cache">
<meta http-equiv="Expires" content="-1">
<meta http-equiv="Cache-Control" content="no-cache">
<!-- end no cache headers -->
	<title>Free 30 Day Trial - The Keys to a Lasting Intimate Connection</title>
	
	<!-- Page CSS -->
	<link type="text/css" media="screen" rel="stylesheet" href="/_css/main.css" />
	<link type="text/css" media="screen" rel="stylesheet" href="/_js/_bootstrap/css/bootstrap.css" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet" />

	<!-- Page JS -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.js" type="text/javascript"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js" type="text/javascript"></script>
	<script src="/_js/_bootstrap/js/bootstrap.js" type="text/javascript"></script>
	<script src="/_js/_lib/dataobject.core.js" type="text/javascript"></script>
	
  <script type="text/javascript" src="//orgasmhowto.com/wp-content/uploads/2013/11/jquery.popup-min.js"></script>
	
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-47458202-1']);
_gaq.push(['_trackPageview', location.pathname + location.search + location.hash]);

(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
  
</script>
<link rel="shortcut icon" href="_img/favicon-heart.ico" type="image/x-icon" />
<link type="text/css" rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/smoothness/jquery-ui.css" />

<style>
  #struct14_bg {background-color: black;}
  #struct14 {
    min-height: 300px;
    max-height: 100%;
    overflow-y: scroll; 
    border: 2px solid white; 
    background-color: #f9f9f9;}
  #struct14 .img {margin: 15px 0; text-align: center;}
  #struct14 .content {margin: 15px; overflow: hidden;}
  #struct14 .content .left {float: left;}
  #struct14 .content .right {float: right;}
  #struct14 .row {margin: 0px;}
  #struct14 .right br {
    display: none;
  }
  #struct14 fieldset {
    margin-bottom: 0;
  }
  #struct14 .row label[for=differentShippingAddress] {
    display: inline-block;
    clear: none;
  }
  #struct14 .row input {
    margin-bottom: 0;
  }
  #struct14 label.checkbox {
    margin: 0;
  }
  .credit_cards, .moonray_order_form_totals {
    display: none;
  }
  #struct14 .moonray_forms input[type="submit"].mr-submit {
    background-image: inherit;
    background-color: rgb(0, 172, 237);
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
    border-image-outset: 0px;
    border-image-repeat: stretch;
    border-image-slice: 100%;
    border-image-source: none;
    border-image-width: 1;
    border:1px solid rgb(60, 139, 207);
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    display: inline-block;
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    font-size: 21px;
    font-weight: normal;
    height: 44px;
    line-height: 30px;
    list-style-type: disc;
    margin-bottom: 0px;
    padding-bottom: 6px;
    padding-left: 12px;
    padding-right: 12px;
    padding-top: 6px;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    vertical-align: middle;
  }

  #struct14 .moonray_forms input[type="submit"].mr-submit:hover {
    color: #ffffff;
    background-color: #438BCA;
    border-color: #336CA0;
  }

  body.custom .moonray_forms label {
    font-size:13px;
    line-height:100%;
  }

  body.custom table.moonray_order_form_totals {
    margin:0!important;
  }
  ul.benefits li {
    font-weight: inherit;
    font-size: 16px;
  }
  <style>
  .hr { height:0; border-top:8px solid black; }
</style>
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
<body onload="cookievalues($input)"><script src='//www1.moon-ray.com/v2.4/analytics/tracking.js' type='text/javascript'></script>
<script>
_mri = "12106_3_2";
mrtracking();
</script>

	<div id="overlay">
	</div>
	
	<div id="wrapper">
	    
		<?=View::load('headermenuonly', array('article' => 'active'))?>

		<div class="container video clearfix" style=" width:100%; margin-left:auto; margin-right:auto;">
        
        	
		  <div class="col-md-8" style="display:block; width:80%; margin-top:auto; margin-right:auto;">
          <img src="/_img/barupsell.png" class="img-responsive" alt="Checkout Now" style="margin-left:auto; margin-right:auto; display:block;"/>
				
		    <div class="article" style="width:100%; margin-left:auto; margin-right:auto;">

<h3>Order Summary</h3>

<hr style="height:3px;border:none;color:#333;background-color:#333;" />
<ul>
	<li style="font-size:18px"> Tame His Heart and Turn Him ON Downloadable eBook - $29.97 after FREE 7 Day Trial
   </li><br  />
  
   </ul>
<hr style="height:3px;border:none;color:#333;background-color:#333;" />


    <div class="details" >
      <h3 style="color:#c02b5e; text-align:center; font-weight:bold">Get the secret to make a man ADDICTED to spending more time with you and BEG you for a commitment </h3>
       <script type="text/javascript" src="https://content.jwplatform.com/players/pYZlXFRx-abT4xa2u.js"></script>
        <br /><br />
      <img src="/_img/intimate-a.png" style="float: left; margin-right: 10px; height: 300px; padding-right:10px;" />
      <p style="font-size: 16px; font-weight:normal; padding-left:10px;">
         This step-by-step program is packed with 2+ hours of helpful videos that you can watch online INSTANTLY on your computer or smartphone.<br />
         <br />
        If you're serious about learning how to create and deepen a comitted relationship with a man, then this program is for you.<br /><br />
        Plus, I invite you to try <em>The Keys to a Lasting Intimate Connection</em> RISK FREE for 30 days. If for any reason, during the first 30 days, you're not happy with this program, you can have a full refund, no questions asked.<br /><br />
          <span style="font-size: 16px; text-align:center">
          <b>2+ hours of powerful video: </b>
          tools, techniques and exercises
          </span><br /><br /><br /><br />
          <span style="font-size: 16px; text-align:center; color:#c02b5e;">
          <b>5 easy payments of $39.97 </b></span>
<div class="moonray_forms moonray_upsell_form">
	<form method="post" action="https://forms.moon-ray.com/v2.4/form_processor.php?" id="moonray_forms_306">
		<input type="hidden" name="product" value="7"/>
		<input type="hidden" name="uid" value="p2c12106f33" />
		
		<input type="hidden" name="contact_id" id="contact_id_306" value="" />
		<input type="hidden" id="afft_306" name="afft_" value="" />
		<input type="hidden" id="aff_306" name="aff_" value="" />
		<input type="hidden" id="sess_306" name="sess_" value="" />
		<input type="hidden" id="ref_306" name="ref_" value="" />
		<input type="hidden" id="own_306" name="own_" value="" />
		<input type="hidden" id="oprid_306" name="oprid" value="" />
		
		<input type="submit" value="Yes, Add To My Order!"  onclick="this.value='Processing......';" name="upsell_form_action_yes" id="upsell_form_action_yes">
		<input type="submit" value="No, Thank You."  onclick="this.value='Processing......';" name="upsell_form_action_no" id="upsell_form_action_no">
	</form>
	
	<link rel="stylesheet" type="text/css" href="https://forms.moon-ray.com/v2.4/include/minify/?g=moonrayCSS">
	<script type="text/javascript" src="https://forms.moon-ray.com/v2.4/include/minify/?g=moonrayJS"></script>
	<script type="text/javascript" src="https://forms.moon-ray.com/v2.4/include/scripts/moonrayJS/smartform_loader.js?rand=306"></script>
</div>
      </p>
    
    </div>


			  </div>
		  </div>
		  <div class="col-md-4 sidebar"> </div>
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
