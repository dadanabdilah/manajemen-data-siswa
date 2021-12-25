<section id="siswa-update">
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-400y-800"><?=  $sub_title; ?></h1>
    
    <div class="row">
      <div class="col-lg">
        <!-- data siswa-->
        <div class="card shadow mb-4">
          <div class="card-body">
          	<form method="POST" action="http://mtspui-kng.sch.id/siswa/simpanupdate">
			  <div class="form-group">
			    <label>Nomor Induk Siswa</label>
			    <input type="number" class="form-control" id="nis" name="nis" value="<?=$s['nis']?>" readonly>
			  </div>
			  <div class="form-group">
			    <label>Nama Siswa</label>
			    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="<?=$s['nama_siswa']?>">
			  </div>
			  <div class="form-group">
			    <label>Jenis Kelamin</label></br>
			    <?php 
			    	if($s['jk']=='L'){
				    echo '
				    	<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="L" checked>
							<label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="jk" id="jk" value="P">
							<label class="form-check-label" for="inlineRadio2">Perempuan</label>
						</div>
						';
					}elseif ($s['jk']=='P') {
						echo'
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="L">
							  <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="jk" id="jk" value="P" checked>
								<label class="form-check-label" for="inlineRadio2">Perempuan</label>
							</div>
						';
					}else{
						echo'
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="L">
							  <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="jk" id="jk" value="P">
								<label class="form-check-label" for="inlineRadio2">Perempuan</label>
							</div>
						';
					}
				?>
			   </div>
			  <div class="form-group">
			    <label>Tempat Lahir</label>
			    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?=$s['tempat_lahir']?>">
			  </div>
			  <div class="form-group">
			    <label>Tanggal Lahir</label>
			    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?=$s['tanggal_lahir']?>">
			  </div>
			  <div class="form-group">
			    <label>Nomor Hp</label>
			    <input type="number" class="form-control" id="no_hp" name="no_hp" value="<?=$s['no_hp']?>">
			  </div>
			  <div class="form-group">
			    <label>Kelas Kelas</label>
			    <select class="form-control" id="kelas" name="kelas">
			    	<option value="<?=$s['id_kelas']?>"><?=$s['kelas'];?></option>
			    	<?php $i=1;?>
			    	<?php foreach ($kelas as $k) :?>
							<option value="<?=$i?>"><?=$k['kelas'];?></option>
						<?php $i++;?>
					<?php endforeach;?>
			    </select>
			  </div>
			  <button type="submit" class="btn btn-success">Update</button>
			</form>
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