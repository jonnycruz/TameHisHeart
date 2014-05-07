<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
		
	if (isset($_COOKIE["optin"])){
	setcookie("paytoread", "", time()-3600);
	$action = "free-widget2";
	}
	elseif(isset($_COOKIE["paytoread"])){
    header('Location: /paywall.html?article=articlemtwo');
	$action = "locked-widgetold";
	}
	else {
	$value = "on article 1";
	setcookie("paytoread", $value, time() + (10 * 365 * 24 * 60 * 60));
	$action = "locked-widget5";
	}
	
	
?>

<?=View::load('_frame-start', array('title' => 'What Turns Men Off'))?>
	
	<div id="wrapper">
	    
		<?=View::load('headernosp', array('article' => 'active'))?>

		<div class="container video clearfix">
			<div class="article-header col-md-12">
				<div class="pull-left avatar">
					<img src="/_img/joanna.jpg" alt="" />
				</div>
				<h2 class="head_black">How You Might Accidentally Push A Good Man Away<sub>by Joanna Van Vleck</sub></h2>
			</div>
			<div class="col-md-8">
				
				<div class="article">
					<p class="excerpt"><img class="img-responsive" src="_img/FDP_romantic_9.jpg" alt="" /><em style="margin-bottom:28px">What if you discovered that your whole life, you were subconsciously doing one thing that pushes men away? </em></p>

                  <p>And I don't mean jerks either. I mean good men, who you want to date for the long-term.  </p>
                    <p>The singular most common dating problem I find in the women I counsel is being stuck in a "casual relationship" with a man they love, when what they truly want is a serious, committed relationship. </p>
                    The frustration builds up so much, that eventually women can't help but explode on a man and have… THE TALK.</p>
                    <p>It's this moment where most women are about to accidentally push a good man away. </p>
                    <h2>Why A Man Grows Distant After "The Relationship Talk" </h2>
                    <p>A man will not respond positively to a relationship deadline! If you give him one, he may agree in the moment yet, will ultimately causes a man to withdraw or become irritated with you and the relationship. </p>
                    <p>THE TALK causes a change reaction in his thoughts and he starts to question whether he should even be with you. He may even start to fantasize about previous relationships, dating a new specific woman or just playing the field.</p> 
                    <p>Why does the talk trigger this reaction in a man? </p>
                    <p>Well, unlike women a man is rarely viewing your relationship in the long-term. 
                  <p>A man's default brain setting for dating is to sample women and be with as many as possible! Now that's not his fault, it's just the way a man's mind functions. </p>
                    <p>Yet, it is possible for you to change a man's default brain program from "casual dater" to "committed partner." </p>
                  <p>Before you have the TALK consider this about a man (andmaybe you've already noticed these qualities in him):</p>
                    <ul>
						<li>A man lives for the moment and doesn't plan ahead in relationships</li>
						<li>A man likes habits and routines </li>
						<li>A man will get addicted to what he finds to be comfortable</li>
                    </ul>
                    <p>The key is patience. 
                  <p>Your man's mind will eventually re-wire to relationship mode once he's been with you long enough. </p>
                    <p>Until you notice the signs in his behavior that his mind has fully accepted being in a relationship with you… it will only be disastrous to have THE TALK with him. </p>
                    <h2>Patience Leads To Relationships…</h2>
                    <p>So</p>, why if THE TALK causes him to withdraw do women insist on forcing the issue before a man's ready?
                    <p>The answer, whether you like it or not, is insecurity. If that makes you angry, I urge you to look past your anger and really ask yourself if your personal insecurity is at the heart of the issue. </p>
                    <p>The fact is, you're not confident enough to believe that without him verbally agreeing (or maybe even updating his Facebook status) that he's committed to you. </p>
                    <p>The solution isn't having THE TALK to make him commit and satisfy your insecurities. The real solution is to really feel secure in your that you're leading him towards commitment and observe the signs that he is committing to you more deeply (even though he may not admit it).</p>
                    <p>Get him to commit sooner, the signs that he's ready to commit </p>
                    <p>Yes, a man has a different pace for commitment, still there are ways you can make him want to commit sooner. There are even ways that you can make such a deep connection with him, it'll will push him to ask you for a commitment. </p>
                    <p>On page 32 of my eBook,TAME his HEART, I'll reveal the types of men most likely to commit, a guide to making a man fall deeply in love with you fast, 7 subtle signs that he's ready for a commitment and even secrets about yourself you may not know that make you chase unavailable men.</p>
                   <p> If this article hits home for you or if you're in a relationship with a man who won't commit, I absolutely want you to read this.</p>
 					<p>Go here now for more details, <a href="/index-b.php">TAME his HEART Risk Free Trial</a>. Try it risk free for seven days and you'll find out how to build a deeper connection with a man than you've ever experienced. </p>
                    
                    
                    
                    
			  </div>

			</div>
			<div class="col-md-4 sidebar">
				
				<?=View::load($action)?>


			</div>
		</div>
	</div>

<?=View::load('_frame-end')?>
