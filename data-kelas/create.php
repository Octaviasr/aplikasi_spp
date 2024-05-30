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
            <div class="section-header">Dashboard</div>
            <div class="section-body">
                <div class="row">
                    <div class="col-6 mx-auto">
                    <div class="card ">
                    <div class="card-header"><h1 class="display-4">Input Data Kelas</h1></div>

                    <div class="card-body">
                        <form method="POST" action="../data-kelas/action-create.php" class="needs-validation" novalidate="">
                        <div class="form-group">
                            <label for="email">Id Kelas</label>
                            <input id="email" type="text" class="form-control" name="idkelas" tabindex="1" required autofocus>
                            <div class="invalid-feedback">
                            Please fill in
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Nama Kelas</label>
                            <input id="email" type="text" class="form-control" name="namakelas" tabindex="1" required autofocus>
                            <div class="invalid-feedback">
                            Please fill in 
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="kk">Kompetensi Keahlian</label>
                            <select class="form-control" aria-label="Default select example" name="kompetensikeahlian">
                            <option selected hidden>Pilih Kompetensi Keahlian</option>
                            <option value="RPL">RPL</option>
                            <option value="TAV">TAV</option>
                            <option value="DPIB">DPIB</option>
                            <option value="TBSM">TBSM</option>
                            <option value="TKRO">TKRO</option>
                            </select>
                        </div>                        

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4" name="submit">
                            Submit
                            </button>
                        </div>
                        </form>

              </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php require("../template/footer.php"); ?>