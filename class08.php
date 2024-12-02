<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container my-4">
<form action="" method="post">
    <h1 class="text-primary text-center">login form</h1>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
          <div class="button">
  <button type="submit" class="btn btn-danger" name="select">select</button>
  </div>
</form>
   </div>
   <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $database =  "loginform";
          
          $conn = new mysqli($servername, $username, $password, $database);   
          
          if ($conn->connect_error) {
              die("connection lost". $conn->connect_error);
          }
          
          //if (isset($_POST["select"])) {

          $email = $_POST['email'];
          $password = $_POST['password'];
          
          //$select = "SELECT * FROM students";
          $select = "SELECT * FROM students WHERE email = '$email'";
          $result = $conn->query($select);
          
          if ($result->num_rows > 0) {
                 while ($row = $result->fetch_assoc()) {
          
            echo   
                 "<table class = 'table-strip table-danger'>
                 <tr>
                       <td>" . $row["email"] ."</td>
                       <td>" . $row["password"] . "</td>
                 </tr>
                 </table>";
                 } 
          }   else {
             echo "0 results"; }
            //}
                //mysqli_close($conn);
    ?>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      </body>
         </html>