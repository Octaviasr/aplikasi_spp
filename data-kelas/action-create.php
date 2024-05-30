<?php 
if(isset($_POST['submit'])){
    $idkelas = $_POST['idkelas'];
    $namakelas = $_POST['namakelas'];
    $kompetensikeahlian = $_POST['kompetensikeahlian'];

    include "../koneksi.php";
    $result = mysqli_query($koneksi, "INSERT into kelas(id_kelas,nama_kelas,kompetensi_keahlian) values('$idkelas','$namakelas','$kompetensikeahlian')");

    if($result){
        echo "<script>alert('Data Berhasil ditambahkan'); window.location.href='read.php'</script>";
    }else{
        echo "<script>alert('Data Gagal ditambahkan'); window.location.href='read.php</script>'";
    }
}
?>