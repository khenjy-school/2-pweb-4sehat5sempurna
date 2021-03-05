<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS Online -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--Bootstrap CSS Offline-->
    <!--<link rel="stylesheet" href="cssbotstrap/botstrap.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">--> 


    <title>Admin</title>
  </head>
  <body>
      <?php $this->load->view('admin/_partials/headeradm.php') ?>

    <div class="container">
      <div class="row">

        <!--Navigasi Admin-->
        <div class="col-md-2">
          <div class="row">
            logo 4 sehat 5 sempurna
          </div>
          <div class="row">
            dashboard
          </div>
          <div class="row">
            Daftar Editor
          </div>
          <div class="row">
            Jumlah Blog
          </div>
          <div class="row">
            Jumlah Viewer
          </div>
          <div class="row">
            Jumlah Komentar
          </div>
        </div>

        <!--Isi Konten-->
        <div class="col-md-10">

          <!--Barisan atas untuk search-->
          <div class="row">
            <div class="form-inline">
              
            </div>
          </div>

          <div>
        </div>

          <!--Barisan bawah untuk background-->
          <div class="row">
            <!--Barisan isi untuk daftar-->
            <div class="row">

              <!--Daftar barisan 1-->
              <div class="col">

                <!--Jumlah Editor-->
                <div class="card">
                  <h2>Jumlah Editor</h2>
                  <span></span>
                </div>

                <!--Jumlah Komentar-->
                <div class="card">
                  <h2>Jumlah Komentar</h2>
                  <span></span>
                </div>
              </div>

              <!--Daftar barisan 2-->
              <div class="col">
                <!--Jumlah Blog-->
                <div class="card">
                  <h2>Jumlah Blog</h2>
                  <span></span>
                </div>
              </div>

              <!--Daftar barisan 3-->
              <div class="col">
                <!--Jumlah Viewer-->
                <div class="card">
                  <h2>Jumlah Viewer</h2>
                  <span></span>
                </div>
              </div>

            </div>

            <!--Barisan isi untuk lainnya-->
            <div class="row">
              <div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <?php $this->load->view('admin/_partials/footeradm.php') ?>







 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  

  </body>
</html>