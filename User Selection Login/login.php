<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="loginstyles.css">
	<link rel="stylesheet" href="../bootstrap-3.4.1-dist/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="../bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
</head>
<body>

  <!-- MultiStep Form yes-->
<div class="row">
  <div class="col-md-6 col-md-offset-3">
      <form id="msform" method="POST">
          <!-- fieldsets -->
          <fieldset id="selection">
			<button type="button" class="btn btn-primary glyphicon glyphicon-chevron-left"  onclick="window.location.href = '../index.php';"></button>
				<br><h2 class="fs-title" >User Selection</h2>
              	<h3 class="fs-subtitle">Please select the user type</h3>
              	<input type="button" name="next" class="admin action-button user-selection" value="Admin Login">
              	<input type="button" name="next" class="teacher action-button user-selection" value="Teacher Login">
				<input type="button" name="next" class="student action-button user-selection" value="Student Login">
				<?php
				require 'errormsg.php';
				?>
          </fieldset>
          <fieldset id="admin">
			<button type="button" name="previous" class="previous action-button-previous glyphicon glyphicon-chevron-left"></button>
            <br><h2 class="fs-title">Admin Login</h2>
            <input type="text" name="auid" placeholder="Username">
			<input type="password" name="apwd" placeholder="Password">
            <input type="submit" name="adminlogin-submit" class="submit action-button" value="Submit" formaction="../includes/adminlogin.inc.php">
        </fieldset>
          <fieldset id="teacher">
			<button type="button" name="previous" class="previous action-button-previous glyphicon glyphicon-chevron-left"></button>
            <br><h2 class="fs-title">Teacher Login</h2>
            <input type="text" name="tuid" placeholder="Username">
			<input type="password" name="tpwd" placeholder="Password">
            <input type="submit" name="teacherlogin-submit" class="submit action-button" value="Submit" formaction="../includes/teacherlogin.inc.php">
        </fieldset>
        <fieldset id="student">
			<button type="button" name="previous" class="previous action-button-previous glyphicon glyphicon-chevron-left"></button>
            <br><h2 class="fs-title">Student Login</h2>
            <input type="text" name="suid" placeholder="Username">
			<input type="password" name="spwd" placeholder="Password">
            <input type="submit" name="studentlogin-submit" class="submit action-button" value="Submit" formaction="../includes/studentlogin.inc.php">
        </fieldset>
      </form>
  </div>
</div>
<!-- /.MultiStep Form -->

<script>


//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".admin").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().parent().find("#admin");
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".teacher").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().parent().find("#teacher");
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".student").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().parent().find("#student");
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().parent().find("#selection");
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

</script>

</body>
</html>
