<?php
if (!isset($_POST['q3'])) {
header("Location:quiz3.php");	
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
          <form id="commentForm" method="post" action="quiz5.php" class="quiz">
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
                  <div class="control-group"> <span>4. The man you're dating says he'll call you at 6:00pm and then he doesn't. How do you react? </span>
                    <div class="controls">
                      <label>a.
                        <input name="q4" value="1a" type="radio">
                        I try calling. If he doesn't answer I text him until he replies.</label>
                      <label>b.
                        <input name="q4" value="1b" type="radio">
                        If he doesn't answer I start wondering if he doesn't like me.</label>
                      <label>c.
                        <input name="q4" value="1c" type="radio">
                        I assume he's with another girl and I’m not very important to him. </label>
                      <label>d.
                        <input name="q4" value="1d" type="radio">
                        I don’t think about it and wait for him to call.</label>
                    </div>
                    <div class="note">Question 4 of 5</div>
                  </div>
                </div>
                
                <ul class="pager wizard">
                  <li class="next"><a href="javascript:;" class="red">Next Question</a></li>
                  <li class="next finish" style="display:none;"><a href="javascript:;" class="red">Finish Question</a></li>
                </ul>
              </div>
            </div>


                <input name="q1" type="hidden" value="<?=$_POST['q1']?>"/>
                <input name="q2" type="hidden" value="<?=$_POST['q2']?>"/>
                <input name="q3" type="hidden" value="<?=$_POST['q3']?>"/>
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
