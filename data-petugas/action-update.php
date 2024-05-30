<?php 
if(isset($_POST['submit'])){
    $idpetugas = $_POST['idpetugas'];
    $namapetugas = $_POST['namapetugas'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];

    include "../koneksi.php";
    $result = mysqli_query($koneksi, "UPDATE petugas SET nama_petugas='$namapetugas', username='$username', password='$password', level='$level' where id_petugas='$idpetugas'");

    if($result){
        echo "<script>alert('Data Berhasil diperbarui'); window.location.href='read.php'</script>";
    }else{
        echo "<script>alert('Data Gagal diperbarui'); window.location.href='read.php'</script>";
    }
}
?>