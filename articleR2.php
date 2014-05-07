<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
	
	
		
	if (isset($_COOKIE["optin"])){
	setcookie("paytoread", "", time()-3600);
	$action = "free-widget4";
	}
	elseif(isset($_COOKIE["paytoread"])){
    header('Location: /paywall.html?article=articlertwo');
	$action = "locked-widgetold";
	}
	else {
	$value = "on article 1";
	setcookie("paytoread", $value, time() + (10 * 365 * 24 * 60 * 60));
	$action = "locked-widget3";
	}
	
?>

<?=View::load('_frame-start', array('title' => 'Why Is The Guy I Like Ignoring Me?'))?>
	
	<div id="wrapper">
	    
		<?=View::load('headernosp', array('article' => 'active'))?>

		<div class="container video clearfix">
			<div class="article-header col-md-12">
				<div class="pull-left avatar">
					<img src="/_img/joanna.jpg" alt="" />
				</div>
				<h2 class="head_black">Here's Why He Either Is Attracted To You or Isn't…<sub>by Joanna Van Vleck</sub></h2>
			</div>
			<div class="col-md-8">
				
				<div class="article">
					<p class="excerpt"><img class="img-responsive" src="_img/FDP_romantic_8.jpg" alt="" /><p>The male attraction mind is more concerned with youth and physical beauty than the female attraction mind. </p>
                    <p>Yet, I'm not going to rehash beauty secrets here that you could find in any newsstand women's magazine. I'll leave what you want to work on in terms of your beauty and fitness up to you. </p>
                    <p>What I want to focus on here is the attraction process going on in a man's mind that is largely subconscious. And I want to focus on how just altering your attitude can make him more deeply attracted to you. </p>
                    <p>Men are biologically wired to want a woman who acts a certain way. Yet because men are notoriously hard to read, so it can be hard to tell what he wants. In fact, most men aren't even aware of the attraction spikes caused by what a woman says and does. </p>
                    <p>If trying to understand how you "switch on" a man's attraction and keep it on seems mind-boggling, don't worry, it can seem that way at first. </p>
                    <p>Yet, it's important to know that you have the POWER to affect how much he is attracted to you. Simply by change what you say and how you say it and your actions around him, you can make him desire not just sex with you, but also a relationship. </p>
                    <p>A man tends to subconscious look for subtle attitude cues that tell him you're the type of woman he wants for the long-term.</p>
                    <h2>Emotional Attraction Leads to Deeper Connections and Commitment </h2>
                    <p>You can absolutely control how a much a man is attracted to you emotionally. He may take some training to change old habits, but it's worth it! After you learn how to be emotionally attractive to any man you can choose to turn "off" or "on" your attractive vibes at will. </p>
                    <strong><p>Be Exciting…</p></strong>
                    <p>Despite what you might read men are romantic. They may not express it but uniqueness and spontaneity are not lost on them. Even if it doesn't seem like he reacts to you being romantic, he still subconsciously appreciates it (remember men are hard to emotionally read).</p>
                    <p>So, if you have a romantic impulse, don't suppress it.  </p>
                   <strong> <p>Be Positive…</p></strong>
                    <p>Positivity is a universally attractive trait. And, trust me, I know it's not easy to stay positive in our stress-ridden modern world. Yet it's a huge turn-off to a man when a woman is always dumping negative emotional baggage on him.</p>
                    <p>What you put into the world is how you will be perceived and it's what you will receive. Negativity receives negativity. </p>
                    <p>From time-to-time, yes, we all need to vent, but on the whole stay positive and happy to increase a man's attraction levels.</p>
                    <strong><p>Be Consistent…</p></strong>
                    <p>Men are like dogs. I'll say this time and again and maybe I'll get some bad-press for saying this… still it's true. </p>
                    <p>Men are like dogs, yet I do mean this in a positive way, I promise boys. Men more so then women need routine. They love consistency and having "emotional things" in their proper place. Feed that consistency for him and he'll mysteriously find himself growing closer to you.   </p>
                    <strong><p>Be Confident…</p></strong>
                    <p>So the myth society has perpetuated is that men want a woman he is subservient to them. One who says things like. "Oh, whatever you want is fine with me…"</p>
                    <p>FALSE! </p>
                    <p>Please, don't fall into this trap. A confident woman is ALWAYS universally attractive. Form opinions in conversations and stick to them. Make decisions. Tell him how you feel. All men, deep down, want a strong woman who lends them strength too. </p>
                    <p>As I said adopting these four emotionally attractive traits can mean breaking a lot of long-standing bad habits. It may take to a while for you to figure out how to always act emotionally attractive with a man you want to be in a relationship with.</p>
                    <p>It's not easy to master, after all (if it was then every woman would be considered attractive). Still, it's worth it because, one day, the man you truly want to keep in your life is going to come along. And if you're not prepared for that moment he will slip by. </p>
                    <p>Luckily, for you, through my studies and coaching of other women I've done most of the work for you by already documenting what spikes men's attraction levels. </p>
                    <p>If you want quickly understand how to become emotionally attractive to men or to know how to subconsciously attract him to want to commit to a relationship with you then I urge you to check out my eBook, Relationships By Design. </p>
                    <p>Go here now for more details on my Relationships By Design eBook Risk Free Trial free for seven days and you'll find out how to build a deeper connection with a man than you've ever experienced. </p>
                    
                                        
                  <p>Go here now for more details, <a href="/index-b.php">TAME his HEART Risk Free Trial</a> for seven days and you'll find out how to build a deeper connection with a man than you've ever experienced. </p>
                  <p>Stop making assumptions about what he's thinking and REALLY know what he's thinking. </p>
                                        
                                        
                                        
                    
                    
			  </div>

			</div>
			<div class="col-md-4 sidebar">
				
				<?=View::load($action)?>


			</div>
		</div>
	</div>

<?=View::load('_frame-end')?>
