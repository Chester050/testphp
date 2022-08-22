<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      $cars = array(
        'Toyota','Honda','Perodua','Proton'
      );
      $location = array(
        'Puchong','Shah Alam', 'Cheras' ,'Ampang'
      );

      $transport = array(
        'cars' => $cars,
        'place' => $location
      );

      for ($o = 0 ; $o < count($cars) ; $o++){
      echo "<br> <p>If i am going to {$transport['place'][$o]}, My vehicle will be {$transport['cars'][$o]}</p>";
    }
    echo count($location);

    $firstArray = array("Apple","Orange");
    $secondArray = array("Vanilla","Blackcurrant");
    $conbinedArray = array(
      "first" => $firstArray,
      "second" => $secondArray,
      "third" => "others"
    );



     ?>

     <?php

     $var1 = "";
     $var2 = FALSE;


     if(empty($var1) AND empty($var2)){
       echo "They have no value";
     }

      ?>
     <pre>
       <?php print_r($transport); ?>
       <?php print_r($conbinedArray); ?>
     </pre>

          <?php
            $date = date('h:i a l d F Y');


            echo $date;
            include('template.html');
           ?>

      </body>
      </html>
