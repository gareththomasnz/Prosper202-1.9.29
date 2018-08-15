<?php
include_once(substr(dirname( __FILE__ ), 0,-14) . '/202-config/connect.php'); 

AUTH::require_user(); 

template_top('Prosper202 ClickServer App Store');  ?>

<div class="row home">
  <div class="col-xs-12">
  	<h6>Prosper202 Howto Videos</h6>
	<small>A step-by-step walkthrough to setup a tracking campaign with Prosper202. Watch these videos and learn how to create your first campaign with Prosper202</small>
  </div>
</div>
  <br/>
  <h6>Proseper202 Video Tutorials</h6>
  <center><iframe width="720" height="485" src="https://www.youtube.com/embed/videoseries?list=PLW83L64m2zZujbQv7d2dKfK4RUc3-YFvw" frameborder="0" allowfullscreen></iframe></center>
  <div class="row form_seperator" style="margin-top:15px;">
<?php template_bottom(); ?>