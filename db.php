<?php


$con=new mysqli('localhost','clin_student', 'n5O1N6^J@#nBy2cP','clin_studentinfo');

if(!$con){
    die(mysqli_error($con));
}


$con2=new mysqli('localhost','clin_staff', 'EeGvovmly4xmv4wm','clin_managestaff');

if(!$con2){
    die(mysqli_error($con2));
}


$con3=new mysqli('localhost','clin_admit', '@qgbByMfry8o5tl5','clin_admithistory');

if(!$con3){
    die(mysqli_error($con3));
}



$con4=new mysqli('localhost','clin_inventory', '0NHON7IuqeGdLEg8','clin_inventory_db');

if(!$con4){
    die(mysqli_error($con4));
}


$con5=new mysqli('localhost','clin_inventory', '0NHON7IuqeGdLEg8','clin_inventory_db');

if(!$con5){
    die(mysqli_error($con5));
}