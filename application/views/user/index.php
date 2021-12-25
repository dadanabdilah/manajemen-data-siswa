<section id="user">
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-400y-800"><?=  $sub_title; ?></h1>
    
    <div class="row">
      <div class="col-lg">
        <!-- data siswa-->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <button  type="button" class="btn btn-primary" id="tambah_data_user" data-toggle="modal" data-target="#modalTambahDataUser">Tambah Data</button>
            <a OnClick="return confirm('Hapus semua data user dari database?')" href="<?=base_url();?>user/hapus_semua" class="btn badge-danger">Hapus Semua Data</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th width="2px">No</th>
                    <th>Nama User</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1;?>
                  <?php foreach ($user as $u) :?>
                    <tr>
                        <td><?=$i?></td>
                        <td><?=$u['nama_user'];?></td>
                        <td><?=$u['username'];?></td>
                        <td><?=$u['password'];?></td>
                        <td><?=$u['level'];?></td>
                        <td align="center">
                          <a href="#" id="btn_update" class="btn btn-warning btn-circle btn-sm edit_data_user" id_user="<?=$u['id_user'];?>" data-toggle="modal" data-target="#modalTambahDataUser">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a OnClick="return confirm('Hapus <?=$u['nama_user'];?>, dari database?')" href="<?=base_url()?>user/hapus/<?= $u['id_user'];?>" class="btn btn-danger btn-circle btn-sm">
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
        <!--end of card-->
      </div>
      <!--end of col-->
    </div>
    <!--end of row-->

  </div>
  <!-- /.container-fluid -->
</section>

</div>
<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade" id="modalTambahDataUser" tabindex="-1" role="dialog" aria-labelledby="modalTambahDataUserTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTambahDataUserTitle">Tambah Data Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Secara default password diset menjadi 123, tetapi user tetap bisa merubahnya.</p>
        <form method="POST" action="<?=base_url();?>user/tambah">
          <div class="form-group">
            <input type="hidden" class="form-control" id="id_user" name="id_user" value="" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="nama_user" name="nama_user" placeholder="Nama User" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
          </div>
          <div class="form-group">
            <input type="hidden" class="form-control" id="password" name="password" value="<?php echo md5('123');?>">
          </div>
          <div class="form-group">
            <select class="form-control" id="level" name="level">
              <?php foreach ($user_level as $ul) :?>
                <option value="<?=$ul['id_level'];?>"><?=$ul['level'];?></option>
              <?php endforeach;?>
            </select>
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

