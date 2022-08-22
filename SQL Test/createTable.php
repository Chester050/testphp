<?php

  include 'database/db.php';


$sql = "CREATE TABLE student(
  StudentID int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  studentName varchar(255),
  studentAge int,
  studentHP int
)";

  mysqli_query($conn, $sql);



 ?>
