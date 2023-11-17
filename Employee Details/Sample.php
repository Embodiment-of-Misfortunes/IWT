<?php
$servername = "localhost";  
$username = "root";  
$password = ""; 
$dbname = "testdb1"; 


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fullName = $_POST['fullName'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$contactNumber = $_POST['contactNumber'];
$email = $_POST['email'];
$streetAddress = $_POST['streetAddress'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipCode = $_POST['zipCode'];

$sql = "INSERT INTO employee_details (full_name, dob, gender, contact_number, email, street_address, city, state, zip_code) 
        VALUES ('$fullName', '$dob', '$gender', '$contactNumber', '$email', '$streetAddress', '$city', '$state', '$zipCode')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
