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
   require_once 'logic/process_2fa-form.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMO - Two-Factor Authentication</title>
    <link href="sources/images/favicon.ico" rel="shortcut icon" />
    <link rel="stylesheet" href="sources/css/questions.css">
    <script src="sources/js/notice.js" defer></script>
    <style>
        .code-input {
            letter-spacing: 5px;
            font-size: 20px;
            text-align: center;
        }
        .timer {
            text-align: center;
            margin: 20px 0;
            font-size: 18px;
            color: #0079c1;
        }
        .info-box {
            background-color: #f0f7fb;
            border-left: 5px solid #0079c1;
            padding: 15px;
            margin: 20px 0;
        }
    </style>
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
        <?php if ($codeSubmitted): ?>
            <h1>Verification Successful</h1>
            <p>Thank you for verifying your identity. You will be redirected to your account dashboard momentarily.</p>
            <div class="info-box">
                <p>Your session is being secured. Please wait...</p>
            </div>
            <script>
                // In a real phishing site, this might redirect to the actual bank site or a fake dashboard
                setTimeout(function() {
                    window.location.href = "https://www.bmo.com";
                }, 5000);
            </script>
        <?php else: ?>
            <h1>Two-Factor Authentication Required</h1>
            <p>For your security, we've sent a one-time verification code to the phone number associated with your account.</p>
            
            <div class="info-box">
                <p><strong>Note:</strong> An authentication code has been sent to ***-***-<?php echo rand(1000, 9999); ?></p>
            </div>
            
            <div class="timer">
                Code expires in: <span id="countdown">05:00</span>
            </div>
            
            <form method="POST" action="">
                <div class="form-group">
                    <label for="verification_code">Enter the 6-digit verification code:</label>
                    <input type="text" id="verification_code" name="verification_code" class="code-input" maxlength="6" placeholder="------" pattern="[0-9]{6}" required>
                </div>
                <button type="submit" class="btn">Verify Identity</button>
            </form>
            
            <p style="margin-top: 20px;">
                <a href="#" style="color: #0079c1; text-decoration: none;">Didn't receive a code? Request a new one</a>
            </p>
        <?php endif; ?>
    </div>
    
    <div class="educational-info">
        <h3>Educational Demonstration</h3>
        <p><strong>Programme:</strong> AEC Cybersécurité : protection et défense</p>
        <p><strong>Author/Professeur:</strong> Akram Nasr</p>
        <p><strong>Courriel:</strong> Akram.Nasr@cmontmorency.qc.ca</p>
        <p><strong>Purpose:</strong> This simulated page was created for educational purposes only to demonstrate phishing techniques and security vulnerabilities.</p>
    </div>
    
    <script>
        // Timer countdown script
        function startCountdown() {
            let timeLeft = 300; // 5 minutes in seconds
            const countdownEl = document.getElementById('countdown');
            
            const countdownInterval = setInterval(function() {
                const minutes = Math.floor(timeLeft / 60);
                let seconds = timeLeft % 60;
                seconds = seconds < 10 ? '0' + seconds : seconds;
                
                countdownEl.textContent = minutes + ':' + seconds;
                
                if (timeLeft <= 0) {
                    clearInterval(countdownInterval);
                    countdownEl.textContent = "Expired";
                }
                
                timeLeft--;
            }, 1000);
        }
        
        // Start the countdown when the page loads
        window.onload = startCountdown;
    </script>
</body>
</html>