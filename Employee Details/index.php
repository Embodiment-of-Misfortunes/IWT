
<?php
// NOTE:XAMPP PASSWORD IS USER:ROOT PASSWORD:""



$servername = "localhost";  // Change if your MySQL server is on a different host
$username = "root";  // Change if you have a different MySQL username
$password = "";  // Change if you have a different MySQL password
$dbname = "testdb1";  // Your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get values from the form
    $fullName = $_POST['fullName'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $contactNumber = $_POST['contactNumber'];
    $email = $_POST['email'];
    $streetAddress = $_POST['streetAddress'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipCode = $_POST['zipCode'];
    
    // SQL query to insert data into the database
    $sql = "INSERT INTO employee_details (full_name, dob, gender, contact_number, email, street_address, city, state, zip_code) 
            VALUES ('$fullName', '$dob', '$gender', '$contactNumber', '$email', '$streetAddress', '$city', '$state', '$zipCode')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>Employee Details Form</title>
</head>
<body>
    <div class="container">
        <h2>Employee Details Form</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName" required>
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <input type="radio" id="male" name="gender" value="male" required>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female" required>
                <label for="female">Female</label>
            </div>

            <div class="form-group">
                <label for="contactNumber">Contact Number:</label>
                <input type="tel" id="contactNumber" name="contactNumber" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="streetAddress">Street Address:</label>
                <input type="text" id="streetAddress" name="streetAddress" required>
            </div>

            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" id="city" name="city" required>
            </div>

            <div class="form-group">
                <label for="state">State:</label>
                <input type="text" id="state" name="state" required>
            </div>

            <div class="form-group">
                <label for="zipCode">Zip Code:</label>
                <input type="text" id="zipCode" name="zipCode" required>
            </div>
             
            <div class="form-group">
                <label for="Designation">Designation:</label>
                <input type="text" id="Designation" name="Designation" required>
</div>

<div class="form-group">
    <label for="Skills">Languages Known:</label>
    <input type="checkbox" id="Skills1" name="Skills2" required>
    <label for="vehicle1">English </label><br>
    <input type="checkbox" id="Skills2" name="Skills2" value="Car">
    <label for="vehicle2"> Tamil</label><br>
    <input type="checkbox" id="Skills3" name="Skills3" value="Boat">
    <label for="vehicle3"> Hindi</label><br>
</div>



            <button type="submit">Submit</button>
        </form>
    </div>
    
</body>
</html>
