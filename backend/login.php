<?php
session_start();    
    
    require_once "../backend/conn.php";

    $data = json_decode(file_get_contents('php://input'), true);

    // Check if the server method is set
    if (isset($_SERVER['REQUEST_METHOD'])) {
        // Sanitize data
        $email = $conn->real_escape_string($data['email']);
        $password = $conn->real_escape_string($data['password']);

        // Fetch the user from the database
        $result = $conn->query("SELECT * FROM Users WHERE email = '$email'");

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                if (password_verify($password, $row['password'])) {
                    echo json_encode(array("status" => "success", "message" => "Password is valid!" , "id" => $row['id']));
                    $_SESSION['email_id'] = $row['id']; // Set session variable

                } else {
                    echo json_encode(array("status" => "error", "message" => "Invalid password."));
                }
            }
        } else {
            echo json_encode(array("status" => "error", "message" => "No user found."));
        }
    } else {
        echo json_encode(array("status" => "error", "message" => "Invalid server method."));
    }
    $conn->close();