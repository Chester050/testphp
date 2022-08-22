<?php
  include 'database/db.php';

  if($conn){
      echo "Connected!";

  }
  else {

    echo "Connection failed";
  }


  $sql = "SELECT * FROM userinfo";

  $result = mysqli_query($conn, $sql);

  $fetchData = mysqli_fetch_array($result);


  for($i = 0 ; $i < mysqli_num_rows($result); $i++)

  {
    echo "<br>" . "The username: " . $fetchData['username'] . " <br>" . "The user password: " . $fetchData['userpassword']. "<br>";
  }

 ?>
