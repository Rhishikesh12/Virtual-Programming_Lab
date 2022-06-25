<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="quizStyles.css">

  <link rel="stylesheet" href="../bootstrap-3.4.1-dist/css/bootstrap.min.css">
  <script src="../bootstrap-3.4.1-dist/jquery/jquery-3.4.1.min.js"></script>
  <script src="../bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css"> 
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
      <a class="navbar-brand" href="#myPage">VPL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><a href=" ../Student Index/studentindex.php">HOME</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">
<div class="row">
  <div class="col-sm-2"></div>
<div class="col-sm-8">
  <div class="panel panel-primary">
    <div class="panel-heading"><h2 style="color: rgb(88, 135, 189);">Java Quiz</h2></div>
      <div class="panel-body collapse" id="quiz">
      
    </div>
    <div id="results"></div>
  </div>

<!-- <div class="quiz-container">
  <div id="quiz"></div>
</div> -->

<button class="btn btn-primary dark-btn" id="start" onclick="startQuiz()" data-toggle="collapse" data-target="#quiz" aria-expanded="false" aria-controls="collapseExample">Start Quiz</button>

<button class="btn btn-primary dark-btn" id="previous" style="display: none;">Previous Question</button>
<button class="btn btn-primary dark-btn" id="next" style="display: none;">Next Question</button>
<button class="btn btn-primary dark-btn" id="submit" style="display: none;">Submit Quiz</button>
</div>
<div class="col-sm-2"></div>
</div>
<script>

