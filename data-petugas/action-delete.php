<?php 
include "../koneksi.php";
$idpetugas = $_GET['id_petugas'];
$query_mysql = mysqli_query($koneksi, "DELETE FROM petugas where id_petugas='$idpetugas'");
if($query_mysql){
    echo "<script>alert('Data Berhasil dihapus'); window.location.href='read.php'</script>";
}else{
    echo "<script>alert('Data Gagal dihapus'); window.location.href='read.php'</script>";
}
?>