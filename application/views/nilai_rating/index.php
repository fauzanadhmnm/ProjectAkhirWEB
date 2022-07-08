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
            <h2><strong>Tabel Rating Faskes Depok</strong></h2>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
        </div>

        <div class="card mb-0 mt-5">
          <div class="card-body table-responsive p-0" style="height: 330px;">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nilai Rating</th>
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
                foreach ($nilai_rating as $rtg) {
                ?>
                  <tr>
                    <td><?php echo $nomor ?></td>
                    <td><?php echo $rtg->nama ?></td>
                    <?php
                    if ($this->session->userdata('ROLE') == 'administrator') {
                    ?>
                      <td>
                        <a href="<?php echo base_url("index.php/nilai_rating/detail/$rtg->id") ?>">Detail</a>
                        &nbsp;
                        <a href="<?php echo base_url("index.php/nilai_rating/edit/$rtg->id") ?>" class="btn btn-success btn-m active">Update</a>
                        &nbsp;
                        <a href="<?php echo base_url("index.php/nilai_rating/delete/$rtg->id") ?>" class="btn btn-danger btn-m active" onclick=" return hapusMahasiswa('Apakah Anda yakin ingin menghapus data yang bernama <?php echo $rtg->nama ?> ?')">Delete</a>
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
          <div class="card-body align-self-end">
            <a href="<?php echo base_url("index.php/nilai_rating/form") ?>" class="btn btn-success btn-m active"><i class=" fa fa-solid fa-plus pr-3"></i>Tambah data</a>
          </div>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->