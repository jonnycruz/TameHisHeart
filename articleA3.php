<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
		
		
	if (isset($_COOKIE["optin"])){
	setcookie("paytoread", "", time()-3600);
	$action = "free-widget5";
	}
	elseif(isset($_COOKIE["paytoread"])){
    header('Location: /paywall.html?article=articleathree');
	$action = "locked-widgetold";
	}
	else {
	$value = "on article 1";
	setcookie("paytoread", $value, time() + (10 * 365 * 24 * 60 * 60));
	$action = "locked-widget4";
	}
	
	
?>

<?=View::load('_frame-start', array('title' => 'How To Make Him Want You For More Than Sex'))?>
	
	<div id="wrapper">
	    
		<?=View::load('headernosp', array('article' => 'active'))?>

		<div class="container video clearfix">
			<div class="article-header col-md-12">
				<div class="pull-left avatar">
					<img src="/_img/joanna.jpg" alt="" />
				</div>
				<h2 class="head_black">How To Make Him Want You For More Than Sex<sub>by Joanna Van Vleck</sub></h2>
			</div>
			<div class="col-md-8">
				
<div class="article">
					<p class="excerpt"><img class="img-responsive" src="_img/FDP_romantic_4.jpg" alt="" /><em style="margin-bottom:28px">Are you aware that based on your behavior men will classify you either as "relationship material," "just a friend," as a fling or as a regular booty-call? </em></p>

					<p>If you don't know how to present yourself to a man you may get lumped into one of these categories that you don't want to be in.  What's even worse is once a man makes up his mind, you've little chance of escaping the label he gives you and you may never be able to create a deeper relationship connection with him. </p>

					<H2>Why will he stay with a so-called "complete woman?"</h2>

					<p>The good news about determining how a man sees you is you do have control over it.</p>
					<p>Whether he wants you for a girlfriend or not isn't determined by something superficial like your looks. A man will choose to just sleep with a woman based on beauty, but it's internal beauty that makes a man want to stay with a woman. </p>
					<p>The woman who a man is most likely to consider starting a relationship with is what's known as a "complete woman." </p>
<p>What do I mean by a complete "woman?" Here's a list of attributes that attract a man to a COMPLETE WOMAN:</p>
					<uL>
                    	<li>The COMPLETE WOMAN has her own life in order. She's not seeking out a relationship to fill an emotional void in herself or for a man to fix her. She wants an ideal partner who enriches her already happy life. </li>
                    	<li>The COMPLETE WOMAN radiates positivity and a man wants to be around her constantly to be a part of that positivity. </li>
                    	<li>The COMPLETE WOMAN brings value into a man's life and together they share value. For example, she has a social circle of friends that her man interacts with and vice versa. She has passions, hobbies and creative ways to spend her time that her partner gets to join her in. </li>

                    	<li>The COMPLETE WOMAN encourages and drives a man to succeed. Because she's confident in herself she's able to extend her confidence to her partner's ambition too. </li>
                    </uL>
<p>It's natural for a man to be attracted to a COMPLETE WOMAN. He may not even know why he stays with her, yet just feels drawn to her, like her completeness also completes him. </p>

					<p>On the reverse side, men withdraw and become frustrated with women who exhibit opposite behavior than the characteristics of a "complete woman."</p>
                    
                    
<h2><em>He might label you as a friend, fling or booty-call if…</em></h2>

<p>Again remember that based on your behavior and what you say a man will subconsciously and permanently label you in a category,</p>

<p><strong>Flings</strong></p>

<p>A fling means he'll have sex with you once or a few times within the span of a few weeks and then never talk to you again or sleep with you again.  </p>

<p>This is probably because he found you physically attractive, yet didn't find anything else about your life attractive to him. 
</p>
<p><strong>Booty-call</strong></p>

<p>A booty-call, of course is when a man sees you over a long span of time to have sex with you, yet never lets the interaction progress to a relationship.</p>

<p>More than likely you exhibit some of the COMPLETE WOMAN characteristics that keep him around, yet not enough. </p>

<p><strong>"Just a friend"</strong></p>

<p>He finds you to be a positive force in his life. And knows you're willing to help him, you're positive and you share similar emotional make-up. Still some of the COMPLETE WOMAN attributes are missing that tip the scale for him to think of you as sexually attractive. </p>

<h2>It's Your Choice…</h2>

<p>Physical beauty will make a man decide to sleep with you but no stay with you. The more you can become a "complete woman" the more you will attract a "complete man" into your life for the long-term. 
And the choice is yours to work on becoming a "complete woman." It's up to you if you want to be the kind of woman a man sleeps with a few times then decides to not talk to again. Or the type who waits around as a man's "friend" and watches him date other girls while she has a huge crush on him. </p>

<p>Are you ready to do what it takes to become a "complete woman"… the kind of woman a man finds a deep connection with and falls in love with forever?  </p>


<p>My eBook, <strong>Tame his Heart</strong>, teaches you the most crucial steps to working on you (even simple stuff like body language) that makes him view you as a COMPLETE WOMAN, until eventually you are a complete woman who all men of value find irresistibly attractive.</p>
	
   				  <p>If you've ever wondered about the secrets that other women had that made them "lucky in love" this is your manual to discover those exact secrets. You can download my eBook risk free for 7 days and be reading it in just a few minutes by going to this link here: <a href="/index-b.php">Tame HIS heart Risk Free Trial</a>. If you're ready for a positive change in your life when it comes to men, then learning how to communicate with them in a way that triggers attraction is a crucial first step, and my eBook shows you how.</p>
                    
                    
                    
                    
			  </div>

			</div>
			<div class="col-md-4 sidebar">
				
				<?=View::load($action)?>


			</div>
		</div>
	</div>

<?=View::load('_frame-end')?>
