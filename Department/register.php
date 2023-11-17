<?php
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "test"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user inputs from the HTML form
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$repeatPassword = $_POST['repeat_password'];

// Check if passwords match
if ($password !== $repeatPassword) {
    echo "Passwords do not match.";
    exit();
}

// Hash the password for secure storage
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert user data into the database
$sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$hashedPassword')";

if ($conn->query($sql) === TRUE) {
    echo "User registered successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
