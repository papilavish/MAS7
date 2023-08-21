<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "mas7-store";

$conn = new mysqli($servername, $username, $password, $database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT password, username FROM signup WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($hashed_password, $username);
    $stmt->fetch();
    $stmt->close();

    if (password_verify($password, $hashed_password)) {
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $username; // Store username in the session
        session_regenerate_id(); // Regenerate the session ID for security

        // Redirect to MAS7.php with the username as a query parameter
        header("Location: MAS7.php?username=" . urlencode($username));
        exit();
    } else {
        // Handle failed login
        header("Location: signin.html?error=1"); // Redirect back to login page with an error parameter
        exit();
    }
}
$conn->close();
?>
