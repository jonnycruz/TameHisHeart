<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
		
			
	if (isset($_COOKIE["optin"])){
	setcookie("paytoread", "", time()-3600);
	$action = "free-widget5";
	}
	elseif(isset($_COOKIE["paytoread"])){
    header('Location: /paywall.html?article=articlerone');
	$action = "locked-widgetold";
	}
	else {
	$value = "on article 1";
	setcookie("paytoread", $value, time() + (10 * 365 * 24 * 60 * 60));
	$action = "locked-widget2";
	}
?>

<?=View::load('_frame-start', array('title' => 'What Is The Secret to a Great Relationship'))?>
	
	<div id="wrapper">
	    
		<?=View::load('headernosp', array('article' => 'active'))?>

		<div class="container video clearfix">
			<div class="article-header col-md-12">
				<div class="pull-left avatar">
					<img src="/_img/joanna.jpg" alt="" />
				</div>
				<h2 class="head_black">Are Great Couples Just Lucky?<sub>by Joanna Van Vleck</sub></h2>
			</div>
			<div class="col-md-8">
				
				<div class="article">
					<p class="excerpt"><img class="img-responsive" src="_img/FDP_romantic_3.jpg" alt="" />
                  <p>We all have those friends… the couple SO IN LOVE they can't stop touching each other in public. </p>
                    <p>They're always with each other. </p>
                    <p>They finish each other's sentences. </p>
                    <p>They constantly smile and stare into one another's eyes.</p>
                    <p>Publicly, you might sarcastically joke and say things like, "You two are so in love it makes me sick." Yet, secretly we all wish we could have what they have. </p>
                    <p>In this world of BILLIONS of people did this happy couple just get lucky and find each other? And if they have it, why can't you have it? </p>
                    <p>So you can either choose to believe…</p>
                    <p>Some women are luckier than others at finding their perfect match.  Some women have that luck and some don't.</p>
                    <p>Or you can choose to believe that finding your ideal partner and having a healthy, lasting and loving relationship with them is a skill you can learn.</p>
                  <p>I prefer the second option because it's the only one you can actually do something about and I know that it's true… you make your own relationship luck. </p>
                    <h2>You Are Your Own Worst Enemy When It Comes to Relationships</h2>
                    <p>Have you ever heard the term "self-fulfilling prophecy?"</p>
                    <p>It basically means that if you believe something will come true then it will come true. </p>
                    <p>If you have a defeatist attitude about dating and relationships you'll project that attitude and constantly get rejected, dumped and cheated on. </p>
                    <p>That might sound harsh, yet recognizing this negative pattern is the first step to recovering from it.  </p>
                    <p>Will you try a simple something RIGHT NOW that will change your feelings about yourself from negative to positive?</p>
                    <p>In a moment I want you to stop reading.  </p>
                    <p>I want you to go to a mirror in your house and look into your own eyes for 30 seconds without saying a word.</p>
                    <p>Now say to your own reflection, "I deserve to be happy in love." </p>
                    <p>Go do it now…</p>
                    <p>Was that hard or easy for you? Did it make you feel better about yourself? </p>
                    <p>You do deserve to be happy in love and you need to believe that at your core or else no one else will believe it about you. </p>
                    <p>Now, if for some reason you don't believe that you deserve to be "happy in love" then maybe this really isn't for you and I don't want you to waste anymore of your time. </p>
                    <p>You may not be ready to change your life because you still don't accept that you can change your love life. </p>
                  <p>Now, if you're ready to accept that you have the POWER to make yourself "happy in love" please read on…</p>
                    <h2>First Understand Yourself</h2>
                    <p>We're all slaves to the emotional wounds of our past. </p>
                    <p>Unless you examine your emotions, you're doomed to a cycle of hurting yourself and allowing others to hurt you too. </p>
                    <p>If you're not dating or in a relationship now I want you to ask yourself, "Why do I want to be in a relationship?" </p>
                    <p>If your answer is, "I need someone to make me happy." Then maybe you're seeking a relationship for the wrong reason. </p>
                    <p>Happiness needs to come from within and no one else besides you can truly make you happy. Plus, when you make your happiness dependent upon someone else you give him the power to take it away. </p>
                    <p>Dating and relationships should enrich and improve your life… they should NOT be the only source of your happiness. </p>
                    <p>When you meet a man who you think is your perfect match you stand a good chance of ruining the connection if you allow this "urgency-to-be-happy" feeling to creep into your mind.</p>
                    <p>You'll push this man into a relationship faster than he wants to be pushed so that you can fill a void. </p>
                    <p>You must eliminate the feeling that you NEED this NOW to be happy. You must embrace the feeling that it will happen. If you give it the relationship the time and space it needs to grow. </p>
                  <p>Never PUSH to fill your own void of happiness. </p>
                    <h2>Next, Understand Him</h2>
                    <p>No man wants to be forced into a relationship (just like no woman wants to be forced into a relationship).  </p>
                    <p>Men need to be slowly transitioned into a relationship because they have a hard-time accepting that their bachelor-hood is over. Most men also have a hard-time accepting that they must grow-up. </p>
                    <p>That's just men! Know this about them, embrace it and use it for your advantage. </p>
                    <p>Most women don't naturally understand how to maintain passion with a man for more than a few months. After this "honeymoon phase" the man, of course, naturally becomes distant and doubts whether he wants to make this shift in his life from single to relationship.  </p>
                    <p>And his actions may trigger feelings of regret and worthlessness in a woman who then gets angry and pushes him away further.  Now, the hopes of getting the relationship on track and to a loving place are lost! </p>
                    <p>Still, it doesn't need to be this way because simply understanding a man's mental process can make the difference between becoming a happy loving couple and heartbreak. </p>
                    <p>And this skill is not something some women have and some don't. It 's a skill that can be learned by anyone. </p>
                  <p>So what is the skill of slowly transitioning a man into a relationship, not setting off his "monogamy alarm" and maintaining passion so he stays engaged and loving?</p>
                    <h2>Become the Confident Woman You Know You Can Be</h2>
                    <p>It may shock you and maybe it's so simple you won't even believe it's true… </p>
                    <p>Yet, the secret to making a man want to be in a relationship is the "THREE C's" -</p>
                  <ol>
						<li>Confident </li>
						<li>Composed</li>
						<li>Carefree</li>
                    </ol>
                    <h4>Confident…</h4
                    ><p>Imagine if you dated a man who constantly called you and texted you because he was worried you were seeing someone else or that you might meet someone else and that was the furthest thing from your mind.</p>
                    <p>Well, eventually you may start to wonder about why this guy has such little confidence. What's wrong with him? He must have very little faith in you or this relationship.</p>
                    <p>Then those thoughts would grow in your mind and eventually rip the two of you apart. Maybe this has even happened to you before.</p>
                    <p>Well it works both ways! Unconfident women are universally unattractive to men. And by doing things that make you seem unconfident about the relationship you start to tear at the fabric of your connection. </p>
                    <h4>Composed…</h4>
                    <p>Women are more emotional then men. And sometimes we let our emotions get the better of us in relationships and we say or do things that ruin our connection with men. </p>
                    <p>It's natural to be sensitive as a woman. Still we must b aware, everything we do or say is being judged by our partner.  We can easily push him away by quickly lashing out with our emotions. </p>
                    <h4>Carefree…</h4>
                    <p>One of the easiest, most effective ways to deepen a man's attraction for you is to be happy and go with the flow! </p>
                    <p>Within reason be willing to say "YES" to having fun with him. Nothing matters too much and just enjoy your relationship. Don't over-expect anything. Focus on enjoying the moment.</p>
                    <p>Be creative, keep the relationship exciting, push negative thoughts from your mind and focus on happiness. He will feel it too and slowly get addicted to wanting to be in your presence. </p>
                    <p>How to trigger deeper commitment is a main point of focus in my eBook, Relationships By Design.</p>
                    <p>There are entire chapters explaining how you can make your own luck and learn how to make a man naturally want to only be with you. You'll see more of his inner feelings about the commitment process, how to save it if things go wrong and step-by-step breakdowns on how to make a man want a relationship with you, so that your next perfect match doesn't slip through your fingers.</p>
                    <p>The choice is yours. You can keep believing you don't deserve love or that you are just unlucky. Or you can take action now and make a positive change in your love life today by putting the power of creating a loving relationship in your own hands. </p>
                    <p>Go here now for more details on my Relationships By Design eBook Risk Free Trial free for seven days and you'll find out how to build a deeper connection with a man than you've ever experienced. </p>

                    
                                        
                  <p>Go here now for more details, <a href="/index-b.php">TAME his HEART Risk Free Trial</a> for seven days and you'll find out how to build a deeper connection with a man than you've ever experienced. </p>
                  
                                        
                                        
                                        
                    
                    
			  </div>

			</div>
			<div class="col-md-4 sidebar">
				
				<?=View::load($action)?>

				<?=View::load('locked-widget')?>

			</div>
		</div>
	</div>

<?=View::load('_frame-end')?>
