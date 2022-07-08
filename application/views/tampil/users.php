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
        <table class="table table-striped m-2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>E-mail</th>
                    <th>created_at</th>
                    <th>last_login</th>
                    <th>Status</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $nomor = 1;
                    foreach ($users as $usr) {
                ?> 
                <tr>
                    <td><?php echo $nomor ?></td>
                    <td><?php echo $usr -> username ?></td>
                    <td><?php echo $usr -> password ?></td>
                    <td><?php echo $usr -> email ?></td>
                    <td><?php echo $usr -> created_at ?></td>
                    <td><?php echo $usr -> last_login ?></td>
                    <td><?php echo $usr -> status ?></td>
                    <td><?php echo $usr -> role ?></td>
                </tr>
                <?php  
                $nomor++;
                }
                ?>
            </tbody>
        </table>

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