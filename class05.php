<?php
         $servername = "localhost";
         $username = "root";
         $password = "";
         $database = "coaching";

         $conn = new mysqli($servername, $username, $password, $database);

         if ($conn->connect_error) {
            die("connection failed". $conn->connect_error);
         }
         else{
            echo "database connected successfully";
         }
         $sql = "INSERT INTO students (id,name,email,contact)
         VALUES (7 ,'jiya', 'jiya@gmail.com' , 777 )";
         
         if ($conn->query($sql) === TRUE) {
           echo "New record created successfully";
         } else {
           echo "Error: " . $sql . "<br>" . $conn->error;
         }
         
         $conn->close();
        ?>

       <!--this is html form methods get and post -->
    <!-- <form action="" method="get">
        <input type="email" placeholder="email">
        <input type="password" placeholder="password">
        <button type="submit">send</button>
    </form> -->

    <!-- <form action="" method="post">
        <input type="email" placeholder="email">
        <input type="password" placeholder="password">
        <button type="submit">send</button>
    </form> -->