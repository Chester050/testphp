<?php

session_start();

include ('Config/db.php');
include ('function.php');
$userinfo = check_login($conn);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (!empty ($username) && !empty($password)) {
    $query = "INSERT INTO userdata (username, userpassword) VALUES(?, ?);";

    $stmt = mysqli_stmt_init($conn);

    mysqli_stmt_prepare($stmt, $query);

    mysqli_stmt_bind_param($stmt, 'ss', $username, $password);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    echo "<script> alert('Successfully signed up'); </script>";
    die;
  }
}
 ?>



 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Sign up</title>
   </head>
   <body>

     <form class="" action="signup.php" method="post">
       <label for="uname">Username:</label><br>
       <input type="text" id="fname" name="username"><br>
       <label for="password">Password:</label><br>
       <input type="text" id="lname" name="password">

       <input type="submit" name="" value="Go!">
     </form>
   </body>
 </html>
