      <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title></title>
      </head>
      <body>
      <?php

        function make_day_menu() {
        $month = array(1=> 'January','February','March','April','May','June','July','August','September','Octorber','November','December');
        echo '<select name="month"> Select Month:';
          foreach($month as $key => $value)
          {
            echo "\n <option value= \"$key\" > $value </option>";
          }

        echo "</select>\r";

        echo '<select name=\"day\"> Select day:';

        for($day = 0 ; $day <= 31; $day++) {
          echo " \n <option value=\"day\"> $day </option>";

        }

        echo "</select>\r";

        echo "<select name=\"year\"> Select Year:";
        for($year = 1970 ; $year < 2050 ; $year++){
          echo "<option value=\"year\"> $year </option>";
        }
        echo "</select>\r";

      }
        echo "<form action=\"menu.php\" method=\"post\">";
        make_day_menu();
        echo "</form>";


          function newFunctionName($n1 , $n2){
            echo $n1  . $n2 . "<br>";
          }

          newFunctionName("Chester\r","Jie");

          newFunctionName("Larry\r","King");

          newFunctionName (1 , 50);
            $num = 33333.33333;
            echo round($num,2);
       ?>



     </body>
   </html>
