<?php

session_start();

require_once ('db.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (!empty ($username) && !empty($password)) {
    $query = "insert into userData (username, password) values($username, $password)";
    mysqli_query($query);
    header('Location: login.php');
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

     <form class="" action="$_SERVER['PHP_SELF']" method="post">
       <label for="uname">Username:</label><br>
       <input type="text" id="fname" name="username"><br>
       <label for="password">Password:</label><br>
       <input type="text" id="lname" name="password">

       <input type="submit" name="" value="Go!">
     </form>
   </body>
 </html>
