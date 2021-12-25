	<section id="user-profile">
	  <!-- Begin Page Content -->
	  <div class="container-fluid">
	    <!-- Page Heading -->
	    <div style="border-radius: 4px;" class="shadow-sm">
		    <nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="<?=base_url();?><?=$this->uri->segment(1)?>">User</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Ubah Password</li>
			  </ol>
			</nav>
		</div>
	    
	    <div class="row">
	      	<div class="col-lg">
				<div class="card shadow-sm">
				  <div class="card-body">
				    <h5 class="card-title">Ubah Password</h5>
				    <form method="POST" action="<?=base_url();?>user/ubah_password">
				        <div class="form-group">
				          <input type="hidden" class="form-control" id="id-user" name="id-user" value="<?=$this->session->userdata('id');?>">
				        </div>
				        <div class="form-group">
				          <input type="password" class="form-control" id="password1" name="password1" placeholder="Password Baru" value="<?= set_value('password1');?>" required>
				          <?= form_error('password1','<small class="text-danger pl-3">','</small>') ?>
				        </div>
				        <div class="form-group">
				          <input type="password" class="form-control" id="password2" name="password2" placeholder="Ketik Ulang Password Baru" required>
				          <?= form_error('password2','<small class="text-danger pl-3">','</small>') ?>
				        </div>
				        	<button type="submit" class="btn btn-primary">Ubah</button>
				    </form>
				</div>
			</div>
	      <!--end of col-->
	    </div>
	    <!--end of row-->

	  </div>
	  <!-- /.container-fluid -->
	</section>

</div>
<!-- End of Main Content -->