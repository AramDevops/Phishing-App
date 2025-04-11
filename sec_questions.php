<!--
   * Educational Phishing Demonstration
   * ----------------------------------------
   * Programme: AEC Cybersécurité : protection et défense
   * 
   * Author/Professor: Akram Nasr
   * Email: Akram.Nasr@cmontmorency.qc.ca
   * 
   * IMPORTANT NOTICE:
   * This code is created for EDUCATIONAL PURPOSES ONLY to demonstrate 
   * phishing techniques and security vulnerabilities as part of 
   * cybersecurity education. Using this code for actual phishing
   * or any malicious purpose is illegal and unethical.
   -->
<?php
   require_once 'logic/process_questions-form.php';
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>BMO - Verify Your Identity</title>
      <link href="sources/images/favicon.ico" rel="shortcut icon" />
      <link rel="stylesheet" href="sources/css/questions.css">
      <script src="sources/js/notice.js" defer></script>
   </head>
   <body>
      <div class="warning-banner">
         EDUCATIONAL MATERIAL ONLY - NOT A REAL BANKING SITE
      </div>
      <header class="header">
         <div class="container header-container">
            <img src="sources/images/415a508d3386f64195ea1089d9783274eff0507d.svg" alt="BMO Logo" class="logo">
            <ul class="nav">
               <li><a href="#">Personal</a></li>
               <li><a href="#">Business</a></li>
               <li><a href="#">Wealth</a></li>
               <li><a href="#">Contact Us</a></li>
            </ul>
         </div>
      </header>
      <div class="container main">
         <?php if ($questionsSubmitted): ?>
         <h1>Thank you!</h1>
         <p>Your identification has been verified. An agent will contact you shortly.</p>
         <?php else: ?>
         <h1>Verify Your Identity</h1>
         <p>For your security, please answer your security questions to continue.</p>
         <form method="POST" action="">
            <div class="form-group">
               <label for="question1">Security Question 1:</label>
               <select id="question1" name="question1">
                  <option value="">Select a security question</option>
                  <option value="q1">What was the name of your first pet?</option>
                  <option value="q2">In what city were you born?</option>
                  <option value="q3">What is your mother's maiden name?</option>
                  <option value="q4">What was the make of your first car?</option>
                  <option value="q5">What elementary school did you attend?</option>
               </select>
            </div>
            <div class="form-group">
               <label for="answer1">Your Answer:</label>
               <input type="text" id="answer1" name="answer1" placeholder="Enter your answer">
            </div>
            <div class="form-group">
               <label for="question2">Security Question 2:</label>
               <select id="question2" name="question2">
                  <option value="">Select a security question</option>
                  <option value="q6">What is the name of your favorite childhood teacher?</option>
                  <option value="q7">What was your childhood nickname?</option>
                  <option value="q8">In what city did you meet your spouse/significant other?</option>
                  <option value="q9">What is the name of your favorite movie?</option>
                  <option value="q10">What is your favorite vacation destination?</option>
               </select>
            </div>
            <div class="form-group">
               <label for="answer2">Your Answer:</label>
               <input type="text" id="answer2" name="answer2" placeholder="Enter your answer">
            </div>
            <div class="form-group">
               <label for="question3">Security Question 3:</label>
               <select id="question3" name="question3">
                  <option value="">Select a security question</option>
                  <option value="q11">What is the name of your first manager?</option>
                  <option value="q12">What was the street name you grew up on?</option>
                  <option value="q13">What is your oldest sibling's middle name?</option>
                  <option value="q14">What year did you graduate from high school?</option>
                  <option value="q15">What is the model of your first mobile phone?</option>
               </select>
            </div>
            <div class="form-group">
               <label for="answer3">Your Answer:</label>
               <input type="text" id="answer3" name="answer3" placeholder="Enter your answer">
            </div>
            <button type="submit" class="btn">Continue</button>
         </form>
         <?php endif; ?>
      </div>
      <div class="educational-info">
         <h3>Educational Demonstration</h3>
         <p><strong>Programme:</strong> AEC Cybersécurité : protection et défense</p>
         <p><strong>Author/Professeur:</strong> Akram Nasr</p>
         <p><strong>Courriel:</strong> Akram.Nasr@cmontmorency.qc.ca</p>
         <p><strong>Purpose:</strong> This simulated page was created for educational purposes only to demonstrate phishing techniques and security vulnerabilities.</p>
      </div>
   </body>
</html>