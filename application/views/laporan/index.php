<section id="siswa-kelulusan">
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-400y-800"><?=  $sub_title; ?></h1>    
    <div class="row">
      <div class="col-lg-8">
        <!-- data siswa-->
        <div class="card shadow mb-4">
         <div class="card-header">
            <a class="h6">Pilih Menu Dibawah Untuk Melanjutkan</a>
          </div>
          <div class="card-body">
            <!--row 2-->
            <div class="row pl-2 pr-2 mt-3">
              <!-- card 3 -->
              <div class="card shadow-sm">
                <div class="card-body">
                  <h5 class="card-title" style="min-width: 12rem">Data Siswa Pindah</h5>
                  <div class="form-group">
                    <a  style="display: block;" target="blank" id="angkatan-kelas" href="<?= base_url();?>laporan/siswa_pindah/" class="btn btn-primary">Export PDF</a>
                    <!-- <a target="blank" id="angkatan-kelas-excel" href="<?= base_url();?>laporan/excel/" class="btn btn-primary btn_angkatan_kelas_excel">Export Excel</a> -->
                  </div>

                </div>
              </div>
              <!-- end card 3 -->

              <!-- card 3 -->
              <div class="card shadow-sm ml-2">
                <div class="card-body">
                  <h5 class="card-title" style="min-width: 12rem">Data Siswa Lulus</h5>
                  <div class="form-group">
                    <a  style="display: block;" target="blank" id="angkatan-kelas" href="<?= base_url();?>laporan/siswa_lulus/" class="btn btn-primary">Export PDF</a>
                    <!-- <a target="blank" id="angkatan-kelas-excel" href="<?= base_url();?>laporan/excel/" class="btn btn-primary btn_angkatan_kelas_excel">Export Excel</a> -->
                  </div>

                </div>
              </div>
              <!-- end card 3 -->


              <!-- card 3 -->
              <div class="card shadow-sm ml-2">
                <div class="card-body">
                  <h5 class="card-title" style="min-width: 12rem">Data User</h5>
                  <div class="form-group">
                    <a  style="display: block;" target="blank" id="angkatan-kelas" href="<?= base_url();?>laporan/data_user/" class="btn btn-primary">Export PDF</a>
                    <!-- <a target="blank" id="angkatan-kelas-excel" href="<?= base_url();?>laporan/excel/" class="btn btn-primary btn_angkatan_kelas_excel">Export Excel</a> -->
                  </div>

                </div>
              </div>
              <!-- end card 3 -->

            </div>
            <!--end row2--->

            <div class="row pl-2 pr-2 mt-3">

              <!-- card 1 -->
              <div class="card shadow-sm mr-4" style="min-width: 20rem;">
                <div class="card-body">
                  <h5 class="card-title" style="">Siswa Per Tahun Ajaran</h5>
                    <div class="form-group">
                      <select class="form-control" id="angkatan" name="angkatan">
                        <?php foreach ($angkatan as $a) : ?>
                        <option value="<?= $a['angkatan']; ?>"><?= $a['angkatan']; ?></option>
                      <?php endforeach; ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <a target="blank" style="display: block;" id="btn-angkatan" href="<?= base_url();?>laporan/pdf/" class="btn btn-primary btn_angkatan">Export PDF</a>
                      <!-- <a target="blank" id="btn-angkatan-excel" href="<?= base_url();?>laporan/excel/" class="btn btn-primary btn_angkatan_excel">Export Excel</a> -->
                    </div>
                </div>
              </div>
              <!-- end card 1 -->

              <!-- card 2 -->
              <div class="card shadow-sm ml-4" style="min-width: 20rem;">
                <div class="card-body">
                  <h5 class="card-title" style="">Siswa Per Ajaran dan Kelas</h5>
                    <div class="form-group">
                      <select class="form-control" id="angkatan" name="angkatan">
                        <?php foreach ($angkatan as $a) : ?>
                        <option value="<?= $a['angkatan']; ?>"><?= $a['angkatan']; ?></option>
                      <?php endforeach; ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <select class="form-control" id="kelas" name="kelas">
                        <?php foreach ($kelas as $k) : ?>
                        <option value="<?= $k['id_kelas']; ?>"><?= $k['kelas']; ?></option>
                      <?php endforeach; ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <a target="blank" style="display: block;" id="angkatan-kelas" href="<?= base_url();?>laporan/pdf/" class="btn btn-primary btn_angkatan_kelas">Export PDF</a>
                      <!-- <a target="blank" id="angkatan-kelas-excel" href="<?= base_url();?>laporan/excel/" class="btn btn-primary btn_angkatan_kelas_excel">Export Excel</a> -->
                    </div>
                </div>
              </div>
              <!-- end card 2 -->

            </div>
            <!--end row-->
          </div>
        </div>
        <!--end of data siswa-->
      </div>
      <!--end col-->
    </div>

  </div>
  <!-- /.container-fluid -->
</section>

</div>
<!-- End of Main Content -->