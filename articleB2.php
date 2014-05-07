<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
	
	if (isset($_COOKIE["optin"])){
	setcookie("paytoread", "", time()-3600);
	$action = "free-widget5";
	}
	elseif(isset($_COOKIE["paytoread"])){
    header('Location: /paywall.html?article=articlebtwo');
	$action = "locked-widgetold";
	}
	else {
	$value = "on article 1";
	setcookie("paytoread", $value, time() + (10 * 365 * 24 * 60 * 60));
	$action = "locked-widget3";
	}
	
	

?>

<?=View::load('_frame-start', array('title' => 'My Man Broke Up With Me How Do I Get Him Back?'))?>
	
	<div id="wrapper">
	    
		<?=View::load('headernosp', array('article' => 'active'))?>

		<div class="container video clearfix">
			<div class="article-header col-md-12">
				<div class="pull-left avatar">
					<img src="/_img/joanna.jpg" alt="" />
				</div>
				<h2 class="head_black">The Real Reason Behind: "It's Not You, It's Me…"<sub>by Joanna Van Vleck</sub></h2>
			</div>
			<div class="col-md-8">
				
				<div class="article">
                	<p class="excerpt"><img class="img-responsive" src="_img/FDP_yelling_1.jpg" alt="" /><p>Everyone has heard this before in a relationship. "It's not you, it's me…" the break-up line, still doesn't make you feel better about the break-up. </p>
                    <p>Maybe, because deep down you really do know it's you. You truly know that you did something (or didn't do something) to make this break-up happen. </p>
                    <p>That might hurt your feelings or be a hard truth to accept. But there's know saving your next relationship unless you can own up to this and start taking responsibility. </p>
                  <p>Why does a man fall out of love? Not because he chooses to do so! It's because his experiences with a woman make him feel like a relationship is no longer worth his time or emotional investment. </p>
                    <h2>How You Could Affect Him Negatively </h2>
                    <p>Have you ever been totally caught off guard by a man saying he wanted to break up? </p>
                    <p>Maybe it even made you angry because you felt like you did everything right in the relationship. Yet, the simple truth is that when a man is happy in a committed relationship he doesn't leave. </p>
                    <p>And maybe that statement angers you too. </p>
                    <p>Yet, now I want you to think back on some of those past relationships and consider if just maybe there were signs that your behavior and actions were slowly changing how your partner felt about you. </p>
                    <p>When did you first start to think that maybe he was thinking about leaving? </p>
                    <p>Don't get me wrong. I'm not saying that men can't be jerks and make crappy decisions. There are some things in relationships that are completely out of our control. Still, there's a lesson here for you to take in…</p>
                    <p>You can't keep going through life making the same mistakes you've always made in relationships or you'll never have the lasting, loving relationship you want.  Drop all concerns about what past partners did to hurt your relationship and focus on that which you can control and change, your behavior. </p>
                    <p>If this scares you, maybe you're not ready for it… it's time to change who you are. </p>
                    <p>You can no longer let your ego defend your bad relationship skills. If you're here reading my articles then you came here for a reason… and deep down you know that reason is you want change. </p>
                  <p>You can only get a man who is ideal for you (inside and out) once you start living your ideal life. Fixing you first is going to make you more confident in dating and feel positive and secure in relationships. </p>
                    <h2>The Tip Of The Iceberg</h2>
                    <p>Love doesn't just happen. It takes work to create lasting, loving, deeply connected relationships. And a lot of that is work you must do on yourself. </p>
                    <p>Love is probably one of the most worthwhile things to have in your life, and anything worth having is worth working for. </p>
                  <p>The good news is you have the power to change and better your own behavior to become more successful at dating the right man and making relationships work. </p>
                    <p>If you constantly feel like you're not getting the results you want in dating and relationships and you're ready to start making a change, then you need to read my eBook, Relationships By Design, and discover the exact problems that are holding you back. 
                    My eBook will help you regain control over your love life and make you STOP the patterns you've been repeating your whole life that have led to relationship failure. Download and read a copy of my eBook: <a href="/index-b.php">TAME his HEART Risk Free Trial</a> free for seven days.   Try it risk free for 7 days, and learn to be the kind of woman who loves herself and allows herself to be loved.                  </p>
                  <p>&nbsp;</p>
                  
                                        
                                        
                                        
                    
                    
			  </div>

			</div>
			<div class="col-md-4 sidebar">
				
				<?=View::load($action)?>

			</div>
		</div>
	</div>

<?=View::load('_frame-end')?>
