<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
		
		
	if (isset($_COOKIE["optin"])){
	setcookie("paytoread", "", time()-3600);
	$action = "free-widget3";
	}
	elseif(isset($_COOKIE["paytoread"])){
    header('Location: /paywall.html?article=articlerthree');
	$action = "locked-widgetold";
	}
	else {
	$value = "on article 1";
	setcookie("paytoread", $value, time() + (10 * 365 * 24 * 60 * 60));
	$action = "locked-widget4";
	}
	
	
?>

<?=View::load('_frame-start', array('title' => 'How Can I Get My Man Back'))?>
	
	<div id="wrapper">
	    
		<?=View::load('headernosp', array('article' => 'active'))?>

		<div class="container video clearfix">
			<div class="article-header col-md-12">
				<div class="pull-left avatar">
					<img src="/_img/joanna.jpg" alt="" />
				</div>
				<h2 class="head_black">One Never Fail Strategy To Get Him Back…<sub>by Joanna Van Vleck</sub></h2>
			</div>
			<div class="col-md-8">
				
<div class="article">
					<p class="excerpt"><img class="img-responsive" src="_img/FDP_serious_3.jpg" alt="" /><em style="margin-bottom:28px">So, you broke up and it feels like the end…</em></p>

					<p>The good new… it&rsquo;s not the end. There are ways to get back together.</p>
                    <p>
Don&rsquo;t feel hopeless yet. Feeling negative or sorry for yourself will not help you right now. Now more than ever you need to be ready to change. <br /><br />
You first need to recognize what were your mistakes that led to the break-up. Yes, some of the blame is on him too. Still, let&rsquo;s focus on what you can change from within</p> 
		<p>If even if it seems like, everything is falling apart… trust me your second chance to get back together with him is coming very soon. </p>

					<H2>He Still Wants You… Yet His Pride Keeps Him From Saying It</h2>
                    
                    <p>Here’s why he’ll come back…</p>

					<p>Don’t believe the myths about men not being very emotional. He loves you as intensely as you love him. He won’t be able to just forget about you and the life you two have together. He can’t dismiss his emotions easily, just like you can’t.
</p>
					<p>Yet, a much bigger factor for him is his pride. What’s troubling him most right now is he probably said some things during your break-up that he has trouble dismissing because of his pride. </p>

<p>So, his emotion of wanting to come back to you is conflicting with his male pride of what he said.  It’ll take him a little time to get over his pride and then he’ll want to see you again. </p>

<p>He’ll likely come up with some excuse to get together that doesn’t reveal his true feelings of wanting to get back together.</p>

<p>Now, here’s the tricky part…</p>
<p>When you see him again this is your one chance to fix things. And it can go very wrong because of two reasons…</p>
	    <ol style="font-size:12px; text-decoration:none;">
                      <li style="font-size:16px; text-decoration:none;">You still may not know what you said or did or even the deeper factors that led to the break-up in the first place… so you may make the same mistakes again.
                      </li>
                      <br/>
                      <li style="font-size:16px; text-decoration:none;">He will try not to reveal his true emotions because of his pride. He may put on a mask of annoyance or anger. Don&rsquo;t fall into the trap of arguing with him!</li>
	    </ol>
	    <h2><em><h2>Your One Chance to Get Him Back</h2></em></h2>

<p> Whether he comes over to get the rest of his stuff or you meet for coffee to talk things over…</p>

<p>This is your one chance to win him back and this moment can be very tricky.</p>

<p>And I&rsquo;m not just telling you this to scare you or because it happens often. I&rsquo;m telling you this because I&rsquo;ve seen so many women mess up this moment from the years I&rsquo;ve spent coaching women and studying their relationships.
</p>
 <p> I&rsquo;ve helped many women get this moment right, if you listen to what I have to say and use it. </p>
                     <p> The point here is that you could use this meeting with him to try and prove you were right and continue the argument that led to your break-up.</p>
                     <p> And, of course, because of his pride he will certainly argue with you and get even angrier. </p>
                    <p>  Or you can avoid the &ldquo;pride trap&rdquo; and &ldquo;change his focus&rdquo; by playing on his male emotions.  Your best bet would be to make him feel like everything is OK in this meeting. You are not angry and make him enjoy seeing you in this moment so that it recalls all of the good feelings of your relationship for him.</p>
 <h2>That&rsquo;s The Quick Fix, Now Here&rsquo;s the Real Fix…  </h2>
                     <p> Once you&rsquo;re back together, eventually the problems that made you break-up the first time will resurface and tear you apart again. So, the real questions to answer to fix your relationship are:</p>
 <p> &ldquo;What were the problems that led to the break-up?&rdquo; and &ldquo;How can you fix them?&rdquo;</p>
                     <p> The reality is that there are so many mistakes women unconsciously make in relationships that push men away and led to break-ups. It doesn&rsquo;t even seem fair that a few things you may not even be aware you are doing might ruin your relationship… still I&rsquo;ve seen it happen time and again. </p>
                     <p> To really get yourself on the right track to keep your relationship you need to be aware of these common mistakes and how they affect his thought process about commitment.</p>
                     <p> In my eBook, <a href="index-b.html"><em>Tame His Heart and Turn Him ON,</em></a> I&rsquo;ll reveal to you what these common relationship mistakes are and how you can avoid them. Not only will I show you completely how to get back together with women… I&rsquo;ll show you how to never make him feel like he wants to leave. </p>
                      <p>This is your chance to really see what&rsquo;s going inside his head and stop your unconscious habits that tear apart your relationship. Go here now for more details on my <a href="index-b.html"><em><u>Tame His Heart and Turn Him ON </u></em><u>eBook</u><u> Risk Free Trial</u></a> free for seven days and you&rsquo;ll find out how to build a deeper connection with a man than you&rsquo;ve ever experienced. </p>
                    
                    
                    
                    
			  </div>

			</div>
			<div class="col-md-4 sidebar">
				
				<?=View::load($action)?>


			</div>
		</div>
	</div>

<?=View::load('_frame-end')?>
