<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "mas7-store";

$conn = new mysqli($servername, $username, $password, $database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Use prepared statements to prevent SQL injection
    $sql_query = "INSERT INTO contactformdb (name, email, subject, message) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql_query);
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
        // Data insertion successful
        echo "success";
    } else {
        echo "Sorry, an error occurred while sending your message.";
    }

    $stmt->close();
    $conn->close();
}
?>
