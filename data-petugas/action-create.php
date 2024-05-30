<?php 
if(isset($_POST['submit'])){
    $idpetugas = $_POST['idpetugas'];
    $namapetugas = $_POST['namapetugas'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];

    include "../koneksi.php";
    $result = mysqli_query($koneksi, "INSERT into petugas(id_petugas,nama_petugas,username,password,level) values('$idpetugas','$namapetugas','$username','$password','$level')");

    if($result){
        echo "<script>alert('Data Berhasil ditambahkan'); window.location.href='read.php'</script>";
    }else{
        echo "<script>alert('Data Gagal ditambahkan'); window.location.href='read.php</script>'";
    }
}
?>