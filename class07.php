<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
  
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <!-- <div class="mb-3 form-check"> -->
    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
  <!-- </div> -->
  <button type="submit" class="btn btn-primary" name="insert">insert</button>
  <button type="submit" class="btn btn-primary" name="update">update</button>
  <button type="submit" class="btn btn-primary" name="delete">delete</button>
  <button type="submit" class="btn btn-primary" name="select">select</button>
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
$id = $_REQUEST['id'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

//1- insert data
  // $insert = "INSERT INTO students (id,email,password) VALUES ('$id','$email', '$password')";
  //   if (mysqli_query($conn,$insert)) {
  //    echo "data successfully stored";
  //   }
  //  else {
  //       echo "sorry". mysqli_error($conn);
  //   }
  //   mysqli_close($conn);

    //2- update data
        //  $update = "UPDATE students SET email = 'sani@gmail.com' where id=5";
        //  if (mysqli_query($conn,$update)) {
        //   echo "data updated successfully";
        //  }
        // else {
        //      echo "sorry". mysqli_error($conn);
        //  }
        //  mysqli_close($conn);

      //3- delete data
        //  $delete = "DELETE from students WHERE email = 'ayesha@gmail.com'";
        //  if (mysqli_query($conn,$delete)) {
        //   echo "data deleted successfully";
        //  }
        // else {
        //      echo "sorry". mysqli_error($conn);
        //  }
         
        //  mysqli_close($conn);

     //4- select data
         //$select = "SELECT * from students email = 'zoya@gmail.com' WHERE id = 4";
        //  $select = "SELECT * FROM students WHERE email = 'laiba@gmail.com'";
        
        // if (mysqli_query($conn,$select)) {
        //   echo "deta selected successfully";
        //  }

        // else {
        //      echo "sorry". mysqli_error($conn);
        //  }
        //  //connection close
        //  mysqli_close($conn);
  ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
