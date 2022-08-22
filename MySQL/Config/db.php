  <?php


   $servername = "localhost";
   $username = "root";
   $password = "123456";
   $dbname = "databasetest_1";
   $conn = mysqli_connect($servername, $username, $password, $dbname);

  if(mysqli_connect_error()){
    echo "Connection failed";
  }
  else{
    echo "Connection successful";
  }



  ?>
