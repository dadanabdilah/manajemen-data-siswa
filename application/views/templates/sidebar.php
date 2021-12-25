    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url();?>dashboard">
        <div class="sidebar-brand-icon rotate-n-0">
          <i class="fas fa-school"></i>
        </div>
        <div class="sidebar-brand-text mx-3">MTS PUI Kuningan</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <?php if($this->session->userdata('level') == '2') { ?>
        <!-- Nav Item - Dashboard -->
        <li id="dashboard" class="nav-item <?=$this->uri->segment(1) == 'dashboard' ? 'active' : ''?>">
          <a class="nav-link pb-0" href="<?=base_url();?>dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>

        <!-- Nav Item - Data Siswa Menu-->
        <li id="siswa" class="nav-item <?=$this->uri->segment(1) == 'siswa' ? 'active' : ''?>">
          <a class="nav-link  pb-0 collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>Siswa</span>
          </a>

          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Choose Menu</h6>
              
              <a class="collapse-item <?= $this->uri->segment(1) == 'siswa' ? 'active' : ''?>" href="<?=base_url();?>siswa">Cek Data Siswa</a>

              <a class="collapse-item <?=$this->uri->segment(2) == 'kelulusan' ? 'active' : ''?>" href="<?=base_url();?>siswa/kelulusan">Kelulusan Siswa</a>
            </div>
          </div>

        </li>

        <!-- Nav Item - Data User -->
        <li id="data-kelas" class="nav-item <?=$this->uri->segment(1) == 'kelas' ? 'active' : ''?>">
          <a class="nav-link pb-0" href="<?=base_url();?>kelas">
            <i class="fas fa-fw fa-user-alt"></i>
            <span>Data Kelas</span>
          </a>
        </li>

        <li id="user" class="nav-item <?=$this->uri->segment(1) == 'user' ? 'active' : ''?>">
          <a class="nav-link pb-0" href="<?=base_url();?>user">
            <i class="fas fa-fw fa-users"></i>
            <span>Data User</span>
          </a>
        </li>

        <!-- Nav Item - Charts -->
        <li id="laporan" class="nav-item <?=$this->uri->segment(1) == 'laporan' ? 'active' : ''?>">
          <a class="nav-link pb-0" href="<?=base_url();?>laporan">
            <i class="fas fa-fw fa-chart-bar"></i>
            <span>Laporan</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link pb-4" href="<?=base_url();?>logout">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
        </li>
      <?php } else {?>
        <!-- Nav Item - Dashboard -->
        <li id="dashboard" class="nav-item <?=$this->uri->segment(1) == 'dashboard' ? 'active' : ''?>">
          <a class="nav-link pb-0" href="<?=base_url();?>dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>

        <!-- Nav Item - Charts -->
        <li id="laporan" class="nav-item <?=$this->uri->segment(1) == 'laporan' ? 'active' : ''?>">
          <a class="nav-link pb-0" href="<?=base_url();?>laporan">
            <i class="fas fa-fw fa-chart-bar"></i>
            <span>Laporan</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link pb-4" href="<?=base_url();?>logout">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
        </li>
      <?php }; ?>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
      
    </ul>
    <!-- End of Sidebar -->