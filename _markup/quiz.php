<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
	
	
?>

<?=View::load('_frame-start', array('title' => 'Why He Might Break Up With You'))?>
	
	<div id="wrapper">
	    
		<?=View::load('headernosp', array('article' => 'active'))?>

		<div class="container video clearfix">
		  <div class="col-md-8">
				
			  <div class="article">
					<p class="excerpt"><img class="img-responsive" src="_img/FDP_romantic_nolove.jpg" alt="" style="float:left;"/><h3 style="margin-top:0px;">Find out Why He's Pulling Away From You!</h3>
					<p>In 60 seconds your <strong><u>score</u></strong> from this <strong><u>quiz</u></strong> tells you exactly why you may be scaring a man off from dating you.<br />
					  <br />
					  <br />

					  For the best feedback, be as HONEST as you can with your answers.<br />
				<div id="surveyMonkeyInfo"><div><script src="https://www.surveymonkey.com/jsEmbed.aspx?sm=TlOJ_2b4rO9iGgbw5IwpJTIA_3d_3d"> </script></div></div></p>
</div>

			</div>
			<div class="col-md-4 sidebar">
				 <?=View::load('letter-widget')?>
				<?=View::load('testimonials-widget')?>

			</div>
		</div>
	</div>

<?=View::load('_frame-end')?>
