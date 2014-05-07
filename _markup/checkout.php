<?php

 clearstatcache();
header ("Expires: ".gmdate("D, d M Y H:i:s", time())." GMT");  
header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");  
header ("Cache-Control: no-cache, must-revalidate");  
header ("Pragma: no-cache");

	require_once(dirname(__FILE__).'/_includes/template.core.php');
	

// set the expiration date to one hour ago
setcookie("user", "", time()-3600);

	setcookie('firstname', $ga_name, time()-3600);
	setcookie('transaction_id', $ga_transaction_id, time()-3600);
	setcookie('storename', $ga_storename, time()-3600);
	setcookie('total', $ga_total, time()-3600);
	setcookie('tax', $ga_tax, time()-3600);
	setcookie('shipping', $ga_shipping, time()-3600);
	setcookie('city', $ga_city, time()-3600);
	setcookie('state', $ga_state, time()-3600);
	setcookie('country', $ga_country, time()-3600);
	setcookie('skucode', $ga_skucode, time()-3600);
	setcookie('product', $ga_product, time()-3600);
	setcookie('category', $ga_category, time()-3600);
	setcookie('unit_price', $ga_unit_price, time()-3600);
	setcookie('quantity', $ga_quantity, time()-3600);

function jquerycookie($email){
	
	$jqcookie = $_COOKIE["optin"];
	
}
	
?>

<?=View::load('_frame-start', array('title' => '7-Day Risk Free Trial | Tame His Heart and Turn Him ON eBook'))?>
	
	<div id="wrapper">
	    
		<?=View::load('headermenuonly', array('checkout' => 'active', 'trust' => 'hidden'))?>

		<div class="container video clearfix" >
			<img src="/_img/bar.png" class="img-responsive" alt="Checkout Now" style="margin:0px 0px 0px 0px 0px; display: block; margin-left: auto; margin-right: auto; width:60%" />
            <h3 style="margin:0px 0px 0px 0px; text-align:center;">Billing &amp; Shipping Information</h3>
	<div class="col-md-7" style="float:left; display:block; margin-left:auto; margin-right:auto;">
       <?=View::load('moon-ray-order')?>
			</div>
			<div class="col-md-5 sidebar pull-right" style="float:right">
				
				<div class="article small clearfix">
					<h5><label class="label label-primary">$0.00 Due Today</label><br/><br/><div class="number-badge pull-left">1</div>
				    "Tame his Heart" Downloadable eBook <small>$29.97 after FREE 7 day trial</small></h5>

					<p>The power to date your perfect man on your terms, is at your fingertips right now…</p>

					<ul>
						<li>The body language and attitude keys to attract any man</li>
						<li>Addict him to your personality </li>
						<li>5 common dating mistakes you must STOP to increase his desire</li>
						<li>Secretly convince him to ask you for a relationship </li>
						<li>Tips and philosophies already proven to help hundreds of women</li>
					</ul>

					<p>100% GUARANTEE: return your book within 7-days just by replying to your confirmation email with “I want to cancel” and you won't be charged.  </p>

          <div id="subscription">

					<h5><div class="number-badge pull-left">2</div>Discussions with OneTaste’s Dating Experts <small>No initial charge then $19.97 per month</small></h5>

					<p>A flow of dating and relationship advice from expert authors, life-coaches, spiritual guides and more...</p>

					<ul>
						<li>Gain insider dating-edges over other women</li>
						<li>Know exactly how to make a man commit </li>
						<li>Boost your relationship confidence</li>
						<li>Preventing break-ups </li>
						<li>Mind-expanding insights to improve your love life </li>
						<li>And with new topics every month, there's much, much more… </li>
					</ul>

					<h5><div class="number-badge pull-left">3</div>Your first Bonus Discussions with OneTaste’s Dating Experts <small>Yours To Keep - FREE!</small></h5>
          </div>

				</div>
			</div>

		
			
		</div>
		<div class="container optin">
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
