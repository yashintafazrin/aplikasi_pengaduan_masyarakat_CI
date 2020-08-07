<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $title;?></title>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1><h2>Aplikasi Pengaduan Masyarakat</h2>
                  </div>
                  <form class="user" method="post" action="">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user"  placeholder="masukkan username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user"  placeholder="Password">
                    </div>
                    <div class="form-group">
                      
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="login">
                      
                    </a>
                    <hr>
                    
                  </form>
                  <div class="text-center">
                  Belum Punya Akun?<br>
                    <a class="small" href="<?php echo site_url('Dashboard/register') ?>">Register!</a>
                  </div>
                  
                  <hr>
                  
                  <div class="text-center">
                    <a class="small" href="">masuk sebagai admin/petugas</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  

</body>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>

</html>
