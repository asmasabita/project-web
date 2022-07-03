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
          <h3 class="card-title">Perawatan Mobil</h3>

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
    <script>
        function hapusperawatan(pesan){
            if (confirm(pesan)) {
                return true;    
            } else {
                return false;
            }
        }
    </script>
</head>
<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Biaya</th>
                <th>Km Mobil</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $nomor = 1;
            foreach ($perawatan as $rwt){
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $rwt->tanggal?></td>
                <td><?php echo $rwt->biaya?></td>
                <td><?php echo $rwt->km_mobil?></td>
                <td>
                    <a href="<?php echo base_url("index.php/perawatan/detail/$rwt->id")?>"
                    class="btn btn-primary btn-lg active">Detail</a>
                    <a href="<?php echo base_url("index.php/perawatan/edit/$rwt->id")?>"
                    class="btn btn-primary btn-lg active">Edit</a>
                    <a href="<?php echo base_url("index.php/perawatan/delete/$rwt->id")?>"
                    class="btn btn-primary btn-lg active" onclick="return hapusperawatan('Anda yakin ingin menghapus perawatan mobil <?php echo $rwt->tanggal?> ? ')" >Hapus</a>
                </td>
            </tr>

            <?php 
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href= <?php echo base_url("index.php/perawatan/form") ?> class="btn btn-primary btn-lg active">Tambah</a>
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
