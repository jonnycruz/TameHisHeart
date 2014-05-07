<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
	
	/* Checks to see if there is an optin cookie, if so display open sidebars */		
	if (isset($_COOKIE["optin"])){
	setcookie("paytoread", "", time()-3600);
	$action = "free-widget2";
	}
	/* If they have already read one article it locks them out: also passes article reading to paywall */
	elseif(isset($_COOKIE["paytoread"])){
    header('Location: /paywall.html?article=articledthree');
	$action = "locked-widgetold";
	}
	else {
		/* Sets a cookie for thier first article */
	$value = "on article 1";
	setcookie("paytoread", $value, time() + (10 * 365 * 24 * 60 * 60));
	$action = "locked-widget2";
	}
		
	
?>

<?=View::load('_frame-start', array('title' => 'STOP: Do This Before You Sleep With Him'))?>
	
	<div id="wrapper">
	    
		<?=View::load('headernosp', array('article' => 'active'))?>

		<div class="container video clearfix">
			<div class="article-header col-md-12">
				<div class="pull-left avatar">
					<img src="/_img/joanna.jpg" alt="" />
				</div>
				<h2 class="head_black">STOP: Find This Out About Him Before You Have Sex<sub>by Joanna Van Vleck</sub></h2>
			</div>
			<div class="col-md-8">
				
				<div class="article">
					<p class="excerpt"><img class="img-responsive" src="_img/FDP_romantic_bar.jpg" alt="" /><p>You may be confused about when you should have sex with a man after you start dating because there is a real concern about if sex is all a man wants from you or if he wants something deeper. <br />
					  <br />
					  If you have sex before you establish a connection there&rsquo;s a good chance that he won&rsquo;t develop a relationship with you. If you make him wait to long for sex there&rsquo;s a chance he&rsquo;ll get bored and stop pursuing you. <br />
					  <br />
					  Suggestions on how long you should wait to have sex vary from &ldquo;whenever you want&rdquo; to &ldquo;the fifth date.&rdquo; <br />
					  So what&rsquo;s the right answer?
					
  <h2>Will He See You After Sex</h2>
					  Well, there really is no exact time limit that you should wait to have sex. Every relationship is different in that regard.<br />
					  The real indicator if a man just wants you for sex (and will bail after he gets it) is whether the two of you have developed a deep connection. <br />
					  Most women make the mistake of believing that having sex with a man will form a deeper connection with him. And women make this mistake because when we have sex our emotions do get more serious for man.<br />
					  <br />
					  In fact, studies have shown that there is an actual biological response in the female body to release more oxytocin (the relationship chemical) after sex with a man.<br />
					  Unfortunately, men&rsquo;s bodies and minds don&rsquo;t work the same as our own! <br />
					  <br />
					  Just because a man has sex with you, it doesn&rsquo;t mean he wants a relationship with you. And if you have sex with a man before you establish a deeper connection, you stand a greater risk of him leaving. <br />
					  <br />
					  Having sex with a man or just your physical attractiveness is NOT how you build a deep connection with a man.
					<h2>Confidently Tell Him Your Feelings</h2>
					  Most women never admit to a man what they really want from him before they have sex with him.  Most women just give in to his needs without ever expressing their own because they wrongly assume sex will prove to him that you&rsquo;re right for each other. <br />
					  <br />
					  Before you sleep with a man again I want you to try saying something like, &ldquo;I only sleep with a man who has a deep connection with me and wants a commitment.&rdquo;<br />
					  If that doesn&rsquo;t seem like something you can do then you&rsquo;re part of the problem that allows men to take advantage of you emotionally. <br />
					  <br />
					  Remember that confidence is universally attractive to all men. Telling him what you expect from him shouldn&rsquo;t make him run (and if it does then he wasn&rsquo;t worth your time, anyways). <br />
					  <br />
					  If you&rsquo;re caught in a cycle of men using you just for sex and not for deeper relationships, you&rsquo;ve probably been making this mistake. <br />
					  It&rsquo;s a man&rsquo;s nature to seize opportunities for casual sex whenever he can. Still, it&rsquo;s wrong to put all the blame on the man. Only you can break this negative cycle!<br />
					  <br />
					  Say this with me now, &ldquo;Sex on it&rsquo;s own won&rsquo;t make a man commit.&rdquo;<br />
					  If you&rsquo;re sleeping with men because you believe it will make them invest in you emotionally and value you for more than sex… you&rsquo;ve got to change this habit now.<br />
					  <br />
  <h2>Self-Worth and Happiness From Within Leads To A Lasting Relationships</h2>
 
					  Sex should be given only after you know a man values you for you (and not just your body). <br />
					  <br />
					  You need to overcome the belief that you need a man to validate you or make you feel happy. Creating a lasting relationship with a man will never work if it&rsquo;s only based on what he wants. Your needs, emotional and otherwise, should always be just as important!<br />
					  <br />
					  Men who only want you for sex aren&rsquo;t the type of men you really want in your life anyways. Seeking out these men, repeatedly looking for the emotional pain they provide you, is at its core an unhealthy addiction, not a route to happiness. <br />
					  <br />
					  An ideal man, one who you want to spend time with and invest in emotionally isn&rsquo;t one who runs from connection.  <br />
					  In my eBook. <a href="/index-b.php"><em>Tame Him and Turn Him ON,</em></a> I go in depth as to why men react weirdly and distant after sex, the types of men you should avoid and how to be sure you have a connection with him before you sleep with him.<br />
					  <br />
					  I believe the knowledge in my eBook, that I&rsquo;ve gathered from hundreds of real life case studies, will help you avoid the pain of sleeping with the wrong men. And it will help you know when to sleep with the right man. <br />
					  <br />
					  Go <a href="/index-b.php">here</a> now to get your copy and preview it RISK FREE for 7 days: <em>Tame Him and Turn Him ON</em> Risk Free Trial.</p>
</div>

			</div>
			<div class="col-md-4 sidebar">
				
				<?=View::load($action)?>

			</div>
		</div>
	</div>

<?=View::load('_frame-end')?>
