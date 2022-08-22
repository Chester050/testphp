<?php
  ob_start();
  if(isset($_POST['font_size'],$_POST['font_color'])){
      setcookie('font_size',$_POST['font_size']);
      setcookie('font_color',$_POST['font_color']);

        $msg="<h1> Congragulation! Cookies have been sent. </h1>";


  }
    if(isset($msg)){
      echo $msg;

    }
 ?>

   <!DOCTYPE html>
   <html lang="en" dir="ltr">
     <head>
       <meta charset="utf-8">
       <title></title>
     </head>
     <body>



       <form action="cookies.php" method="post">
         <select class="" name="font_size">
           <option value="">Font Size</option>
           <option value="Extra Small"> Extra Small</option>
           <option value="Medium">Medium</option>
           <option value="Large"> Large </option>
         </select>
         <select class="" name="font_color">
           <option value="">Font Color</option>
           <option value="red">Red</option>
           <option value="blue"> Blue </option>
         </select>
          <input type="submit" name="" value="Select preference" />
       </form>


     </body>
   </html>


    <?php ob_end_flush();
    echo $_POST['font_size'] . "<br>";
    echo $_POST['font_color'] . "<br>";
    echo $_COOKIE['font_size'] . "<br>";
     ?>
