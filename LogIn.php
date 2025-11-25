<html>
<body style="background-color: lightblue;">
    <form method="post">
        <h2>Login</h2>
        Enter email:<br>
        <input type="text" name="email" required /><br><br>

        Enter password:<br>
        <input type="password" name="password" required /><br><br>

        <input type="submit" name="login" value="Log In">
    </form>
</body>
</html>

<?php
session_start();

if (isset($_POST['login'])) {
    // Build JSON request
    $data = [
        "Action" => "login",
        "email" => $_POST['email'],
        "password" => $_POST['password']
    ];

    $inputFile = __DIR__ . '/login_request.json';
    $outputFile = __DIR__ . '/login_response.json';
    file_put_contents($inputFile, json_encode($data, JSON_PRETTY_PRINT));

    // Run C# console backend
    $exePath = __DIR__ . '/console_backend/console_backend/bin/Debug/console_backend.exe';
    exec("\"$exePath\" \"$inputFile\" \"$outputFile\"");

    // Read backend response
    if (file_exists($outputFile)) {
        $response = json_decode(file_get_contents($outputFile), true);

        if ($response["Status"] === "success") {
            $_SESSION['email'] = $_POST['email'];
            echo "<p style='color:green;text-align:center;'>Login successful! Redirecting...</p>";

            // Redirect based on admin/user role
            if (isset($response['User']) && $response['User']['email'] === 'admin@example.com') {
                header("Refresh: 2; url=admin.php");
            } else {
                header("Refresh: 2; url=php_frontend/Homepage.php");
            }
        } else {
            echo "<p style='color:red;text-align:center;'>{$response['Message']}</p>";
        }
    } else {
        echo "<p style='color:red;text-align:center;'>Backend did not respond.</p>";
    }
}
?>
