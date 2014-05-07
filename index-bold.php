<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
?>

<?=View::load('_frame-start', array('title' => 'Tame His Heart and Turn Him On eBook| Dating Advice to Keep Your Man Happy'))?>
	
	<div id="wrapper">
	    
		<?=View::load('header', array('optin' => 'active'))?>

		<div class="container video clearfix">
			<div class="col-md-12">
				<h2>See what men <em>REALLY</em> find attractive</h2>
			</div>
			<div class="col-md-7">
				<div class="iphone">
					<div style="padding-left:25px; padding-top:20px;"><script type="text/javascript" src="http://content.jwplatform.com/players/V12JNUz3-abT4xa2u.js"></script>
</div>
				</div>

				<?=View::load('optin-widget')?>

			</div>
			<div class="col-md-5 sidebar">
				<div class="widget hidden-xs clearfix">
					<h2>Date Him and Make Him Commit on Your Own Terms… Dating By Your Design</h2>
					<h4 style="margin-bottom:24px;margin-top:38px">Members will learn...</h4>
					<ul class="feature">
						<li>The one thing most women don’t know about talking to a man</li>
						<li>3 reasons why he’ll run from intimacy</li>
						<li>How to never end-up as just his late night booty-call girl</li>
						<li>The 5 key elements all men find universally attractive</li>
						<li>Why he might flirt with you and still never date you</li>
						<li>The real reason behind the break-up phrase: "It’s not you, it’s me..."</li>
					</ul>
					<div class="arrow">
						<i class="fa fa-mail-forward"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?=View::load('_frame-end')?>
