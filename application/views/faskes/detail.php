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
        <div class="card-body table-responsive p-0">
          <table class="table table-head-fixed text-nowrap" >
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
                <tr>
                    <td><?php echo $fkes -> id ?></td>
                    <td><?php echo $fkes -> nama ?></td>
                    <td><?php echo $fkes -> alamat ?></td>
                    <td><?php echo $fkes -> latlong ?></td>
                    <td><?php echo $fkes -> jenis_id ?></td>
                    <td><?php echo $fkes -> deskripsi ?></td>
                    <td><?php echo $fkes -> skor_rating ?></td>
                    <td><?php echo $fkes -> foto1 ?></td>
                    <td><?php echo $fkes -> foto2 ?></td>
                    <td><?php echo $fkes -> foto3 ?></td>
                    <td><?php echo $fkes -> kecamatan_id ?></td>
                    <td><?php echo $fkes -> website ?></td>
                    <td><?php echo $fkes -> jumlah_dokter ?></td>
                    <td><?php echo $fkes -> jumlah_pegawai ?></td>
                    <td>
                </tr>
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