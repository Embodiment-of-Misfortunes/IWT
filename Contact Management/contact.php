<?php

if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $age=$_POST["age"];
    $country=$_POST["country"];
    $contactN=$_POST["contactN"];
    $email=$_POST["email"];
    $gender=$_POST["gender"];
    $address=$_POST['address'];
 
    $conn = mysqli_connect("localhost","root","","contactm");
    $query="INSERT INTO contact VALUES('','$name','$age','$country','$contactN','$email','$gender','$address')";
    mysqli_query($conn,$query);
    echo
    "
    <script>alert('Data Inserted Sucessfully'); </script>
    ";
    header('location:home.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Contact Details</title>
    <link rel="stylesheet" href="style.css" />
    <style>
         select {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 200px;
}
input[type="radio"] {
  display: inline-block;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  border: 2px solid #3498db;
  position: relative;
  margin-right: 10px;
}

button[type="clear"] {
  background-color: #f44336;
  color: #fff;
}
input[type="password"]{
    height:36px;
    width:60%;
    border-radius: 30px;
    margin: 10px;
    padding-left: 20px;
    border: none;
    background: rgba(223, 221, 221, 0.822);
  }
    </style>
  </head>
  <body>
    <fieldset>
      <legend>Contact Details</legend>
      <form action="" method="post" >
        <table>
            <tr>
                <td> Name :</td>
                 <td>
                 <input type="text" name="name"required value="">
                </td>
            </tr>
            <tr>
                <td>Age :</td>
                 <td>
                 <input type="text" name="age"required value="">     
                </td>
            </tr>
            <tr>
                <td>Country Code</td>
                 <td>
                 <select class=""name="country" required>
                       <option value=""select hidden>Select Code</option>
                        <option value="USA">+11</option>
                        <option value="India">+91</option>
                        <option value="UK">+444</option>
                        <option value="Pakistan">+153</option>
                        <option value="Nepal">+3456</option>
                        <option value="Bangladesh">+123</option>

                </select>
                </td>
            </tr>

            <tr>
                <td>Mobile No:</td>
                 <td>
                    <input type="text" name="contactN"required value="">
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                 <td>
                    <input type="text" name="email"required value="">
                </td>
            </tr>
            <tr>
                <td>Gender :</td>
                 <td>
                 <input type="radio" name="gender" value="Male" required>Male
                 <input type="radio" name="gender" value="Female">Female
                </td>
            </tr>
            <tr>
                <td>Address :</td>
                <td>
                  <input type="text" name="address"required value="">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit"name="submit">ADD</button>
                </td>
                <td><button type="clear" name="clear">Clear</button>
            </tr>
            
        </table>
      </form>
    </fieldset>
  </body>
</html>