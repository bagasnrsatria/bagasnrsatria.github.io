<?php

$host   = "localhost";
$user   = "root";
$pass   = "";
$db     = "db_latihan";

$koneksi = mysqli_connect($host,$user,$pass,$db);

if(mysqli_connect_errno()){
    echo "Koneksi gagal : ".mysqli_connect_error();
}else{
    echo "Koneksi database dengan Berhasil,selamat gara gara anda saya jadi semangat belajar";
}

?>