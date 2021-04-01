<nav class="navbar navbar-expand-md navbar-light" style="background-color: #A8F584;">
    <a class="navbar-brand" href="<?php echo site_url('main/tampil_home'); ?>" >
        <img src="<?php echo base_url("assets/img/brand/brand.jpg") ?>" alt="" srcset="" style="height: 40px;">
    </a>
    <button class="btn btn-link navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" style="background-color: #a8f584;">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 mr-sm-2" type="submit">Search</button>
            <div class="btn-group">
  <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Akun
  </a>

  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="<?php echo site_url('main/tampil_admin_data') ?>">Akun</a>
    <a class="dropdown-item" href="<?php echo site_url('main/login') ?>">Logout</a>
  </div>
</div>
        </form>
    </div>
    
</nav>