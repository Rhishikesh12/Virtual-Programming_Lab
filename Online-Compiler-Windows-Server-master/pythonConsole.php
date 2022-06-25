<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Python Console</title>
        <meta name="description" content="">
        <link rel="stylesheet" href="../bootstrap-3.4.1-dist/css/bootstrap.min.css">
        <script src="../bootstrap-3.4.1-dist/jquery/jquery-3.4.1.min.js"></script>
        <script src="../bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>

        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css"> 
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../fontawesome-free-5.12.0-web/fontawesome-free-5.12.0-web/css/fontawesome.min.css">
        <!-- <link rel="icon" type="image/png" href="img/ruet.png"> -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <link rel="stylesheet" href="allstyles.css">
        
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#myPage">VL</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
        <li><a href="../Student Index/studentindex.php">HOME</a></li>
        <div class="wrap">
  <button type="submit" onclick="copyFormValue();" class="btn btn-outline-success nav-btn" data-toggle="modal" data-target=".bs-example-modal-new">SUBMIT</button>
</div>

  <div class="modal fade bs-example-modal-new" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            
    <div class="modal-dialog">
              
      <div class="modal-content">
                
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="gridSystemModalLabel">Proceed to submission</h4>
        </div>
        <form action="../includes/std-prog.inc.php" method="POST">
        <div class="modal-body">
            <!-- <label for="out" class="form-control-label big">Username</label> -->
            <input type="text" name="uid" class="form-control inline" placeholder="Username" autocomplete="off">
            <!-- <label for="out" class="form-control-label big">Experiment Name</label> -->
            <input type="text" name="expid" class="form-control inline" placeholder="Experiment Name" autocomplete="off">
            <h5>The data to be submited...</h5>
            <div class="row">
            <div class="col-sm-4">
            <label class="form-control-label code-label-blue">Code</label>
            <textarea class="form-control" id="code" name="code" rows="10" cols="50" placeholder="Enter Your Input"></textarea>
            </div>
            <div class="col-sm-4">
            <label class="form-control-label code-label-blue">Input</label>
            <textarea class="form-control" id="input" name="input" rows="10" cols="50" value="hello" placeholder="Enter Your Input"></textarea>
            </div>
            <div class="col-sm-4">
            <label class="form-control-label code-label-blue">Output</label>
            <textarea class="form-control" id="output" name="output" rows="10" cols="50" placeholder="Enter Your Input"></textarea>
            </div>
        </div>
              
        <div class="modal-footer">
          <button type="submit" name="exp-submit" class="btn btn-primary dark-btn">Submit</button>
            </form>
        </div>
              
        </div>
      </div>
            
    </div>
        </ul>
      </div>
    </div>
  </nav>
<div>

<h3 style="text-align:center; margin-top: 70px;">Python Compiler</h3>
</div>
<div class="row-no-gutters" style="margin-top: -90px;">
<div class="col-sm-1"></div>
<div class="col-sm-10">
<div class="row-no-gutters">
<div class="form-group">
<form id="form" name="f2" method="POST" >
<div class="col-sm-10 container code-nav">
<!-- </form>
<button type="submit" name="exp-submit" class="btn btn-outline-success space pos-left" onclick="submitForm('../includes/std-prog.inc.php')">Submit</button>
<input type="text" id="code" name="uid" class="form-control pos-left" placeholder="Username" autocomplete="off">
<input type="text" name="expid" class="form-control pos-left" placeholder="Experiment Name" autocomplete="off">
</form> -->
<button class="btn btn-outline-success my-2 my-sm-0" id="st" type="submit" formaction="compilejava.php"><i class='fas fa-play'></i></button>
          
</div>
<div class="col-sm-8">
<label for="out" class="form-control-label code-label">Code</label>
<textarea id="code1" class="form-control" name="code" rows="10" cols="50" placeholder="Write Your Code here" style="color: #fff;"></textarea>
<label for="out" class="form-control-label code-label">Output</label>
<textarea id='div' class="form-control output" name="output" rows="10" cols="50" placeholder="Output appears here"></textarea><br><br>
</div>
<div class="col-sm-4">
<label for="out" class="form-control-label code-label">Input</label>
<textarea id="input1" class="form-control extended" name="input" rows="10" cols="50" placeholder="Enter Your Input"></textarea><br>
</div>


<!-- </div>
<div class="col-sm-2">
</div>
<div class="col-sm-10">
<label for="out" class="form-control-label code-label">Code</label>
<textarea id="code1" class="form-control extended" name="code" rows="10" cols="50" placeholder="Write Your Code here" style="color: #fff;"></textarea>
</div>
<div class="col-sm-10">
<label for="out" class="form-control-label code-label">Output</label>
<textarea id='div' class="form-control extended" name="output" rows="10" cols="50" placeholder="Output appears here"></textarea><br><br>
</div>
<div class="col-sm-2">
<label for="out" class="form-control-label code-label">Input</label>
<textarea id="input1" class="form-control extended" name="input" rows="10" cols="50" placeholder="Enter Your Input"></textarea><br>
</div> -->


<!-- public class AddTwoIntegers {
    public static void main(String[] args) {
        
        int first = 10;
        int second = 20;
        int sum = first + second;
        System.out.println("The sum is: " + sum);
    }
} -->

</form>
<script type="text/javascript">
  
  $(document).ready(function(){

     $("#st").click(function(){
  
           $("#div").html("Loading ......");


     });

  });


</script>

<script>

//jquery autoupdate funtion
$("#code1").on("change keyup", function(){
	$("#code").not($(this)).val($(this).val());
});
$("#div").on("change keyup", function(){
	$("#output").not($(this)).val($(this).val());
});
$("#input1").on("change keyup", function(){
	$("#input").not($(this)).val($(this).val());
});


//Onload modal
// $(document).ready(function(){       
//    $('#myModal').modal('show');
//     }); 


//wait for page load to initialize script\

$(document).ready(function(){

    //listen for form submission
    $('#form').on('submit', function(e){
      //prevent form from submitting and leaving page
      e.preventDefault();

      // AJAX 
      $.ajax({
            type: "POST", //type of submit
            cache: false, //important or else you might get wrong data returned to you
            url: "compilejava.php", //destination
            datatype: "html", //expected data format from process.php
            data: $('form').serialize(), //target your form's data and serialize for a POST
            success: function(result) { // data is the var which holds the output of your process.php

                // locate the div with #result and fill it with returned data from process.php
                $('#div').html(result);
                $('#output').html(result);
            }
        });
    });
});

</script>

</div>
</div>
</div>
</div>
<!--<script>
"use strict";
function submitForm(oFormElement)
{
  var xhr = new XMLHttpRequest();
  var display=document.getElementById('div');
  xhr.onload = function(){ display.innerHTML=xhr.responseText; }
  xhr.open (oFormElement.method, oFormElement.action, true);
  xhr.send (new FormData (oFormElement));
  return false;
}
</script>-->
<!--<label for="out">Output</label>
<textarea id='div' class="form-control" name="output" rows="10" cols="50"></textarea><br><br>-->


</body>
</html>


