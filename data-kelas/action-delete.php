<?php 
include "../koneksi.php";
$idkelas = $_GET['id_kelas'];
$query_mysql = mysqli_query($koneksi, "DELETE FROM kelas where id_kelas='$idkelas'");
if($query_mysql){
    echo "<script>alert('Data Berhasil dihapus'); window.location.href='read.php'</script>";
}else{
    echo "<script>alert('Data Gagal dihapus'); window.location.href='read.php'</script>";
}
?>