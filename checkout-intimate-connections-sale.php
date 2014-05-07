<?php


	require_once(dirname(__FILE__).'/_includes/template.core.php');
?>

<?=View::load('_frame-start', array('title' => '30-Day Risk Free Trial | SALE The Keys to an Intimate Connection'))?>
	
	<div id="wrapper">
	    
		<?=View::load('headermenuonly', array('checkout' => 'active', 'trust' => 'hidden'))?>

		<div class="container video clearfix">
			<img src="/_img/bar.png" class="img-responsive" alt="Checkout Now" style="margin:0px 0px 0px 0px 0px; display: block; margin-left: auto; margin-right: auto; width:60%;" />
            <h3 style="margin:0px 0px 0px 0px; text-align:center;">Billing &amp; Shipping Information</h3>
         <div class="col-md-7" style="float:left; display:block; margin-left:auto; margin-right:auto;">
       <?=View::load('moon-ray-ordericsale')?>
			</div>

			<div class="col-md-5 sidebar pull-right" style="float:right">
				
				<div class="article small clearfix">
				  <h5><label class="label label-primary">$0.00 Due Today</label>
				  <h5 style="margin-bottom:0px;">One Taste "The Keys to a Lasting Intimate Connection"</h5>
			     <p style="margin-top:0px;">30% OFF $199.85 = <strong>$139.85</strong> / 5 easy payments of $28.00   after FREE 30 day trial</p>
                 <p><img src="/_img/intimate-a.png" style="float:left; padding-right:20px;" height="100" alt="Intimate Connections" /></p>

					<p>5+ hours of powerful video tips, strategies and exercises to deepen your relationship with a man: </p>
<p><br />
					<ul>
						<li>3 reasons a man will drift away in a relationship</li>
						<li>Get him to connect with you on a deep level</li>
						<li>How to know if he'll stick around after sex</li>
						<li>Secretly convince him to ask you for a relationship </li>
						<li>Tips and philosophies already proven to help hundreds of women<br />
						  <br /></li>
						
                         <strong>100% GUARANTEE:</strong>  cancel within 30-days just by replying to your confirmation email with “I want to cancel” and you won't be charged.
					</ul></p>
				   
				</div>
			</div>

			
		</div>
		<div class="container optin">
		</div>
	</div>
	
<?=View::load('_frame-end')?>
