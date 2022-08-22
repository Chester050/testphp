<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>

    <?php
      $name = $_GET["name"];

      echo "Hello $name";

      include('Array.php');

      $car = array("Toyota", "Honda", "Hyundai");

      for ($x = 0; $x < count($car); $x++){

        echo $car[$x] . " ";
      }

      echo '<br> <br>';
      $people = array("Chester" => "20", "Tong Shiong" => "30", "Chew Chew" => "40");
      $people1 = array("Chester", "Tong Shiong", "Chew Chew");

      $family = array("YPC family" => $people1);

      foreach($people as $person => $age){
        echo " " . $person . " is " . $age . ' years old. <br>';
      }
      $familyName = array("YPC" => $person);

      echo $family["YPC family"][1];

     ?>


  </body>

</html>
