<?php
  session_start();

    if(isset($_SESSION['logusername'])){
      $logusername = $_SESSION['logusername'];

      echo "<h1> It's the log in page! $logusername </h1>";


  }
  else{
      
      header('location: Logging.php');
  }


 ?>

  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
      <form class="" action="logout.php" method="post">
              <input type="submit" name="logout"> Log out</button>
      </form>

    </body>
  </html>
