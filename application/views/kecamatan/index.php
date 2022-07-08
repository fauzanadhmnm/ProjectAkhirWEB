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
            <h2><strong>Tabel Alamat Faskes Depok</strong></h2>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="card mb-0">
        <div class="card-body table-responsive p-0" style="height: 355px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Alamat</th>
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
              foreach ($kecamatan as $kec) {
              ?>
                <tr>
                  <td><?php echo $nomor ?></td>
                  <td><?php echo $kec->nama ?></td>
                  <?php
                  if ($this->session->userdata('ROLE') == 'administrator') {
                  ?>
                    <td>
                      <a href="<?php echo base_url("index.php/kecamatan/detail/$kec->id") ?>">Detail</a>
                      &nbsp;
                      <a href="<?php echo base_url("index.php/kecamatan/edit/$kec->id") ?>" class="btn btn-success btn-m active">Update</a>
                      &nbsp;
                      <a href="<?php echo base_url("index.php/kecamatan/delete/$kec->id") ?>" class="btn btn-danger btn-m active" onclick=" return hapusMahasiswa('Apakah Anda yakin ingin menghapus data yang bernama <?php echo $kec->nama ?> ?')">Delete</a>
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
        <?php
        if ($this->session->userdata('ROLE') == 'administrator') {
        ?>
          <div class="card-body align-self-end">
            <a href="<?php echo base_url("index.php/kecamatan/form") ?>" class="btn btn-success btn-m active"><i class=" fa fa-solid fa-plus pr-3"></i>Tambah data</a>
          </div>
        <?php
        }
        ?>
    </section>
  </div>