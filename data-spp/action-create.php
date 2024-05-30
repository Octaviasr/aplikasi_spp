<?php 
if(isset($_POST['submit'])){
    $idspp = $_POST['idspp'];
    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];
    $keterangan = $_POST['keterangan'];

    include "../koneksi.php";
    $result = mysqli_query($koneksi, "INSERT into spp(id_spp,tahun,nominal,keterangan) values('$idspp','$tahun','$nominal','$keterangan')");

    if($result){
        echo "<script>alert('Data Berhasil ditambahkan'); window.location.href='read.php'</script>";
    }else{
        echo "<script>alert('Data Gagal ditambahkan'); window.location.href='read.php'</script>";
    }
}
?>