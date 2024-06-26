  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- Sidebar user panel (optional) -->
    <!-- Sidebar user panel (optional) -->
    <!-- Sidebar user panel (optional) -->
    <a href="index.php" class="brand-link">
      <img src="../assets/admin/img/2.png" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ePuskesmas</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <div class="user-panel mt-4 pb-3 mb-3 d-flex text-light">
        <div class="image">
          <?php

          require_once 'koneksi.php';

          $sql = "SELECT username FROM admin";
          $result = $dbh->prepare($sql);
          $result->execute();

          $username = $result->fetchColumn();
          ?>
          <i class="fas fa-user-alt mx-2"></i><span class="brand-text"><?= $username; ?></span>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="data_pasien.php" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                Data Pasien
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="data_dokter.php" class="nav-link">
              <i class="nav-icon fas fa-user-doctor"></i>
              <p>
                Data Dokter
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="data_pemeriksaan.php" class="nav-link">
              <i class="nav-icon fas fa-bed-pulse"></i>
              <p>
                Data Pemeriksaan
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../index_admin.php">
              <i class=" nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>


      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>