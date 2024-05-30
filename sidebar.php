<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
              <a href="../home/dashboard.php" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            
            <?php if($_SESSION['level']=="admin"){ ?>
                <li class="menu-header">Pengelolaan Data</li>
                <li><a href="../data-kelas/read.php" class="nav-link"><i class="far fa-square"></i> <span>DATA KELAS</span></a></li>
                <li><a href="../data-petugas/read.php" class="nav-link"><i class="far fa-square"></i> <span>DATA PETUGAS</span></a></li>
                <li><a href="../data-spp/read.php" class="nav-link"><i class="far fa-square"></i> <span>DATA SPP</span></a></li>

                <li class="menu-header">Data Pembayaran</li>
                <li><a href="#" class="nav-link"><i class="far fa-square"></i> <span>History Pembayaran</span></a></li>
                <li><a href="#" class="nav-link"><i class="far fa-square"></i> <span>Transaksi Pembayaran</span></a></li>
           
            <?php }else if($_SESSION['level']=="petugas"){ ?>
            <li class="menu-header">Data Pembayaran</li>
                <li><a href="#" class="nav-link"><i class="far fa-square"></i> <span>History Pembayaran</span></a></li>
                <li><a href="#" class="nav-link"><i class="far fa-square"></i> <span>Transaksi Pembayaran</span></a></li>
            
            <?php }else{ ?>
            <li class="menu-header">Data Pembayaran</li>
                <li><a href="#" class="nav-link"><i class="far fa-square"></i> <span>History Pembayaran</span></a></li>
            <?php }?>
            
          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="../logout.php" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
          </div>        </aside>
      </div>
