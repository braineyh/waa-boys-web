<?php
session_start();
    require_once "./conn.php";

    if (isset($_SERVER['REQUEST_METHOD'])) {
    $phone = $conn->real_escape_string($_POST['phone']);
    $kcperesults = $conn->real_escape_string($_POST['kcperesults']);
    $momphone = $conn->real_escape_string($_POST['momphone']);
    $dadphone = $conn->real_escape_string($_POST['dadphone']);
    $healthproblems = $conn->real_escape_string($_POST['healthproblems']);
    $dob = $conn->real_escape_string($_POST['dob']);
    $location = $conn->real_escape_string($_POST['location']);

    // Validate phone numbers
    if (!preg_match("/^[0-9]{10}$/", $phone) || !preg_match("/^[0-9]{10}$/", $momphone) || !preg_match("/^[0-9]{10}$/", $dadphone)) {
        echo json_encode(array("status" => "error", "message" => "Invalid phone number."));
        exit();
    }

    // Check if users_id is present in Applications table
    
    $users_id = $_SESSION['email_id'];
    $checkSql = "SELECT * FROM Applications WHERE users_id = ?";
    $checkStmt = $conn->prepare($checkSql);
    $checkStmt->bind_param("i", $users_id);
    $checkStmt->execute();
    $checkResult = $checkStmt->get_result();

    if ($checkResult->num_rows > 0) {
        echo json_encode(array("status" => "error", "message" => "User ID already exists in Applications table."));
        exit();
    }

    // Insert data into the database
    $sql = "INSERT INTO Applications (users_id, phone, kcperesults, momphone, dadphone, healthproblems, dob, location) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssssss", $users_id, $phone, $kcperesults, $momphone, $dadphone, $healthproblems, $dob, $location);

    if ($stmt->execute()) {
        echo json_encode(array("status" => "success", "message" => "Application submitted successfully."));
    } else {
        echo json_encode(array("status" => "error", "message" => "Failed to submit application."));
    }

    $conn->close();
} else {    
    echo json_encode(array("status" => "error", "message" => "Invalid server method."));
}    
?>