    <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?=base_url();?>logout">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=base_url();?>assets/js/sb-admin-2.min.js"></script>


  <script src="<?=base_url();?>assets/css/sweetalert/sweetalert2.all.min.js"></script>

  <!-- Ajax -->
  <script>
    Swal.fire(
      'Warning!',
      '<h5>Project ini dibuat oleh kelompok PKL MTS PUI Kuningan Tanggal 11/10/2020. Project ini dibuat untuk keperluan sidang PKL</h5>',
      'warning'
    )


    //function refresh info user
    function getInfoSiswa(){
      $.ajax({
        type : 'POST',
        url : '<?= base_url(); ?>dashboard/getinfo',
        dataType : 'json',
        success : function(data){
          $('#jumlah_siswa').html(data.jumlah_siswa);
          $('#siswa_baru').html(data.siswa_baru);
          $('#siswa_keluar').html(data.siswa_keluar);
          $('#progress_siswa').attr('style', 'width :'+data.siswa_keluar+'%');
          $('#progress_siswa').attr('aria-valuenow', data.siswa_keluar);

        }
      });
    };

    //function refresh info user
    function getInfoUser(){
      $.ajax({
        type : 'POST',
        url : '<?= base_url(); ?>dashboard/getinfo',
        dataType : 'json',
        success : function(data){
          $('#jumlah_user').html(data.jumlah_user);
          $('#user_online').html(data.user_online);
        }
      });
    };

    $(document).ready(function(){

      //ajax load all info dashboard
      $.ajax({
        type : 'POST',
        url : '<?= base_url(); ?>dashboard/getinfo',
        dataType : 'json',
        success : function(data){
          $('#jumlah_siswa').html(data.jumlah_siswa);
          $('#siswa_baru').html(data.siswa_baru);
          $('#progress_siswa').attr('style', 'width :'+data.siswa_keluar+'%');
          $('#progress_siswa').attr('aria-valuenow', data.siswa_keluar);
          $('#siswa_keluar').html(data.siswa_keluar);
          $('#jumlah_user').html(data.jumlah_user);
          $('#user_online').html(data.user_online);
        }
      });

      //ajax reset form tambah kelas
      $(document).on('click', '#tambah_data_kelas', function(){
        $('#modalDataKelasTitle').html('Tambah Data Kelas');
        $('.modal-footer button[type=submit]').html('Simpan');
        $('.modal-body form').attr('action', '<?= base_url('kelas/tambah'); ?>');
        $('#id_kelas').val('');
        $('#kelas').val('');  
        $('#wali_kelas').val('');
      });

      //ajax get update kelas
      $(document).on('click', '.edit_data_kelas', function(){
        $('#modalDataKelasTitle').html('Update Data Kelas');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-body form').attr('action', '<?= base_url('kelas/update'); ?>');

        var id = $(this).attr("id_kelas");

        $.ajax({
          data:{id:id},
          type : 'POST',
          url : '<?= base_url('kelas/getupdate'); ?>',
          dataType : 'json',
          success : function(data){
            console.log(data);
            $('#id_kelas').val(data.id_kelas);
            $('#kelas').val(data.kelas);  
            $('#wali_kelas').val(data.wali_kelas);   
          }
        });
      });

      //ajax reset form tambah user
      $(document).on('click', '#tambah_data_user', function(){
        $('#modalTambahDataUserTitle').html('Tambah Data User');
        $('.modal-footer button[type=submit]').html('Simpan');
        $('.modal-body form').attr('action', '<?= base_url('user/tambah'); ?>');
        $('#id_user').val('');
        $('#nama_user').val('');
        $('#username').val('');  
        $('#level').val('');
      });

      //ajax get update user
      $(document).on('click', '.edit_data_user', function(){
        $('#modalTambahDataUserTitle').html('Update Data User');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-body form').attr('action', '<?= base_url('user/update'); ?>');

        var id = $(this).attr("id_user");

        $.ajax({
          data:{id:id},
          type : 'POST',
          url : '<?= base_url('user/getupdate'); ?>',
          dataType : 'json',
          success : function(data){
            console.log(data);
            $('#id_user').val(data.id_user);
            $('#nama_user').val(data.nama_user);  
            $('#username').val(data.username);
            $('#level').val(data.id_level);   
          }
        });
      });

    });
  </script>
</body>

</html>