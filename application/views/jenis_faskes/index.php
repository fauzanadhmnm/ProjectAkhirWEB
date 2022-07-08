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
            <h2><strong>Tabel Jenis Faskes Depok</strong></h2>
          </div>
        </div>
      </div>
      <div class="card mb-0">
        <div class="card-body table-responsive p-0" style="height: 355px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama Jenis</th>
                <?php
                if ($this->session->userdata('ROLE') == 'administrator') {
                ?>
                  <th>Action</th>
                <?php } ?>
              </tr>
              </tr>
            </thead>
            <tbody>
              <?php
              $nomor = 1;
              foreach ($jenis_faskes as $jns) {
              ?>
                <tr>
                  <td><?php echo $nomor ?></td>
                  <td><?php echo $jns->nama ?></td>
                  <?php
                  if ($this->session->userdata('ROLE') == 'administrator') {
                  ?>
                    <td>
                      <a href="<?php echo base_url("index.php/jenis_faskes/detail/$jns->id") ?>">Detail</a>
                      &nbsp;
                      <a href="<?php echo base_url("index.php/jenis_faskes/edit/$jns->id") ?>" class="btn btn-success btn-m active">Edit</a>
                      &nbsp;
                      <a href="<?php echo base_url("index.php/jenis_faskes/delete/$jns->id") ?>" class="btn btn-danger btn-m active" onclick=" return hapusMahasiswa('Apakah Anda yakin ingin menghapus data yang bernama <?php echo $jns->nama ?> ?')">Delete</a>
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
          <div class="card-body align-self-end ">
            <a href="<?php echo base_url("index.php/jenis_faskes/form") ?>" class="btn btn-success btn-m active"><i class=" fa fa-solid fa-plus pr-3"></i>Tambah data</a>
          </div>
        <?php
        }
        ?>
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->