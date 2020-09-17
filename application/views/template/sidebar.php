<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon ">
                    <i class="fas fa-hospital"></i>
                </div>
                <div class="sidebar-brand-text mx-3">RSU Praya</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-universal-access"></i>
                    <span>Visual Data</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#master" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-download"></i>
                    <span>Master Import</span>
                </a>
                <div id="master" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <a class="collapse-item" href="<?= site_url('importdb') ?>">Master Import </a> -->
                        <h6 class="collapse-header">Rawat Inap</h6>
                        <a class="collapse-item" href="<?= site_url('importdb/ripasien') ?>">RI Pasien</a>
                        <a class="collapse-item" href="<?= site_url('importdb/ribayar') ?>">RI Pembayaran</a>
                        <a class="collapse-item" href="<?= site_url('importdb/rikelas') ?>">RI Kelas</a>
                        <a class="collapse-item" href="<?= site_url('importdb/ripoli') ?>">RI Poli</a>
                        <a class="collapse-item" href="<?= site_url('importdb/riruang') ?>">RI Ruangan</a>
                        <a class="collapse-item" href="<?= site_url('importdb/riwaktu') ?>">RI Waktu</a>
                        <h6 class="collapse-header">Rawat Jalan</h6>
                        <a class="collapse-item" href="<?= site_url('importdb/rjalamat') ?>">RJ Alamat</a>
                        <a class="collapse-item" href="<?= site_url('importdb/rjcarabayar') ?>">RJ Pembayaran</a>
                        <a class="collapse-item" href="<?= site_url('importdb/rjpasien') ?>">RJ Pasien</a>
                        <a class="collapse-item" href="<?= site_url('importdb/rjpoli') ?>">RJ Poli</a>
                        <a class="collapse-item" href="<?= site_url('importdb/rjtanggal') ?>">RJ Tanggal</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Log Out</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->