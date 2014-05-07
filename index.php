<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
 
	if (isset($_COOKIE["optin"])){
	 header('Location: https://www.tamehisheart.com/home.php');
	}
	
	
	
?>
<?=View::load('_frame-start', array('title' => 'Joanna Van Vleck\'s Tame His Heart and Turn Him ON'))?>

<div id="wrapper">
<?=View::load('header', array('optin' => 'active'))?>
<div class="container video clearfix">
  <div>
   <div class="row"> 
<div class="col-md-12">
    <h2 class="head_title">Learn What <em><u class="line">Deeply</u></em> Attracts a Man to a Woman</h2>
  </div>   
  <div class="col-md-5 text-left">
     

      <div style="padding-right:20px">
        <iframe src="//fast.wistia.net/embed/iframe/dkutiml9io?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" autoPlay="1" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="100%" height="250"></iframe>
        <script src="//fast.wistia.net/assets/external/iframe-api-v1.js"></script>
      </div>
      <div class="col-md-12 text-left">
        <?=View::load('optin-widget')?>
      </div>
   </div>
   <div class="col-md-5 hidden-xs widget">
      <span style="font-size:30px; color: black;" class="margin-top">Get the Dating and Relationship Secrets You Never Learned: </span>
      <ul class="feature">
        <li>The one thing most women don’t know about talking to a man</li>
        <li>3 reasons why he’ll run from intimacy</li>
        <li>How to never end-up as just his late night booty-call girl</li>
        <li>The 5 key elements all men find universally attractive</li>
        <li>Why he might flirt with you and still never date you</li>
        <li>The real reason behind the break-up phrase: "It’s not you, it’s me..."</li>
      </ul>
      <div class="arrow"> <i><img src="_img/redarrow.png" alt="" /></i> </div>
   </div>
   </div>
  
  </div>
</div>
<br />
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
