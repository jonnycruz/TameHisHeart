<?php
if (!isset($_POST['q1'])) {
header("Location:quiz.php");	
}
	require_once(dirname(__FILE__).'/_includes/template.core.php');
	

?>
<?=View::load('_frame-start-quiz', array('title' => 'Why He Might Break Up With You'))?>

<div id="wrapper">
  <div class="container">
    <div id="header" style="margin: 0 auto; max-width:700px; width:80%;">
      <h2 align="center" style="margin-top:0px;">Find Out Why He's Pulling Away From You QUIZ</h2>
    </div>
  </div>
  <div class="container" style="margin: 0 auto; max-width:800px; width:auto;">
    <div id="header" style="margin: 0 auto 0 auto; width: 90%; background-color:#FFFFFF;">
		<div style="border: 10px solid #c44771;">
        <div class="row">
        <div class="col-md-12">
        <img alt="" src="_quiz/img/quizbanner.jpg" style="width: 100%;"/>
        </div>
        </div>
        <div class="row">
        <div class="col-md-12">
        
                  <form id="commentForm" method="post" action="quiz3.php" class="quiz">
            <input name="quiz" type="hidden" value="submit">
            <div id="rootwizard">
              <ul style="display:none;">
                <li><a href="#tab1" data-toggle="tab">1</a></li>
              </ul>
              <div class="tab-content">
                <div data-alerts="alerts" data-fade="5000"></div>
                <div class="tab-pane" id="tab1">
                  <div class="control-group"> <span>1. When do you start calling a guy your boyfriend?</span>
                    <div class="controls">
                      <label>a.
                        <input name="q2" value="1a" type="radio">
                        Only after he calls me girlfriend first. </label>
                      <label>b.
                        <input name="q2" value="1b" type="radio">
                        After about a month of dating. </label>
                      <label>c.
                        <input name="q2" value="1c" type="radio">
                        After a week of dating... it's not a big deal.</label>
                      <label>d.
                        <input name="q2" value="1d" type="radio">
                        Only after we have the "relationship talk." </label>
                    </div>
                    <div class="note">Question 1 of 5</div>
                  </div>
                </div>
                <ul class="pager wizard">
                  <li class="next"><a href="javascript:;" class="red">Next Question</a></li>
                </ul>
              </div>
            </div>
				 <input name="q1" type="hidden" value="<?=$_POST['q1']?>"/>
                <input name="afft_" type="hidden" value=""/>
                <input name="aff_" type="hidden" value=""/>
                <input name="sess_" type="hidden" value=""/>
                <input name="ref_" type="hidden" value=""/>
                <input name="own_" type="hidden" value=""/>
                <input name="oprid" type="hidden" value=""/>
                <input name="contact_id" type="hidden" value=""/>
          </form>
        
        </div>  
        </div>
      </div>
      </div>
    </div>
    <br />
    <br />
  <img id="trust" src="_img/trust-light.png" class="trust" style="margin:-14px 0 0px 6px" alt="OneTaste seen on..." /> </div>
  </div>

<?=View::load('_frame-endc')?>
