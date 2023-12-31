<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= url_to('dashboard') ?>" class="brand-link">
        <img src="<?= base_url('assets'); ?>/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin LTE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-header">Menu</li>
                <li class="nav-item">
                    <a href="<?= url_to('dashboard') ?>" class="nav-link">
                        <i class="fas fa-home nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('book') ?>" class="nav-link">
                        <i class="fas fa-book nav-icon"></i>
                        <p>Books</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('sewa_buku') ?>" class="nav-link">
                        <i class="fas fa-book-open nav-icon"></i>
                        <p>Sewa Buku</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('film') ?>" class="nav-link">
                        <i class="fas fa-film nav-icon"></i>
                        <p>Film</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('genre') ?>" class="nav-link">
                        <i class="fas fa-meteor nav-icon"></i>
                        <p>Genre</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('sewa_film') ?>" class="nav-link">
                        <i class="fas fa-file-video  nav-icon"></i>
                        <p>Sewa Film</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('food') ?>" class="nav-link">
                        <i class="fas fa-pizza-slice nav-icon"></i>
                        <p>Food</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>