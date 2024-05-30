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
                    <div class="col"><p class="display-1">Selamat Datang <?php echo $_SESSION['nama']; ?></p></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php require("../template/footer.php"); ?>