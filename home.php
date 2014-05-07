<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
		
	if (isset($_COOKIE["optin"])){
	setcookie("paytoread", "", time()-3600);
	$action = "free-widget";
	}
	elseif(isset($_COOKIE["paytoread"])){
	$action = "locked-widgetold";
	    header('Location: /index.php');
	}
	else {
	$action = "locked-widget";
	    header('Location: /index.php');
	}
	
?>

<?=View::load('_frame-start', array('title' => 'Welcome to Joanna Van Vleck\'s Tame His Heart and Turn Him ON'))?>
	
	<div id="wrapper">
	    
		<?=View::load('headernosp', array('front' => 'active'))?>

		<div class="container video clearfix">
			<div class="col-md-12">
				<h2>Hidden Info, You May Be Missing, That Keeps You From Finding and Staying With Your Ideal Partner  </h2>
			</div>
			<div class="col-md-7">
				
				<!-- Articles -->

				<ul class="list-group articles">
					<li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="_img/wf8.jpg" style="width:100%" alt="" /></div>
						<div class="details col-sm-9">
							<h3>Attraction</h3>
							<p>Are your emotions ruining your communication skills with men?  A few small conversation mistakes may have made him grow distant. See inside his mind and how and why he reacts to your words and emotions...</p>
							<a href="attraction.html">Read more articles about Attraction<i class="fa fa-angle-double-right"></i></a>
						</div>
					</li>
					<li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="_img/wf2.jpg" style="width:100%" alt="" /></div>
						<div class="details col-sm-9">
							<h3>Commitment</h3>
							<p>Have some of the things you’ve done to attract him, actually pushed him away?  See simple strategies that intensify his need to be with you. Is it all just about attitude?</p>
							<a href="relationships.html">Read more articles about Commitment<i class="fa fa-angle-double-right"></i></a>
						</div>
					</li>
					<li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="_img/wf3.jpg" style="width:100%" alt="" /></div>
						<div class="details col-sm-9">
							<h3>Dating</h3>
							<p>You’ve less than a few moments to make a man choose whether he only wants to sleep with you or if you’re girlfriend material. This is how to make him want to be your boyfriend instantly...</p>
							<a href="dating-smarter.html">Read more articles about Dating<i class="fa fa-angle-double-right"></i></a>
						</div>
					</li>
					<li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="_img/wf4.jpg" style="width:100%" alt="" /></div>
						<div class="details col-sm-9">
							<h3>Meeting Men</h3>
							<p>Where are the good men who want stable, loving relationship? Did you have a good one, yet couldn’t win his heart. Never let that right one slip through you’re fingers again with these 5 key steps...</p>
							<a href="the-right-man.html">Read more articles about Meeting Men<i class="fa fa-angle-double-right"></i></a>
						</div>
					</li>
					<li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="_img/wf6.jpg" style="width:100%" alt="" /></div>
						<div class="details col-sm-9">
							<h3>Preventing Break-Ups</h3>
							<p>Where are the good men who want stable, loving relationship? Did you have a good one, yet couldn’t win his heart. Never let that right one slip through you’re fingers again with these 5 key steps...</p>
							<a href="stopping-breakups.html">Read more articles about Preventing Break-Ups<i class="fa fa-angle-double-right"></i></a>
						</div>
					</li>
				</ul>

			</div>
			<div class="col-md-5 sidebar">
				
				<?=View::load($action)?>

			</div>
		</div>
		<div class="container optin">
		</div>
	</div>
	
<?=View::load('_frame-end')?>
