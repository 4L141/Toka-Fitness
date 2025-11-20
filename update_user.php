<?php
// delete_user.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_POST['id'] ?? null;

    if (!$userId) {
        echo "<p style='color:red; text-align:center;'>Invalid user ID.</p>";
        exit;
    }

    // Confirm deletion
    echo "<h2 style='text-align:center;'>Confirm Deletion</h2>";
    if (!isset($_POST['confirm'])) {
        echo "<form method='post' style='text-align:center;'>
                <input type='hidden' name='id' value='$userId'>
                <p>Are you sure you want to delete user ID: $userId?</p>
                <button type='submit' name='confirm' value='yes' style='background:red;color:white;padding:5px 10px;'>Yes, Delete</button>
                <a href='admin.php' style='margin-left:10px;'>Cancel</a>
              </form>";
        exit;
    }

    // Create JSON request for backend
    $request = [
        'Action' => 'delete_user',
        'user_id' => $userId
    ];

    $inputFile = __DIR__ . '/delete_request.json';
    $outputFile = __DIR__ . '/delete_response.json';
    file_put_contents($inputFile, json_encode($request, JSON_PRETTY_PRINT));

    // Run C# console backend
    $exePath = 'C:\xampp\htdocs\Student\202526\Ali\Toka-Fitness\console_backend\console_backend\bin\Debug\net8.0\console_backend.exe'; // adjust path
    exec("\"$exePath\" \"$inputFile\" \"$outputFile\"");

    // Read backend response
    if (!file_exists($outputFile)) {
        echo "<p style='color:red; text-align:center;'>Backend error. Response not found.</p>";
        exit;
    }

    $response = json_decode(file_get_contents($outputFile), true);

    echo "<p style='text-align:center; color:" .
        ($response['Status'] === 'success' ? 'green' : 'red') . ";'>
        {$response['Message']}
        </p>";

    echo "<p style='text-align:center;'><a href='admin.php'>Return to Admin Panel</a></p>";
}
?>

