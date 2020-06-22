<?php

$host="localhost";

$user="root";

$pass="";

$dbName="cobadb";

$conn = mysqli_connect($host, $user, $pass, $dbName);

if(!$conn){

                "Connection:Failed".mysqli_connect_error();

}

?>