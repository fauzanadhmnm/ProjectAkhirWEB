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
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <?php echo form_open("komentar/save") ?>
    <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">ID</label> 
    <div class="col-8">
      <input id="id" name="id" type="text" value="<?php echo $obj_komentar->id?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-calendar"></i>
          </div>
        </div> 
        <input id="tanggal" name="tanggal" type="text" value="<?php echo $obj_komentar->tanggal?>" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="isi" class="col-4 col-form-label">Pesan</label> 
    <div class="col-8">
      <textarea id="isi" name="isi" cols="40" rows="5" value="<?php echo $obj_komentar->isi?>" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="users_id" class="col-4 col-form-label">Users_id</label> 
    <div class="col-8">
      <input id="users_id" name="users_id" type="text" value="<?php echo $obj_komentar->users_id?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="faskes_id" class="col-4 col-form-label">Faskes_id</label> 
    <div class="col-8">
    <select class="form-control"  value="<?php echo $obj_komentar->faskes_id?>" name="faskes_id" id="faskes_id">
      <?php  include "config.php";
      $result = mysqli_query($connect, "SELECT * FROM faskes");
      while ($row = mysqli_fetch_array($result))
      { ?>
      <option value="<?php echo $row[0] ?>"><?php echo $row[0] ?></option>
      <?php } ?>
     </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_rating_id" class="col-4 col-form-label">Rating_id</label> 
    <div class="col-8">
    <select class="form-control"  value="<?php echo $obj_rating->nilai_rating_id?>" name="kelas_id" id="kelas_id">
      <?php  include "config.php";
      $result = mysqli_query($connect, "SELECT * FROM nilai_rating");
      while ($row = mysqli_fetch_array($result))
      { ?>
      <option value="<?php echo $row[0] ?>"><?php echo $row[0] ?></option>
      <?php } ?>
     </select> 
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