<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
		
		
	if (isset($_COOKIE["optin"])){
	setcookie("paytoread", "", time()-3600);
	$action = "free-widget3";
	}
	elseif(isset($_COOKIE["paytoread"])){
    header('Location: /paywall.html?article=articlemone');
	$action = "locked-widgetold";
	}
	else {
	$value = "on article 1";
	setcookie("paytoread", $value, time() + (10 * 365 * 24 * 60 * 60));
	$action = "locked-widget4";
	}
	
	
?>

<?=View::load('_frame-start', array('title' => 'Why Doesn\'t My Man Want to Be Intimate With Me?'))?>
	
	<div id="wrapper">
	    
		<?=View::load('headernosp', array('article' => 'active'))?>

		<div class="container video clearfix">
			<div class="article-header col-md-12">
				<div class="pull-left avatar">
					<img src="/_img/joanna.jpg" alt="" />
				</div>
				<h2 class="head_black">Two Reasons Why He'll Run From Intimacy<sub>by Joanna Van Vleck</sub></h2>
			</div>
			<div class="col-md-8">
				
				<div class="article">
					<p class="excerpt"><img class="img-responsive" src="_img/FDP_serious_2.jpg" alt="" /><em style="margin-bottom:28px">If you've ever tried convincing a man you're a great match or attempted to buy his love with gifts, you know it never works in the long run. Learn how to avoid doing what makes him run and what you need to be doing instead to get him to really feel a connection.</em></p>
                    <p>Because there's a chance that he doesn't feel a connection to you because you don't know what HE NEEDS to fall in love.</p>
                    
                    <h2>1. Why Your Insecurity Will Kill You Relationship </h2>
                    
                    <p>The biggest mistake you can make in a relationship with a man is feeling insecure. Insecurity creates a negative feedback loop that will destroy your relationship. </p>
                    
                  <p>Often I see, a woman starts to feel insecure that her partner doesn't care about her as much as she cares for him. The man begins to feel that insecurity and it pushes him away. Now he calls less regularly, he spends less time with her and when he's with her he is less connected. </p>
                    
                    <p>As he removes himself a little from the relationship, she starts to feel more insecure. Her insecurity pushes him further away. The cycle moves in a downward spiral towards break-up.</p>
                    
                    <p>Once a woman finds herself in this place she feels like her only option is to pour out her feelings to him. She obsesses about it for a few weeks and discusses it with friends. </p>
                    
                    <p>She builds it up so much that when the moment comes to tell him how she feels she tells him everything! She puts all of her emotional energy into her speech to him about how much she loves him. In return, he just stares back blankly… he doesn't feel the same way. </p>
                    
                    <p>He's confused. He may say in the moment that he cares about her (he won't say he loves her). He may even seem to give into what she wants. Yet, mostly he's just trying to push her tears back and stop the emotional outpouring. Later after he's left he'll push away even further. </p>
                    <p>The relationship is over. </p>
                    <h2>2. Why Coming On "Too Strong, Too Soon" Pushes Him Away</h2>
                    <p>Chances are that deep down you already know what I'm about to tell you here… 
                  <p>The simple fact is that if a man isn't into you all your attempts at showing him love will come off as try-hard and creepy. Even though you may have good intentions, these loving gestures will push him further away. </p>
                    <p>Trying to push your relationship into the next stage by forcing it will result in disaster. In the early stages you must refrain from buying him things, coming over to his house unannounced or calling and texting him too many times per day.</p>
                    <p>These actions will project to him that you think you're already his girlfriend. This will activate an uncomfortable feeling for him that will make him push you away.</p>
                    <p>Even if you're intentions are from a completely loving place, try to pace them out over the relationship. </p>
                    <p>Moving to fast is a surefire way to push him away fast.</p>
                    <p><strong>He'll Love You if You Love You </strong></p>
                    <p>A confident woman is universally attractive to all men. If you want a man to truly love you, it starts with truly loving yourself.  </p>
                    <p>Women who have great relationships with men aren't just lucky! They're women who have strong, self-supportive beliefs like the following:</p>
                    <ul>
						<li>"I want a man who has his own life and friends to compliment my life. I'm not looking for a co-dependent relationship."</li>
						<li>"My happiness isn't determined by whether I'm in a relationship."</li>
						<li>"No man is worth destroying my life or emotional stability."</li>
						<li>"I want a caring positive relationship not a dramatic rollercoaster of emotions." </li>
                   	</ul>
                  <p>And that's just the beginning. Having self-supportive beliefs make a man want to connect with you deeply, beyond physical lust. </p>
                  <p>In my eBook <a href="/index-b.php">TAME HIS HEART</a>, I dive into how you can achieve an inner confidence, positive attitude and project emotional stability that sparks intense attraction in a man. </p>
                    <p>Imagine what it would feel like to have him interested in the parts of your life that have meaning to you. On page 22 of my book, I'll show you the exact actions and words that generate an intense connection between you and your man. He won't just want you. He'll need you.</p>
                    <p>Go here now for more details, <a href="/index-b.php">TAME his HEART Risk Free Trial</a>. Try it risk free for seven days and you'll find out how to build a deeper connection with a man than you've ever experienced. </p>
                    </p>
                    
                    
                    
                    
			  </div>

			</div>
			<div class="col-md-4 sidebar">
				
				<?=View::load($action)?>

			</div>
		</div>
	</div>

<?=View::load('_frame-end')?>
