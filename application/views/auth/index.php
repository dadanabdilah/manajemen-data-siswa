<div class="container">
  <div class="content">
    <div class="row justify-content-center">
      <div class="col-lg">
        
        <div class="card shadow">
          <div class="card-body">
            <?= $this->session->flashdata('message');?>
            <img src="<?=base_url('assets/');?>img/logo-pui.jpeg" alt="Employee" style="width: 50px;" class="img-fluid float-right mr-4">
            <div class="h4 mb-4">
              <!-- <img src=""> -->
              MTS PUI Kuningan
            </div>
            <div class="form mt-4">
              <form method="POST" action="<?= base_url(); ?>auth/login">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <button type="submit" class="form-control btn-primary mt-4">Login</button>
                <a style="text-decoration: none;" href="<?=base_url()?>">kembali ke halaman utama</a>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>