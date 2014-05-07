<?php
if (!isset($_POST['q2'])) {
header("Location:quiz2.php");	
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
          <form id="commentForm" method="post" action="quiz4.php" class="quiz">
            <input name="quiz" type="hidden" value="submit">
            <div id="rootwizard">
              <ul style="display:none;">
                <li><a href="#tab1" data-toggle="tab">1</a></li>
                <li><a href="#tab2" data-toggle="tab">2</a></li>
                <li><a href="#tab3" data-toggle="tab">3</a></li>
                <li><a href="#tab4" data-toggle="tab">4</a></li>
                <li><a href="#tab5" data-toggle="tab">5</a></li>
              </ul>
              <div class="tab-content">
                <div data-alerts="alerts" data-fade="5000"></div>
                <div class="tab-pane" id="tab1">
                  <div class="control-group"> <span>3. How often and how serious do you argue with a man your dating?</span>
                    <div class="controls">
                      <label>a.
                        <input name="q3" value="1a" type="radio">
                        We fight often about small stuff.</label>
                      <label>b.
                        <input name="q3" value="1b" type="radio">
                        We never fight.</label>
                      <label>c.
                        <input name="q3" value="1c" type="radio">
                        We bottle up our anger, then explode one each other.</label>
                      <label>d.
                        <input name="q3" value="1d" type="radio">
                       I bring up important relationship issues and he doesn't listen.</label>
                    </div>
                    <div class="note">Question 3 of 5</div>
                  </div>
                </div>
                
                
                <ul class="pager wizard">
                  <li class="next"><a href="javascript:;" class="red">Next Question</a></li>
                </ul>
              </div>
            </div>


                <input name="q1" type="hidden" value="<?=$_POST['q1']?>"/>
                <input name="q2" type="hidden" value="<?=$_POST['q2']?>"/>
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
