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

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
      <meta http-equiv="Pragma" content="no-cache">
      <meta http-equiv="Expires" content="0">

      <title>Educational Phishing Dashboard</title>
      <link rel="stylesheet" href="../admin/styles.css">
      <link href="../sources/images/favicon.ico" rel="shortcut icon" />
      <script src="../admin/script.js" defer></script>
      <script src="../sources/js/notice.js" defer></script>
   </head>
   <body>
      <div class="warning-banner">
         EDUCATIONAL MATERIAL ONLY - NOT A REAL BANKING ADMIN DASHBOARD
      </div>
      <div class="container">
         <div class="header">
            <h1>Educational Phishing Dashboard</h1>
            <div class="stats">
               <div class="stat-card">
                  <h3>Total Cards</h3>
                  <p id="total-cards">0</p>
               </div>
               <div class="stat-card">
                  <h3>Total Responses</h3>
                  <p id="total-responses">0</p>
               </div>
               <div class="stat-card">
                  <h3>2FA Codes</h3>
                  <p id="total-2fa">0</p>
               </div>
            </div>
         </div>
         <div class="educational-notice">
            <h3>Educational Demonstration</h3>
            <p><strong>Programme:</strong> AEC Cybersécurité : protection et défense</p>
            <p><strong>Author/Professeur:</strong> Akram Nasr</p>
            <p><strong>Courriel:</strong> Akram.Nasr@cmontmorency.qc.ca</p>
            <p><strong>Purpose:</strong> This simulated page was created for educational purposes only to demonstrate phishing techniques and security vulnerabilities.</p>
         </div>
         <div id="card-tab" class="tab-content active">
            <h2>Captured Card Information</h2>
            <div id="card-grid" class="card-grid">
               <div class="loading-spinner">
                  <div class="spinner"></div>
                  <p>Loading data...</p>
               </div>
            </div>
         </div>
         <div class="footer">
            <p>© 2025 Educational Phishing Demonstration. All Rights Reserved.</p>
            <p>Created by: Professor Akram Nasr, Collège Montmorency</p>
            <p>This is a simulated admin dashboard created for educational purposes only to demonstrate security risks.</p>
         </div>
      </div>
      <!-- Modal for security questions -->
      <div id="questionsModal" class="modal">
         <div class="modal-content">
            <div class="modal-header">
               <h2 class="modal-title">Security Questions</h2>
               <span class="close">&times;</span>
            </div>
            <div class="modal-body" id="questions-container">
               <!-- Questions will be loaded here -->
               <div class="loading-spinner">
                  <div class="spinner"></div>
                  <p>Loading questions...</p>
               </div>
            </div>
         </div>
      </div>
      <!-- Modal for full user journey -->
      <div id="userJourneyModal" class="modal">
         <div class="modal-content modal-large">
            <div class="modal-header">
               <h2 class="modal-title">Complete User Journey</h2>
               <span class="close journey-close">&times;</span>
            </div>
            <div class="modal-body" id="user-journey-container">
               <!-- User journey data will be loaded here -->
               <div class="loading-spinner">
                  <div class="spinner"></div>
                  <p>Loading user journey data...</p>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>