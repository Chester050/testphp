<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



      <form action="login.php" method="post">

        <p>  Email Address: <input type="email" name="email" /> </p>
        <p> Password: <input type="password" name="password" /> </p>
        <input type="submit" value="Here we go!">
      </form>
    <?php

      $email = $_POST['email'];
      $password = $_POST['password'];

      if($_SERVER['REQUEST_METHOD']='POST'){
        if( (!empty($email)) && (!empty($password) ) ){
          if( ($email) =='hello@gmail.com' && ($password) == '123' ) {
            echo "<h1> You sucessfully logined in! </h1>";
          }else{
            echo "<h1>You have entered either wrong password or email.</h1>";
          }
        }else{
          echo "<h2>Please enter all the fields.</h2>";
        }
      }

        ?>









  </body>
</html>
