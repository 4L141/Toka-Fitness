<?php

	//Create a JSON request for get_users
	$request = ['Action' => 'get_users'];
	file_put_contents('request.json', json_encode($request, JSON_PRETTY_PRINT));

	// Run the C# console backend
	$exePath = 'C:\\xampp\\htdocs\\yourproject\\console_backend.exe'; // ***update path
	$inputPath = __DIR__ . '\\request.json';
	$outputPath = __DIR__ . '\\response.json';

	// Execute backend console app
    exec("\"$exePath\" \"$inputPath\" \"$outputPath\"");
	
	// Step 3: Read the response JSON
    if (!file_exists($outputPath)) {
        echo "<p style='color:red; text-align:center;'>Failed to get data from backend.</p>";
        exit;
	}

	$data = file_get_contents($outputPath);
    $response = json_decode($data, true);

    if ($response['Status'] !== 'success') {
        echo "<p style='color:red; text-align:center;'>{$response['Message']}</p>";
        exit;
    }

    $users = $response['UsersList'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <style>
        body {
            background-color: lightblue;
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 30px auto;
            background: white;
        }
        th, td {
            padding: 10px;
            border: 1px solid #333;
            text-align: center;
        }
        th {
            background-color: #333;
            color: white;
        }
        .actions button {
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }
        .update {
            background-color: #4CAF50;
            color: white;
        }
        .delete {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Admin Panel — User List</h2>

    <?php
    $jsonFilePath = __DIR__ . '/response.json';;
    $data = file_get_contents($jsonFilePath);

    if ($data === FALSE) {
        echo "<p style='color:red; text-align:center;'>Failed to connect to API.</p>";
    } else {
        $users = json_decode($data, true);

        if (empty($users)) {
            echo "<p style='text-align:center;'>No users found.</p>";
        } else {
            echo "<table>";
            echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Password</th><th>Registered</th><th>Actions</th></tr>";

            foreach ($users as $user) {
                echo "<tr>";
                echo "<td>{$user['user_id']}</td>";
                echo "<td>{$user['first_name']}</td>";
                echo "<td>{$user['last_name']}</td>";
                echo "<td>{$user['email']}</td>";
                echo "<td>{$user['password']}</td>";
                echo "<td>{$user['reg_date']}</td>";
				echo "<td>" . ($user['is_admin'] ? 'Yes' : 'No') . "</td>";
                echo "<td class='actions'>
                        <form method='post' action='update_user.php' style='display:inline;'>
                            <input type='hidden' name='id' value='{$user['user_id']}'>
                            <button class='update'>Update</button>
                        </form>
                        <form method='post' action='delete_user.php' style='display:inline;'>
                            <input type='hidden' name='id' value='{$user['id']}'>
                            <button class='delete'>Delete</button>
                        </form>
                      </td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    ?>
</body>
</html>
