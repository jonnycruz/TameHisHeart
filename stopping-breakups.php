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

<?=View::load('_frame-start', array('title' => 'Stop Break-Ups From Ever Starting'))?>
	
	<div id="wrapper">
	    
		<?=View::load('headernosp', array('breakups' => 'active'))?>

		<div class="container video clearfix">
			<div class="col-md-12">
				<h2 class="head_black">OneTaste: Stop Break-Ups From Ever Starting</h2>
			</div>
			<div class="col-md-8">
				
				<ul class="list-group articles">
			<!--	<li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="http://onetaste.us/wp-content/uploads/2013/05/turnedonwomen.jpg" style="width:100%" alt="" /></div>
						<div class="details col-sm-9">
							<h3><a href="/articleB1.html">One Never Fail Strategy To Get Him Back After A Break-Up</a></h3>
							<p>On the verge of break-up or even after he’s left, there is still something you can do to make him feel in love again. There’s still tine to relight the fire in your relationship, with more intimacy than before...</p>
							<a href="/articleB1.html">Read more <i class="fa fa-angle-double-right"></i></a>
						</div>
					</li>  -->	
					<li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="_img/FDP_serious_1.jpg" style="width:100%" alt="" /></div>
						<div class="details col-sm-9">
							<h3><a href="/articleB1.html">He Made You Fall In Love, Now He’s Not Interested</a></h3>
							<p>He asked you out. He made you fall for him. And after a short period of perfecting dating he loses interest. He doesn’t see you or call you as often as before. When you do see him he’s not as sweet as he used to be. This is why it happens and how to fix it...</p>
							<a href="/articleB1.html">Read more <i class="fa fa-angle-double-right"></i></a>
						</div>
					</li>
					</li>
					<li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="_img/FDP_serious_3.jpg" style="width:100%" alt="" /></div>
						<div class="details col-sm-9">
							<h3><a href="/articleR3.html"><strong>One Never Fail Strategy To Get Him Back After A Break-Up</strong></a></h3>
							<p>On the verge of break-up or even after he&rsquo;s left, there is still something you can do to make him feel in love again. There&rsquo;s still tine to relight the fire in your relationship, with more intimacy than before…</p>
							<a href="/articleR3.html">Read more <i class="fa fa-angle-double-right"></i></a>
					  </div>
					</li>
					</li>
					<li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="_img/FDP_happy_6.jpg" style="width:100%" alt="" /></div>
						<div class="details col-sm-9">
							<h3><a href="/articleB3.html">Why He’s Doubting Your Relationship?</a></h3>
							<p>Are you too in to him? Are you sending mixed signals that make him think you don’t want a relationship? Or have you missed his signals that he wants a relationship?</p>
							<a href="/articleB3.html">Read more <i class="fa fa-angle-double-right"></i></a>
						</div>
					</li>
				</ul>

			</div>
			<div class="col-md-4 sidebar">
				
				<?=View::load($action)?>


			</div>
		</div>
	</div>
	
<?=View::load('_frame-end')?>
