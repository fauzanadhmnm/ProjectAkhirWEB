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
          <h1 class="card-title">Input Data</h1>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>

        <div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<?php echo form_open("faskes/save") ?>
    <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">ID</label> 
    <div class="col-8">
      <input id="id" name="id" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <input id="alamat" name="alamat" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="latlong" class="col-4 col-form-label">Latlong</label> 
    <div class="col-8">
      <input id="latlong" name="latlong" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matakuliah_id" class="col-4 col-form-label">jenis_id</label> 
    <div class="col-8">
     <select class="form-control" name="jenis_id" id="jenis_id">
      <?php  include "config.php";
      $result = mysqli_query($connect, "SELECT * FROM jenis_faskes");
      while ($row = mysqli_fetch_array($result))
      { ?>
      <option value="<?php echo $row[0] ?>"><?php echo $row[0] ?></option>
      <?php } ?>
     </select>
    </div>
  </div> 
  <div class="form-group row">
    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-8">
      <input id="deskripsi" name="deskripsi" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for=" skor" class="col-4 col-form-label">Skor_rating</label> 
    <div class="col-8">
      <input id="skor_rating" name="skor_rating" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="foto1" class="col-4 col-form-label">Foto 1</label> 
    <div class="col-8">
      <input id="foto1" name="foto1" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Foto 2" class="col-4 col-form-label">Foto 2</label> 
    <div class="col-8">
      <input id="foto2" name="foto2" placeholder="foto2" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Foto 3" class="col-4 col-form-label">Foto 3</label> 
    <div class="col-8">
      <input id="foto3" name="foto3" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="kecamatan_id" class="col-4 col-form-label">kecamatan_id</label> 
    <div class="col-8">
     <select class="form-control" name="kecamatan_id" id="kecamatan_id">
      <?php  include "config.php";
      $result = mysqli_query($connect, "SELECT * FROM kecamatan");
      while ($row = mysqli_fetch_array($result))
      { ?>
      <option value="<?php echo $row[0] ?>"><?php echo $row[0] ?></option>
      <?php } ?>
     </select>
    </div>
  </div> 
  <div class="form-group row">
    <label for="website" class="col-4 col-form-label">Website</label> 
    <div class="col-8">
      <input id="website" name="website" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="jmlhdokter" class="col-4 col-form-label">Jumlah_dokter</label> 
    <div class="col-8">
      <input id="jumlah_dokter" name="jumlah_dokter" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Jmlegawai" class="col-4 col-form-label">Jumlah_Pegawai</label> 
    <div class="col-8">
      <input id="jumlah_pegawai" name="jumlah_pegawai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close() ?>
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