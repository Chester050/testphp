
<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      <div class="row">


        </div>
      </div>
  <form action="sendmail.php" class="col-6">

  <div class="form-group">
    <label for="name"> Name: </label>
    <input type="text" name="name" id="textInput"   onfocusin="Enlarge(textInput)" onfocusout="backNormal(textInput)" class="form-control" placeholder="Enter your name...">
  </div>

  <div class="form-group">
    <label for="email">Email: </label>
    <input type="email" name="email" id="emailInput" onfocusin="Enlarge(emailInput)" onfocusout="backNormal(emailInput)" class="form-control" placeholder="Enter your name...">
  </div>

  <button type="submit"  class="btn btn-primary"> Submit </button>


  </form>

</div>
</div>

   <script>

    let textInput = document.getElementById('textInput');



     function Enlarge(x){
      x.style.fontSize = "30px";

    }

     function backNormal(y){
       y.style.fontSize = "";




     }
   </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>


<?php

  if(isset($_GET['name'] , $_GET['email']))
  {
    $name= $_GET['name'];
    $email12 = $_GET['email'];
  }


use PHPMailer\PHPMailer\PHPMailer;

require_once 'Phpmailer\Exception.php';
require_once 'Phpmailer\PHPMailer.php';
require_once 'Phpmailer\SMTP.php';

$mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = "systemcassiopeia@gmail.com";
  $mail->Password = "202103589";
  $mail->SMTPsecure = PHPMailer :: ENCRYPTION_STARTTLS;
  $mail->Port = "587";

  $mail->setFrom('systemcassiopeia@gmail.com');
  $mail->addAddress($email12);

  $mail->isHTML(true);

  $mail->Subject = "PHP administration team";
  $mail->Body = "<h1 color='#89635B'> Oi $name </h1> <br> <p style='font-size:20px;'> <b>This email is auto-generated. Please do not reply.</b> </p>";

  $mail->send();

  if(mail($email12, $name)){
    echo "Your email has been sent.";

  }else {
    echo "A problem has occured when sending the email.";
  }

 ?>


 <?php

  ?>
