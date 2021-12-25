<section id="siswa">
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-400y-800"><?=  $sub_title; ?></h1>
    <div class="row">
      <div class="col-lg">

        <!-- data siswa-->
        <div id="card-data-siswa" class="card shadow mb-4">
          <div class="card-header py-3">
            <!-- <button  type="button" class="btn btn-primary" id="tambah_data" data-toggle="modal" data-target="#modalData">Tambah Data</button> -->
            <button  type="button" class="btn btn-primary" id="tambah_data">Tambah Data</button>
            <a href="<?=base_url();?>siswa/excel" target="blank" class="btn badge-success">Export Semua Data</a>
            <a OnClick="return confirm('Hapus semua data siswa dari database?')" href="<?=base_url();?>siswa/hapus_semua" class="btn badge-danger">Hapus Semua Data</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th width="2px">No</th>
                    <th>NIS</th>
                    <th>Angkatan</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Tanggal Lahir</th>
                    <th>No Hp</th>
                    <th>Alamat</th>
                    <th>Kelas</th>
                    <th>Status</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1;?>
                  <?php foreach ($siswa as $s) :?>
                    <tr>
                        <td><?=$i?></td>
                        <td><?=$s['nis'];?></td>
                        <td><?=$s['angkatan'];?></td>
                        <td><?=$s['nama_siswa'];?></td>
                        <td><?=$s['jk'];?></td>
                        <td><?=$s['tempat_lahir']; ?>, <?=formattanggal($s['tanggal_lahir']);?></td>
                        <td><?=$s['no_hp'];?></td>
                        <td><?=$s['alamat'];?></td>
                        <td><?=$s['kelas'];?></td>
                        <td><?=$s['status'];?></td>
                        <td align="center">
                          <a href="#" target="blank" data-toggle="modal" data-target="#modalDataInfo" nis="<?=$s['nis'];?>" class="btn btn-info btn-circle btn-sm data_info">
                            <i class="fas fa-info"></i>
                          </a>
                          <button type="button" id="btn_update" class="btn btn-success btn-circle btn-sm edit_data" nis="<?=$s['nis'];?>" >
                            <i class="fas fa-edit"></i>
                          </button>
                          <a OnClick="return confirm('Keluarkan <?=$s['nama_siswa'];?>, dari sekolah?')" href="<?=base_url()?>siswa/keluar/<?= $s['nis'];?>" class="btn btn-warning btn-circle btn-sm">
                            <i class="fas fa-user-times"></i>
                          </a>
                          <a OnClick="return confirm('Hapus <?=$s['nama_siswa'];?>, dari database?')" href="<?=base_url()?>siswa/hapus/<?= $s['nis'];?>" class="btn btn-danger btn-circle btn-sm">
                            <i class="fas fa-trash"></i>
                          </a>
                          <?php if ($s['id_status'] == '1') {?>
                            <a href="#" id="btn-surat" class="btn btn-primary btn-circle btn-sm" nis="<?=$s['nis'];?>" data-toggle="modal" data-target="#modalAllAction">
                              <i class="fas fa-print"></i>
                            </a>
                          <?php } ?>
                        </td>
                      </tr>
                    <?php $i++;?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>



        <!--card tambah data siswa-->
        <div id="card-tambah"  style="display:none" class="card  shadow mb-4">
          <div class="card-header form-title h4">
            Tambah Data siswa
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="card-body">
            <form method="POST" action="<?=base_url();?>siswa/tambah">
              <div class="form-group">
                <span>Nomor Induk Siswa</span>
                <input type="text" class="form-control nis" id="nis" name="nis" placeholder="Nomor Induk Siswa" required>
              </div>
              <div class="form-group">
                <span>Nomor Induk Siswa Nasional</span>
                <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Nomor Induk Siswa Nasional" required>
              </div>
              <div class="form-group">
                <span>Tahun Ajaran</span>
                <select class="form-control" id="angkatan" name="angkatan">
                  <?php
                    for ($i=0; $i < count($tahunajaran); $i++) {
                      echo "<option value='$tahunajaran[$i]'>$tahunajaran[$i]</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <span>Nama Siswa</span>
                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Nama Siswa" required>
              </div>
              <div class="form-group">
                <span>Jenis Kelamin</span>
                <select class="form-control" id="jk" name="jk">
                  <option value="L">Laki - Laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <span>Tempat Lahir</span>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required>
              </div>
              <div class="form-group">
                <span>Tanggal Lahir</span>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
              </div>
              <div class="form-group">
                <span>Nomor Handphone</span>
                <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor Hp" required>
              </div>
              <div class="form-group">
                <span>Alamat</span>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
              </div>
              <div class="form-group">
                <span>Asal Sekolah</span>
                <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="Asal Sekolah" required>
              </div>
              <div class="form-group">
                <span>Nama Ayah</span>
                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah" required>
              </div>
              <div class="form-group">
                <span>Nama Ibu</span>
                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu" required>
              </div>
              <div class="form-group">
                <span>Pekerjaan Ayah</span>
                <select class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah">
                  <?php
                    for ($i=0; $i < count($list_pekerjaan_ayah); $i++) {
                      echo "<option value='$list_pekerjaan_ayah[$i]'>$list_pekerjaan_ayah[$i]</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <span>Pekerjaan Ibu</span>
                <select class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu">
                  <?php
                    for ($i=0; $i < count($list_pekerjaan_ibu); $i++) {
                      echo "<option value='$list_pekerjaan_ibu[$i]'>$list_pekerjaan_ibu[$i]</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <span>Kelas</span>
                <select class="form-control" id="kelas" name="kelas">
                  <?php foreach ($kelas as $k) :?>
                    <option value="<?=$k['id_kelas'];?>"><?=$k['kelas'];?></option>
                  <?php endforeach;?>
                </select>
              </div>
              <div id="status-update" class="form-group">
                <span>Status Siswa</span>
                <select class="form-control" id="status" name="status">
                  <?php foreach ($status as $s) :?>
                    <option value="<?=$s['id_status'];?>"><?=$s['status'];?></option>
                  <?php endforeach;?>
                </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-batal btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
        </div>



        <!--end of data siswa-->
      </div>
      <!-- end col-->
    </div>

  </div>
  <!-- /.container-fluid -->
</section>

</div>
<!-- End of Main Content -->

<!-- Modal pilih surat-->
<div class="modal fade" id="modalAllAction" tabindex="-1" role="dialog" aria-labelledby="modalAllActionTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title title-surat-pindah" id="modalAllActionTitle">Pilih Surat Yang Akan Di Print</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mb-4">
        <div class="hide">
          <div style="border-top: 1px solid grey" class="div-info">Surat Keterangan Siswa Aktif
            <a href="" target="blank" class="btn btn-info btn-sm" id="btn-sksa">Print</a>
          </div>
          <div class="div-info">Surat Pindah Siswa
            <button class="btn btn-collapse-print btn-primary btn-sm" id="btn-sps" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Print
          </button>
          </div>
        </div>
        <h5 class="title-print"></h5>
        <div class="collapse" id="collapseExample">
          <h5>Untuk melanjutkan isi form berikut ini.</h5>
          <form method="POST" target="blank" action="<?=base_url();?>siswa/surat/">
            <div class="form-group">
              <span>NIS Siswa</span>
              <input type="text" class="form-control" id="nis-set" name="nis" value="" readonly required>
            </div>
            <div class="form-group">
              <span>Nama Sekolah Tujuan</span>
              <input type="text" class="form-control" id="sekolah_tujuan" name="sekolah_tujuan" required>
            </div>
            <div class="form-group">
              <span>Nama Orang Tua/Wali</span>
              <input type="text" class="form-control" id="nama_orang_tua" name="nama_orang_tua" placeholder="Nama Orang Tua/Wali" required>
            </div>
            <div class="form-group">
              <span>Pekerjaan Orang Tua/Wali</span>
              <!-- <input type="text" class="form-control" id="pekerjaan_orang_tua" name="pekerjaan_orang_tua" placeholder="Pekerjaan Orang Tua/wali" required> -->
              <select class="form-control" id="pekerjaan_orang_tua" name="pekerjaan_orang_tua">
                <?php
                  for ($i=0; $i < count($pekerjaan); $i++) {
                    echo "<option value='$pekerjaan[$i]'>$pekerjaan[$i]</option>";
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
              <span>Alamat</span>
              <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Pekerjaan Orang Tua/wali" required>
            </div>
            <div class="modal-footer">
              <button style="display: none;" class="btn btn-collapse-batal btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Batal
              </button>
              <button type="submit" class="btn btn-primary">Lajutkan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal detail siswa-->
<div class="modal fade" id="modalDataInfo" tabindex="-1" role="dialog" aria-labelledby="modalDataInfoTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="modalDataInfoTitle">Detail Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body mb-4">
        <div style="border-top: 1px solid grey" class="div-info">NIS
          <div class="value-data" id="nis-i"></div>
        </div>
        <div class="div-info">NISN
          <div class="value-data" id="nisn-i"></div>
        </div>
        <div class="div-info">Angkatan
          <div class="value-data" id="angkatan-i"></div>
        </div>
        <div class="div-info">Nama Siswa
          <div class="value-data" id="nama_siswa-i"></div>
        </div>
        <div class="div-info">Jenis Kelamin
          <div class="value-data" id="jk-i"></div>
        </div>
        <div class="div-info">Tempat Tanggal Lahir
          <div class="value-data" id="tempat_tanggal_lahir-i"></div>
        </div>
        <div class="div-info">Alamat
          <div class="value-data" id="alamat-i"></div>
        </div>
        <div class="div-info">Nama Ayah
          <div class="value-data" id="nama_ayah-i"></div>
        </div>
        <div class="div-info">Nama Ibu
          <div class="value-data" id="nama_ibu-i"></div>
        </div>
        <div class="div-info">Pekerjaan Ayah
          <div class="value-data" id="pekerjaan_ayah-i"></div>
        </div>
        <div class="div-info">Pekerjaan Ibu
          <div class="value-data" id="pekerjaan_ibu-i"></div>
        </div>
        <div class="div-info">Kelas
          <div class="value-data" id="kelas-i"></div>
        </div>
        <div class="div-info">Status
          <div class="value-data" id="status-i"></div>
        </div>
      </div>

    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalData" tabindex="-1" role="dialog" aria-labelledby="modalDataTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDataTitle">Tambah Data Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="<?=base_url();?>siswa/tambah">
        <div class="form-group">
          <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Nomor Induk Siswa Nasional" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control nis" id="nis" name="nis" placeholder="Nomor Induk Siswa" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="angkatan" name="angkatan" placeholder="Angkatan" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Nama Siswa" required>
        </div>
        <div class="form-group">
          <select class="form-control" id="jk" name="jk">
            <option value="L">Laki - Laki</option>
            <option value="P">Perempuan</option>
          </select>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required>
        </div>
        <div class="form-group">
          <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
        </div>
        <div class="form-group">
          <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor Ponsel" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="nama_orang_tua" name="nama_orang_tua" placeholder="Nama Orang Tua" required>
        </div>
        <div class="form-group">
          <select class="form-control" id="kelas" name="kelas">
            <?php foreach ($kelas as $k) :?>
              <option value="<?=$k['id_kelas'];?>"><?=$k['kelas'];?></option>
            <?php endforeach;?>
          </select>
        </div>
        <div id="status-update" class="form-group">
          <select class="form-control" id="status" name="status">
            <?php foreach ($status as $s) :?>
              <option value="<?=$s['id_status'];?>"><?=$s['status'];?></option>
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

