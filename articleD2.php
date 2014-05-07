<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
	
		
	if (isset($_COOKIE["optin"])){
	setcookie("paytoread", "", time()-3600);
	$action = "free-widget";
	}
	elseif(isset($_COOKIE["paytoread"])){
    header('Location: /paywall.html?article=articledtwo');
	$action = "locked-widgetold";
	}
	else {
	$value = "on article 1";
	setcookie("paytoread", $value, time() + (10 * 365 * 24 * 60 * 60));
	$action = "locked-widget5";
	}
	
?>

<?=View::load('_frame-start', array('title' => 'Three Ways You Might Unknowingly Ruin A Date'))?>
	
	<div id="wrapper">
	    
		<?=View::load('headernosp', array('article' => 'active'))?>

		<div class="container video clearfix">
			<div class="article-header col-md-12">
				<div class="pull-left avatar">
					<img src="/_img/joanna.jpg" alt="" />
				</div>
				<h2 class="head_black">Three Ways You Might Unknowingly Ruin A Date<sub>by Joanna Van Vleck</sub></h2>
			</div>
			<div class="col-md-8">
				
				<div class="article">
					<p class="excerpt"><img class="img-responsive" src="_img/FDP_romantic_7.jpg" alt="" /><p>Let's face it most of what we learn about how to act on a date, especially a first date, comes from movies and TV. </p>
                    <p>Of course, these aren't accurate portrayals of how you should be acting on a date. Usually, they're based on stereotypes that aren't truly attractive to men.  </p>
                    <p>Maybe you think you've had enough experience dating to know what you ought to do on a first date to increase a man's attraction for you. Still, if you've ever had a man not call you back after a date that you thought went well them maybe you unknowingly made a common dating mistake.</p>
                    <p>See if you've made any of these three most common dating mistakes before:</p>
                    <p>Mistake #1: Choosing An Awkward Date Location </p>
                    <p>If you mistakenly choose the wrong location for your first date, you're setting yourself up for failure from the start. </p>
                    <p>Picture a man and a woman casually chatting over dinner or coffee. That's the typical date Hollywood shows us. Yet, if you've ever been on dates like this for a first date you know they can be a train wreck! </p>
                    <p>You're awkwardly staring at each other across a table drinking and chewing in front of a person you barely know with nothing else to do but awkwardly make conversation. </p>
                    <p>And why is the conversation so awkward? Because the date location is forcing you to talk and not naturally bringing it out of you!</p>
                    <p>Choose, instead a active date location that gets the blood pumping. Man friendly first date locations include: arcades, batting cages or driving ranges (if he's sporty he'll love it), shooting range, hiking, the beach, etc. (I'm sure you're getting the picture and can now think of some on your own). </p>
                    <p>The point is that these date locations give you activities to focus on and bond over during the date. You're no loner just awkwardly facing each other, forcing each other to converse. </p>
                    <p>Mistake #2: Acting Like The Lady Stereotype… </p>
                    <p>Ever found yourself kicking yourself for saying phrases like this on a first date…</p>
                    <p>"I'll have what you're having." </p>
                    <p>"Oh, wherever you want to go is fine."</p>
                    <p>"Sure, whatever you want to do is fine."</p>
                    <p>"Yeah, if you want another drink I'll have one too."</p>
                    <p>Stop acting like a dating clone! You're just repeating what you think he wants to hear, yet it's hurting your chances. </p>
                    <p>If you're so intent on getting a man to like you that you don't act like yourself, your date is going to go bad before it even starts. </p>
                    <p>He will like you for you if you let him see the real you. After all, how could you expect him to he ever have a real connection with you if you only show him an unreal version of yourself? </p>
                    <p>Relax. Tell him your real opinions in conversation. Share your beliefs. Be confident that the real you is interesting and attractive.  </p>
                    <p> "Too Much Personal Information!"</p>
                    <p>The absolute biggest mistake you can make on a first date is revealing too much information about personal secrets. </p>
                    <p>As I said above I do want you to assert yourself and form opinions in conversation. Yet, I don't want you to talk about too many personal issues. </p>
                    <ul>
						<li>Don't talk about a horrible break-up. </li>
						<li>Don't talk about an awful childhood.</li>
						<li>Don't reveal family secrets. </li>
						<li>Don't dwell on ex-boyfriends. </li>
                    </ul>
                    <p>Yes, we all have baggage. And I know you want someone to share your pain with and make you feel better. Still, that part of a relationship grows over time. </p>
                    <p>The first date is not the right place for sharing too much personal information. It's the most likely thing to scare a man off for good from going out on a second date. </p>
                    <p>Could You Be Dating Smarter?</p>
                    <p>The goal of the first date is to get to know some well enough that you both want a second date. </p>
                    <p>If you find that you're not getting second dates then it's time to examine what you're doing wrong on your first date and be honest with yourself about it. </p>
                    <p>If you want to know more about how the subtle things you say and do on a date effect whether he will ever call you again then you need to check out my eBook, Relationships By Design. </p>
                    <p>I've written more about what makes a perfect first date for a man, one that has him texting or calling you for a second date even before he gets home from the first date. </p>
                  <p>Download your copy here now: 
                  <p>Go here now for more details, <a href="/index-b.php">TAME his HEART Risk Free Trial</a>. Try it risk free for 7 days so you'll know what to do before you unknowingly make a mistake on your next date. </p>

                    
                                        
                                        
                    
                    
			  </div>

			</div>
			<div class="col-md-4 sidebar">
				
				<?=View::load($action)?>

			</div>
		</div>
	</div>

<?=View::load('_frame-end')?>
