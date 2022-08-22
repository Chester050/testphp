<?php


 $servername = "localhost";
 $dbusername = "root";
 $dbpassword = "123456";
 $dbname = "databasetest_1";
 $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if(mysqli_connect_error()){
  echo "Connection failed";
}
else{
  echo "Connection successful";
}



?>
