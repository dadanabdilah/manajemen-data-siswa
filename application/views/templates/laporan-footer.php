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

  <!-- Ajax -->
  <script>
    $(document).ready(function(){

      //ajax pdf data siswa
      $(document).on('click', '.btn_angkatan_kelas', function(){
        //buat variabel
        const selected1 = document.getElementById('angkatan').value;
        const selected2 = document.getElementById('kelas').value;
        //modify attr
        $('#angkatan-kelas').attr('href', '<?= base_url('laporan/pdf/'); ?>'+selected1+'/'+selected2);
      });

      //ajax pdf data siswa
      $(document).on('click', '.btn_angkatan', function(){
        //buat variabel
        const selected1 = document.getElementById('angkatan').value;
        //modify attr
        $('#btn-angkatan').attr('href', '<?= base_url('laporan/pdf/'); ?>'+selected1);
      });


      //ajax pdf data siswa
      $(document).on('click', '.btn_angkatan_kelas_excel', function(){
        //buat variabel
        const selected1 = document.getElementById('angkatan').value;
        const selected2 = document.getElementById('kelas').value;
        //modify attr
        $('#angkatan-kelas-excel').attr('href', '<?= base_url('laporan/excel/'); ?>'+selected1+'/'+selected2);
      });

      //ajax pdf data siswa
      $(document).on('click', '.btn_angkatan_excel', function(){
        //buat variabel
        const selected1 = document.getElementById('angkatan').value;
        //modify attr
        $('#btn-angkatan-excel').attr('href', '<?= base_url('laporan/excel/'); ?>'+selected1);
      });

    });
  </script>
</body>

</html>