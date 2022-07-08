<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Penyewa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sewa Mobil</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid"> 
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edit data</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body"> 
                <?= form_open('sewa/update',['action'=>'POST']);?>

                <div class="form-group">
                  <label for="tanggal_mulai">Tanggal Mulai</label>
                  <input type="hidden" class="form-control" name="id" value="<?= $sewa_data->id ;?>">
                  <input type="text" class="form-control" name="tanggal_mulai" value="<?= $sewa_data->tanggal_mulai ;?>">
                </div>

                <div class="form-group">
                  <label for="tanggal_akhir">TaNGGAL aKHIR</label>
                  <input type="text" class="form-control" name="tanggal_akhir" value="<?= $sewa_data->tanggal_akhir ;?>">
                </div>

                <div class="form-group">
                  <label for="tujuan">Tujuan</label>
                  <input type="text" class="form-control" name="tujuan" value="<?= $sewa_data->tujuan ;?>">
                </div>

                <div class="form-group">
                  <label for="noktp">No KTP</label>
                  <input type="text" class="form-control" name="noktp" value="<?= $sewa_data->noktp ;?>">
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                <?= form_close();?>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

