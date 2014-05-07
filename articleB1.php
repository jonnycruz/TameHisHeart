<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
	
		
	if (isset($_COOKIE["optin"])){
	setcookie("paytoread", "", time()-3600);
	$action = "free-widget4";
	}
	elseif(isset($_COOKIE["paytoread"])){
    header('Location: /paywall.html?article=articlebone');
	$action = "locked-widgetold";
	}
	else {
	$value = "on article 1";
	setcookie("paytoread", $value, time() + (10 * 365 * 24 * 60 * 60));
	$action = "locked-widget2";
	}
	
?>

<?=View::load('_frame-start', array('title' => 'How Do I know If My Man Doesn\'t Want To Be With Me?'))?>
	
	<div id="wrapper">
	    
		<?=View::load('headernosp', array('article' => 'active'))?>

		<div class="container video clearfix">
			<div class="article-header col-md-12">
				<div class="pull-left avatar">
					<img src="/_img/joanna.jpg" alt="" />
				</div>
				<h2 class="head_black">You Both Fell In Love, Now He's Not Interested…<sub>by Joanna Van Vleck</sub></h2>
			</div>
			<div class="col-md-8">
				
				<div class="article">
					<p class="excerpt"><img class="img-responsive" src="_img/FDP_serious_1.jpg" alt="" />
                <p>Do you feel like the honeymoon period of your relationship is over? Or maybe feel like all the good times are behind you? </p>
<p>Or maybe lately your partner finds it easier to avoid you then be with you?</p>
<p>Does it seem like if you don't figure this out together soon then it just might be the end of your relationship? </p>
<p>You want to save your relationship. Yet, every time you try to talk about how you feel he "tunes out" or you end up in an argument that makes things worse. </p>
<p>This "beginning of the end" stage of a relationship is a painful experience to go through. And what makes it worse is that you know the love is still there, yet it so hard to get at the core of your feelings because of the constant misunderstandings and miscommunications between the two of you. </p>
<p>Well here are three secrets to improve your communication and possibly pull your relationship out of this downward spiral.</p>
<h2>1. Ask for his thoughts first, give him safety & time and listen…</h2>
<p>Men are not as good as women at stating their feelings. He may feel overwhelmed by your ability to convey how you feel. </p>

<p>And his inability to express his feelings to you may frustrate him and make him shut down.</p>

<p>So, when you have a serious talk let him go first. And be patient and listen. Even if he gets frustrated allow him time to relax and finish his thoughts. </p>

<h2>2. "Agree and Add" to His Feelings </h2>
<p>Next, you must tell him what you're feeling and what you need from him without criticizing him.  Any sense of judgment and he might get defensive and shut down from the conversation. </p>

<p>A good rule to follow is to "agree and add" to what he said about his feelings, like this:</p>

<p>"Well you said this (insert his thoughts here) and that made me think about this (insert your thoughts here)."</p>

<p>It's important that you don't hide behind past arguments. Don't focus on trying to "win" or bring up past pains. Instead tell him how you feel now in the moment about what's going on between you two. </p>

<h2>3. The Compliment Sandwich</h2>
<p>You say something negative and he shuts down and now conversation to save your relationship is over! </p>
<p>I'm sure you already know that men can be very proud. And it's hard for them to accept criticism about their actions. </p>
<p>Still, you can get past this defense mechanism by using the technique known as the "compliment sandwich."  </p>
<p>The formula works like this: say something complimentary to him, then say something you'd like him to change about his behavior, then say something complimentary again. </p>
<h2>Improving Communication Starts With You…</h2>
<p>It's proven that women are better communicators than men. Consider how much a group of female friends chat when they get together versus what it sounds like when a group of males get together. </p>
<p>We are better communicators and men are unfortunately at a disadvantage. Often it isn't because a man wants a relationship to be over that causes a break up, rather he just can't communicate his way back to a healthy, loving relationship. </p>
<p>That leaves fixing a distresses relationship up to you. Your ability to communicate with him and help him communicate with you is the only thing standing between breaking up and saving your relationship. </p>
<p>If you approach your man with a negative attitude (angry, upset or irritated) he's likely to respond negatively to you. It's up to you to delicately get your relationship back on the rails by improving your communication skills.  </p>
<p>In my eBook, Relationships By Design, I'll show you an in-depth loo at the most effective strategies for communicating with a man. I'll also reveal to you how to tell what's on a man's mind as you attempt to communicate with him and how to read his emotions through his expressions and other body language. </p>

</p>Go here now for more details on my <a href="/index-b.php">TAME his HEART Risk Free Trial</a> free for seven days.  Remember it's up to you to save your relationship with communication OR let it be torn apart by fighting, arguing and negativity… if you can come back from the brink of breaking-up your connection with your partner will be even stronger than before. </p>
                                        
                  <p>&nbsp;</p>
                  
                                        
                                        
                                        
                    
                    
			  </div>

			</div>
			<div class="col-md-4 sidebar">
				
				<?=View::load($action)?>


			</div>
		</div>
	</div>

<?=View::load('_frame-end')?>
