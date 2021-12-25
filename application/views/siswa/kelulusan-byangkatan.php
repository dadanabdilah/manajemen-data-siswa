<section id="siswa-kelulusan">
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb shadow-sm">
        <li class="breadcrumb-item"><a href="<?=base_url();?><?=$this->uri->segment(1)?>"><?= ucfirst($this->uri->segment(1)); ?></a></li>
        <li class="breadcrumb-item"><a href="<?=base_url();?><?=$this->uri->segment(1)?>/<?=$this->uri->segment(2)?>"> <?= ucfirst($this->uri->segment(2)); ?></a></li>
        <li class="breadcrumb-item active" aria-current="page">Angkatan Ke <?=$this->uri->segment(3); ?></li>
      </ol>
    </nav>
    <h1 id="sub_title" class="h3 mb-4 text-gray-400y-800"><?=  $sub_title; ?></h1>

    <!-- Content Row -->
      <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-4 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Siswa</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_siswa; ?></div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-users fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-4 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Lulus</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jml_siswa_lulus; ?></div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-users fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-4 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Tidak Lulus</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jml_siswa_tidak_lulus; ?></div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-users fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    
    <div class="row">
      <div class="col-lg">
        <!-- data siswa-->
        <div class="card shadow mb-4">
         <div class="card-header">
            <a class="h6">Daftar Siswa</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th width="1px">No</th>
                    <th>NISN</th>
                    <th>NIS</th>
                    <th>Angkatan</th>
                    <th>Nama Siswa</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1;?>
                  <?php foreach ($siswa as $s) :?>
                    <tr>
                        <td><?=$i?></td>
                        <td><?=$s['nisn'];?></td>
                        <td><?=$s['nis'];?></td>
                        <td><?=$s['angkatan'];?></td>
                        <td><?=$s['nama_siswa'];?></td>
                        <td align="center">
                          <a href="#" target="blank" data-toggle="modal" style="width: 40px;" data-target="#modalData" nis="<?=$s['nis'];?>" class="badge badge-info data_info">
                            info
                          </a>
                          <a href="#" data-toggle="modal" data-target="#exampleModalCenter" nis="<?= $s['nis'];?>" class="badge btn-lulus badge-warning">
                            lulus
                          </a>
                          <!-- <a onclick="return confirm('Apakah <?=$s['nama_siswa'];?>, lulus?')" target="blank" href="<?=base_url()?>siswa/lulus/lulus/<?= $s['nis'];?>" class="badge badge-warning">
                            lulus
                          </a> -->
                          <a href="#" data-toggle="modal" data-target="#exampleModalCenter" nis="<?= $s['nis'];?>" class="badge btn-tidak-lulus badge-danger">
                            tidak lulus
                          </a>
                          <!-- <a onclick="return confirm('Apakah <?=$s['nama_siswa'];?>, tidak lulus?')" target="blank" href="<?=base_url()?>siswa/lulus/tidaklulus/<?= $s['nis'];?>" class="badge badge-danger">
                            tidak lulus
                          </a> -->
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
      <!--end col satu-->
    </div>
    <!--end row satu-->

    <div class="row">
      <div class="col-lg">
        <!-- data siswa-->
        <div class="card shadow mb-4">
         <div class="card-header">
            <a class="h6">Daftar Siswa Yang Lulus</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-sm" id="table-export-satu" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th width="1px">No</th>
                    <th>NISN</th>
                    <th>NIS</th>
                    <th>Angkatan</th>
                    <th>Nama Siswa</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1;?>
                  <?php foreach ($siswa_lulus as $sl) :?>
                    <tr>
                        <td><?=$i?></td>
                        <td><?=$sl['nisn'];?></td>
                        <td><?=$sl['nis'];?></td>
                        <td><?=$sl['angkatan'];?></td>
                        <td><?=$sl['nama_siswa'];?></td>
                        <td align="center">
                          <a href="#" target="blank" data-toggle="modal" style="width: 40px;" data-target="#modalData" nis="<?=$sl['nis'];?>" class="badge badge-info data_info">
                            info
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
      <!--end col satu-->

      <div class="col-lg">
        <!-- data siswa-->
        <div class="card shadow mb-4">
         <div class="card-header">
            <a class="h6">Daftar Yang Tidak Siswa Lulus</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-sm" id="table-export-dua" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th width="1px">No</th>
                    <th>NISN</th>
                    <th>NIS</th>
                    <th>Angkatan</th>
                    <th>Nama Siswa</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1;?>
                  <?php foreach ($siswa_tidak_lulus as $stl) :?>
                    <tr>
                        <td><?=$i?></td>
                        <td><?=$stl['nisn'];?></td>
                        <td><?=$stl['nis'];?></td>
                        <td><?=$stl['angkatan'];?></td>
                        <td><?=$stl['nama_siswa'];?></td>
                        <td align="center">
                          <a href="#" target="blank" data-toggle="modal" style="width: 40px;" data-target="#modalData" nis="<?=$stl['nis'];?>" class="badge badge-info data_info">
                            info
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
      <!--end col dua-->
    </div>
    <!--end row dua-->

  </div>
  <!-- /.container-fluid -->
</section>

</div>
<!-- End of Main Content -->


<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Pilih Format Surat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="nama_siswa"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <a href="" target="blank" class="btn btn-info" id="btn-skl-covid">SKL Covid-19</a>
        <a href="" target="blank" class="btn btn-primary" id="btn-skl-biasa">SKL Biasa</a>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalData" tabindex="-1" role="dialog" aria-labelledby="modalDataTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="modalDataTitle">Detail Siswa</h5>
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