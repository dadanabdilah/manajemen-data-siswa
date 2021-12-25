<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/');?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/');?>css/style.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <title>MTS PUI Kuningan</title>
  </head>
  <body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">MTS PUI Kuningan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <!-- <a class="nav-item nav-link" href="#">Home</a>
            <a class="nav-item nav-link" href="#">Features</a>
            <a class="nav-item nav-link" href="#">About</a> -->
            <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
              Launch demo modal
            </button> -->
            <!-- <a class="nav-item nav-link btn btn-primary text-white tombol" href="<?=base_url('login');?>">Login</a> -->
            <a class="nav-item nav-link btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Login</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <!-- <h1 class="display-4">Get work done <span>faster</span> <br>and <span>better</span> with us</h1>
        <a href="#" class="btn btn-info btn-lg tombol">View Our Work</a> -->
      </div>
    </div>
    <!-- akhir Jumbotron -->


    <!-- container -->
    <div class="container">

      <!-- info panel -->
      <div class="row justify-content-center">
        <div class="col-10 info-panel">
          <div class="row">
            <div class="col-sm">
              <img src="<?=base_url('assets/');?>img/al-qur'an.png" alt="Employee" style="width: 120px;" class="img-fluid mr-2 mt-3 float-left">
              <h4>Beriman</h4>
              <p>Menjalankan kewajiban sebgai umat islam.</p>
            </div>
            <div class="col-lg">
              <img src="<?=base_url('assets/');?>img/employee.png" alt="HiRes" class="img-fluid float-left">
              <h4>Disiplin</h4>
              <p>Tepat waktu, dan taat aturan.</p>
            </div>
            <div class="col-lg">
              <img src="<?=base_url('assets/');?>img/20201009_195602.png" alt="Security" style="width: 120px;" class="img-fluid float-left">
              <h4>Berkualitas</h4>
              <p>Mampu bersaing, dan menjadi juara.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- akhir info panel -->


      <!-- Workingspace -->
      <!-- <div class="row workingspace">
        <div class="col-lg-6">
          <img src="<?=base_url('assets/');?>img/workingspace.png" alt="Working Space" class="img-fluid">
        </div>
        <div class="col-lg-5">
          <h2>You <span>Work</span> Like at <span>Home</span></h2>
          <p>Bekerja dengan suasana hati yang lebih asik, menyenangkan
            dan mempelajari hal baru setiap harinya.</p>
          <a href="#" class="btn btn-danger tombol">Gallery</a>
        </div>
      </div> -->
      <!-- akhir Workingspace -->


      <section class="testimonial">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <p>"Belajar dengan suasana hati yang lebih asik dan mempelajari hal baru setiap harinya."</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-6 justify-content-center d-flex">
            <!-- <img src="<?=base_url('assets/');?>img/img1.png" alt="Testimonial 1">
            <img src="<?=base_url('assets/');?>img/img2.png" alt="Testimonial 2" class="img-main">
            <img src="<?=base_url('assets/');?>img/img3.png" alt="Testimonial 3"> -->
          

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="<?=base_url('assets/');?>img/img1.png" alt="First slide" class="img-main">
                </div>
                <div class="carousel-item">
                  <img src="<?=base_url('assets/');?>img/img2.png" alt="Second slide" class="img-main">
                </div>
                <div class="carousel-item">
                  <img src="<?=base_url('assets/');?>img/img3.png" alt="Third slide" class="img-main">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

          </div>
        </div>

        <div class="row justify-content-center info-text">
          <div class="col-lg text-center">
            <h5>Team IT</h5>
          </div>
        </div>
      </section>
      <!-- akhir Testimonial -->


    </div>
    <!-- akhir container -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="POST" action="<?= base_url(); ?>auth/login">
            <div class="modal-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>          
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?=base_url('assets/');?>bootstrap/js/jquery-3.4.1.slim.min.js"></script>
    <script src="<?=base_url('assets/');?>bootstrap/js/popper.min.js"></script>
    <script src="<?=base_url('assets/');?>bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>