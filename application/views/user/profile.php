	<section id="user-profile">
	  <!-- Begin Page Content -->
	  <div class="container-fluid">
	    <!-- Page Heading -->
	    <div style="border-radius: 4px;" class="shadow-sm">
		    <nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="<?=base_url();?><?=$this->uri->segment(1)?>">User</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Profile</li>
			  </ol>
			</nav>
		</div>
	    
	    <div class="row">
	      	<div class="col-lg">
				<div class="card shadow-sm">
				  <div class="card-body">
				    <h5 class="card-title">Profile</h5>
				    <h6 class="card-subtitle mb-2 text-muted">Nama Kamu : <?=$this->session->userdata('nama_user')?></h6>
				    <h6 class="card-subtitle mb-2 text-muted">Username Kamu : <?=$this->session->userdata('username')?></h6>
				    <p class="card-text">Some quick example text to build on the card title and make up.</p>
				    <a href="#" class="card-link update_profile" data-toggle="modal" data-target="#updateProfileModal">Update</a>
				    <a href="#" class="card-link" data-toggle="modal" data-target="#ubahPasswordModal">Ubah Password</a>
				  </div>
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

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="updateProfileModal" tabindex="-1" role="dialog" aria-labelledby="updateProfileModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      	<div class="modal-header">
		        <h5 class="modal-title" id="updateProfileModalTitle">Update Profile</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
	      	</div>
	      	<div class="modal-body">
	      		<form method="POST" action="<?=base_url();?>user/profile">
			        <div class="form-group">
			          <input type="hidden" class="form-control" id="id" name="id" value="<?=$this->session->userdata('id');?>" placeholder="Nomor Induk Siswa" required>
			        </div>
			        <div class="form-group">
			          <input type="text" class="form-control" id="nama_user" name="nama_user" value="<?=$this->session->userdata('nama_user');?>" placeholder="Nama User" required>
			        </div>
			        <div class="form-group">
			          <input type="text" class="form-control" id="username" name="username" value="<?=$this->session->userdata('username');?>" placeholder="Username" required>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			          <button type="submit" class="btn btn-primary">Update</button>
			        </div>
			    </form>
	      	</div>
	    </div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="ubahPasswordModal" tabindex="-1" role="dialog" aria-labelledby="ubahPasswordModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      	<div class="modal-header">
		        <h5 class="modal-title" id="ubahPasswordModalTitle">Ubah Password</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
	      	</div>
	      	<div class="modal-body">
	      		<form method="POST" action="<?=base_url();?>user/profile">
			        <div class="form-group">
			          <input type="hidden" class="form-control" id="id" name="id" value="<?=$this->session->userdata('id');?>">
			        </div>
			        <div class="form-group">
			          <input type="text" class="form-control" id="password1" name="password1" placeholder="Password Baru" required>
			        </div>
			        <div class="form-group">
			          <input type="text" class="form-control" id="password2" name="password2" placeholder="Ketik Ulang Password" required>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			          <button type="submit" class="btn btn-primary">Update</button>
			        </div>
			    </form>
	      	</div>
	    </div>
	</div>
</div>