<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('main/tampil_admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Blog</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('blog/tampil_addblog') ?>">Add Blog</a>
            <a class="dropdown-item" href="admin_blog.php">List Blog</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'editor' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Editor</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php $this->load->view('admin/_partials/editor/form_addeditor.php') ?>">New Editor</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/products') ?>">List Editor</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'editor' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Komentar</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/blog/add') ?>">New Komentar</a>
            <a class="dropdown-item" href="<?php echo site_url('main_tampil') ?>">List Komentar</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-users"></i>
            <span>Editor</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span></a>
    </li>
</ul>