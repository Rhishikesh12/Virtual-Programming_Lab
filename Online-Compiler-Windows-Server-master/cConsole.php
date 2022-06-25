<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>C Console</title>
        <meta name="description" content="">
        <link rel="stylesheet" href="../bootstrap-3.4.1-dist/css/bootstrap.min.css">
        <script src="../bootstrap-3.4.1-dist/jquery/jquery-3.4.1.min.js"></script>
        <script src="../bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>

        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css"> 
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
          <li><a href="#Exit">Exit</a></li>
          <!-- <li><a href="#about">ABOUT</a></li> -->
          <!-- <li><a href="#contact">CONTACT</a></li> -->
          <li><a href="../Student Index/studentindex.php">HOME</a></li>
        </ul>
      </div>
    </div>
  </nav>
<div>
<h3 style="text-align:center; margin-top: 70px;">c Programing</h3>
</div>
<div class="row" style="margin-top: -90px;">
<div class="col-sm-2"></div>
<div class="col-sm-10">
<div class="row">
<div class="form-group">
<form action="compilec.php" id="form" name="f2" method="POST" >

<div class="col-sm-8">
<label for="out" class="form-control-label">Code</label>
<textarea class="form-control" name="code" rows="10" cols="50" placeholder="Write Your Code here" style="color: #fff;"></textarea><br>
<input type="submit" id="st" class="btn btn-danger" value="Run Code"><br><br>
<label for="out" class="form-control-label">Output</label>
<textarea id='div' class="form-control output" name="output" rows="10" cols="50" placeholder="Output appears here"></textarea><br><br>
</div>
<div class="col-sm-4">
<label for="out" class="form-control-label">Input</label>
<textarea class="form-control extended" name="input" rows="10" cols="50" placeholder="Enter Your Input"></textarea><br>
</div>


</form>

<script type="text/javascript">
  
  $(document).ready(function(){

     $("#st").click(function(){
  
           $("#div").html("Loading ......");


     });

  });


</script>

<script>
//wait for page load to initialize script
$(document).ready(function(){
    //listen for form submission
    $('form').on('submit', function(e){
      //prevent form from submitting and leaving page
      e.preventDefault();

      // AJAX 
      $.ajax({
            type: "POST", //type of submit
            cache: false, //important or else you might get wrong data returned to you
            url: "compilec.php", //destination
            datatype: "html", //expected data format from process.php
            data: $('form').serialize(), //target your form's data and serialize for a POST
            success: function(result) { // data is the var which holds the output of your process.php

                // locate the div with #result and fill it with returned data from process.php
                $('#div').html(result);
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


