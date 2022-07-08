<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <script>
    function hapusMahasiswa(pesan) {
      if (confirm(pesan)) {
        return true;
      } else {
        return false;
      }
    }
  </script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2><strong>Tabel Data Faskes Depok</strong></h2>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card mb-0">
        <div class="card-body table-responsive p-0" style="height: 400px;">
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
                <?php
                if ($this->session->userdata('ROLE') == 'administrator') {
                ?>
                  <th>Action</th>
                <?php } ?>
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
                  <td><?php echo $fks->foto1 ?></td>
                  <td><?php echo $fks->foto2 ?></td>
                  <td><?php echo $fks->foto3 ?></td>
                  <td><?php echo $fks->kecamatan_id ?></td>
                  <td><?php echo $fks->website ?></td>
                  <td><?php echo $fks->jumlah_dokter ?></td>
                  <td><?php echo $fks->jumlah_pegawai ?></td>
                  <?php
                  if ($this->session->userdata('ROLE') == 'administrator') {
                  ?>
                    <td>
                      <a href="<?php echo base_url("index.php/faskes/detail/$fks->id") ?>" class="btn btn-primary btn-m active">Detail</a>
                      &nbsp;
                      <a href="<?php echo base_url("index.php/faskes/edit/$fks->id") ?>" class="btn btn-success btn-m active">Edit</a>
                      &nbsp;
                      <a href="<?php echo base_url("index.php/faskes/delete/$fks->id") ?>" style="color: red;" onclick=" return hapusMahasiswa('Apakah Anda yakin ingin menghapus data yang bernama <?php echo $fks->nama ?> ?')">Delete</a>
                    </td>
                  <?php
                  }
                  ?>
                </tr>
              <?php
                $nomor++;
              }
              ?>
            </tbody>
          </table>
        </div>
        <div class="card-body align-self-end ">
          <a href="<?php echo base_url("index.php/faskes/form") ?>" class="btn btn-success btn-m active"><i class=" fa fa-solid fa-plus pr-3"></i>Tambah data</a>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</body>

</html>