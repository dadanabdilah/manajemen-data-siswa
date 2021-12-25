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
          <a class="btn btn-primary" href="<?=base_url();?>/auth/logout">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=base_url();?>assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?=base_url();?>assets/vendor/datatables/jquery.dataTables.min.js"></script>

  <script src="<?=base_url();?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- myjs scripts -->
  <!-- <script src="<?=base_url();?>assets/js/myjs.js"></script> -->

  <!-- Page level custom scripts -->
  <script src="<?=base_url();?>assets/js/demo/datatables-demo.js"></script>

  <!-- Page level custom scripts -->
  <!-- <script src="<?=base_url();?>assets/data-tables/jquery.dataTables.min.js"></script> -->

  <script>
    $(document).ready(function() {
        $('#table-export-satu').DataTable();
        $('#table-export-dua').DataTable();
    });
    
    function cek_pekerjaan_ayah()
    {
      const pekerjaan_ayah = document.getElementById('pekerjaan_ayah').value;
      if (pekerjaan_ayah == 'Lainnya...') {
        $('#dis-form-ayah').show();
      } else {
        $('#dis-form-ayah').hide();
      }
    }

    function cek_pekerjaan_ibu()
    {
      const pekerjaan_ayah = document.getElementById('pekerjaan_ibu').value;
      if (pekerjaan_ayah == 'Lainnya...') {
        $('#dis-form-ibu').show();
      } else {
        $('#dis-form-ibu').hide();
      }
    }
  </script>

  <script type="text/javascript">
    $(document).ready(function(){

      //reset form tambah siswa
      $(document).on('click', '#tambah_data', function(){  
        $('.form-title').html('Tambah Data Siswa <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>');
        $('.modal-footer button[type=submit]').html('Simpan');
        $('.modal-body form').attr('action', '<?= base_url('siswa/tambah'); ?>');

        document.getElementById("nis").readOnly = false;
        // document.getElementById("nisn").readOnly = false;

        $('#card-data-siswa').hide();
        $('#card-tambah').show();

        // const hidden = document.querySelector('.nis');
        // hidden.setAttribute('type','number');

        const div = document.getElementById('status-update');
        div.style.display = "none";

        $('#nisn').val('');
        $('#nis').val('');
        $('#nama_siswa').val('');
        $('#angkatan').val('');
        $('#jk').val('');
        $('#tempat_lahir').val('');  
        $('#tanggal_lahir').val('');  
        $('#no_hp').val('');
        $('#alamat').val('');
        $('#asal_sekolah').val('');
        $('#nama_ayah').val('');
        $('#nama_ibu').val('');
        $('#pekerjaan_ayah').val('');
        $('#pekerjaan_ibu').val('');
        $('#kelas').val('');
      });

      // ajax btn batal
      $(document).on('click', '.close', function(){

        $('#card-data-siswa').show();
        $('#card-tambah').hide();

        const div = document.getElementById('status-update');
        div.style.display = "none";

        $('#nisn').val('');
        $('#nis').val('');
        $('#nama_siswa').val('');
        $('#angkatan').val('');
        $('#jk').val('');
        $('#tempat_lahir').val('');  
        $('#tanggal_lahir').val('');  
        $('#no_hp').val('');
        $('#alamat').val('');
        $('#asal_sekolah').val('');
        $('#nama_ayah').val('');
        $('#nama_ibu').val('');
        $('#pekerjaan_ayah').val('');
        $('#pekerjaan_ibu').val('');
        $('#kelas').val('');
      });

      // ajax btn batal
      $(document).on('click', '.btn-batal', function(){
        $('.modal-footer button[type=submit]').html('Simpan');
        $('.modal-body form').attr('action', '<?= base_url('siswa/tambah'); ?>');

        document.getElementById("nis").readOnly = false;
        // document.getElementById("nisn").readOnly = false;

        $('#card-data-siswa').show();
        $('#card-tambah').hide();

        const div = document.getElementById('status-update');
        div.style.display = "none";

        $('#nisn').val('');
        $('#nis').val('');
        $('#nama_siswa').val('');
        $('#angkatan').val('');
        $('#jk').val('');
        $('#tempat_lahir').val('');  
        $('#tanggal_lahir').val('');  
        $('#no_hp').val('');
        $('#alamat').val('');
        $('#asal_sekolah').val('');
        $('#nama_ayah').val('');
        $('#nama_ibu').val('');
        $('#pekerjaan_ayah').val('');
        $('#pekerjaan_ibu').val('');
        $('#kelas').val('');
      });

      //update data siswa
      $(document).on('click', '.edit_data', function(){
        $('.form-title').html('Ubah Data Siswa <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>');
        $('.modal-footer button[type=submit]').html('Update');
        $('.card-body form').attr('action', '<?= base_url('siswa/update'); ?>');
        
        document.getElementById("nis").readOnly = true;
        // document.getElementById("nisn").readOnly = true;
        
        $('#card-data-siswa').hide();
        $('#card-tambah').show();
        
        const div = document.getElementById('status-update');
        div.style.display = "block";

        var nis = $(this).attr("nis");
        $.ajax({
          data:{nis:nis},
          type : 'POST',
          url : '<?= base_url('siswa/getupdate'); ?>',
          dataType : 'json',
          success : function(data){
            $('#nisn').val(data.nisn);
            $('#nis').val(data.nis);
            $('#angkatan').val(data.angkatan);
            $('#nama_siswa').val(data.nama_siswa);  
            $('#jk').val(data.jk);  
            $('#tempat_lahir').val(data.tempat_lahir);  
            $('#tanggal_lahir').val(data.tanggal_lahir);  
            $('#no_hp').val(data.no_hp);
            $('#alamat').val(data.alamat);
            $('#asal_sekolah').val(data.asal_sekolah);
            $('#nama_ayah').val(data.nama_ayah);
            $('#nama_ibu').val(data.nama_ibu);
            $('#pekerjaan_ayah').val(data.pekerjaan_ayah);
            $('#pekerjaan_ibu').val(data.pekerjaan_ibu);
            $('#kelas').val(data.id_kelas);
            $('#status').val(data.id_status);
          }
        });
      });




      //ajax tampil surat siswa pindah & aktif
      $(document).on('click', '#btn-surat', function(){
        $('.title-surat-pindah').html('<h5 class="modal-title" id="modalAllActionTitle">Pilih Surat Yang Akan Di Print</h5>'); 
        var nis = $(this).attr("nis");

        $('#nis-set').val(nis);
        console.log(nis);
        //modify attr
        $('#btn-sksa').attr('href', '<?= base_url('siswa/surat/siswa-aktif'); ?>/'+nis);
        //$('#btn-sps').attr('href', '<?= base_url('siswa/surat/pindah-sekolah'); ?>/'+nis);
      });

      //reset value seting surat
      $(document).on('click', '.btn-collapse-print', function(){  
        $('.title-surat-pindah').html('<h5 class="modal-title" id="modalAllActionTitle">Print Surat Pindah</h5>');
        $('.btn-collapse-batal').show();
        $('.btn-collapse-print').hide();
        $('.hide').hide();
      });

      //ubah value seting surat
      $(document).on('click', '.btn-collapse-batal', function(){
        $('.title-surat-pindah').html('<h5 class="modal-title" id="modalAllActionTitle">Pilih Surat Yang Akan Di Print</h5>');   
        $('.btn-collapse-batal').hide();
        $('.btn-collapse-print').show();
        $('.hide').show();
      });



      // ajax tampil modal surat lulus
      $(document).on('click', '.btn-lulus', function(){
        var nis = $(this).attr("nis");
        $.ajax({
          data:{nis:nis},
          type : 'POST',
          url : '<?= base_url('siswa/getupdate'); ?>',
          dataType : 'json',
          success : function(data){
            console.log(data);
            $('#nama_siswa').html('Nama siswa, ' + data.nama_siswa + ', dinyatakan lulus.');
            $('#btn-skl-covid').attr('href', '<?= base_url('siswa/lulus_covid/lulus/'); ?>'+data.nis);
            $('#btn-skl-biasa').attr('href', '<?= base_url('siswa/lulus/lulus/'); ?>'+data.nis);
          }
        });
      });

       // ajax tampil modal surat tidak lulus
      $(document).on('click', '.btn-tidak-lulus', function(){
        var nis = $(this).attr("nis");
        $.ajax({
          data:{nis:nis},
          type : 'POST',
          url : '<?= base_url('siswa/getupdate'); ?>',
          dataType : 'json',
          success : function(data){
            console.log(data);
            $('#nama_siswa').html('Nama siswa ' + data.nama_siswa + ', dinyatakan tidak lulus.');
            $('#btn-skl-covid').attr('href', '<?= base_url('siswa/lulus_covid/tidaklulus/'); ?>'+data.nis);
            $('#btn-skl-biasa').attr('href', '<?= base_url('siswa/lulus/tidaklulus/'); ?>'+data.nis);
          }
        });
      });

      // ajax info data
      $(document).on('click', '.data_info', function(){
        var nis = $(this).attr("nis");
        $.ajax({
          data:{nis:nis},
          type : 'POST',
          url : '<?= base_url('siswa/getupdate'); ?>',
          dataType : 'json',
          success : function(data){
            console.log(data);
            $('#nis-i').html(data.nis);
            $('#nisn-i').html(data.nisn);
            $('#angkatan-i').html(data.angkatan);
            $('#nama_siswa-i').html(data.nama_siswa);  
            $('#jk-i').html(data.jk);  
            $('#tempat_tanggal_lahir-i').html(data.tempat_lahir + ', ' + data.tanggal_lahir); 
            $('#no_hp-i').html(data.no_hp);
            $('#alamat-i').html(data.alamat);
            $('#asal_sekolah-i').html(data.asal_sekolah);
            $('#nama_ayah-i').html(data.nama_ayah);
            $('#nama_ibu-i').html(data.nama_ibu);
            $('#pekerjaan_ayah-i').html(data.pekerjaan_ayah);
            $('#pekerjaan_ibu-i').html(data.pekerjaan_ibu);
            $('#kelas-i').html(data.kelas);
            $('#status-i').html(data.status);
          }
        });
      });


      //reset value seting surat
      $(document).on('click', '.btn-collapse-tampil', function(){  
        $('.btn-collapse-simpan').show();
        $('.btn-collapse-tampil').hide();
      });

      //ubah value seting surat
      $(document).on('click', '.btn-collapse-simpan', function(){  
        $('.btn-collapse-simpan').hide();
        $('.btn-collapse-tampil').show();

        var nama_kepsek = $('#nama_kepala_sekolah').val();
        var nip_kepsek = $('#nip_kepala_sekolah').val();
        var nomor_surat = $('#nomor_surat').val();
        var tanggal_surat = $('#tanggal_surat').val();

        $.ajax({
          data:{nama_kepsek:nama_kepsek,
                nip_kepsek:nip_kepsek,
                nomor_surat:nomor_surat,
                tanggal_surat:tanggal_surat
              },
          type : 'POST',
          url : '<?= base_url('siswa/surat_kelulusan_seting'); ?>',
          dataType : '',
          success : function(data){
            console.log(data);
          }
        });
      });


      //get selected dari combobox kelulusan
      $(document).on('click', '#btn_submit', function(){ 
        //buat variabel
        const selected = document.getElementById('angkatan').value;
        //modify attr
        $('#btn_submit').attr('href', '<?= base_url('siswa/kelulusan'); ?>/'+selected);
      });

    });
  </script>

</body>

</html>
