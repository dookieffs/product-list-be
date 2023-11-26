<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: access');
header('Access-Control-Allow-Methods: POST');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');
// Hardcoded username and password (replace with your actual credentials)
$valid_username = 'test@test.test';
$valid_password = 'password';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $payload = json_decode(file_get_contents('php://input'), true);

    $username = $payload['username'];
    $password = $payload['password'];

    // Validate username and password
    if ($username === $valid_username && $password === $valid_password) {
        echo json_encode([
            'id' => '12345',
            'email' => $valid_username,
            'username' => 'Joe Doe'
        ]);
    } else {
        // Invalid credentials, display an error message

        echo 'INVALID_CREDENTIALS';
    }
}
