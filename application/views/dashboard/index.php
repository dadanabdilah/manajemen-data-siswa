<section id="dashboard">
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <h1 id="sub_title" class="h3 mb-4 text-gray-400y-800"><?= $sub_title; ?></h1>   
    <!--Card 1-->
    <div class="card shadow-sm">
      <div class="card-header">
         <a href="#" onclick="getInfoSiswa()" class="badge">Refesh</a>
      </div>
      <div class="card-body">
        <!-- Content Row -->
        <div class="row">
          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-4 col-md-6">
            <div class="card border-left-info h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">JUMLAH SISWA MASUK TAHUN INI</div>
                    <div id="siswa_baru" class="h5 mb-0 font-weight-bold text-gray-800"></div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-users fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-4 col-md-6">
            <div class="card border-left-success h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">JUMLAH SISWA KESELURUHAN</div>
                    <div id="jumlah_siswa" class="h5 mb-0 font-weight-bold text-gray-800"></div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-users fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-4 col-md-6">
            <div class="card border-left-danger h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">SISWA YANG KELUAR</div>
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <div id="siswa_keluar" class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                      </div>
                      <div class="col">
                        <div class="progress progress-sm mr-2">
                          <div id="progress_siswa" class="progress-bar bg-danger" role="progressbar"  aria-valuenow="" aria-valuemin="0" aria-valuemax="1000"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-users fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end row-->
      </div>
    </div>
    <!--End Card 1-->

    <!--Card 2-->
    <div class="card shadow-sm mt-4 mb-5">
      <div class="card-header">
        <a href="#" onclick="getInfoUser()" class="badge">Refesh</a>
      </div>
      <div class="card-body">
        <!-- Content Row 2 -->
        <div class="row">
          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-6 col-md-6">
            <div class="card border-left-info h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">JUMLAH USER</div>
                    <div id="jumlah_user" class="h5 mb-0 font-weight-bold text-gray-800"></div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-user fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-6 col-md-6">
            <div class="card border-left-success h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">USER ONLINE</div>
                    <div id="user_online" class="h5 mb-0 font-weight-bold text-gray-800"></div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-user fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--End Row-->
      </div>
    </div>
    <!--End Card 2-->
  </div>
  <!-- /.container-fluid -->
</section>

</div>
<!-- End of Main Content -->