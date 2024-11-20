<?php
include('config.php');
if(isset($_GET['nis'])){
    //ambil data dari quey string
    $nis = $_GET['nis'];
    //buat quey hapus
    $sql ="DELETE FROM t_siswa WHERE nis =$nis";
    $query =mysqli_query($conn, $sql);
    //apakah query update berhasil
    if($query){
        header('location:index.php?status=sukses');
    }else {
        header('location:index.php?status=gagal');
    }
} else{
    die("Akses dilarang");
}
?>