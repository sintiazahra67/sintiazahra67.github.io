<?php
$SERVER ="localhost";
$USER ="root";
$PASSWORD ="";
$nama_database ="db_siswa";
$conn =mysqli_connect($SERVER, $USER, $PASSWORD, $nama_database);
if(!$conn){
    die("gagal terhubung dengan database: ".mysqli_connect_error());
}
?>