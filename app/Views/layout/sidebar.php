<link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
<link href="<?php echo base_url('css/sb-admin-2.min.css') ?> " rel="stylesheet">

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('dashboard') ?>">

                <div class="sidebar-brand-text mx-3"> </div>

            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php echo base_url(['kandang']) ?>">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-warehouse"></i>
                    <span>Data kandang</span>
                </a>
                <div id="collapseTwo" class="collapse <?php echo base_url(['kandang', 'kandang']) ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item <?php echo base_url('kandang') ?>" href="<?php echo site_url('kandang'); ?>">Tambah data</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item <?php echo base_url(['datatelur']) ?>">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-database"></i>
                    <span>Data Telur dan Vitamin</span>
                </a>
                <div id="collapsefour" class="collapse  aria-labelledby=" headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item <?php echo base_url('datatelur') ?>" href="<?php echo site_url('datatelur'); ?>">Tambah data telur</a>
                        <a class="collapse-item <?php echo base_url('datavitamin') ?>" href="<?php echo site_url('datavitamin'); ?>">Tambah data vitamin</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item <?php echo base_url(['laporan']) ?>">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsesix" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-file-alt"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapsesix" class="collapse <?php echo base_url(['laporan', 'laporan']) ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item <?php echo base_url('laporan') ?>" href="<?php echo site_url('laporan'); ?>">Data laporan</a>
                    </div>
                </div>
            </li>
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>