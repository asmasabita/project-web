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
          <h3 class="card-title"></h3>
                Detail Perawatan
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
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Biaya</th>
                <th>Km Mobil</th>
                <th>Deskripsi</th>
                <th>Mobil Id</th>
                <th>Jenis Perawatan Id</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $rawat->id ?></td>
                <td><?php echo $rawat->tanggal?></td>
                <td><?php echo $rawat->biaya?></td>
                <td><?php echo $rawat->km_mobil?></td>
                <td><?php echo $rawat->deskripsi?></td>
                <td><?php echo $rawat->mobil_id?></td>
                <td><?php echo $rawat->jenis_perawatan_id?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
</body>
</html>
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
