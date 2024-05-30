<?php 
if(isset($_POST['submit'])){
    $idkelas = $_POST['idkelas'];
    $namakelas = $_POST['namakelas'];
    $kompetensikeahlian = $_POST['kompetensikeahlian'];

    include "../koneksi.php";
    $result = mysqli_query($koneksi, "UPDATE kelas SET nama_kelas='$namakelas', kompetensi_keahlian='$kompetensikeahlian' where id_kelas='$idkelas'");

    if($result){
        echo "<script>alert('Data Berhasil diperbarui'); window.location.href='read.php'</script>";
    }else{
        echo "<script>alert('Data Gagal diperbarui'); window.location.href='read.php'</script>";
    }
}
?>