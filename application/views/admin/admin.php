<!doctype html>
<html lang="en">
  <head>
    <?php $this->load->view('admin/_partials/head') ?>
    <title>Admin</title>
  </head>
  <body>
  
      <?php $this->load->view('admin/_partials/navbar.php') ?>

      <div id="wrapper">
        <?php $this->load->view('admin/_partials/sidebar.php') ?>
        <div id="content-wrapper">
          <div class="container-fluid">
              <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class ="row">
                  <div class="col-md pt-md-5 mb-md-3 border-bottom">
                    <div class="row">
                      <div class="col-md-auto my-auto">
                        <span class="h1">Dashboard</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-11 border-bottom">
                    Keterangan : halaman ini memuat data-data umum seputar 4 sehat 5 sempurna
                  </div>
                </div>
                <div class="row">
                  <div class="col-md">
                    <?php $this->load->view('admin/_partials/footer.php') ?>
                  </div>
                </div>
              </main>
            </div>
          </div>
        </div>
  
      


 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  

  </body>
</html>