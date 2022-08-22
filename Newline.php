<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      <?php
        $firstname = $_POST["firstname"] ;
        $lastname = $_POST["lastname"] ;
        $email = $_POST["email"] ;
        $posting = nl2br($_POST["posting"]) ;

        $name = $firstname . $lastname ;

        echo "<span style=\"font-weight:bold;\"> Thank you $name , for you submission. </span>
        <p style=\"color:red;font:serif bold;line-height:10vw;\"> Your posting is \n  $posting    </p>";
      ?>

  </body>
</html>
