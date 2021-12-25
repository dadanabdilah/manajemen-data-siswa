 	<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Example single danger button -->
            <div class="btn-group">
              <a type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?=$this->session->userdata('nama_user');?>
              </a>
              <img style="width: 30px; height: 30px;" class="img-profile rounded-circle" src="<?=base_url();?>assets/img/logo-pui.jpeg">
              <div class="dropdown-menu mt-4 dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <!-- <a class="dropdown-item" href="<?=base_url();?>user/profile">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a> -->
                <a class="dropdown-item" href="<?=base_url();?>user/ubah_password">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Ubah Password
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </div>

          </ul>

        </nav>
        <!-- End of Topbar -->