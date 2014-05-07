<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
		
	if (isset($_COOKIE["optin"])){
	setcookie("paytoread", "", time()-3600);
	$action = "free-widget2";
	}
	elseif(isset($_COOKIE["paytoread"])){
	$action = "locked-widgetold";
	}
	else {
	$action = "locked-widget5";
	}
	
?>

<?=View::load('_frame-start', array('title' => 'How to Attract Any Man'))?>
	
	<div id="wrapper">
	    
		<?=View::load('headernosp', array('attraction' => 'active'))?>

		<div class="container video clearfix">
			<div class="col-md-12">
				<h2 class="head_black">OneTaste: Keys to Owning His Interest</h2>
			</div>
			<div class="col-md-8">
				
				<!-- Articles -->

				<ul class="list-group articles">
					<li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="_img/FDP_yelling_2.jpg" style="width:100%" alt="" /></div>
						<div class="details col-sm-9">
							<h3><a href="/articleA1.html?article=articleaone">The One Thing That Shuts Down a Man's Communication</a></h3>
							<p>Are your emotions ruining your communication skills with men?  A few small conversation mistakes may have made him grow distant. See inside his mind and how and why he reacts to your words and emotions...</p>
							<a href="/articleA1.html?article=articleaone">Read more <i class="fa fa-angle-double-right"></i></a>
						</div>
					</li>
					<li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="_img/FDP_romantic_5.jpg" style="width:100%" alt="" /></div>
						<div class="details col-sm-9">
							<h3><a href="/articleA2.html?article=articleatwo">Generate Attractive Tension with Attitude </a></h3>
							<p>Have some of the things you’ve done to attract him, actually pushed him away?  See simple strategies that intensify his need to be with you. Is it all just about attitude?</p>
							<a href="/articleA2.html?article=articleatwo">Read more <i class="fa fa-angle-double-right"></i></a>
						</div>
					</li>
					<li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="_img/FDP_romantic_4.jpg" style="width:100%" alt="" /></div>
						<div class="details col-sm-9">
							<h3><a href="/articleA3.html?article=articleathree">Will He Want You For More Than Sex?</a></h3>
							<p>You’ve less than a few moments to make a man choose whether he only wants to sleep with you or if you’re girlfriend material. This is how to make him want to be your boyfriend instantly...</p>
							<a href="/articleA3.html?article=articleathree">Read more <i class="fa fa-angle-double-right"></i></a>
						</div>
					</li>
			<!--		<li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="http://onetaste.us/wp-content/uploads/2013/05/turnedonwomen.jpg" style="width:100%" alt="" /></div>
						<div class="details col-sm-9">
							<h3><a href="/article.html">5 Must Have Qualities That Win Any Man’s Heart</a></h3>
							<p>Where are the good men who want stable, loving relationship? Did you have a good one, yet couldn’t win his heart. Never let that right one slip through you’re fingers again with these 5 key steps...</p>
							<a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
						</div>
					</li>   -->  
				</ul>

			</div>
			<div class="col-md-4 sidebar">
				
		

				<?=View::load($action)?>

			</div>
		</div>
		<div class="container optin">
		</div>
	</div>
	
<?=View::load('_frame-end')?>
