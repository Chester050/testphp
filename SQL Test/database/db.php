  <?php
  $conn = mysqli_connect('localhost', 'root', '123456', 'DatabaseTest_1');

  if(mysqli_connect_error()){
    echo "Connection failed";
  }
  else{
    echo "Connection successful";
  }



  ?>
