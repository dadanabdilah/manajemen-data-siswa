<section id="siswa-kelulusan">
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-400y-800"><?=  $sub_title; ?></h1>    

    <div class="row">
      

      <div class="col-sm-6">
        <!-- card-->
        <div class="card shadow mb-4">
         <div class="card-header">
            <a class="h6">Pilih angkatan untuk melanjutkan</a>
          </div>
          <div class="card-body">
            <div class="form-group">
              <select class="form-control" id="angkatan" name="angkatan">
                <?php foreach ($angkatan as $a) : ?>
                  <option value="<?=$a['angkatan'];?>"><?=$a['angkatan'];?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <a href="#" id="btn_submit" class="btn btn-primary">Submit</a>
            </div>
          </div>
        </div>
        <!--end of card-->
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
</section>

</div>
<!-- End of Main Content -->