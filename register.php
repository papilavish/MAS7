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

if (isset($_POST['save'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password securely
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Use prepared statements to prevent SQL injection
    $sql_query = "INSERT INTO signup (username, email, password) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql_query);
    $stmt->bind_param("sss", $username, $email, $hashed_password);

    if ($stmt->execute()) {
        // Registration successful
        $_SESSION['username'] = $username;
        session_regenerate_id(); // Regenerate the session ID for security

        // Redirect to MAS7.php with username as a query parameter
        header("Location: MAS7.php?username=" . urlencode($username));
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
