<?php   
   $conn = mysqli_connect("localhost","root","","contactm");
   $sql="SELECT * FROM contact";
   $run=mysqli_query($conn,$sql); 
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `contact` WHERE id = '$id'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:delete.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?>  
