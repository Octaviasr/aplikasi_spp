<?php 
if(isset($_POST['submit'])){
    $idspp = $_POST['idspp'];
    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];
    $keterangan = $_POST['keterangan'];

    include "../koneksi.php";
    $result = mysqli_query($koneksi, "UPDATE spp SET tahun='$tahun', nominal='$nominal', keterangan='$keterangan' where id_spp='$idspp'");

    if($result){
        echo "<script>alert('Data Berhasil diperbarui'); window.location.href='read.php'</script>";
    }else{
        echo "<script>alert('Data Gagal diperbarui'); window.location.href='read.php'</script>";
    }
}
?>