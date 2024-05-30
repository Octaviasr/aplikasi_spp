<?php 
session_start();
if($_SESSION['level'] == ""){
    header("location:auth-login-petugas.php?pesan=gagal");
}
?>

<?php require("../template/header.php"); ?>
<?php require("../template/nav.php"); ?>
<?php require("../template/sidebar.php"); ?>

<!--main content-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="main-content">
        <div class="section">
            <div class="section-header"><h1>Data Kelas</h1></div>
            <div class="section-body">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header"><a href="../data-kelas/create.php" class="btn btn-success my-1">Tambah Data Kelas</a></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                <tr>
                                     <th>#</th>
                                     <th>ID KELAS</th>
                                     <th>NAMA KELAS</th>
                                     <th>KOMPETENSI KEAHLIAN</th>
                                     <th>Action</th>
                                </tr>
                                <?php 
                                include "../koneksi.php";
                                $query_mysql = mysqli_query($koneksi, "select * from kelas");
                                $nomor = 1;
                                while($data = mysqli_fetch_array($query_mysql)){
                                ?>
                                <tr>
                                    <td> <?php echo $nomor++; ?></td>
                                    <td><?php echo $data['id_kelas']; ?></td>
                                    <td><?php echo $data['nama_kelas']; ?></td>
                                    <td><?php echo $data['kompetensi_keahlian']; ?></td>
                                    <td style="width: 20%;">
                                      <a href="update.php?id_kelas=<?php echo $data['id_kelas']; ?>" class="btn btn-warning my-1">Update</a>
                                      <a href="action-delete.php?id_kelas=<?php echo $data['id_kelas']; ?>" class="btn btn-danger my-1">Delete</a>
                                      <a href="#" class="btn btn-secondary">Detail</a>
                                    </td>
                                </tr>    
<?php }?>                         </table>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php require("../template/footer.php"); ?>