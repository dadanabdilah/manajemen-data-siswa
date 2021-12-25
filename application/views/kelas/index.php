<section id="data-kelas">
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-400y-800"><?=  $sub_title; ?></h1>
    
    <div class="row">
      <div class="col-lg">
        <!-- data kelas-->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <button  type="button" class="btn btn-primary" id="tambah_data_kelas" data-toggle="modal" data-target="#modalDataKelas">Tambah Data</button>
            <a OnClick="return confirm('Hapus semua data kelas dari database?')" href="<?=base_url();?>kelas/hapus_semua" class="btn badge-danger">Hapus Semua Data</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th width="2px">No</th>
                    <th>Kelas</th>
                    <th>Wali Kelas</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1;?>
                  <?php foreach ($kelas as $k) :?>
                    <tr>
                        <td><?=$i?></td>
                        <td><?=$k['kelas'];?></td>
                        <td><?=$k['wali_kelas'];?></td>
                        <td align="center">
                          <a href="#" id="btn_update" class="btn btn-warning btn-circle btn-sm edit_data_kelas" id_kelas="<?=$k['id_kelas'];?>" data-toggle="modal" data-target="#modalDataKelas">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a OnClick="return confirm('Hapus <?=$k['kelas'];?>, dari database?')" href="<?=base_url()?>kelas/hapus?id=<?= $k['id_kelas'];?>" class="btn btn-danger btn-circle btn-sm">
                            <i class="fas fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                    <?php $i++;?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!--end of data siswa-->
      </div>
    </div>

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
          <input type="hidden" class="form-control" id="id_kelas" name="id_kelas" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Nama Kelas" required>
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