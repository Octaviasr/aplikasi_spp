<?php 
$koneksi = mysqli_connect("localhost", "root","","aplikasi_spp");
if(mysqli_connect_errno()){
    echo "Gagal terhubung ke database".mysqli_connect_error();
}
?>