<?php
    $conn = mysqli_connect("localhost","root","","contactm");
    $sql="SELECT * FROM contact";
    $result=mysqli_query($conn,$sql);

    error_reporting(0);
    $name=$_GET["name"];
    $age=$_GET["age"];
    $country=$_GET["country"];
    $contactN=$_GET["contactN"];
    $email=$_GET["email"];
    $gender=$_GET["gender"];
    $address=$_GET['address'];
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
                 <input type="text" value="<?php echo"$name"?>" name="name"required value="">
                </td>
            </tr>
            <tr>
                <td>Age :</td>
                 <td>
                 <input type="text" value="<?php echo"$age"?>" name="age"required value="">     
                </td>
            </tr>
            <tr>
                <td>Country Code</td>
                 <td>
                 <select class=""name="country" required>
                       <option >+<?php echo"$country"?></option>
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
                    <input type="text" value="<?php echo"$contactN"?>" name="contactN"required value="">
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                 <td>
                    <input type="text"  value="<?php echo"$email"?>" name="email"required value="">
                </td>
            </tr>
            
            <tr>
                <td>Address :</td>
                <td>
                  <input type="text" name="address"required value="<?php echo"$address"?>">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit"name="submit">UPDATE</button>
            </tr>
            
        </table>
      </form>
    </fieldset>
  </body>
</html>
<?php
if(isset($_POST["submit"])){
    $id=$_POST['id'];
    $name=$_POST["name"];
    $age=$_POST["age"];
    $country=$_POST["country"];
    $contactN=$_POST["contactN"];
    $email=$_POST["email"];
    $gender=$_POST["gender"];
    $address=$_POST['address'];
 
    $query="UPDATE contact SET name='$name',age='$age',country='$country',contactN='$contactN',email='$email',address='$address' WHERE id='$id'";
    $data=mysqli_query($conn,$query);
    if($data){
        echo
    "
    <script>alert('Updated Sucessfully'); </script>
    
    ";
    header('location:edit.php');
    }
    else {
        echo"<script>alert('error'); </script>";
    }
}

?>