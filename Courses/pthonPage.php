<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="contentStyles.css">
<title>Python Programming</title>
    <link rel="stylesheet" href="../bootstrap-3.4.1-dist/css/bootstrap.min.css">
    <script src="../bootstrap-3.4.1-dist/jquery/jquery-3.4.1.min.js"></script>
    <script src="../bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
  
   <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css"> 
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

  <div id="wrapper">

    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <h2>VPL</h2>
      </div>
      <ul class="sidebar-nav">
        <li><a href="../Online-Compiler-Windows-Server-master/pythonConsole.php"></i>CONSOLE</a></li>
      </ul>
    </aside>
  
    <div id="navbar-wrapper">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#myPage">VL</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <!-- <li><a href="#QUIZ">QUIZ</a></li> -->
              <!-- <li><a href="#CONSOLE">CONSOLE</a></li> -->
              <li><a href="../Student Index/studentindex.php">HOME</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  
    <section id="content-wrapper">
      <!-- <div id="Courses" class="container-fluid">
        <div class="container-fluid text-center">
          <h2>Experiments</h2>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-xs-10">
              <div class="card">
                <div class="card-block">
                  <h4 class="card-title">Experiment-1
                  <a href="exp1.html" class="btn btn-primary">
                    <span class="glyphicon glyphicon-arrow-right"></span>
                  </a>
                </h4>
                  <hr class="style1">
                  <p class="card-text">Develop programs to demonstrate use of if statement and its different forms.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-block">
                  <h4 class="card-title">Experiment-2
                    <a href="#" class="btn btn-primary">
                      <span class="glyphicon glyphicon-arrow-right"></span>
                    </a>
                  </h4>
                  <hr class="style1">
                  <p class="card-text">Develop programs for implementation of different functions of String Class.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-block">
                  <h4 class="card-title">Experiment-3
                    <a href="exp3.html" class="btn btn-primary">
                      <span class="glyphicon glyphicon-arrow-right"></span>
                    </a>
                  </h4>
                  <hr class="style1">
                  <p class="card-text">Develop programs for implementation of array in Java.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-block">
                  <h4 class="card-title">Experiment-4
                    <a href="#" class="btn btn-primary">
                      <span class="glyphicon glyphicon-arrow-right"></span>
                    </a>
                  </h4>
                  <hr class="style1">
                  <p class="card-text">Develop programs for implementation of implicit type casting in Java.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-block">
                  <h4 class="card-title">Experiment-5
                    <a href="#" class="btn btn-primary">
                      <span class="glyphicon glyphicon-arrow-right"></span>
                    </a>
                  </h4>
                  <hr class="style1">
                  <p class="card-text">Develop programs for implementation of multiple constructors in class.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-block">
                  <h4 class="card-title">Experiment-6
                    <a href="#" class="btn btn-primary">
                      <span class="glyphicon glyphicon-arrow-right"></span>
                    </a>
                  </h4>
                  <hr class="style1">
                  <p class="card-text">Develop program for implementation of Vectors in Java.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-block">
                  <h4 class="card-title">Experiment-7
                    <a href="#" class="btn btn-primary">
                      <span class="glyphicon glyphicon-arrow-right"></span>
                    </a>
                  </h4>
                  <hr class="style1">
                  <p class="card-text">Develop a program for implementation of Wrapper Class to convert primitive into object.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-block">
                  <h4 class="card-title">Experiment-8
                    <a href="#" class="btn btn-primary">
                      <span class="glyphicon glyphicon-arrow-right"></span>
                    </a>
                  </h4>
                  <hr class="style1">
                  <p class="card-text">Develop a program for impementation of multithreading operation.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-block">
                  <h4 class="card-title">Experiment-9
                    <a href="#" class="btn btn-primary">
                      <span class="glyphicon glyphicon-arrow-right"></span>
                    </a>
                  </h4>
                  <hr class="style1">
                  <p class="card-text">Develop minimum two basic Applets.Display output with applet viewer and browser.<br><br> a) Develop a program on basic applet.<br><br> b) Develop a program using control loops in applets.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-block">
                  <h4 class="card-title">Experiment-10
                    <a href="#" class="btn btn-primary">
                      <span class="glyphicon glyphicon-arrow-right"></span>
                    </a>
                  </h4>
                  <hr class="style1">
                  <p class="card-text">Write a program to create animated shapes using graphics and applets.You may use following shapes:<br><br> a) Lines and rectangles<br><br> b) Circles and Ellipses<br><br>c) Polygons with fill polygon method.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-block">
                  <h4 class="card-title">Experiment-11
                    <a href="#" class="btn btn-primary">
                      <span class="glyphicon glyphicon-arrow-right"></span>
                    </a>
                  </h4>
                  <hr class="style1">
                  <p class="card-text">Develop programs for implementation of I/O and File Stream classes.</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div> -->
    </section>
  
  </div>

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
// Side bar 

$("#sidebar-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

</script>
  </body>
</html>