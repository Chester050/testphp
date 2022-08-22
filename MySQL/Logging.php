<?php

  session_start();
  

  include ('Config/db.php');

// include ('function.php');

//$userinfo = check_login($conn);



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
    $password = $_POST['password'];

  if (!empty ($username) && !empty($password)) {
    $query = "select * from userdata where username = ? ;";

    $stmt = mysqli_stmt_init($conn);

    mysqli_stmt_prepare($stmt, $query);

    mysqli_stmt_bind_param($stmt, 's', $username);

    mysqli_stmt_execute($stmt);

      $result = mysqli_stmt_get_result($stmt);


        $userdata = mysqli_fetch_assoc($result);

         $dbUserName =  $userdata['username'];
         $dbUserPw =   $userdata['userpassword'];

          if($dbUserName !== $username){
            echo   "<script> alert('User not found') </script>";
            echo   "<script> location.href='Logging.php' </script>";
            exit();
      }
          else if ($dbUserPw !== $password){
            echo "<script> alert('Wrong password for user $username') </script>";
            echo   "<script> location.href='Logging.php' </script>";
            exit();
          }

          else  {
          $_SESSION['logusername'] = $dbUserName;
          header('location: Login.php');
          exit();
          }

        }




  }





 ?>



 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Log in</title>
   </head>
   <body>

     <form class="" action="Logging.php" method="post">
       <label for="uname">Username:</label><br>
       <input type="text" id="fname" name="username"><br>
       <label for="password">Password:</label><br>
       <input type="text" id="lname" name="password">

       <input type="submit" name="" value="Go!">
     </form>
   </body>
 </html>
