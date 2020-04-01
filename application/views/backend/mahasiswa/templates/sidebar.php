<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('backend/mahasiswa/dashboard'); ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-inbox"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SIM Magang</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('backend/mahasiswa/dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Instrumen
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('backend/mahasiswa/mahasiswa'); ?>">
            <i class="fas fa-fw fa-user-graduate"></i>
            <span>Mahasiswa</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('backend/mahasiswa/kinerja'); ?>">
            <i class="fas fa-fw fa-clipboard-check"></i>
            <span>Kinerja Mahasiswa</span></a>
    </li>



  
   

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->