<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
	
		
	if (isset($_COOKIE["optin"])){
	setcookie("paytoread", "", time()-3600);
	$action = "free-widget3";
	}
	elseif(isset($_COOKIE["paytoread"])){
    header('Location: /paywall.html?article=articlebthree');
	$action = "locked-widgetold";
	}
	else {
	$value = "on article 1";
	setcookie("paytoread", $value, time() + (10 * 365 * 24 * 60 * 60));
	$action = "locked-widget4";
	}
	
?>

<?=View::load('_frame-start', array('title' => 'My Man Is Distant.. What do I do'))?>
	
	<div id="wrapper">
	    
		<?=View::load('headernosp', array('article' => 'active'))?>

		<div class="container video clearfix">
			<div class="article-header col-md-12">
				<div class="pull-left avatar">
					<img src="/_img/joanna.jpg" alt="" />
				</div>
				<h2 class="head_black">It's Normal For Him To Have Doubts, But Don't React Like This…<sub>by Joanna Van Vleck</sub></h2>
			</div>
			<div class="col-md-8">
				
				<div class="article">
                	<p class="excerpt"><img class="img-responsive" src="_img/FDP_happy_6.jpg" alt="" /><p>Both men and women have doubts every once in a while in relationships, even in healthy, loving relationships.</p>
                    <p>If you discover that your partner has doubts about your relationship, this doesn't mean that he wants out. In fact, it can be a healthy sign that he is becoming more committed to you.  </p>
                    <h2>Why Men Get Relationship Doubts</h2>
                    <p>Men and women think differently about relationships. Women are constantly planning, dreaming and thinking of the long-term in a relationship. A woman might often wonder, "What's the next step for us?"</p>
                    <p>Men in the beginning and middle of a long-term relationship are going through a much different mental process. They're letting go of their bachelorhood and slowly accepting that they are now with one person forever. </p>
                    <p>The female mind is geared to progress into a relationship. The male mind is not equipped to handle this change quickly. It may seem immature to you, yet for a man it can be a sad process for him to go through as it reflects back to him the loss of his youth and his movement into adulthood. </p>
                    <p>That said, over time as men become more comfortable with their partner, they enjoy being in a relationship more and more and then can't imagine going backwards. Men love comfort! </p>
                    <p>So, what is really going on when a man has a doubt and expresses it you about your relationships? </p>
                    <p>What's really going on is that you're getting a look at a man's growing pains in the relationship. He has doubts because he feels himself growing closer to you and further losing his youth and his bachelorhood. </p>
                    <p>These kind of doubts are actually a sign of a healthy and growing relationship. Where most women go wrong is how they react to these doubts…</p>
                  
                    <h2>How You Shouldn't Respond to His Relationship Doubts</h2>
                    <p>When a man expresses his relationship doubts, there's a way most women mistakenly respond that kills the connection and leads to breaking up. </p>
                    <p>Recently or in the past have you responded to a man's relationship doubts with panic, anger, withdrawing or other hurtful feelings? </p>
                    <p>Or did you listen and respond coolly and confidently? </p>
                    <p>When a man expresses his relationship doubts, most women will try to talk him out of them. And these discussions usually lead to arguments. A woman might point out reasons why they are good together or talk about all of her future plans for their relationship, like moving in together, marriage, kids, etc. </p>
                    <p>This response is doomed to backfire! </p>
                    <p>It's natural for the male mind to go through stages of doubt. What he really needs is for you to listen and understand those doubts. Added pressure or anger will only confirm his doubts for him and push him away from you. </p>
                    <p>On page X of my eBook, Relationships By Design, I dive into further detail about other doubts a man might have in a relationship and how you should always respond to prevent break-ups. </p>
                    <p>I'll even tell you exactly how to flip a man's "relationship resistant behavior" so that he subtly slides deeper into a relationship with you, sometimes without even knowing it. </p>
                    <p>Download your copy here: <a href="/index-b.php">TAME his HEART Risk Free Trial</a> free for seven days.  Try it risk free for seven days. I've helped so many with my eBook that I know it can mean the difference for you between letting his doubts tear you apart or helping you both find a stronger, renewed passion for each other. </p>
                  
                                        
                                        
                                        
                    
                    
			  </div>

			</div>
			<div class="col-md-4 sidebar">
				
				<?=View::load($action)?>
			</div>
		</div>
	</div>

<?=View::load('_frame-end')?>
