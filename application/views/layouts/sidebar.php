  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: linear-gradient(185deg, #5533ff 40%, #25ddf5 100%);">
    <!-- Brand Logo -->
    <a class="brand-link">
      <img src="<?php echo base_url('assets/img/faskes.png') ?>" class="brand-image">
      <span class="brand-text font-weight-bold text-white">FASKES Kota Depok</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php
          if ($this->session->userdata('ROLE') == 'administrator') {
          ?>
            <img src="<?php echo base_url('assets/img/user.png') ?>" class="img-circle elevation-2" alt="User Image">
          <?php } ?>
          <?php
          if ($this->session->userdata('ROLE') == 'public') {
          ?>
            <img src="<?php echo base_url('dist/img/logouser.jpg') ?>" class="img-circle elevation-2" alt="User Image">
          <?php } ?>
        </div>
        <div class="info">
          <p class="text-white m-0">
            <?php
            if ($this->session->has_userdata('USERNAME')) {
              echo $this->session->userdata('USERNAME');
              echo '-' . $this->session->userdata('ROLE');
            }
            ?>
          </p>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?php echo base_url("index.php/faskes/index") ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Daftar Faskes
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url("index.php/jenis_faskes/index") ?>" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Jenis Faskes
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url("index.php/kecamatan/index") ?>" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Faskes Kecamatan
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url("index.php/komentar/index") ?>" class="nav-link">
              <i class="nav-icon far fa-comments"></i>
              <p>
                Rating dan Komentar
              </p>
            </a>
          </li>
          <?php
          if ($this->session->userdata('ROLE') == 'administrator') {
          ?>
            <li class="nav-item">
              <a href="<?php echo base_url("index.php/users/index") ?>" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Data Akun
                  <i class="fas fa-angle-right right"></i>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url("index.php/tampil/faskes") ?>" class="nav-link">
                <i class="nav-icon fas fa-camera"></i>
                <p>
                  Tambah Foto
                  <i class="fas fa-angle-right right"></i>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url("index.php/nilai_rating/index") ?>" class="nav-link">
                <i class="nav-icon fas fa-star"></i>
                <p>
                  Nilai Rating
                  <i class="fas fa-angle-right right"></i>
                </p>
              </a>
            </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>