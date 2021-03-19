<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item border-bottom <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('main/tampil_admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span class="h3">Dashboard</span>
        </a>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span class="h5">Blog</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('blog/tambah') ?>">Add Blog</a>
            <a class="dropdown-item" href="<?php echo site_url('main/tampil_admin_blog') ?>">List Blog</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'editor' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesD     ropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span class="h5">Editor</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('editor/tambah') ?>">New Editor</a>
            <a class="dropdown-item" href="<?php echo site_url('main/tampil_admin_editor') ?>">List Editor</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'editor' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span class="h5">Komentar</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('komentar/tambah') ?>">New Komentar</a>
            <a class="dropdown-item" href="<?php echo site_url('main/tampil_admin_komentar') ?>">List Komentar</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('main/tampil_admin_settings') ?>">
            <i class="fas fa-fw fa-cog"></i>
            <span class="h5">Settings</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn btn-outline-danger" href="<?php echo site_url('main/login') ?>">
            <i class="fas fa-fw fa-cog"></i>
            <span class="h5">Logout</span>
        </a>
    </li>
</ul>