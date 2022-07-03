<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3>Perawatan</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Input Perawatan Mobil</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php echo form_open("perawatan/save") ?>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <input id="tanggal" name="tanggal" placeholder="Masukan Tanggal Mobil" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="biaya" class="col-4 col-form-label">Biaya</label> 
    <div class="col-8">
      <input id="biaya" name="biaya" placeholder="Masukan Biaya Mobil" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="km_mobil" class="col-4 col-form-label">Km Mobil</label> 
    <div class="col-8">
      <input id="km_mobil" name="km_mobil" placeholder="Masukan Km Mobil" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-8">
      <input id="deskripsi" name="deskripsi" placeholder="Tambahkan Deskripsi" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="mobil_id" class="col-4 col-form-label">Mobil Id</label> 
    <div class="col-8">
      <input id="mobil_id" name="mobil_id" placeholder="Maukan Mobil Id" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis_perawatan_id" class="col-4 col-form-label">Jenis Perawatan Id</label> 
    <div class="col-8">
      <input id="jenis_perawatan_id" name="jenis_perawatan_id" placeholder="Masukan Jenis Perawatan Id" type="text" class="form-control">
    </div>
  </div>
<?php echo form_close()?>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

