<section id="laporan-siswa">
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?=base_url();?><?=$this->uri->segment(1)?>"><?= ucfirst($this->uri->segment(1)); ?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= ucfirst($this->uri->segment(2)); ?></li>
      </ol>
    </nav>

    <h1 class="h3 mb-4 text-gray-400y-800"><?= $sub_title; ?> <?= ucfirst($this->uri->segment(3)); ?> <?=ucfirst($this->uri->segment(4)); ?></h1>   
    <!--Card 1-->
    <div class="card shadow-sm">
      <div class="card-body">
        <div style="border: 1px; color: grey;">
          <h6>Print PDF Semua Data Siswa</h6>
          <a target="blank" href="<?= base_url();?>laporan/pdf/siswa">Siswa PDF</a>
        </div>
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
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
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
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
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


<!-- Modal -->
<div class="modal fade" id="modalDataKelas" tabindex="-1" role="dialog" aria-labelledby="modalDataKelasTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDataKelasTitle">Tambah Data Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?=base_url();?>kelas/tambah">
          <div class="form-group">
          <input type="hidden" class="form-control nis" id="id_kelas" name="id_kelas" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control nis" id="kelas" name="kelas" placeholder="Nama Kelas" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="wali_kelas" name="wali_kelas" placeholder="Wali Kelas Siswa" required>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>

