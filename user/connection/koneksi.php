<?php

$host       = "localhost";
$username   = "root";
$password   = "";
$database   = "projeck_akhir";

$koneksi = new mysqli($host, $username, $password, $database);
if (!$koneksi){
    echo "data base tidak tersambung";
}



?>