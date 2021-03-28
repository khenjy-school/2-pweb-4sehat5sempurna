<!doctype html>
<html lang="en">
  <body>
      <div class="container-fluid">
        <div class="row">
          <main role="main" class="col-md-5 mx-md-auto px-md-4">
            <div class="card m-md-3">
              <div class ="card-header pt-md-5 border-bottom">
                  <h1 class="text-center"><?php echo $header1; ?></h1>
              </div>
              <div class="card-body">
                <?php $this->load->view('admin/_partials/admin/form_login.php') ?>
              </div>
              </div>
          </main>
        </div>
      </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  

  </body>
</html>