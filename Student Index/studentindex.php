<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="indexstyles.css">

 <link rel="stylesheet" href="../bootstrap-3.4.1-dist/css/bootstrap.min.css">
 <script src="../bootstrap-3.4.1-dist/jquery/jquery-3.4.1.min.js"></script>
 <script src="../bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
 <script src='https://kit.fontawesome.com/a076d05399.js'></script>

 <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css"> 
 <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#myPage">VPL</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#Courses">COURSES</a></li>
          <li><a href="#about">ABOUT</a></li>
          <!-- <li><a href="#contact">CONTACT</a></li> -->
          <form class="form-inline my-2 my-lg-0" action="../includes/logout.inc.php" method="POST" style="float: right;">
            <button class="btn btn-primary my-2 my-sm-0" type="submit" name="logout-submit">LOGOUT</button>
          </form>
        </ul>
      </div>
    </div>
  </nav>


<div class="jumbotron text-center">
  <h1>Virtual Lab</h1>
  <p>Perform, Practice and Learn</p>
  <form class="form-inline">
    <div class="input-group">
      <input id="mySearch" type="text" class="form-control" size="50" placeholder="Search Courses.." required>
      <div class="input-group-btn">
        <button type="submit" class="btn btn-danger"><i class="fa fa-search"></i></button>
      </div>
    </div>
  </form>
</div>


<div id="Courses" class="container-fluid text-center bg-grey">
  <h2>Courses</h2>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="card">
        <img class="card-img-top" src="25_Java.jpg" alt="Card image cap">
        <div class="card-block">
          <h4 class="card-title">java</h4>
          <p class="card-text">Java is a popular programming language, created in 1995.<br>It is owned by Oracle, and more than 3 billion devices run Java.</p>
        <br><br><br><br><br><br><br><br>
        </div>
        <div class="card-footer">
        <a href="../Courses/javaPage.php" class="btn btn-primary dark-btn">Get Started</a>
        </div>
      </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="card">
        <img class="card-img-top" src="c.jpg" alt="Card image cap">
        <div class="card-block">
          <h4 class="card-title">c Programming</h4>
          <p class="card-text">C is a powerful general-purpose programming language. It is fast, portable and available in all platforms.<br>
            If you are new to programming, C is a good choice to start your programming journey.<br></p>
            <br><br><br><br><br><br>
        </div>
        <div class="card-footer">
        <a href="../Courses/cPage.php" class="btn btn-primary dark-btn">Get Started</a>
        </div>
      </div>
      </div>
      <!-- Add the extra clearfix for only the required viewport -->
      <!-- <div class="clearfix hidden-sm-down hidden-lg-up"></div> -->
    <!--  <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="card">
        <img class="card-img-top" src="C++.jpg" alt="Card image cap">
        <div class="card-block">
          <h4 class="card-title">C++ Programming</h4>
          <p class="card-text">C++ (pronounced "see plus plus") is a programming language began as an expanded version of C.<br>
            The C++ were first invented by Bjarne Stroustrup in 1979 at Bell Laboratories in Murray Hill, New Jersey.<br>
            Bjarne Stroustrup initially called the new language "C with Classes." However, in 1983 the name was changed to C++.<br></p>
            <br><br><br>
          </div>
          <div class="card-footer">
          <a href="../Courses/cppPage.php" class="btn btn-primary dark-btn">Get Started</a>
        </div>
        </div></div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="card">
        <img class="card-img-top" src="python.jpg" alt="Card image cap">
        <div class="card-block">
          <h4 class="card-title">python</h4>
          <p class="card-text">Python is a popular programming language. It was created by Guido van Rossum, and released in 1991.<br><br>
            It is used for:<br>
            1.web development (server-side)<br>
            2.software development<br>
            3.mathematics<br>
            4.system scripting<br></p>
            <br><br><br>
          </div>
        <div class="card-footer">
        <a href="../Courses/pthonPage.php" class="btn btn-primary dark-btn">Get Started</a>
        </div>
      </div> --> 
	  
	  </div>
    </div>
  </div>
  </div>
</div>

<div id="about" class="container-fluid text-center">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Page</h2>
      <h4>Abstract</h4>
      <p>Abstract : VPL-Virtual Programming Lab is the easy way to manage programming assignments. Its features of editing, running and evaluation of 
        programs makes learning process for students, and the evaluation task for teachers, easier than ever. Virtual labs is a web development 
        technology. It does not require any additional infrastructural setup for conducting experiments at user premises. The simulations-based 
        experiments can be accessed remotely via internet. This would help students in learning basic and advanced concepts through remote 
        experimentation. VPL is an activity module that manage programming assignments and whose salient features are:<br><br>
</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Made by the Virtual Lab team</p>
</footer>

<script>

  $(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
</html>
