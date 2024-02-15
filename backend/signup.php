<?php
session_start(); // Start the session

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once "../backend/conn.php";
    $data = json_decode(file_get_contents('php://input'), true);
    // Get form data and sanitize it
    $firstname = isset($_POST['firstname']) ? $conn->real_escape_string($_POST['firstname']) : '';
    $lastname = isset($_POST['lastname']) ? $conn->real_escape_string($_POST['lastname']) : '';
    $email = isset($_POST['email']) ? $conn->real_escape_string($_POST['email']) : '';
    $password = isset($_POST['password']) ? $conn->real_escape_string($_POST['password']) : '';

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Perform validation
    $errors = [];

    if (empty($firstname)) {
        $errors[] = "First name is required";
    }

    if (empty($lastname)) {
        $errors[] = "Last name is required";
    }

    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if (empty($password)) {
        $errors[] = "Password is required";
    }

    // Insert data into database if there are no validation errors
    if (empty($errors)) {
        // Check if email already exists
        $emailExists = false;
        $checkEmailQuery = "SELECT * FROM Users WHERE email = '$email'";
        $result = $conn->query($checkEmailQuery);
        if ($result->num_rows > 0) {
            $emailExists = true;
            $errors[] = "Email already exists";
        }

        if (!$emailExists) {
            $sql = "INSERT INTO Users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$hashedPassword')";

            if ($conn->query($sql) === TRUE) {
                echo json_encode("New record created successfully");
            } else {
                echo json_encode("Error: " . $sql . "<br>" . $conn->error);
            }
        }
    } else {
        // Display validation errors
        echo json_encode($errors);
    }

    $conn->close();
} else {
    echo "Invalid request method";
}

?>