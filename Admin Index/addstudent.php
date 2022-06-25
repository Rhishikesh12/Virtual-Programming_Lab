<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="adminstyles.css">

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
            <a class="navbar-brand" href="#myPage">VL</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="viewadmin.php">View Admin</a></li>
                  <!-- <li role="separator" class="divider"></li> -->
                  <!-- <li class="dropdown-header">Nav header</li> -->
                  <li><a href="addadmin.php">Add Admin</a></li>
                </ul>
              </li>
    
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Teacher <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="viewteacher.php">View Teacher</a></li>
                  <li><a href="addteacher.php">Add Teacher</a></li>
                </ul>
              </li>
    
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Student <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="viewstudent.php">View Student</a></li>
                  <li><a href="#myPage">Add Student</a></li>
                </ul>
              </li>
              <form class="form-inline my-2 my-lg-0" action="../includes/logout.inc.php" method="POST" style="float: right;">
            <button class="btn btn-primary btn-outline-success my-2 my-sm-0" type="submit" name="logout-submit">LOGOUT</button>
          </form>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <!-- <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div> -->
                <div class="col-lg-12 login-title">
                   ADD STUDENT PANEL
                </div>
    
                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                      <form action="../includes/studentRegister.inc.php" method="POST">
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text" name="uid" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" name="pwd" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                              <label class="form-control-label">REPEAT PASSWORD</label>
                              <input type="password" name="pwd-repeat" class="form-control" placeholder="Repeat Password">
                          </div>
                          <div class="empty text-center">
                      <?php
				              require '../includes/msg.inc.php';
			                ?>
                      </div>
                            <div class="col-lg-6 login-btm login-button">
                              <button type="submit" name="student-register-submit" class="btn btn-primary dark-btn">Register Student</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
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
  
</script>
</body>
</html>