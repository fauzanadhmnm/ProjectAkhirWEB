<!-- Content Wrapper. Contains page content -->
<script>
  function hapusMahasiswa(pesan) {
    if (confirm(pesan)) {
      return true;
    } else {
      return false;
    }
  }
</script>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h2><strong>Tabel Komentar Faskes Depok</strong></h2>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="card">
      <h1 class="card-title ml-3 p-2">Tabel Rating</h1>
      <table class="table table-striped m-2 ">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nilai Rating</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $nomor = 1;
          foreach ($nilai_rating as $rtg) {
          ?>
            <tr>
              <td><?php echo $nomor ?></td>
              <td><?php echo $rtg->nama ?></td>
            </tr>
          <?php
            $nomor++;
          }
          ?>
        </tbody>
      </table>

      <div class="card mb-0 mt-5">
        <div class="card-body table-responsive p-0" style="height: 330px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Isi</th>
                <th>Users_id</th>
                <th>Faskes_id</th>
                <th>Nilai_rating_id</th>
                <?php
                if ($this->session->userdata('ROLE') == 'administrator') {
                ?>
                  <th>Action</th>
                <?php } ?>
              </tr>
            </thead>
            <tbody>
              <?php
              $nomor = 1;
              foreach ($komentar as $kmn) {
              ?>
                <tr>
                  <td><?php echo $nomor ?></td>
                  <td><?php echo $kmn->tanggal ?></td>
                  <td><?php echo $kmn->isi ?></td>
                  <td><?php echo $kmn->users_id ?></td>
                  <td><?php echo $kmn->faskes_id ?></td>
                  <td><?php echo $kmn->nilai_rating_id ?></td>
                  <?php
                  if ($this->session->userdata('ROLE') == 'administrator') {
                  ?>
                    <td>
                      <a href="<?php echo base_url("index.php/komentar/detail/$kmn->id") ?>">Detail</a>
                      &nbsp;
                      <a href="<?php echo base_url("index.php/komentar/edit/$kmn->id") ?>" class="btn btn-success btn-m active">Update</a>
                      &nbsp;
                      <a href="<?php echo base_url("index.php/komentar/delete/$kmn->id") ?>" class="btn btn-danger btn-m active" onclick=" return hapusMahasiswa('Apakah Anda yakin ingin menghapus data dengan id <?php echo $kmn->id ?> ?')">Delete</a>
                    </td>
                  <?php } ?>
                </tr>
              <?php
                $nomor++;
              }
              ?>
            </tbody>
          </table>
        </div>
        <?php
        if ($this->session->userdata('ROLE') == 'administrator') {
        ?>
          <div class="card-body align-self-end ">
            <a href="<?php echo base_url("index.php/komentar/form") ?>" class="btn btn-success btn-m active"><i class=" fa fa-solid fa-plus pr-3"></i>Tambah data</a>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
</div>
<!-- /.content-wrapper -->