<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Perawatan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Merek Mobil</li> -->
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
            <div class="card-header bg-primary">
              <h3 class="card-title">Tambah Perawatan Mobil</h3>
            </div>
            <div class="card-body"> 
                <?= form_open('merk/store',['action'=>'POST'])?>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="tanggal_mulai">Tanggal Mulai Sewa</label>
                            <input type="date" class="form-control" name="tanggal_mulai">
                        </div>
                        <div class="col-md-6">
                            <label for="tanggal_akhir">Tanggal Selesai Sewa</label>
                            <input type="date" class="form-control" name="tanggal_akhir">
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <label for="tujuan">Tujuan</label>
                        <input type="text" class="form-control" name="tujuan">
                    </div>
                    <div class="form-group">
                        <label for="noktp">Nomor KTP</label>
                        <input type="number" class="form-control" name="noktp">
                    </div>
                    <div class="form-group">
                        <label for="mobil_id">Pilih Mobil</label>
                        <select name="mobil_id" id="mobil_id" class="form-control">
                            <option value="">-</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                <?= form_close();?> 
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

