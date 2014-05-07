<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
		
	if (isset($_COOKIE["optin"])){
	setcookie("paytoread", "", time()-3600);
	$action = "free-widget3";
	}
	elseif(isset($_COOKIE["paytoread"])){
	$action = "locked-widgetold";
	}
	else {
	$action = "locked-widget4";
	}
	
?>

<?=View::load('_frame-start', array('title' => 'How to Date Smarter'))?>

	<div id="wrapper">
	    
		<?=View::load('headernosp', array('dating' => 'active'))?>

	  <div class="container video clearfix">
		<div class="col-md-12">
				<h2  class="head_black">OneTaste: How To Date Smarter</h2>
		  </div>
		  <div class="col-md-8">
				
			  <ul class="list-group articles">
				  <li class="list-group-item clearfix">
					  <div class="col-sm-3"><img src="_img/FDP_romantic_2.jpg" style="width:100%" alt="" /></div>
					  <div class="details col-sm-9">
						  <h3><a href="/articleD1.html">After Your First Date You Never Hear From Him Again?</a></h3>
						  <p>You went home after your date and felt like you had a real connection.  Then he never calls! It may or may not be your fault. Here’s what might have happened...</p>
						  <a href="/articleD1.html">Read more <i class="fa fa-angle-double-right"></i></a>
					  </div>
				  </li>
		<!-- 			<li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="http://onetaste.us/wp-content/uploads/2013/05/turnedonwomen.jpg" style="width:100%" alt="" /></div>
						<div class="details col-sm-9">
							<h3><a href="/article.html">Will Sex Bring You Closer Or Push You Apart?</a></h3>
							<p>You notice a subtle change in him after you’ve had sex. Did it bring you closer together or push you further apart? Find out the mistake you might have made...</p>
							<a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
						</div>
					</li> -->
				  <li class="list-group-item clearfix">
					  <div class="col-sm-3"><img src="_img/FDP_romantic_7.jpg" style="width:100%" alt="" /></div>
					  <div class="details col-sm-9">
						  <h3><a href="/articleD2.html">Three Common Dating Mistakes</a></h3>
						  <p>Ever had a first-date disaster with a guy you thought you clicked with? Or have you ever had a few good dates then a horrible date that ruins it all? It could all be his fault, still there’s four date screw-ups you always want to avoid...</p>
						  <a href="/articleD2.html">Read more <i class="fa fa-angle-double-right"></i></a>
					  </div>
				  </li>
			<!-- 		<li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="http://onetaste.us/wp-content/uploads/2013/05/turnedonwomen.jpg" style="width:100%" alt="" /></div>
						<div class="details col-sm-9">
							<h3><a href="/article.html">Why is He Resisting a Relationship</a></h3>
							<p>You ‘re dating and not seeing other people. Still, he won’t say “I love you.” or ask you to be in a relationship with him. Here’s the secret to why men resist relationships...</p>
							<a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
						</div>
					</li>  -->
                    
                   	  <li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="_img/FDP_romantic_bar.jpg" style="width:100%" alt="" /></div>
						<div class="details col-sm-9">
							<h3><a href="/articleD3.html">Will Sex Bring You Closer Or Push You Apart?</a></h3>
							<p>You notice a subtle change in him after you’ve had sex. Did it bring you closer together or push you further apart? Find out the mistake you might have made…</p>
							<a href="/articleD3.html">Read more <i class="fa fa-angle-double-right"></i></a>
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
