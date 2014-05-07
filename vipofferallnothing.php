<?php


	require_once(dirname(__FILE__).'/_includes/template.core.php');
?>

<?=View::load('_frame-start', array('title' => 'OneTaste: 7-Day Risk Free Trial'))?>
	
	<div id="wrapper">
	    
		<?=View::load('headermenuonly', array('checkout' => 'active', 'trust' => 'hidden'))?>
  <script type="text/javascript" src="https://forms.moon-ray.com/v2.4/include/minify/?g=moonrayJS"></script><link rel="stylesheet" type="text/css" href="http://forms.moon-ray.com/v2.4/include/minify/?g=moonrayCSS"><script type="text/javascript" src="https://www1.moon-ray.com/v2.4/analytics/genf.php?f=p2c12106f30"></script>
   </div></div>
	
	
<?=View::load('_frame-end')?>