function startQuiz() {
  const startButton = document.getElementById("start");
  startButton.style.display = "none";
  const myQuestions = [
    {
      question: "Which of the following is FALSE about arrays on Java?",
      questionCode: '//No code for this question.\nyour welcome',
      answers: {
        a: "A java array is always an object",
        b: "Length of array can be changed after creation of array",
        c: "Arrays in Java are always allocated on heap",
        d: "None of the above"
      },
      correctAnswer: "b"
    },
    {
      question: "Predict the output?",
      questionCode: 'public class Main { \nint arr[] = {10, 20, 30, 40, 50}; \nfor(int i=0; i < arr.length; i++) \n{ \nSystem.out.print(" " + arr[i]); \n} \n} \n} ',
      answers: {
        a: "10 20 30 40 50",
        b: "Compiler Error",
        c: "10 20 30 40",
        d: "None of the above"
      },
      correctAnswer: "a"
    },
    {
      question: "Predict the output?",
      questionCode: 'class Test {\npublic static void main(String args[]) {\nint arr[] = new int[2];\nSystem.out.println(arr[0]);\nSystem.out.println(arr[1]);\n}\n}',
      answers: {
        a: "0",
        b: "garbage value",
        c: "Compiler error",
        d: "Exception"
      },
      correctAnswer: "a"
    },
    {
      question: "Predict the output?",
      questionCode: 'class Test {\npublic static void main(String args[]) {\nint arr[2];\nSystem.out.println(arr[0]);\nSystem.out.println(arr[1]);\n}\n}',
      answers: {
        a: "0",
        b: "garbage value",
        c: "Compiler error",
        d: "Exception"
      },
      correctAnswer: "c"
    },
    {
      question: "Predict the output?",
      questionCode: 'public class Main {public static void main(String args[]) {\nint arr[][] = new int[4][];\narr[0] = new int[1];\narr[1] = new int[2];\narr[2] = new int[3];\narr[3] = new int[4];\nint i, j, k = 0;\nfor (i = 0; i < 4; i++) {\nfor (j = 0; j < i + 1; j++) {\narr[i][j] = k;\nk++;\n}\n}\nfor (i = 0; i < 4; i++) {\nfor (j = 0; j < i + 1; j++) {\nSystem.out.print(" " + arr[i][j]);\nk++;\n}\nSystem.out.println();\n}\n}\n} ',
      answers: {
        a: "",
        b: "garbage value"
      },
      correctAnswer: "a"
    },
    {
      question: "Output of following Java program?",
      questionCode: 'class Test\n{\npublic static void main (String[] args) \n{\nint arr1[] = {1, 2, 3};\nint arr2[] = {1, 2, 3};\nif (arr1 == arr2) \nSystem.out.println("Same");\nelse\nSystem.out.println("Not same");\n}\n}',
      answers: {
        a: "Same",
        b: "Not Same"
       
      },
      correctAnswer: "b"
    },
    {
      question: "Output of following Java program?",
      questionCode: 'import java.util.Arrays;\nclass Test\n{\npublic static void main (String[] args) \n{\nint arr1[] = {1, 2, 3};\nint arr2[] = {1, 2, 3};\nif (Arrays.equals(arr1, arr2))\nSystem.out.println("Same");\nelse\nSystem.out.println("Not same");\n}\n}',
      answers: {
        a: "Same",
        b: "Not Same"
        
      },
      correctAnswer: "a"
    },
    {
      question: "Output of following Java program?",
      questionCode: 'class Test\n{\npublic static void main (String[] args) \n{\nint arr1[] = {1, 2, 3};\nint arr2[] = {1, 2, 3};\nif (arr1.equals(arr2))\nSystem.out.println("Same");\nelse\nSystem.out.println("Not same");\n}\n}',
      answers: {
        a: "Same",
        b: "Not Same"

      },
      correctAnswer: "b"
    },
    {
      question: "Consider the following C program which is supposed to compute the transpose of a given 4 x 4 matrix M. Note that, there is an X in the program which indicates some missing statements. Choose the correct option to replace X in the program.",
      questionCode: '#include<stdio.h>\n#define ROW 4\n#define COL 4\nint M[ROW][COL] = {1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16};\nmain()\n{\nint i, j, t;\nfor (i = 0; i < 4; ++i)\n{\nX\n}\nfor (1 = 0; i < 4; ++i)\nfor (j = 0; j < 4; ++j)\nprintf ("%d", M[i][j]);\n}',
      answers: {
        a: "for(j = 0; j < 4; ++j){\nt = M[i][j];\nM[i][j] = M[j][i];\nM[j][i] = t;\n}",
        b: "for(j = 0; j < 4; ++j){\nM[i][j] = t;\nt = M[j][i];\nM[j][i] = M[i][j];\n}",
        c: "for(j = i; j < 4; ++j){\nt = M[i][j];\nM[i][j] = M[j][i];\nM[j][i] = t;\n}",
        d: "for(j = i; j < 4; ++j){\nM[i][j] = t;\nt = M[j][i];\nM[j][i] = M[i][j];\n}"
      },
      correctAnswer: "c"
    }
  ];

  function buildQuiz() {
    // we'll need a place to store the HTML output
    const output = [];

    // for each question...
    myQuestions.forEach((currentQuestion, questionNumber) => {
      // we'll want to store the list of answer choices
      const answers = [];

      // and for each available answer...
      for (letter in currentQuestion.answers) {
        // ...add an HTML radio button
        answers.push(
          `<label>
             <input type="radio" name="question${questionNumber}" value="${letter}">
              ${letter} :
              ${currentQuestion.answers[letter]}
           </label>`
        );
      }

      // add this question and its answers to the output
      output.push(
        `<div class="slide">
          <div class="question"> ${currentQuestion.question} </div>
          <textarea disabled class="form-control" name="code" rows="10" cols="50" style="color: #fff;">${currentQuestion.questionCode}</textarea>
          <div class="answers"> ${answers.join("")} </div>
        </div>`
      );
    });

    // finally combine our output list into one string of HTML and put it on the page
    quizContainer.innerHTML = output.join("");
  }

  function showResults() {
    // gather answer containers from our quiz
    const answerContainers = quizContainer.querySelectorAll(".answers");

    // keep track of user's answers
    let numCorrect = 0;

    // for each question...
    myQuestions.forEach((currentQuestion, questionNumber) => {
      // find selected answer
      const answerContainer = answerContainers[questionNumber];
      const selector = `input[name=question${questionNumber}]:checked`;
      const userAnswer = (answerContainer.querySelector(selector) || {}).value;

      // if answer is correct
      if (userAnswer === currentQuestion.correctAnswer) {
        // add to the number of correct answers
        numCorrect++;

        // color the answers green
        answerContainers[questionNumber].style.color = "#00ff00";
      } else {
        // if answer is wrong or blank
        // color the answers red
        answerContainers[questionNumber].style.color = "#ff1919";
      }
    });

    // show number of correct answers out of total
    resultsContainer.innerHTML = `<h3 style="padding-bottom: 10px; margin-top: -5px">You got ${numCorrect} out of ${myQuestions.length} correct!</h3>`;
  }

  function showSlide(n) {
    slides[currentSlide].classList.remove("active-slide");
    slides[n].classList.add("active-slide");
    currentSlide = n;
    
    if (currentSlide === 0) {
      previousButton.style.display = "none";
    } else {
      previousButton.style.display = "inline-block";
    }
    
    if (currentSlide === slides.length - 1) {
      nextButton.style.display = "none";
      submitButton.style.display = "inline-block";
    } else {
      nextButton.style.display = "inline-block";
      submitButton.style.display = "none";
    }
  }

  function showNextSlide() {
    showSlide(currentSlide + 1);
  }

  function showPreviousSlide() {
    showSlide(currentSlide - 1);
  }

  const quizContainer = document.getElementById("quiz");
  const resultsContainer = document.getElementById("results");
  const submitButton = document.getElementById("submit");

  // display quiz right away
  buildQuiz();

  const previousButton = document.getElementById("previous");
  const nextButton = document.getElementById("next");
  const slides = document.querySelectorAll(".slide");
  let currentSlide = 0;

  showSlide(0);

  // on submit, show results
  submitButton.addEventListener("click", showResults);
  previousButton.addEventListener("click", showPreviousSlide);
  nextButton.addEventListener("click", showNextSlide);
}

</script>
</body>
</html>