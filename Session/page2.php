    <?php

    session_start();

    $username = $_SESSION['username'];


    echo "Hey $username, it's you again!";

    if(isset($_POST['submit'])){

      session_destroy();
      unset($_SESSION['name']);
      header('Location: session.php');

    }
     ?>

     <!DOCTYPE html>
     <html lang="en" dir="ltr">
       <head>
         <meta charset="utf-8">
         <title></title>
       </head>
       <body>

         <form class="" action="page2.php" method="post">
           <input type='submit' name='submit'> Log out
         </form>

       </body>
     </html>
