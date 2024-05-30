<?php 
include "../koneksi.php";
$idspp = $_GET['id_spp'];
$query_mysql = mysqli_query($koneksi, "DELETE FROM spp where id_spp='$idspp'");
if($query_mysql){
    echo "<script>alert('Data Berhasil dihapus'); window.location.href='read.php'</script>";
}else{
    echo "<script>alert('Data Gagal dihapus'); window.location.href='read.php'</script>";
}
?>