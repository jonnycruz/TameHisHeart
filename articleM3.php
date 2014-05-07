<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
		
	/* Checks to see if there is an optin cookie, if so display: open sidebars */	
	if (isset($_COOKIE["optin"])){
	setcookie("paytoread", "", time()-3600);
	$action = "free-widget2";
	}
		/* If they have already read one article it locks them out: also passes article reading to paywall */
	elseif(isset($_COOKIE["paytoread"])){
    header('Location: /paywall.html?article=articlemthree');
	$action = "locked-widgetold";
	}
	else {
		/* Sets a cookie for thier first article */
	$value = "on article 1";
	setcookie("paytoread", $value, time() + (10 * 365 * 24 * 60 * 60));
	$action = "locked-widget5";
	}
	
?>

<?=View::load('_frame-start', array('title' => 'Why Won\'t The Guy I Like Ask Me Out?'))?>
	
	<div id="wrapper">
	    
		<?=View::load('headernosp', array('article' => 'active'))?>

		<div class="container video clearfix">
			<div class="article-header col-md-12">
				<div class="pull-left avatar">
					<img src="/_img/joanna.jpg" alt="" />
				</div>
				<h2 class="head_black">Why He’ll Flirt But Never Ask You On A Date<sub>by Joanna Van Vleck</sub></h2>
			</div>
			<div class="col-md-8">
				
				<div class="article">
					<p class="excerpt"><img class="img-responsive" src="_img/FDP_serious_flirt.jpg" alt="" /><em style="margin-bottom:28px">Maybe you have a crush. It could be a guy you see in your daily life at work, the gym or maybe at friends’ parties.  
Whoever he is… he really does it for you! He makes you so nervous you can’t even bring yourself to tell him how you feel about him.</em></p>
                    <p><br />
                      He seems to you because when he sees you the two of you have great conversations. He gives you lots of dreamy eye contact. He always smiles when he sees you. He even seems to flirt with you and playfully touch your arm.  <br />
                      <br />
                      You always feel warm and tingly after talking to him any you know you&rsquo;d undeniably say, &ldquo;YES&rdquo; if he asked you out. <br />
                    You, maybe even, get the impression he wants to ask you out and that he knows he could… yet he never goes for it!</p>
<h2>What’s going on here? </h2>
                    
                    <p>First thing to clear up is rather this guy has a girlfriend or significant other. Guys sometimes look for validation from other women when they are in relationships. Flirting gives them a feeling of being single that they miss. </p>
A few tricks to finding out if he&rsquo;s single are…
<ul>
	<li>invite him to a party and telling him to bring his girlfriend.</li>
   <li>ask him directly (if he doesn’t seem interested in you after you ask, say you wanted to hook him up with your friend)</li>
   <li>ask his friends his relationship status</li>
      
    </ul>
    <p>If you find out he’s single… I’ve bad news for you. There’s a chance you’ve ended up in his friend-zone. 
Yet all hope of dating him isn’t lost…
</p>
                  <h2>How you got STUCK in the dreaded FRIEND-ZONE…</h2>
                    <p>Being stuck in the friend-zone means that you want a romantic relationship, while your dream guy does not. <br />
                      It&rsquo;s a very frustrating situation because, usually, once he puts you in the friend zone, it&rsquo;s impossible to move beyond it and into a relationship.<br />
                    A few indicators that you may be stuck in the friend-zone are…                    
                    <ul>
	                  <li>He never asks you out to do something outside of a group of friends.</li>
<li>He talks about dating other girls with you and asks you for advice.</li>
<li>The two of you have a &ldquo;bro&rdquo; like relationship (e.g. he says thing like &ldquo;you&rsquo;re just like one of the guys…&rdquo;). </li>
<li>He doesn&rsquo;t seem like he&rsquo;s trying to impress you.</li>
      
    </ul>
              
<p>As I said getting out of the friend-zone can be nearly impossible because once you&rsquo;re in it he views you as a &ldquo;guy-friend or worse like a &ldquo;sister.&rdquo;<br />
  There are a few keys to escaping the dreaded friend-zone once you&rsquo;re stuck. And even better there are several surefire ways to stay out of the friend-zone. Here&rsquo;s one...</p>
<p>In my eBook <a href="/index-b.php">TAME HIS HEART</a>, I dive into how you can achieve an inner confidence, positive attitude and project emotional stability that sparks intense attraction in a man. </p>
                    <p>Imagine what it would feel like to have him interested in the parts of your life that have meaning to you. On page 22 of my book, I'll show you the exact actions and words that generate an intense connection between you and your man. He won't just want you. He'll need you.</p>
                    <p>Go here now for more details, <a href="/index-b.php">TAME his HEART Risk Free Trial</a>. Try it risk free for seven days and you'll find out how to build a deeper connection with a man than you've ever experienced. </p>
                    <h2>Stay out of the FRIEND-ZONE because once you’re stuck in it, you can’t get out!</h2>
                    <p>To avoid getting stuck in the friend-zone you need to establish sexual tension between you and the man you&rsquo;re attracted to before you develop too much friendship. <br />
                    Avoid deepening your friendship with him by giving him relationship advice or acting like one of his &ldquo;guy friends&rdquo; around him until you have established sexual tension between the two of you. <br />
                    <br />
                      Make it a point to try and converse with him alone. Make as much eye contact as you can. And practice triangular gazing: look first into his left eye, than slowly over to his right eye and finally look slowly down at his lips (the whole gaze takes around 10-15 seconds). This will create that, &ldquo;I want to kiss you.&rdquo; Feeling inside him.<br />
                      Look him directly in the eye when you&rsquo;re speaking to him. Smile. Avoid complaining or talking about boring subjects like the weather or what you do for a living. Let him &ldquo;carry&rdquo; the conversation - don&rsquo;t hijack it every chance <br />
                      After that you&rsquo;ll still need to get him alone. If you don&rsquo;t know what to do and say to build enough attraction with once you&rsquo;re alone, the truth is you&rsquo;ll have a tough time dating at all.<br />
                      <br />
                      In my eBook, <a href="/index-b.php"><em>Tame His Heart and Turn Him ON</em></a>, I show you in exacting detail what you must do and say to stay out of the friend-zone and balloon his attraction for you, each time you encounter him. I&rsquo;ll even show you how to get him to ask you out on a first date (it&rsquo;s a little sneaky… yet it works). <br />
                      And just in case you&rsquo;re stuck in the friend-zone now with a man you think is perfect for you, I&rsquo;ll show you how you can get out of it and make him see you as a someone he wants romantically. <br />
                      <br />
                    Go <a href="/index-b.php">here</a> now for more details on my <em><u>Tame His Heart and Turn Him ON</u></em><u> eBook</u><u> Risk Free Trial</u> free for seven days and you&rsquo;ll find out how to build a deeper connection with a man than you&rsquo;ve ever experienced. </p>
</p>
                    
                    
                    
                    
			  </div>

			</div>
			<div class="col-md-4 sidebar">
				
				<?=View::load($action)?>

			</div>
		</div>
	</div>

<?=View::load('_frame-end')?>
