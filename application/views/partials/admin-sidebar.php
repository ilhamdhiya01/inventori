<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url('dashboard') ?>" class="brand-link d-flex justify-content-center">
    <span class="brand-text font-weight-light">PT. INDOCIPTA WISESA</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url('AdminLTE') ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= $this->session->login['nama'] ?></a>
      </div>
    </div>

    <div class="input-group">
      <input class="form-control form-control-sidebar border-none" type="text" placeholder="Sign Out" disabled>
      <a href="<?= base_url('logout') ?>" class="btn btn-sidebar">
        <div class="input-group-append">
          <i class="fas fa-power-off fa-fw mt-1"></i>
        </div>
      </a>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?= base_url('dashboard') ?>" class="nav-link <?= $aktif == 'dashboard' ? 'active' : '' ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-header">MASTER</li>
        <li class="nav-item">
          <a href="<?= base_url('barang') ?>" class="nav-link <?= $aktif == 'barang' ? 'active' : '' ?>">
            <i class="nav-icon fas fa-fw fa-box"></i>
            <p>
              Master Barang
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('customer') ?>" class="nav-link <?= $aktif == 'customer' ? 'active' : '' ?>">
            <i class="nav-icon fas fa-fw fa-user"></i>
            <p>
              Master Customer
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('supplier') ?>" class="nav-link <?= $aktif == 'supplier' ? 'active' : '' ?>">
            <i class="nav-icon fas fa-fw fa-user"></i>
            <p>
              Master Suplier
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('petugas') ?>" class="nav-link <?= $aktif == 'petugas' ? 'active' : '' ?>">
          <i class="nav-icon fas fa-fw fa-users"></i>
            <p>
              Master Petugas
            </p>
          </a>
        </li>
        <li class="nav-header">TRANSAKSI</li>
        <li class="nav-item">
          <a href="<?= base_url('penerimaan') ?>" class="nav-link <?= $aktif == 'penerimaan' ? 'active' : '' ?>">
            <i class="nav-icon fas fa-fw fa-file-invoice"></i>
            <p>
              Transaksi Penerimaan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('pengeluaran') ?>" class="nav-link <?= $aktif == 'pengeluaran' ? 'active' : '' ?>">
            <i class="nav-icon fas fa-fw fa-file-invoice"></i>
            <p>
              Transaksi Pengeluaran
            </p>
          </a>
        </li>
        <?php if ($this->session->login['role'] == 'admin'): ?>
          <li class="nav-header">PENGATURAN</li>
          <li class="nav-item">
            <a href="<?= base_url('pengguna') ?>" class="nav-link <?= $aktif == 'pengguna' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-fw fa-users"></i>
              <p>
                Manajemen Pengguna
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('toko') ?>" class="nav-link <?= $aktif == 'toko' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-fw fa-building"></i>
              <p>
                Profil Toko
              </p>
            </a>
          </li>
        <?php endif; ?>
      </ul>
    </nav>
  <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>



