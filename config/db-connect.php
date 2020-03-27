<?php
// connect to database
$conn = mysqli_connect('localhost:3308', 'root', '', 'ninja_pizza');

// check connection
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

?>