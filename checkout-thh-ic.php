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
	<div class="col-md-7"><br /><br />
       <?=View::load('moon-ray-order')?>
			</div>
			<div class="col-md-5 sidebar pull-right" style="float:right">
				
				<div class="article small clearfix">
					<h5><label class="label label-primary">$0.00 Due Today</label><br/><br/><div class="number-badge pull-left">1</div>
					OneTaste "Tame his Heart" Downloadable eBook <small>$29.97 after FREE 7 day trial</small></h5>

					<p>The power to date your perfect man on your terms, is at your fingertips right now…</p>

					<ul>
						<li>The body language and attitude keys to attract any man</li>
						<li>Addict him to your personality </li>
						<li>5 common dating mistakes you must STOP to increase his desire</li>
						<li>Secretly convince him to ask you for a relationship </li>
						<li>Tips and philosophies already proven to help hundreds of women. </li>
					</ul>

					<p>100% GUARANTEE: return your book within 7-days just by replying to your confirmation email with “I want to cancel” and you won't be charged.  </p>

          <div id="subscription">

					<h5><div class="number-badge pull-left">2</div>Discussions with OneTaste’s Dating Experts <small>No initial charge then $19.97 per month</small></h5>

					<p>A flow of dating and relationship advice from expert authors, life-coaches, spiritual guides and more...</p>

					<ul>
						<li>Gain insider dating-edges over other women, </li>
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
	
<?=View::load('_frame-end')?>
