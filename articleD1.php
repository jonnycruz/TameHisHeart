<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
	
	$pagearticle = "articleD1";
		
	if (isset($_COOKIE["optin"])){
	setcookie("paytoread", "", time()-3600);
	$action = "free-widget2";
	}
	elseif(isset($_COOKIE["paytoread"])){
    header('Location: /paywall.html?article=articledone');
	$action = "locked-widgetold";
	}
	else {
	$value = "on article 1";
	setcookie("paytoread", $value, time() + (10 * 365 * 24 * 60 * 60));
	$action = "locked-widget3";
	}
	
?>

<?=View::load('_frame-start', array('title' => 'I Went On One Date and Never Heard Back'))?>
	
	<div id="wrapper">
	    
		<?=View::load('headernosp', array('article' => 'active'))?>

		<div class="container video clearfix">
			<div class="article-header col-md-12">
				<div class="pull-left avatar">
					<img src="/_img/joanna.jpg" alt="" />
				</div>
				<h2 class="head_black">One Great Date Then You Never Hear From Him Again???<sub>by Joanna Van Vleck</sub></h2>
			</div>
			<div class="col-md-8">
				
				<div class="article">
					<p class="excerpt"><img class="img-responsive" src="_img/FDP_romantic_2.jpg" alt="" /><p>One of the most puzzling feelings we women have is going a date with a guy we like (or even didn't expect to like), feeling like everything went great then never hearing from him ever again! </p>

                    <p>He doesn't answer your calls, text or even reply online. He just goes cold. We're left thinking, "He asked me out! And now wants nothing to do with me. What did I do wrong?"</p>
                    
                    <p>It used to drive me crazy. And it boils down to women misreading where she's at in a relationship with man and where his mindset REALLY is.</p>
                    
                    <p>Women and men speak two usually have two different ways of going about getting into relationships. </p>
                    
                    <p>The core of the problem is that women are usually "dating committers" and men are usually "dating samplers" and this can make life very frustrating… until you're aware of it.</p>
                    
                    <p>Brace yourself for this, we read far TOO much into our early dates with men. We assume that men are usually looking for what we are looking for… a relationship. </p>
                    
                    <p>After all, what's the point in dating if the end goal isn't a relationship? </p>
                    
                    <p>Well men are constantly playing the field. I'm not saying it's wrong but you should be aware that most men are always thinking, "Who's next?"
                    They generally have a pipeline of girls in different stages of dating and they have several women they can have sex with whenever they want… just hanging around waiting for him to call</p>
                    
                    <p>Thoughts of "relationship" are not on his brain at all! So what's he thinking on your first dates? </p>
                    
                    <p>Unless you DERAIL a man's thinking his thoughts on the first few dates are SEX, SEX, SEX.</p>
                    
                    <p>Sure like you, he wants to make a good impression. He wants you to like him. He wants to share his life-stories with you. He wants you to appreciate his personality. Still, behind all for women we want to go through those stages to see if we're compatible. He wants to leverage into sex.</p>
                    
                    <p>And there's nothing wrong with having sex. You should do it when you feel comfortable and ready to do it. And you should never feel wrong about having sex with a man you are attracted to (and be safe of course). </p>
                    
                    <p>But beware, as I said men are "samplers." They like to play the field and date all different types of women. Generally, after sex with you a few times a man's attention will start to wander. </p>
                    
                    <p>The key is to leverage a man's sexual interest in you to show him that you're something different than most women. </p>
                    
                    <p>Second or third sates don't mean that a man necessarily wants to be "exclusive." In fact, most men are dating other women while going on those dates with you!</p>
                    
                    <p>He's having fun being an attractive man and sampling life, thinking only about the moment. While your mind is 10 steps ahead wandering about what it will be like when you're together. </p>
                    
                    <p>Now, here's where your attitude shift RUINS the early relationship by conflicting with his view of what he thinks is happening.  Because you start assuming that what you want is what he wants. </p>
                    
                    <p>Even, if you don't say anything that reveals this to him… he still feels it.  You start sending out a relationship vibe to him far too early. And since he's only in "have fun" mode he gets freaked out. </p>
                    
                    <p>The date ends. And maybe, you go home feeling like you've met a partner and start fantasizing about your future together. 
                    He goes home and immediately sees his world start to crash in on him. No more "sampling" women for him. No more casual dating. No more fun bachelor lifestyle. </p>
                    
                    <p>His head swims with worry about being pushed into a relationship too soon! He's not yet ready to accept it, and so he runs from it by avoiding you.</p>
                    
                    <p>Now, this doesn't mean that men don't want relationships. In fact, many of them do. They just aren't as sure of it or aware of it as women are. </p>
                    
                    <p>It's our job to guide a man into a relationship by getting him past that "bachelor mind-shift" smoothly. It's easy to do if you know how. </p>
                    
                    <p>I don't want you to end up in a situation where a man you really like avoids you after a few dates because you came on too strong. That's why  I and the other OneTaste dating experts wrote our eBook Relationships By Design. </p>
                    
                    <p>After you download it, you'll learn more about what really goes on in man's head during the dating process. For example, you'll learn what a man thinks about before he asks you out and what gets him to "just do it" and ask you out. And you'll learn what a man thinks when you say "I love you." Or "I want to see more of you." You'll learn what he's thinking all the way from casual dating to monogamous relationship. </p>
                    
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
