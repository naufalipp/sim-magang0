<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('backend/admin/dashboard'); ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-inbox"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SIM Magang</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('backend/admin/dashboard'); ?>">
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
        <a class="nav-link" href="<?= base_url('backend/admin/pembimbing'); ?>">
            <i class="fas fa-fw fa-chalkboard-teacher"></i>
            <span>Pembimbing</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('backend/admin/mahasiswa'); ?>">
            <i class="fas fa-fw fa-user-graduate"></i>
            <span>Mahasiswa</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('backend/admin/kinerja') ?>">
            <i class="fas fa-fw fa-clipboard-check"></i>
            <span>Kinerja Mahasiswa</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Referensi
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('backend/admin/referensi/universitas'); ?>">
            <i class="fas fa-fw fa-university"></i>
            <span>Universitas</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('backend/admin/referensi/role'); ?>">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Role</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('backend/admin/referensi/jabatan'); ?>">
            <i class="fas fa-fw fa-layer-group"></i>
            <span>Jabatan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->