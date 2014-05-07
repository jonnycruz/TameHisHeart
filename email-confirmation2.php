<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
?>
<style type="text/css">
  #botr_0txg821F_abT4xa2u_div {
    padding-top: 22px;
    padding-left: 17px;
  }
</style>
<?=View::load('_frame-start', array('title' => 'Thank You For Becoming a Member'))?>
	
	<div id="wrapper">
	    
		<?=View::load('header', array('optin' => 'active'))?>

	  <div class="container video clearfix">
			<div class="col-md-12">
				<h2>See what men <em>REALLY</em> find attractive</h2>
			</div>
			<div class="col-md-7">
					
                        
                        <div style="float: left; margin-top:60px; margin-bottom:20px; margin-right: 60px; border: 5px solid grey; width:600px; padding-right:50px;"><script type="text/javascript" src="http://content.bitsontherun.com/players/0txg821F-abT4xa2u.js"></script></div>
					
	
				<?=View::load('optin-widget')?>

			</div>
			<div class="col-md-5 sidebar" style="float:left; width:300px; padding-left:50px;">
				<div class="widget hidden-xs clearfix">
					<h2>Tame His Heart and Turn Him ON FREE Membership</h2>
					<h4 style="margin-bottom:24px;margin-top:38px">As a member you will learn...</h4>
					<ul class="feature">
						<li>The one thing most women don’t know about talking to a man</li>
						<li>3 reasons why he’ll run from intimacy</li>
						<li>How to never end-up as just his late night booty-call girl</li>
						<li>The 5 key elements all men find universally attractive</li>
						<li>Why he might flirt with you and still never date you</li>
						<li>The real reason behind the break-up phrase: "It’s not you, it’s me..."</li>
					</ul>
					<div class="arrow">
						<i><img src="_img/redarrow.png" alt="" /></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?=View::load('_frame-end')?>
