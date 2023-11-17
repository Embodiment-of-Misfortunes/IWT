<?php   
  $conn = mysqli_connect("localhost","root","","contactm");
  $sql="SELECT * FROM contact";
  $run=mysqli_query($conn,$sql);
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Contact Management</title>  
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <style>
        * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  width: 100%;
  height: 100vh;
  background-color: #34495e;
  position: relative;
  font-family: 'verdana', sans-serif;
}

header {
  width: 100%;
  height: 80px;
  background-color: #2c3e50;
}

table {
  width: 75%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.heading {
  background-color: #FFFF;
}

.heading th {
  padding: 10px 0;
}

.data {
  text-align: center;
  color: #FFFF;
}

.data td {
  padding: 15px 0;
}

#btn {
  text-decoration: none;
  color: #FFF;
  background-color: #e74c3c;
  padding: 5px 20px;
  border-radius: 3px;
}

#btn:hover {
  background-color: #c0392b;
}

      </style>

 </head>  
 <body>  

 <nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item" >
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="edit.php">Edit</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
 <table border="1" cellspacing="0" cellpadding="0">  
      <tr class="heading">  
           <th>ID</th>  
           <th>Name</th>  
           <th>Age</th>  
           <th>Country</th>  
           <th>Contact</th>  
           <th>Email</th>  
           <th>Gender</th>  
           <th>Address</th>  
           <th>Operation</th>  
      </tr>  
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                           
                               <td>".$result['id']."</td>  
                               <td>".$result['name']."</td>  
                               <td>".$result['age']."</td>  
                               <td>".$result['country']."</td>  
                               <td>".$result['contactN']."</td>  
                               <td>".$result['email']."</td>  
                               <td>".$result['gender']."</td>  
                               <td>".$result['address']."</td>  
                               <td><a href='del.php?id=".$result['id']."' id='btn'>Delete</a></td>  
                          </tr>  
                     ";  
                }  
           }  
      ?>  
 </table>  
 </body>  
 </html>  