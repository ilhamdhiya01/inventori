<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view('partials/admin-header.php') ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?= base_url('AdminLTE') ?>/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php $this->load->view('partials/admin-sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <?php if ($this->session->flashdata('success')) : ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('success') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php elseif($this->session->flashdata('error')) : ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('error') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php endif ?>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" data-url="<?= base_url('kasir') ?>">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $jumlah_barang ?></h3>
              
                <p>Jumlah Barang</p>
              </div>
              <div class="icon">
                <!-- <i class="ion ion-bag"></i> -->
                <i class="fas fa-box"></i>
              </div>
              <a href="<?= base_url('barang') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $jumlah_petugas ?></h3>

                <p>Jumlah Petugas</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="<?= base_url('petugas') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $jumlah_penerimaan ?></h3>

                <p>Penerimaan</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="<?= base_url('penerimaan') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $jumlah_pengeluaran ?></h3>

                <p>Pengeluaran</p>
              </div>
              <div class="icon">
              <i class="fas fa-file-invoice"></i>
              </div>
              <a href="<?= base_url('pengeluaran') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <div class="card shadow">
              <div class="card-header"><strong>Profil Toko</strong></div>
              <div class="card-body">
                <strong>Nama Toko : </strong><br>
                <input  type="text" value="<?= $toko->nama_toko ?>" readonly class="form-control mt-2 mb-2">
                <strong>Nama Pemilik : </strong><br>
                <input  type="text" value="<?= $toko->nama_pemilik ?>" readonly class="form-control mt-2 mb-2">
                <strong>No Telepon : </strong><br>
                <input  type="text" value="<?= $toko->no_telepon ?>" readonly class="form-control mt-2 mb-2">
                <strong>Alamat : </strong><br>
                <input  type="text" value="<?= $toko->alamat ?>" readonly class="form-control mt-2">
              </div>				
            </div>
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
            <div class="card shadow">
                <div class="card-header"><strong>User Sedang Login</strong></div>
                <div class="card-body">
                  <strong>Nama : </strong><br>
                  <input type="text" value="<?= $this->session->login['nama'] ?>" readonly class="form-control mt-2 mb-2">
                  <strong>Username : </strong><br>
                  <input type="text" value="<?= $this->session->login['username'] ?>" readonly class="form-control mt-2 mb-2">
                  <strong>Role : </strong><br>
                  <input type="text" value="<?= $this->session->login['role'] ?>" readonly class="form-control mt-2 mb-2">
                  <strong>Jam Login : </strong><br>
                  <input type="text" value="<?= $this->session->login['jam_masuk'] ?>" readonly class="form-control mt-2">
                </div>				
              </div>
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php $this->load->view('partials/admin-footer.php') ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <?php $this->load->view('partials/admin-sidebar.php') ?>
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

  <?php $this->load->view('partials/admin-js.php') ?>
</body>
</html>