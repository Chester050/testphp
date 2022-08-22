<?php

$connection =  mysqli_connect('localhost' , 'root', '123456');

    $sql = "CREATE DATABASE Database2";

    mysqli_query ($connection , $sql);
 ?>
