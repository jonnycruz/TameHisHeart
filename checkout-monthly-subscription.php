<?php


	require_once(dirname(__FILE__).'/_includes/template.core.php');
?>

<?=View::load('_frame-start', array('title' => '30-Day Risk Free Trial | Discussions with Dating Experts'))?>
	
	<div id="wrapper">
	    
		<?=View::load('headermenuonly', array('checkout' => 'active', 'trust' => 'hidden'))?>

		<div class="container video clearfix">
			<img src="/_img/bar.png" class="img-responsive" alt="Checkout Now" style="margin:0px 0px 0px 0px 0px; display: block; margin-left: auto; margin-right: auto; width:60%;" />
            <h3 style="margin:0px 0px 0px 0px; text-align:center;">Billing &amp; Shipping Information</h3>
           <div class="col-md-7" style="float:left; display:block; margin-left:auto; margin-right:auto;">
       <?=View::load('moon-ray-orderms')?>
			</div>

			<div class="col-md-5 sidebar pull-right" style="float:right">
				
				<div class="article small clearfix">
				  <h5><label class="label label-primary">$0.00 Due Today</label>
				  <h5 style="margin-bottom:0px;">Discussions with OneTaste’s Dating Experts</h5>
			     <p style="margin-top:0px;">No initial charge then $19.97 per month
			     </p>
                 <p><img src="_img/thhcds.png" alt="" style="float:left; padding 10px 10px 10px 10px;"/></p>

					<p>A flow of dating and relationship advice from expert authors, life-coaches, spiritual guides and more...</p><br /><br /><br />

					<ul>
						<li>Gain insider dating-edges over other women</li>
						<li>Know exactly how to make a man commit </li>
						<li>Boost your relationship confidence</li>
						<li>Prevent break-ups form happening </li>
						<li>Mind-expanding insights to improve your love life </li>
						<li>And with new topics every month, there's much, much more	<br />
						  <br />
						</li>
                         <strong>100% GUARANTEE:</strong>  cancel within 30-days just by replying to your confirmation email with “I want to cancel” and you won't be charged.
					</ul>
				   
				</div>
			</div>

		
			
		</div>
		<div class="container optin">
		</div>
	</div>
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?1xW7z6SZOxFxZraQZ2TurTnt6sgeLBJi';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->	
<?=View::load('_frame-end')?>
