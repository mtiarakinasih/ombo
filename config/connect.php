<?php

$username = "root";
$password = "";
$host = "localhost";
$db_name = 'ombo';
#$blabla adalah variabel

$is_connect = mysqli_connect($host, $username, $password, $db_name);
#mysqli_connect adalah function
#($host, $username, $password) adalah parameter

if($is_connect){
    mysqli_select_db($is_connect, "ombo");
}else{
    echo "OOopSie, tidak connect:(";
}