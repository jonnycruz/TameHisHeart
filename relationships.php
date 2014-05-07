<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
	
	if (isset($_COOKIE["optin"])){
	setcookie("paytoread", "", time()-3600);
	$action = "free-widget5";
	}
	elseif(isset($_COOKIE["paytoread"])){
	$action = "locked-widgetold";
	}
	else {
	$action = "locked-widget2";
	}
?>

<?=View::load('_frame-start', array('title' => 'How to Convince a Man To Commit'))?>
	
	<div id="wrapper">
	    
		<?=View::load('headernosp', array('relationships' => 'active'))?>

		<div class="container video clearfix">
			<div class="col-md-12">
				<h2 class="head_black">OneTaste: How To Make Him Want to Commit</h2>
			</div>
			<div class="col-md-8">
				
				<ul class="list-group articles">
					<li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="_img/FDP_romantic_8.jpg" style="width:100%" alt="" /></div>
						<div class="details col-sm-9">
							<h3><a href="/articleR2.html">What He Wants In A Long-term Girlfriend</a></h3>
							<p>It’s a myth that a man is either attracted to you or not. Still there are several subconscious things you do that may turn him off. Know what they are so you can change them...</p>
							<a href="/articleR2.html">Read more <i class="fa fa-angle-double-right"></i></a>
						</div>
					
			<!--		<li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="http://onetaste.us/wp-content/uploads/2013/05/turnedonwomen.jpg" style="width:100%" alt="" /></div>
						<div class="details col-sm-9">
							<h3><a href="/article.html">Why He Won’t Say "I Love You"</a></h3>
							<p>He loves you, but he’s not in love with you. Something makes him feel like he’s the wrong person for you. When he says, “It’s not you, it’s me” here’s what he really means...</p>
							<a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
						</div>
					</li> -->
                  <li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="_img/FDP_romantic_nolove.jpg" style="width:100%" alt="" /></div>
						<div class="details col-sm-9">
							<h3><a href="/articleR4.html"><strong>Why He Won&rsquo;t Say &ldquo;I Love You&rdquo;</strong></a></h3>
							<p>He loves you, but he&rsquo;s not in love with you. Something makes him feel like he&rsquo;s the wrong person for you. When he says, &ldquo;It&rsquo;s not you, it&rsquo;s me&rdquo; here&rsquo;s what he really means… </p>
							<a href="/articleR4.html">Read more <i class="fa fa-angle-double-right"></i></a>
						</div>
                        
				  <li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="_img/FDP_romantic_3.jpg" style="width:100%" alt="" /></div>
						<div class="details col-sm-9">
							<h3><a href="/articleR1.html">Are Great Couples Just Lucky?</a></h3>
							<p>Everyone has a few friends who are great couples. What do those people have that lets them easily get along in a relationship? Are some couples just lucky or do you make your own luck? </p>
							<a href="/articleR1.html">Read more <i class="fa fa-angle-double-right"></i></a>
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
