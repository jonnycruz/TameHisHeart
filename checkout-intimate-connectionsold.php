<?php


	require_once(dirname(__FILE__).'/_includes/template.core.php');
?>

<?=View::load('_frame-start', array('title' => 'OneTaste: 7-Day Risk Free Trial'))?>
	
	<div id="wrapper">
	    
		<?=View::load('header', array('checkout' => 'active', 'trust' => 'hidden'))?>

		<div class="container video clearfix">
			<img src="/_img/bar.png" class="img-responsive" alt="Checkout Now" />
			<div class="col-md-12">
				<h2>Billing &amp; Shipping Information</h2>
			</div>

			<div class="col-md-5 sidebar pull-right" style="float:right; widht:80%">
				
				<div class="article small clearfix">
				   <h5><label class="label label-primary">$0.00 Due Today</label>
                  
                  <h5 style="margin-bottom:0px;">One Taste &quot;The Keys to a Lasting Intimate Connection&quot;</h5>
			     <p style="margin-top:0px;">199.85 after FREE 30 day trial</p>

					<p>2+ hours of powerful video tips, strategies and exercises to deepen your relationship with a man: </p>

					<ul style="width:450px;">
					  <li>3 reasons a man will drift away in a relationship</li>
						<li>Get him to connect with you on a deep level</li>
						<li>How to know if he'll stick around after sex</li>
						<li>Secretly convince him to ask you for a relationship </li>
						<li>Tips and philosophies already proven to help hundreds of women. <br />
						  <br />
						</li>
                        <strong>100% GUARANTEE:</strong> return your videos within 30-days by replying to your confirmation email with &ldquo;I want to cancel&rdquo; and you won't be charged.
				  </ul>

				   
				</div>
			</div>

			<div class="col-md-7">
       <?=View::load('moon-ray-order')?>
			</div>
			
		</div>
		<div class="container optin">
		</div>
	</div>
	
<?=View::load('_frame-end')?>
