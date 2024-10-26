<?php

$connect = mysqli_connect('localhost','root','password','login');
if(mysqli_connect_error()){
    echo "Failed to connect to mysql:" . mysqli_connect_error();
}
