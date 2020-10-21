<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "corona_servey";

$connect = mysqli_connect($servername,$username,$password,$database);

if($connect)
{
    echo "Connected";
}
else
{
    echo "Not Connected";
}



?>