<?php
	require_once(dirname(__FILE__).'/_includes/template.core.php');
	set(getIP(), true);
?>

<?=View::load('_frame-start', array('title' => 'OneTaste: The Keys to Connection'))?>
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
  <style>
  .hr { height:0; border-top:8px solid black; }
</style>

</style>


	
	<div id="wrapper">
	    
		<?=View::load('headermenuonly', array('article' => 'active'))?>

		<div class="container video clearfix">
        	<img src="/_img/barupsell.png" class="img-responsive" alt="Checkout Now" />
		  <div class="col-md-8" style="width:80%; margin-top:0px;">
				
		    <div class="article">

<h3>Order Summary</h3>

<hr style="height:3px;border:none;color:#333;background-color:#333;" />
<ul>
	<li style="font-size:18px"> Tame His Heart and Turn Him ON Downloadable eBook - $29.97 after FREE 7 Day Trial
   </li>
   </ul>
<hr style="height:3px;border:none;color:#333;background-color:#333;" />

		    </div>
   <script>         
   function moveNumbers()
{
var no=document.getElementById("no");
var option=no.options[no.selectedIndex].text;
var txt=document.getElementById("result").value;
txt=txt + option;
document.getElementById("result").value=txt;
}
</script>
</head>

<body>
<form>
Select numbers:<br>
<select id="no">
	<option>0</option>
	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
	<option>5</option>
	<option>6</option>
	<option>7</option>
	<option>8</option>
	<option>9</option>
</select>
<input type="button" onclick="moveNumbers()" value="-->"> 
<input type="text" id="result" size="20">
</form>
</body>
         
            
            
            
            
            
		  </div>
		  <div class="col-md-4 sidebar"> </div>
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
 
</div>
</div>
</div>
