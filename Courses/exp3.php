<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="contentStyles.css">

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
        <li><a href="exp1.php"></i>Experiment-1</a></li>
        <li><a href="#Experiment-2">Experiment-2</a></li>
        <li class="active"><a href="#Experiment-3">Experiment-3</a></li>
        <li><a href="#Experiment-4">Experiment-4</a></li>
        <li><a href="#Experiment-5">Experiment-5</a></li>
        <li><a href="#Experiment-6">Experiment-6</a></li>
        <li><a href="#Experiment-7">Experiment-7</a></li>
        <li><a href="#Experiment-8">Experiment-8</a></li>
        <li><a href="#Experiment-9">Experiment-9</a></li>
        <li><a href="#Experiment-10">Experiment-10</a></li>
        <li><a href="#Experiment-11">Experiment-11</a></li>
        <li><a href="#Experiment-12">Experiment-12</a></li>
        <!-- <li><a href="#Experiment-13">Experiment-13</a></li>
        <li><a href="#Experiment-14">Experiment-14</a></li>
        <li><a href="#Experiment-15">Experiment-15</a></li>
        <li><a href="#Experiment-16">Experiment-16</a></li> -->
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
              <li><a href="#CONSOLE">CONSOLE</a></li>
              <li><a href="../Student Index/studentindex.php">HOME</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  
    <section id="content-wrapper">
            <div class="container-fluid text-center">
                <h1>Arrays</h1>
              </div>
              <div class="container-fluid">
              <p>
                  <h4><strong><u>Java Arrays</u></strong></h4>
                  Arrays are used to store multiple values in a single variable, instead of declaring separate variables for each value.To declare an array, define the variable type with square brackets:
                  <br>
                  <br>String[] cars;<br>
                  <br>
                  We have now declared a variable that holds an array of strings. To insert values to it, we can use an array literal - place the values in a comma-separated list, inside curly braces:
                  <br><strong><br>String[] cars = {"Volvo", "BMW", "Ford", "Mazda"};</strong>
                  <br><br>
                  
                  <h4><strong><u>Access the Elements of an Array</u></strong></h4>
                  You access an array element by referring to the index number.This statement accesses the value of the first element in cars:
                  <br><br>

                  <em><strong><u>Example</u></strong></em>
                  <br>
                  String[] cars = {"Volvo", "BMW", "Ford", "Mazda"};<br>
                  System.out.println(cars[0]);
                 <br>
                  <br>
                  <strong><u>Output</u></strong><br> Volvo
                  <br><br>
                  <h4><strong><u>Change an Array Element</u></strong></h4>
                  To change the value of a specific element, refer to the index number:
                  <br>
                  <br>
                  <em><strong><u>Example</u></strong></em>
                  <br>
                  String[] cars = {"Volvo", "BMW", "Ford", "Mazda"};<br>cars[0] = "Opel";<br>System.out.println(cars[0]);
                  
                  <br><br>
                  <strong><u>Output</u></strong>
                  <br>
                   Now output is Opel instead of Volvo
                  <br>
                  <br>
                  <h4><strong><u>Array Length</u></strong></h4>
                  
                  To find out how many elements an array has, use the length property:
                  <br>
                  <br>
                  <em><strong><u>Example</u></strong></em>
                  <br>
                  String[] cars = {"Volvo", "BMW", "Ford", "Mazda"};<br>System.out.println(cars.length);

                  <br><br>
                  <strong><u>Output</u></strong>
                  <br>
                  <strong> 4</strong> 
                  <br>
                  <br>
                  <h4><strong><u>Multidimensional Arrays</u></strong></h4>
                  
                  A multidimensional array is an array containing one or more arrays.To create a two-dimensional array, add each array within its own set of curly braces:
                  <br>
                  <br>
                  <em><strong><u>Example</u></strong></em>
                  <br>
                  int[][] myNumbers = { {1, 2, 3, 4}, {5, 6, 7} };<br>int x = myNumbers[1][2];<br>System.out.println(x); 
                  <br><br>
                  <strong><u>Output</u></strong>
                  <br>
                  <strong> 7</strong> 
                  <br> 
                  <br><br>
                </p>
                <h3 style="color: rgb(192, 192, 98); font-weight: bold"><em><u>Exercise:</u></em></h3>
                  <h3 style="color: rgb(192, 192, 98)">Write a java program demonstrating arrays</h3>
                  <a class="btn btn-primary dark-btn" href="../Online-Compiler-Windows-Server-master/javaConsole.php">Perform experiment</a>
                  <br><br>
                  <h3 style="color: rgb(192, 192, 98)">Write a java program displaying array elements using simple for-loop</h3>
                  <a class="btn btn-primary dark-btn" href="../Online-Compiler-Windows-Server-master/javaConsole.php">Perform experiment</a>
              </div>
    </section>
  
  </div>

<!-- Java program
  class Main {
   public static void main(String[] args) {
      
      int[] age = new int[5];
      
      System.out.println(age[0]);
      System.out.println(age[1]);
      System.out.println(age[2]);
      System.out.println(age[3]);
      System.out.println(age[4]);
   }
} -->

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