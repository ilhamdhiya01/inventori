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
				<div class="d-flex justify-content-end mt-1">
					<?php if ($this->session->login['role'] == 'admin'): ?>
						<a href="<?= base_url('petugas/tambah') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</a>
					<?php endif ?>
				</div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" data-url="<?= base_url('kasir') ?>">
      <div class="container-fluid">
				<div class="card">
					<div class="card-header"><strong>Daftar Petugas</strong></div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<td>No</td>
										<td>Kode</td>
										<td>Nama</td>
										<td>Username</td>
										<?php if ($this->session->login['role'] == 'admin'): ?>
											<td>Password</td>
											<td>Aksi</td>
										<?php  endif ?>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($all_petugas as $petugas): ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $petugas->kode ?></td>
											<td><?= $petugas->nama ?></td>
											<td><?= $petugas->username ?></td>
											<?php if($this->session->login['role'] == 'admin'): ?>
												<td><?= $petugas->password ?></td>
												<td class="d-flex justify-content-center">
													<a href="<?= base_url('petugas/ubah/' . $petugas->id) ?>" class="btn btn-success btn-sm"><i class="fa fa-pen"></i> Edit</a>
													<a onclick="return confirm('apakah anda yakin?')" href="<?= base_url('petugas/hapus/' . $petugas->id) ?>" class="btn btn-danger btn-sm ml-1"><i class="fa fa-trash"></i> Delete</a>
												</td>
											<?php endif ?>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>				
				</div>
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
  <script>
    $(function () {
      $('#dataTable').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>
</html>