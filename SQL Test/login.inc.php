<?php

include 'database/db.php';

  $name = $_POST['name'];
  $age = $_POST['age'];

  $sql = "SELECT * FROM student where studentName = '$name' ";

  $result = mysqli_query($conn , $sql);

  $data = mysqli_fetch_assoc($result);

  if($row = mysqli_num_rows($result)){
    echo "<script> alert(' $name  exists') </script>" ;
    if($age !== $data['studentAge']){

       echo "<script> alert('Age is not correct') </script> ";
     }
  }
  else {
        echo "<script> alert('User does not exist') </script> ";
  }

  ?>
