<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Faskes Depok</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url("index.php/login1/logout") ?>">Logout</a></li>
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
          <h1 class="card-title">Jenis Fasilitas Kesehatan Depok</h1>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body table-responsive p-0" style="height: 400px">
          <table class="table table-head-fixed text-nowrap">
            <thead align="center">
              <tr>
                <th>No</th>
                <th>Rumah Sakit</th>
                <th>Alamat</th>
                <th>Latlong</th>
                <th>Jenis_id</th>
                <th>Deskripsi</th>
                <th>Skor_rating</th>
                <th>Foto 1</th>
                <th>Foto 2</th>
                <th>Foto 3</th>
                <th>Kecamatan_id</th>
                <th>Website</th>
                <th>Jumlah_dokter</th>
                <th>Jumlah_pegawai</th>
              </tr>
            </thead>
            <tbody align="center">
              <?php
              $nomor = 1;
              foreach ($faskes as $fks) {
              ?>
                <tr>
                  <td><?php echo $nomor ?></td>
                  <td><?php echo $fks->nama ?></td>
                  <td><?php echo $fks->alamat ?></td>
                  <td><?php echo $fks->latlong ?></td>
                  <td><?php echo $fks->jenis_id ?></td>
                  <td><?php echo $fks->deskripsi ?></td>
                  <td><?php echo $fks->skor_rating ?></td>
                  <td>
                    <img src="<?php echo base_url("uploads/$fks->foto1"); ?>" alt="" class="d-block">
                    <br>
                    Nama file : <?= $fks->nama ?>
                    <br>
                    <?php echo form_open_multipart('faskes/upload1');?>
                    <input type="hidden" name="id_faskes" value="<?= $fks->id ?>">
                    <input type="hidden" name="nama" value="<?= $fks->nama ?>" />
                    <input type="file" name="fotofks" />
                    <input type="submit" class="btn btn-success" value="upload" />
                    <?php echo form_close() ?>
                  </td>
                  <td>
                    <img src="<?php echo base_url("uploads/$fks->foto2"); ?>" alt="" class="d-block">
                    <br>
                    Nama file : <?= $fks->nama ?>
                    <br>
                    <?php echo form_open_multipart('faskes/upload2'); ?>
                    <input type="hidden" name="id_faskes" value="<?= $fks->id ?>">
                    <input type="hidden" name="nama" value="<?= $fks->nama ?>" />
                    <input type="file" name="fotofks" />
                    <input type="submit" class="btn btn-success" value="upload" />
                    <?php echo form_close() ?>
                  </td>
                  <td>
                    <img src="<?php echo base_url("uploads/$fks->foto3"); ?>" alt="" class="d-block">
                    <br>
                    Nama file : <?= $fks->nama ?>
                    <br>
                    <?php echo form_open_multipart('faskes/upload3'); ?>
                    <input type="hidden" name="id_faskes" value="<?= $fks->id ?>">
                    <input type="hidden" name="nama" value="<?= $fks->nama ?>" />
                    <input type="file" name="fotofks" />
                    <input type="submit" class="btn btn-success" value="upload" />
                    <?php echo form_close() ?>
                  </td>
                  <td><?php echo $fks->kecamatan_id ?></td>
                  <td><?php echo $fks->website ?></td>
                  <td><?php echo $fks->jumlah_dokter ?></td>
                  <td><?php echo $fks->jumlah_pegawai ?></td>
                </tr>
              <?php
                $nomor++;
              }
              ?>
            </tbody>
          </table>
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
  <!-- /.content-wrapper -->
</body>

</html>