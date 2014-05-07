<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
		
	if (isset($_COOKIE["optin"])){
	setcookie("paytoread", "", time()-3600);
	$action = "free-widget4";
	}
	elseif(isset($_COOKIE["paytoread"])){
    header('Location: /paywall.html?article=articleatwo');
	$action = "locked-widgetold";
	}
	else {
	$value = "on article 1";
	setcookie("paytoread", $value, time() + (10 * 365 * 24 * 60 * 60));
	$action = "locked-widget4";
	}
	
?>

<?=View::load('_frame-start', array('title' => 'How Do I know If The Guy I Like Is Attracted to Me?'))?>
	
	<div id="wrapper">
	    
		<?=View::load('headernosp', array('article' => 'active'))?>

		<div class="container video clearfix">
			<div class="article-header col-md-12">
				<div class="pull-left avatar">
					<img src="/_img/joanna.jpg" alt="" />
				</div>
				<h2 class="head_black">Attraction Strategies That Are Doomed to Backfire<sub>by Joanna Van Vleck</sub></h2>
			</div>
			<div class="col-md-8">
				
				<div class="article">
					<p class="excerpt"><img class="img-responsive" src="_img/FDP_romantic_5.jpg" alt="" /><em style="margin-bottom:28px">"Here's either attracted to you or he isn't."</em></p>

<p>Maybe you've heard this before. It's not true. </p>

<p>Men, just like women, can have their attraction grow over-time if the right attraction buttons are pushed. </p>

<p>The problem is most women are confused about what are the right attraction buttons. They end up investing their time in just making a man happy rather than making a connection.</p> 

<p>Making a man happy is certainly part of the equation. Yet, if the relationship is lopsided something is wrong. For example if you find you're doing a lot for him yet he rarely spends time with you to take care of your needs then you've not created a connection.</p>

<p>You don't have a relationship. You just have a situation in which a man gets to take advantage of you. </p>

<p>These are the three areas that you need to be careful not to go overboard on when you're trying to attract a man… </p>

<p><strong>STOP GIFTING </strong></p>

<p>By gifts I don't just mean buying a man things like presents and meals. I also mean doing errands for him and solving his daily problems. </p>

<p>If there's a man you like and he's "just not into you" then no amount of doing stiff for him will make him see you as more than a friend.</p>

<p>If your primary role in his life is to take care of him and you get nothing in return that makes you feel good than he is just using you. </p>

<p>When you finally express your feelings for him, he'll run! If this is the situation you're stuck in STOP. </p>


<p><b>STOP OVER-LOOKING </b></p>

<p>When a woman finds a man attractive it's very easy for her to overlook the "small things." </p>

<p>Have you ever found yourself thinking like this:</p>

<p><em>"Oh, he said he was going to call me and he didn't… no big deal."</em></p>

<p><em>"Oh he said we'd go out on a date alone and now we're hanging out with his … no big deal."</em></p>

<p><em>"Oh, he we said he would come to my birthday party and he didn't… no big deal."</em></p>

<p>Well the truth is he's stepping all over your feelings! You don't have a connection with him. Every time he breaks a promise to you it breaks your heart a little bit. But you still keep coming back for more. </p>

<p>This won't attract him. In fact it's very UNATTRACTIVE.</p>

<p><strong>STOP BOOTY-CALLING</strong></p>

<p>I never want you to think it's wrong to have sex with a man when you want to. </p>

<p>Yet, I do want to educate you so that you're not just a man's booty-call or "friends with benefits" hoping that by pleasing him sexually you'll connect deeper with him. </p>
<p>Sex is a big part of a healthy relationship.</p>
<p>That said, if you find that he…</p>

<div style="margin-left:25px;">
	<p>…only contacts you when he wants sex</p>
	<p>…doesn't stick around after sex</p>
	<p>…doesn't want to talk after sex</p>
	<p>… or immediately goes "cold" after sex</p>
</div>



<p>…then you might be in a situation where he is just using you for sex. And no amount of giving him what he wants is going to create a deeper connection between the two of you. </p>

<p>You see physiologically the female body works different from the male body. The more a woman has sex with a man the more she is attracted to him. Yet a man's attraction levels have been shown, after repeated sex with the same partner, to stay the same (or even decrease)!</p>

<p>Don't believe that sex will get him to love you. </p>

<h2>What Truly Creates A Real Romantic Connection With a Man</h2>

<p>The truth here is that man can be OK with having sex with you or having them do things for you, yet not feel anything else for you. </p>

<p>If that's the kind of relationship you want then please be my guest. Yet, if tis sort of relationship is bothering you then it's time to make a change in how you approach trying to attract a man.  </p>

<p>These three doomed attraction strategies that most women rely on actually make you unattractive to a man because they make you a weak-willed woman.</p>

<p>Despite what you read in Cosmo or even what some of your friends say… a man wants a strong willed woman who doesn't let him take advantage of her. </p>

<p>Think about all the movies you've seen or books you've read where men are attracted to a strong-willed woman. There is truth to this myth which is why it's appealing to men. </p>

<p>A strong-willed woman is one who: gets what she wants in a relationship, has the confidence to say "no" to a man and has sex on her own terms. A man will immediately see a strong-willed woman as unique because he encounters so few of them.</p>

<p>It may seem counter-intuitive, yet if you want a man to love you then you've got to put him in his place. You can't let him take advantage of you. </p>

<h2>What Now?</h2>

<p>If your attraction strategy hasn't achieved a successful, lasting and loving relationship yet for you, it's time to do something new.  </p>


<p>In my eBook, Tame his Heart, I show you how to develop the personality of a strong-willed woman that all men find universally attractive. </p>

<p>I'll show you very specific tips that teach you to eliminate other behaviors, like the three doomed strategies above. If you weren't aware that gifting, overlooking and booty-calling were hurting your relationship then you'll be shocked at the other things that might be deceasing his attraction for you too.</p>
	
   				  <p>Download your copy right now by clicking here,<a href="/index-b.php">Tame HIS heart Risk Free Trial</a>. If you're ready for a positive change in your life when it comes to men, then learning how to communicate with them in a way that triggers attraction is a crucial first step, and my eBook shows you how.</p>
                    
                    
                    
                    
				</div>

			</div>
			<div class="col-md-4 sidebar">
				
				<?=View::load($action)?>


			</div>
		</div>
	</div>

<?=View::load('_frame-end')?>
