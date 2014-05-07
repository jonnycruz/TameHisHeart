<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
	
	if (isset($_COOKIE["optin"])){
	setcookie("paytoread", "", time()-3600);
	$action = "free-widget";
	}
	elseif(isset($_COOKIE["paytoread"])){
	$action = "locked-video";
	}
	else {
	$action = "locked-widget";
	}
?>

<?=View::load('_frame-start', array('title' => 'Improve Your Relationship With Our Training Catalog'))?>
	
	<div id="wrapper">
	    
		<?=View::load('header', array('catalog' => 'active'))?>

		<div class="container video clearfix">
			<div class="col-md-12">
				<h2 class="head_black">Improve Your Relationship With Help From Our Training Catalog</h2>
			</div>
			<div class="col-md-7">
				
				<div class="article">
					<p>If you're ready to design your realtionships on your terms and never second guess about how a man thinks in love and commitment, you need the secrets that naturally confident women know.</p>
					<p>Joanna Van Vleck and the OneTaste team of experts experts are your guides to the male mind and all the dating and relationship secrets you need to know to attract your ideal man.</p>
					<p>All of OneTaste's programs are available for instant downloading. And because it's guaranteed to help you... try any of them completely RISK FREE.</p>
				</div>


				<!-- Product Group -->

				<h3><i class="fa fa-arrow-circle-right"></i> OneTaste Foundation Programs</h3>

				<ul class="list-group articles">
					<li class="list-group-item clearfix">
						<div class="col-sm-3"><img src="/_img/product.png" style="width:80%" alt="" /></div>
						<div class="details col-sm-9">
							<h3>Tame his Heart and Turn Him On eBook</h3>
							<p>If you want to increase your dating and realtionship success with men, "Tame his Heart and Turn Him On” is for you. It contains 100+ pages of tips, strategies, real-life stories, and real-world expereiences. You'll never be at a loss again for what to do and say in the hardest to figure out situations that come up with men.</p>
							<a href="index-b.html">Read more <i class="fa fa-angle-double-right"></i></a>
						</div>
					</li>

					<li class="list-group-item clearfix">
                    <div class="col-sm-3"><img src="/_img/intimate-a.jpg" style="width:80%" alt="" /></div>
						<div class="details col-sm-9">
							<h3>The Keys to a Lasting Intimate Connection</h3>
							<p>Are you ready to STOP being used by men for just sex and eliminate all the guess-work from wondering if a guy wants a commitment? Ready to finally have the relationship you deserve with the man you desire and have him return that love to you? </p>

<p>Create a connection that makes him beg you to be his girlfriend. Go beyond physical attraction and make him want you for you for the long term. </p> 

</p>
							<a href="intimate-connection.php">Learn more <i class="fa fa-angle-double-right"></i></a>
						</div>
					</li>

					<li class="list-group-item clearfix">
						<div class="col-sm-3" style="text-align:center"><i style="font-size:7em;margin-top:10px"><img src="_img/thhcds.png" alt="" style="float:left; padding 10px 10px 10px 10px;"/></i></div>
						<div class="details col-sm-9">
							<h3>Discussion with OneTaste's Dating Experts</h3>
                           
							<p>You have your destination: an amazing relationship with a great guy. But without a map, you'll take a lot of unnecessary turns and waste time getting there. To get and keep him, you need to know how a guy operates when it comes to dating and how to speak his language so you get what you want… easily.</p>
							<a href="experts.php">Learn more <i class="fa fa-angle-double-right"></i></a>
						</div>
					</li>                    
				</ul>
				

				<!-- Product Group -->




				<!-- Product Group -->
				


			</div>
            
			<div class="col-md-5 sidebar">
				
				<?=View::load('video-widget')?>

				<?=View::load('letter-widget')?>

			</div>
            <div class="col-md-4 sidebar testimonials">

						<div class="widget testimonials clearfix">
                        <br />
	<h2>Customer Feedback</h2>
	<div class="note">
		<h4>"I started dating again 6 months after my break-up...</h4>
		<p>...I was with my ex since college. Dating again was  completely awkward for me. My friends all had advice, like 'be yourself,' the sort of stuff that doesn’t really help. I read a few dating books and blogs, they all seem like they were written by my mom!</p>  
		<p>From the start your blog and e-book were different. I can tell there’s real dating experience in your philosophies. I’ve dated some since reading your book and recently found a man worth my love and time. Thank you OneTaste.."</p>
		<div class="credit"><strong>M.J.</strong> Santa Fe, NM</div>
	</div>
	<div class="note">
		<h4>"You're the friends I wish I had...</h4>
		<p>...because it’s so rare that actually get good advice from my girlfriends. Why do women have to always be out to get each other… even when they’re friends?</p>
		<p>After I met you I knew you really cared about helping me be happy in my lovelife. Every OneTaste expert I spoke with gave advice truly from their hearts. </p>
		<p>I feel hopeful again about relationships. My perspective has completely flipped. I know the power to be happy in love is in my control."</p>
		<div class="credit"><strong>W.T.</strong> San Francisco, CA</div>
	</div>
	<div class="note">
		<h4>"I’ve got a master’s degree in Gender Studies and Psychology...</h4>
		<p>...I admit I learned more about realtionships from your e-book than my grad school textbooks. Thanks for standing up for women!</p>
		<p>Despite everything I know about relationships I started thinking I’d be happier alone. Your book gave me hope and power to say what’s on my mind to men. This is the sort of wisdom I’ll pass to my daughter (one day).</p>
		<p>I've already recommended your program and book to many of my girlfriends. And I hope you don’t mind that I teach a few workshops in the Vancouver area and show some of your DVDs."</p>
		<div class="credit"><strong>S.C.</strong> Vancouver, Canada</div>
	</div>
</div>
					</div>
		</div>
		<div class="container optin">
	    </div>
	</div>
	
<?=View::load('_frame-end')?>
