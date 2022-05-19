<?php
session_start();
$host = 'ec2-54-164-40-66.compute-1.amazonaws.com';
$port = '5432';
$user = 'bxhclkcevdewlz'; 
$password ='960cc2ca5f961fac52e862006e7b896905be6e1364fb0a762b3a4dd27b1842c1';
$db   = 'd5o7mvq0auumpp';

$connection = pg_connect("host=$host port =$port dbname=$db user=$user password=$password");
// if($connection){
// echo 'Koneksi Berhasil';
// }
// else{
// echo 'Koneksi Gagal';
// }
// ?>