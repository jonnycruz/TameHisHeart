<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
	
	/* Checks to see if there is an optin cookie, if so display: open sidebars */	
	if (isset($_COOKIE["optin"])){
	setcookie("paytoread", "", time()-3600);
	$action = "free-widget2";
	}
	/* If they have already read one article it locks them out: also passes article reading to paywall */
	elseif(isset($_COOKIE["paytoread"])){
    header('Location: /paywall.html?article=articlerfour');
	$action = "locked-widgetold";
	}
	/* Sets a cookie for thier first article */
	else {
	$value = "on article 1";
	setcookie("paytoread", $value, time() + (10 * 365 * 24 * 60 * 60));
	$action = "locked-widget4";
	}
	
?>

<?=View::load('_frame-start', array('title' => 'Why He Might Break Up With You'))?>
	
	<div id="wrapper">
	    
		<?=View::load('headernosp', array('article' => 'active'))?>

		<div class="container video clearfix">
			<div class="article-header col-md-12">
				<div class="pull-left avatar">
					<img src="/_img/joanna.jpg" alt="" />
				</div>
				<h2 class="head_black">The Real Reason Behind: “It’s Not You, It’s Me…”<sub>by Joanna Van Vleck</sub></h2>
			</div>
			<div class="col-md-8">
				
				<div class="article">
					<p class="excerpt"><img class="img-responsive" src="_img/FDP_romantic_nolove.jpg" alt="" /><p>Everyone has heard this before in a relationship. &ldquo;It&rsquo;s not you, it&rsquo;s me…&rdquo; the break-up line, still doesn&rsquo;t make you feel better about the break-up. <br /><br />
					  Maybe, because deep down you really do know it&rsquo;s you. You truly know that you did something (or didn&rsquo;t do something) to make this break-up happen. <br /><br />
					  That might hurt your feelings or be a hard truth to accept. But there&rsquo;s know saving your next relationship unless you can own up to this and start taking responsibility. <br /><br />
					  Why does a man fall out of love? Not because he chooses to do so! It&rsquo;s because his experiences with a woman make him feel like a relationship is no longer worth his time or emotional investment.
<h2>How You Could Affect Him Negatively</h2>
					  Have you ever been totally caught off guard by a man saying he wanted to break up? <br /><br />
					  Maybe it even made you angry because you felt like you did everything right in the relationship. Yet, the simple truth is that when a man is happy in a committed relationship he doesn&rsquo;t leave. <br /><br />
					  And maybe that statement angers you too. <br /><br />
					  Yet, now I want you to think back on some of those past relationships and consider if just maybe there were signs that your behavior and actions were slowly changing how your partner felt about you. <br /><br />
					  When did you first start to think that maybe he was thinking about leaving? <br /><br />
					  Don&rsquo;t get me wrong. I&rsquo;m not saying that men can&rsquo;t be jerks and make crappy decisions. There are some things in relationships that are completely out of our control. Still, there&rsquo;s a lesson here for you to take in…<br /><br />
					  You can&rsquo;t keep going through life making the same mistakes you&rsquo;ve always made in relationships or you&rsquo;ll never have the lasting, loving relationship you want.  Drop all concerns about what past partners did to hurt your relationship and focus on that which you can control and change, your behavior. <br />
					  If this scares you, maybe you&rsquo;re not ready for it… it&rsquo;s time to change who you are. <br /><br />
					  You can no longer let your ego defend your bad relationship skills. If you&rsquo;re here reading my articles then you came here for a reason… and deep down you know that reason is you want change. <br /><br />
					  You can only get a man who is ideal for you (inside and out) once you start living your ideal life. Fixing you first is going to make you more confident in dating and feel positive and secure in relationships.<strong> </strong><br /><br />
 <h2>The Tip Of The Iceberg</h2>
					  Love doesn&rsquo;t just happen. It takes work to create lasting, loving, deeply connected relationships. And a lot of that is work you must do on yourself. <br /><br />
					  Love is probably one of the most worthwhile things to have in your life, and anything worth having is worth working for. <br /><br />
					  The good news is you have the power to change and better your own behavior to become more successful at dating the right man and making relationships work. <br /><br />
					  If you constantly feel like you&rsquo;re not getting the results you want in dating and relationships and you&rsquo;re ready to start making a change, then you need to read my eBook, <a href="/index-b.php"><em>Tame His Heart and Turn Him ON,</em></a> and discover the exact problems that are holding you back. <br />
					  <br />
					  My eBook will help you regain control over your love life and make you STOP the patterns you&rsquo;ve been repeating your whole life that have led to relationship failure. Download and read a copy of my eBook: <a href="/index-b.php"><strong><em><u>Tame His Heart and Turn Him ON</u></em></strong></a> free trial. Try it risk free for 7 days, and learn to be the kind of woman who loves herself and allows herself to be loved. <strong><u></u></strong></p>
</div>

			</div>
			<div class="col-md-4 sidebar">
				
				<?=View::load($action)?>

			</div>
		</div>
	</div>

<?=View::load('_frame-end')?>
