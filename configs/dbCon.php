<?php
    //coonectiong to db
    $conn = mysqli_connect('localhost','root','', 'infs202');
    if(!$conn){
    echo "Connecting error: " . mysqli_connect_error();
    }
?>