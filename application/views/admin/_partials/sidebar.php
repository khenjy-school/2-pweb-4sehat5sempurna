<!-- Sidebar -->
<nav class="navbar-fixed-top">
    <ul class="nav flex-column" id="">
        <li class="nav-item border-bottom sidebar">
            <a class="nav-link" href="<?php echo site_url('main/tampil_admin') ?>">
                <span class="h4">Dashboard</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link dropdown-toggle h5 text-decoration-none" 
            href="#collapseBlog" role="button" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseBlog">
                Blog
            </a>
            <ul class="collapse" id="collapseBlog">
                <li class="nav">
                    <a href="<?php echo site_url('blog/tambah') ?>">Add Blog</a>
                </li>
                <li class="nav">
                    <a href="<?php echo site_url('main/tampil_admin_blog') ?>">List Blog</a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link dropdown-toggle h5 text-decoration-none"
            href="#collapseEditor" role="button" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseEditor">
                Editor
            </a>
            <ul class="collapse" id="collapseEditor">
                <li class="nav">
                    <a href="<?php echo site_url('editor/tambah') ?>">Add Editor</a>
                </li>
                <li class="nav">
                    <a href="<?php echo site_url('main/tampil_admin_editor') ?>">List Editor</a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link dropdown-toggle h5 text-decoration-none" 
            href="#collapseKomentar" role="button" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseKomentar">
                Komentar
            </a>
            <ul class="collapse" id="collapseKomentar">
                <li class="nav">
                    <a href="<?php echo site_url('komentar/tambah') ?>">Add Komentar</a>
                </li>
                <li class="nav">
                    <a href="<?php echo site_url('main/tampil_admin_komentar') ?>">List Komentar</a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link h5 text-decoration-none" 
            href="<?php echo site_url('main/tampil_admin_data') ?>">
                Admin
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link h5 text-decoration-none" 
            href="<?php echo site_url('main/tampil_admin_settings') ?>">
                Settings
            </a>
        </li>
    </ul>
</nav>