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
        <li  class="active"><a href="#Experiment-1"></i>Experiment-1</a></li>
        <li><a href="#Experiment-2">Experiment-2</a></li>
        <li><a href="exp3.php">Experiment-3</a></li>
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
            <div class="container-fluid text-center" id="#CONSOLE">
                <h1>Different Conditional and Looping statements</h1>
              </div>
              <div class="container-fluid">
                <p>
                  <h4><strong><u>If Statements</u></strong></h4>
                  Use the if statement to specify a block of Java code to be executed if a condition is true.
                  <br><br>
                  <em><strong>Syntax[ ];</strong></em>
                  <br>
                  if (condition) {<br>
                    // block of code to be executed if the condition is true<br>
                  }
                  <br><strong><u>Note that if is in lowercase letters. Uppercase letters (If or IF) will generate an error.</u></strong>
                  <br><br>
                  <em><strong>Example</strong></em>
                  <br>
                  if (20 > 18) {<br>
                    System.out.println("20 is greater than 18");<br>
                  }
                  <br><br>
                  <h4><strong><u>Else Statements</u></strong></h4>
                  Use the else statement to specify a block of code to be executed if the condition is false.
                  <br><br>
                  <em><strong>Syntax[ ];</strong></em>
                  <br>
                  if (condition) {<br>
                    // block of code to be executed if the condition is true<br>
                  } else {<br>
                    // block of code to be executed if the condition is false<br>
                  }
                  <br><br>
                  <em><strong>Example</strong></em>
                  <br>
                  int time = 22;<br>
                  if (time < 10) {<br>
                  System.out.println("Good morning.");<br>
                  } else if (time < 20) {<br>
                   System.out.println("Good day.");<br>
                  } else {<br>
                  System.out.println("Good evening.");<br>
                  }
                  <br>
                  <strong><u>Outputs</u></strong><br> "Good evening."
                  <br><br>
                  <h4><strong><u>While and Do While Loop</u></strong></h4>
                  <strong>Loops:</strong>
                  Loops can execute a block of code as long as a specified condition is reached.

                  Loops are handy because they save time, reduce errors, and they make code more readable.
                  <br>
                  <strong>Java While Loop:</strong>
                  The while loop loops through a block of code as long as a specified condition is true:
                  <br>
                  <strong>The Do/While Loop:</strong>
                  The do/while loop is a variant of the while loop. This loop will execute the code block once, before checking if the condition is true, then it will repeat the loop as long as the condition is true.
                  <br><br>
                  <em><strong>While Loop Syntax[ ];</strong></em>
                  <br>
                  while (condition) {<br>
                    // code block to be executed<br>
                  }<br>
                  <br><br>
                  <em><strong>Example</strong></em>
                  <br>
                  int i = 0;<br>
                  while (i < 5) {<br>
                  System.out.println(i);<br>
                  i++;<br>
                  }<br>
                  <br></10>
                  <strong><u>In the example above, the code in the loop will run, over and over again, as long as a variable (i) is less than 5:</u></strong> 
                  <br><br>
                  <em><strong>Do Loop Syntax[ ];</strong></em>
                  <br>
                  do {<br>
                    // code block to be executed<br>
                  }<br>
                  while (condition);<br>
                  <br><br>
                  <em><strong>Example</strong></em>
                  <br>
                  int i = 0;<br>
                  do {<br>
                  System.out.println(i);<br>
                  i++;<br>
                  }<br>
                  while (i < 5);<br>
                  <br>
                  <strong><u>The example below uses a do/while loop. The loop will always be executed at least once, even if the condition is false, because the code block is executed before the condition is tested:</u></strong> 
                  <br><br>
                  <h4><strong><u>For Loop</u></strong></h4>
                  <br>
                  <strong>Java For Loop:</strong>
                  When you know exactly how many times you want to loop through a block of code, use the for loop instead of a while loop:
                  <br>
                  <em><strong>For Syntax[ ];</strong></em>
                  <br>
                  for (statement 1; statement 2; statement 3) {<br>
                    // code block to be executed<br>
                   }
                  <br><br>
                  <em><strong>Example</strong></em>
                  <br>
                  for (int i = 0; i < 5; i++) {<br>
                    System.out.println(i);<br>
                  }
                  <br></10>
                  <strong><u>The example below will print the numbers 0 to 4:</u></strong> 
                  <br>
                  <br>
                  <br>
                </p>
                <h3 style="color: rgb(192, 192, 98); font-weight: bold"><em><u>Exercise:</u></em></h3>
                  <h3 style="color: rgb(192, 192, 98)">Write a java program demonstrating the use of nested for-loops</h3>
                  <a class="btn btn-primary dark-btn" href="../Online-Compiler-Windows-Server-master/javaConsole.php">Perform experiment</a>
                  <br><br>
                  <h3 style="color: rgb(192, 192, 98)">Write a java program demonstrating the use of nested if else</h3>
                  <a class="btn btn-primary dark-btn" href="../Online-Compiler-Windows-Server-master/javaConsole.php">Perform experiment</a>
              </div>
    </section>
  
  </div>

  <!-- Java program displaying use of looping statements 
  public class Main {  
  public static void main(String[] args) {  
  //loop of i  
  for(int i=1;i<=3;i++){  
  //loop of j  
  for(int j=1;j<=3;j++){  
          System.out.println(i+" "+j);  
  }//end of i  
  }//end of j  
  }  
  } 
  
  For Palindrome
  import java.util.Scanner;
  public class Palindrome
{
    public static void main(String args[])
    {
        String a, b = "";
        Scanner s = new Scanner(System.in);
        System.out.print("Enter the string you want to check:\n");
        a = s.nextLine();
        int n = a.length();
        for(int i = n - 1; i >= 0; i--)
        {
            b = b + a.charAt(i);
        }
        if(a.equalsIgnoreCase(b))
        {
            System.out.println("The string is palindrome.");
        }
        else
        {
            System.out.println("The string is not palindrome.");
        }
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