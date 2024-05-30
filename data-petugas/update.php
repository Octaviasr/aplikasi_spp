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
            <div class="section-header"><h1>Update Data Petugas</h1></div>
            <div class="section-body">
                <div class="row">
                    <div class="col-6 mx-auto">
                    <div class="card ">
                    <div class="card-header"><h1 class="display-4">Input Data Petugas</h1></div>

                    <div class="card-body">
                        <form method="POST" action="../data-petugas/action-update.php" class="needs-validation" novalidate="">

                        <?php 
                        include "../koneksi.php";
                        $idpetugas = ['id_petugas'];
                        $query_mysql = mysqli_query($koneksi, "select*from petugas");
                        $data = mysqli_fetch_array($query_mysql);{
                        ?>

                        <div class="form-group">
                            <label for="email">Id Petugas</label>
                            <input id="email" type="text" class="form-control" name="idpetugas" tabindex="1" required readonly value="<?php echo $data['id_petugas'] ?>">
                            <div class="invalid-feedback">
                            Please fill in
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="email">Nama Petugas</label>
                            <input id="email" type="text" class="form-control" name="namapetugas" tabindex="1" required value="<?php echo $data['nama_petugas'] ?>">
                            <div class="invalid-feedback">
                            Please fill in
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Username</label>
                            <input id="email" type="email" class="form-control" name="username" tabindex="1" required value="<?php echo $data['username'] ?>">
                            <div class="invalid-feedback">
                            Please fill in
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Password</label>
                            <input id="email" type="password" class="form-control" name="password" tabindex="1" required value="<?php echo $data['password'] ?>">
                            <div class="invalid-feedback">
                            Please fill in
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <label for="kk">Level</label>
                            <select class="form-control" aria-label="Default select example" name="level">
                            <option selected hidden>Pilih Level</option>
                            <option value="admin">admin</option>
                            <option value="petugas">petugas</option>
                            </select>
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