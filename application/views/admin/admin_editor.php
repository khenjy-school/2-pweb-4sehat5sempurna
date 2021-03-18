<!doctype html>
<html lang="en">
  <head>
    <?php $this->load->view('admin/_partials/head.html') ?>

    <title>Admin - Editor</title>
  </head>
  <body>
      <?php $this->load->view('admin/_partials/navbar.php') ?>

      <div class="container-fluid">
        <div class="row">
          <?php $this->load->view('admin/_partials/sidebar.php') ?>
          <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class ="row">
              <div class="col-md pt-md-2 pt-md-3 mb-md-3 border-bottom">
                <div class="row">
                  <div class="col-md-auto my-auto">
                    <span class="h1">Editor</span>
                  </div>
                  <div class="col-md-auto my-auto">
                    <a class="btn btn-success" href="<?php echo site_url('editor/tampil_addeditor'); ?>" name="btntambah">TAMBAH +</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-11 border-bottom">
                <?php $this->load->view('admin/_partials/editor/tabel_editor.php') ?>
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



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  

  </body>
</html>