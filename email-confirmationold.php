<?php
    $value = "opted in user";
    setcookie('optin', $value, time() + (10 * 365 * 24 * 60 * 60));

	require_once(dirname(__FILE__).'/_includes/template.core.php');
?>

<?=View::load('_frame-start', array('title' => 'OneTaste: Thank You for Becoming a Member'))?>
<link type="text/css" rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/smoothness/jquery-ui.css" />

<style>
  #struct14_bg {background-color: black;}
  #struct14 {
    min-height: 300px;
    max-height: 100%;
    overflow-y: scroll; 
    border: 2px solid white; 
    background-color: #f9f9f9;}
  #struct14 .img {margin: 15px 0; text-align: center;}
  #struct14 .content {margin: 15px; overflow: hidden;}
  #struct14 .content .left {float: left;}
  #struct14 .content .right {float: right;}
  #struct14 .row {margin: 0px;}
  #struct14 .right br {
    display: none;
  }
  #struct14 fieldset {
    margin-bottom: 0;
  }
  #struct14 .row label[for=differentShippingAddress] {
    display: inline-block;
    clear: none;
  }
  #struct14 .row input {
    margin-bottom: 0;
  }
  #struct14 label.checkbox {
    margin: 0;
  }
  .credit_cards, .moonray_order_form_totals {
    display: none;
  }
  #struct14 .moonray_forms input[type="submit"].mr-submit {
    background-image: inherit;
    background-color: rgb(0, 172, 237);
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
    border-image-outset: 0px;
    border-image-repeat: stretch;
    border-image-slice: 100%;
    border-image-source: none;
    border-image-width: 1;
    border:1px solid rgb(60, 139, 207);
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    display: inline-block;
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    font-size: 21px;
    font-weight: normal;
    height: 44px;
    line-height: 30px;
    list-style-type: disc;
    margin-bottom: 0px;
    padding-bottom: 6px;
    padding-left: 12px;
    padding-right: 12px;
    padding-top: 6px;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    vertical-align: middle;
  }

  #struct14 .moonray_forms input[type="submit"].mr-submit:hover {
    color: #ffffff;
    background-color: #438BCA;
    border-color: #336CA0;
  }

  body.custom .moonray_forms label {
    font-size:13px;
    line-height:100%;
  }

  body.custom table.moonray_order_form_totals {
    margin:0!important;
  }
  ul.benefits li {
    font-weight: inherit;
    font-size: 16px;
  }
#smlink a:link { color:#33348e; text-decoration: none; font-size:12px; padding-left: 5px;}
#smlink a:visited { color:#33348e; text-decoration: none; font-size:12px; padding-left: 5px;}
#smlink a:hover { color:#33348e; text-decoration: none; font-size:12px; padding-left: 5px;}
#smlink a:active { color:#7476b4; text-decoration: underline; font-size:12px; padding-left: 5px;}

</style>

<script type="text/javascript">

		jQuery(document).ready(function() {
			/*
			 * Resets and repositions all elements when called.
			 */	
			// resize explicitly
			jQuery(window).bind('resize', function() {
				jQuery().popup('reposition');
			});
			/*****
				Popup#14
			*****/
			jQuery('#struct14_bg').popup()
			.popup('assign', jQuery('.buy-btn'), 'click', 'show', {
				position: {
					x: 'overlay', 
					y: 'overlay', 
					z: 50000
				}, 
				showOptions: {opacity: 0.5}
			})
			.popup('assign', jQuery('#handler14_x, #struct14_bg'), 'click', 'hide');
			jQuery('#struct14').popup()
			.popup('assign', jQuery('.buy-btn'), 'click', 'show', {
				position: {
					x: 'center', 
					y: 'center', 
					z: 50010, 
					position: 'fixed'
				}
			})
			.popup('assign', jQuery('#handler14_x, #struct14_bg'), 'click', 'hide');
		});
	
	</script> 
	
	<div id="wrapper">
	    
		<?=View::load('header', array('article' => 'active'))?>

		<div class="container video clearfix">
			<div class="article-header col-md-12">
				<h2>Thanks for Becoming a Member!</h2> 
			</div>
			<div class="col-md-8">
				
				<div class="article">
<p>In the next 10 minutes you will recieve my welcome email. To ensure that you continue to recieve my newsletter, please add me as a contact: 
<div style="width: 300px; margin-right: 20px;">
<img src="_img/emailconfirmation.png" alt="Email Confirmation" /></div></p>


<h2>Charm Your Perfect Partner and Make Him Beg For a Commitment</h2> 
<div style="margin-left:25px; margin-top:60px; padding-top:23px"><script type="text/javascript" src="http://content.jwplatform.com/players/V12JNUz3-abT4xa2u.js"></script></div>

<br /><br /><br /><br /><br />

