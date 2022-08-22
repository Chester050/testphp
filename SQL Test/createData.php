<?php

  include 'database/db.php';

  $name = $_POST['name'];
  $age = $_POST['age'];
  $hp = $_POST['hp'];

  $query = "SELECT * FROM student WHERE studentName = '$name' " ;

  $query2 = "SELECT * FROM student";

  $result = mysqli_query($conn, $query);

  $result2 = mysqli_query($conn, $query2);

  $row = mysqli_num_rows($result);

  $userData = mysqli_fetch_assoc($result2);


  if($row > 0){
      echo " <br> The username already exists";
      die();
  }
  else{
  $sql = "INSERT INTO student (studentName, studentAge, studentHP) VALUES ( '$name' , '$age' , '$hp')";

  mysqli_query($conn, $sql);
}

 ?>
