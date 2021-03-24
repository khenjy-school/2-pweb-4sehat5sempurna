<!-- Sidebar -->
<div class="sidebar" id="navbarNav">
    <div class="nav-item dropdown border-bottom sidebar">
        <a class="nav-link" href="<?php echo site_url('main/tampil_admin') ?>">
            <span class="h3">Dashboard</span>
        </a>
    </div>
    
    <div class="nav-item dropdown sidebar">
        <a class="nav-link dropdown-toggle" href="#" role="button" id="pagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="h5">Blog</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('blog/tambah') ?>">Add Blog</a>
            <a class="dropdown-item" href="<?php echo site_url('main/tampil_admin_blog') ?>">List Blog</a>
        </div>
    </div>

    <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" id="pagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="h5">Editor</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('editor/tambah') ?>">Add Editor</a>
            <a class="dropdown-item" href="<?php echo site_url('main/tampil_admin_editor') ?>">List Editor</a>
        </div>
    </div>

    <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" id="pagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="h5">Komentar</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('komentar/tambah') ?>">Add Komentar</a>
            <a class="dropdown-item" href="<?php echo site_url('main/tampil_admin_komentar') ?>">List Komentar</a>
        </div>
    </div>

    <div class="nav-item dropdown">
        <a class="nav-link" href="<?php echo site_url('main/tampil_admin_settings') ?>">
            <span class="h3">Settings</span>
        </a>
    </div>

    <div class="nav-item dropdown">
        <a class="nav-link btn btn-outline-danger" href="<?php echo site_url('main/login') ?>">
            <span class="h3">LOGOUT</span>
        </a>
    </div>
</div>