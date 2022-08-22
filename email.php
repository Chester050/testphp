<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



      <form action="email.php" method="post">

       Enter Email: <input type="email" name="myemail"/>
       <input type="submit" value="Go!">
       
      </form>

    <?php
    $okay = TRUE;
    $myemail = $_POST['myemail'];
    if($okay){
      mail($myemail,'Confirmed','Thanks for the registration!');
    }
     ?>











      </body>
    </html>
