<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view('partials/admin-header.php') ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
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
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url('AdminLTE') ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <?php $this->load->view('partials/admin-sidebar.php') ?>
    </div>
    <!-- /.sidebar -->
  </aside>

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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $title ?> v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
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
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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


<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('partials/head.php') ?>
</head>

<body id="page-top">
	<div id="wrapper">
		<!-- load sidebar -->
		<?php $this->load->view('partials/sidebar.php') ?>

		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content" data-url="<?= base_url('kasir') ?>">
				<!-- load Topbar -->
				<?php $this->load->view('partials/topbar.php') ?>

				<div class="container-fluid">
					<div class="clearfix">
						<div class="float-left">
							<h1 class="h3 m-0 text-gray-800"><?= $title ?></h1>
						</div>
					</div>
					<hr>
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
					
					<div class="row">

			            <!-- Earnings (Monthly) Card Example -->
			            <div class="col-xl-3 col-md-6 mb-4">
			              <div class="card border-left-primary shadow h-100 py-2">
			                <div class="card-body">
			                  <div class="row no-gutters align-items-center">
			                    <div class="col mr-2">
			                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Barang</div>
			                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_barang ?></div>
			                    </div>
			                    <div class="col-auto">
			                      <i class="fas fa-box fa-2x text-gray-300"></i>
			                    </div>
			                  </div>
			                </div>
			              </div>
			            </div>

			            <!-- Earnings (Monthly) Card Example -->
			            <div class="col-xl-3 col-md-6 mb-4">
			              <div class="card border-left-success shadow h-100 py-2">
			                <div class="card-body">
			                  <div class="row no-gutters align-items-center">
			                    <div class="col mr-2">
			                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Petugas</div>
			                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_petugas ?></div>
			                    </div>
			                    <div class="col-auto">
			                      <i class="fas fa-users fa-2x text-gray-300"></i>
			                    </div>
			                  </div>
			                </div>
			              </div>
			            </div>

			            <!-- Earnings (Monthly) Card Example -->
			            <div class="col-xl-3 col-md-6 mb-4">
			              <div class="card border-left-info shadow h-100 py-2">
			                <div class="card-body">
			                  <div class="row no-gutters align-items-center">
			                    <div class="col mr-2">
			                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Pengeluaran</div>
			                      <div class="row no-gutters align-items-center">
			                        <div class="col-auto">
			                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $jumlah_pengeluaran ?></div>
			                        </div>
			                      </div>
			                    </div>
			                    <div class="col-auto">
			                      <i class="fas fa-file-invoice fa-2x text-gray-300"></i>
			                    </div>
			                  </div>
			                </div>
			              </div>
			            </div>

			            <!-- Pending Requests Card Example -->
			            <div class="col-xl-3 col-md-6 mb-4">
			              <div class="card border-left-warning shadow h-100 py-2">
			                <div class="card-body">
			                  <div class="row no-gutters align-items-center">
			                    <div class="col mr-2">
			                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Penerimaan</div>
			                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_penerimaan ?></div>
			                    </div>
			                    <div class="col-auto">
			                      <i class="fas fa-users fa-2x text-gray-300"></i>
			                    </div>
			                  </div>
			                </div>
			              </div>
			            </div>
			        </div>

			        <div class="row">
			          	<div class="col-md-6">
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
			          	</div>
			          	<div class="col-md-6">
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
			          	</div>
			        </div>

				</div>
			</div>
			<!-- load footer -->
			<?php $this->load->view('partials/footer.php') ?>
		</div>
	</div>
	<?php $this->load->view('partials/js.php') ?>
	<script src="<?= base_url('sb-admin/js/demo/datatables-demo.js') ?>"></script>
	<script src="<?= base_url('sb-admin') ?>/vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url('sb-admin') ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>
</body>
</html>