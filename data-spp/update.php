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
            <div class="section-header"><h1>Update Data SPP</h1></div>
            <div class="section-body">
                <div class="row">
                    <div class="col-6 mx-auto">
                    <div class="card ">
                    <div class="card-header"><h1 class="display-4">Input Data SPP</h1></div>

                    <div class="card-body">
                        <form method="POST" action="../data-spp/action-update.php" class="needs-validation" novalidate="">

                        <?php 
                        include "../koneksi.php";
                        $idspp = ['id_spp'];
                        $query_mysql = mysqli_query($koneksi, "select*from spp");
                        $data = mysqli_fetch_array($query_mysql);{
                        ?>

                        <div class="form-group">
                            <label for="email">Id spp</label>
                            <input id="email" type="text" class="form-control" name="idspp" tabindex="1" required readonly value="<?php echo $data['id_spp']; ?>">
                            <div class="invalid-feedback">
                            Please fill in
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Tahun</label>
                            <input id="email" type="text" class="form-control" name="tahun" tabindex="1" required value="<?php echo $data['tahun']; ?>">
                            <div class="invalid-feedback">
                            Please fill in 
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Nominal</label>
                            <input id="email" type="text" class="form-control" name="nominal" tabindex="1" required value="<?php echo $data['nominal']; ?>">
                            <div class="invalid-feedback">
                            Please fill in 
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Keterangan</label>
                            <input id="email" type="text" class="form-control" name="keterangan" tabindex="1" required value="<?php echo $data['keterangan']; ?>">
                            <div class="invalid-feedback">
                            Please fill in 
                            </div>
                        </div>
                                              

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4" name="submit">
                            Submit
                            </button>
                        </div>
                        </form>
                        <?php }?>
              </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php require("../template/footer.php"); ?>