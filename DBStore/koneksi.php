<?php

$host       = "localhost";
$username   = "root";
$password   = "";
$database   = "uas_psbd";

$koneksi = new mysqli($host, $username, $password, $database);

if(!$koneksi){
    echo "Gagal Terkoneksi";
}
