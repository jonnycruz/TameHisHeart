<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
	if (isset($_COOKIE["optin"])){
	setcookie("paytoread", "", time()-3600);
	$action = "free-widget";
	}
	elseif(isset($_COOKIE["paytoread"])){
	$action = "locked-widgetold";
	}
	else {
	$action = "locked-widget3";
	}
?>

<?=View::load('_frame-start', array('title' => 'Meet the Man Right for You'))?>
	
	<div id="wrapper">
	   	
		<?=View::load('headernosp', array('man' => 'active'))?>

		<div class="container video clearfix">
			<div class="col-md-12">
				<h2  class="head_black">OneTaste: Know the Right Man From the Wrong Man</h2>
			</div>
			<div class="col-md-8">
				
				<ul class="list-group articles">
					<li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="_img/FDP_serious_2.jpg" style="width:100%" alt="" /></div>
						<div class="details col-sm-9">
							<h3><a href="/articleM1.html">Two Reasons Why He'll Run From Intimacy</a></h3>
							<p>Does it seem like once a man has decided that you’re not girlfriend material there’s no way to change his mind? And the harder you try the more you just seem to push him away by showing him your feelings. Here’s how to make an intimate connection with him before he closes the girlfriend window forever…</p>
							<a href="/articleM1.html">Read more <i class="fa fa-angle-double-right"></i></a>
						</div>
					</li>
		<!--			<li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="http://onetaste.us/wp-content/uploads/2013/05/turnedonwomen.jpg" style="width:100%" alt="" /></div>
						<div class="details col-sm-9">
							<h3><a href="/article.html">Why He Might Flirt With You But Never Date You </a></h3>
							<p>One day he flirts with you the next day he ignores you. He seems to want to be more than friends yet he won’t make a move. Do this to show him you’re interested, yet not desperate for him…</p>
							<a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
						</div>
					</li>
					<li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="http://onetaste.us/wp-content/uploads/2013/05/turnedonwomen.jpg" style="width:100%" alt="" /></div>
						<div class="details col-sm-9">
							<h3><a href="/article.html">Secretly Guide Him Into A Relationship</a></h3>
							<p>Even without telling him, your thoughts can have effect the attitude you project and push him away from a commitment. Use these steps to secretly guiding him into a commitment without ever forcing the issue…</p>
							<a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
						</div>
					</li>     -->
					<li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="_img/FDP_romantic_9.jpg" style="width:100%" alt="" /></div>
						<div class="details col-sm-9">
							<h3><a href="/articleM2.html">How You Might Accidentally Push Away Your Perfect Man</a></h3>
							<p>Were you in a caring, loving relationship and feel like you might have done something that ruined it? Look inside yourself know and see why it is you may be subconsciously making the good ones leave you...</p>
							<a href="/articleM2.html">Read more <i class="fa fa-angle-double-right"></i></a>
						</div>
					</li>
                    <li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="_img/FDP_serious_flirt.jpg" style="width:100%" alt="" /></div>
					  <div class="details col-sm-9">
						<h3><a href="/articleM3.html">Why He Might Flirt With You But Never Date You</a></h3>
						  <p>One day he flirts with you the next day he ignores you. He seems to want to be more than friends yet he won&rsquo;t make a move. Do this to show him you&rsquo;re interested, yet not desperate for him…</p>
						  <a href="/articleM3.html">Read more <i class="fa fa-angle-double-right"></i></a>
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
