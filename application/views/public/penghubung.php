<!doctype html>
<html lang="en">
<body>


  <!--Isi-->
  <div class="container" style="margin-top: 100px;">
    <div class="row">
      <div class="col-md-9">
        <div class="container">
          <div class="row">
              <div class=" col-md-2">
                <h2>Blogs</h2>
            </div>
        </div>
        <div class="row">
          <div class=" col-md-4">
            <h5>Semua Blog Terbaru</h5>
        </div>
        <div class="col-md-3 offset-md-5 dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
              Urutkan
          </button>
          <div class=" dropdown-menu dropdown-menu-right">
            <a class=" dropdown-item" href="#">Terbaru</a>
            <a class=" dropdown-item" href="#">Terlama</a>
        </div>
    </div>
    
</div>
<?php $this->load->view('public/_partials/list_article') ?>
</div>
</div>
<?php $this->load->view('public/_partials/navigation_article2') ?>
</div>
</div>    

<?php $this->load->view('public/_partials/footer.php') ?>   

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>
</html>