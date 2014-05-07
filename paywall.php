<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
	
	$bottomarticle = $_GET["article"];
	
	
	if (isset($_COOKIE["optin"])){
	setcookie("paytoread", "", time()-3600);
	$action = "locked-widget";
	}
	elseif(isset($_COOKIE["paytoread"])){
	$action = "locked-widgetpw";
	}
	else {
	$action = "locked-widget";
	}
?>

<?=View::load('_frame-start', array('title' => 'This Article is for Members Only - Sign Up For Free Access'))?>
	
	<div id="wrapper">
	    
		<?=View::load('header', array('paywall' => 'active'))?>

		<div class="container video clearfix">
			<div class="col-md-12">
				<h2 class="paywall"><i class="fa fa-lock"></i>This Article is Members Only.  <a href="#join">Join for FREE</a></h2>
			</div>
			<div class="col-md-8">
				
			<a name="Top"></a>
			<?=View::load('optin-feature')?>
                
                <?=View::load($bottomarticle)?>
                
			</div>
			<div class="col-md-4 sidebar">
				
				<?=View::load($action)?>

			</div>
		</div>
	</div>
	
<?=View::load('_frame-end')?>