<ul class="list-group articles">
  <li class="list-group-item clearfix">
    <div class="details">
      <h3>Try Our e-Book RISK FREE</h3>
      <h4>Special Bonus Offer: 7-Day Risk Free Trial      </h4>
      <p style="float: left; margin-right: 10px; height: 179px;"><img src="/_img/thhbookandcds.png"></p>
      <p style="font-size: 16px;">
          <ul style="margin-bottom: 0;">
            <li style="padding: 0; font-size: 16px; font-weight:normal;">Tame His Heart and Turn Him ON eBook</li><br />
            <li style="padding: 0; font-size: 16px; font-weight:normal;">Bonus Monthly Discussions with OneTaste's Dating Experts ($20 value)</li>
          </ul><br />
          <p style="clear: both;"><a href="http://tamehisheart.com/checkout.php?optin=true" class="label label-primary label-md" style="color: white;">Read It Now</a></p>
           <div id="smlink"><a href="#" onclick="window.open('purchase-policies.html', 'purchasepolicies', 'width=500, height=800, resizable=0')">Purchase Policy</a></div>
    </div>
  </li>
</ul>




                    
			  </div>

			</div>
			<div class="col-md-4 sidebar">
<ul class="list-group articles">
					<li class="list-group-item clearfix">
						<div class="details col-sm-12">
							<h3>Try Our e-Book RISK FREE</h3>
              <h4>Special Bonus Offer: 7-Day Risk Free Trial</h4>
              <p>
                <ul>
                  <li style="padding: 0;"><span style="padding: 0; font-size: 16px;">Tame His Heart and Turn Him ON eBook</span></li>
                  <li style="padding: 0;"><span style="padding: 0; font-size: 16px;">Bonus Monthly Discussions with OneTaste's Dating Experts ($20 value)</span></li>
                 
                </ul>
              </p>
              <p style="float: left; margin-right: 10px; padding-left:60px;"><img src="/_img/thhbookandcdssm.png"></p>
            
              <p style="clear: both;"><a href="http://tamehisheart.com/checkout.php?optin=true" class="label label-primary label-md" style="color: white;">Read It Now</a><br />
             </p> 
             <div id="smlink"><a href="#" onclick="window.open('purchase-policies.html', 'purchasepolicies', 'width=500, height=800, resizable=0')">Purchase Policy</a></div>
						</div>
					</li>

				

					<li class="list-group-item clearfix" style="margin-top: 10px;">
						<div class="details col-sm-12">
							<h3>Customer Feedback</h3>
              <p><b>"I started dating again, 6 months after my break-up...</b></p>
              <p>...I was with my ex since college. Dating again was completely
awkward for me. My friends all had advice, like 'be yourself,' the sort of stuff
that doesn't really help. I read a few dating books and blogs, they all seem
like they were written by my mom!</p>
              <p>From the start your blog and e-book were different. I can tell
there's real dating experience in your philosophies. I've dated some since
reading your book and recently found a man worth my love and time. Thank you
OneTaste..."</p>
              <p><b>M.J.,</b> Sante Fe, NM</p>
              <hr/>
              <p><b>"You're the friends I wish I had...</b></p>
              <p>...because it's so rare that I actually get good advice from my
girlfriends. Why do women have to always be out to get each other... even when
they're friends?</p>
              <p>After I met you, I knew you really cared about helping me to be
happy in my love life. Every OneTaste expert I spoke with gave advice truly from
their hearts."</p>
              <p>I feel hopeful again about relationships. My perspective has
completely flipped. I know the power to be happy in love is in my control." </p>
              <p><b>W.T.,</b> San Francisco, CA</p>
              <hr/>
              <p><b>"I have a master's degree in Gender Studies and Psychology...</b></p>
              <p>...I admit I learned more about relationships from your e-book
than my grad school textbooks. Thanks for standing up for women!</p>
              <p>Despite everything I know about relationships, I started
thinking I'd be happier alone. Your book gave me hope and power to say what's on
my mind to men. This is the sort of wisdom I'll pass to my daughter (one day)."</p>
              <p>I've already recommended your program and book to many of my
girlfriends. And I hope you don't mind that I teach a few workshops in the
Vancouver area and show some of your DVDs."</p>
              <p><b>S.C.,</b> Vancouver, Canada</p>
            </div>
					</li>

				</ul>
			</div>
		</div>
	</div>

<?=View::load('_frame-end')?>

<div id="struct14_bg"></div>
<div id="struct14">
<div class="content">
<div class="right">
	  <!-- HANDLER --><br />
	    <a id="handler14_x" href="#">X</a><br />
	  <!-- HANDLER -->
        </div>
<div class="left">
    <link type="text/css" rel="stylesheet" href="https://forms.moon-ray.com/v2.4/include/minify/?g=moonrayCSS" />
    <link type="text/css" rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/smoothness/jquery-ui.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://forms.moon-ray.com/v2.4/include/minify/?g=moonrayJS"></script>
    <script type="text/javascript" src="https://forms.moon-ray.com/v2.4/include/minify/?g=moonrayJSCart"></script>
    	<script type="text/javascript">
	(function($){
    $(document).bind('ready.moonray_order_form_jb_435',function(){
        $("div.jb_435 form").moonrayOrderForm({
            timeZoneOffset:8,
            products:{"11":{"chargedToday":0,"chargedLater":[],"delayDate":false,"taxable":false,"shippable":true,"hasPaymentPlans":true}}
        }); 
    });
})(jQuery);
	</script>    <script type="text/javascript" src="https://www1.moon-ray.com/v2.4/analytics/genf.php?f=p2c12106f14"></script>
</div>
</div>
</div>
