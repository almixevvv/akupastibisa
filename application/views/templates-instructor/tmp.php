    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon">
                <img src="<?php echo base_url('assets/img/favicon.png'); ?>" alt="Akupastibisa Logo" />
            </div>
            <div class="sidebar-brand-text mx-3">Instruktur CMS</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Manajemen Kursus
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCourse" aria-expanded="true" aria-controls="collapseCourse">
                <i class="fas fa-fw fa-cog"></i>
                <span>Kursus</span>
            </a>
            <div id="collapseCourse" class="collapse" aria-labelledby="collapseCourse" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?php echo base_url('instruktur/cms/courses?id=' . $this->session->userdata('user_data')['id']); ?>"">Kursus Saya</a>
                    <a class=" collapse-item" href="<?php echo base_url('instruktur/cms/courses/add'); ?>"">Tambah Kursus</a>
                    <a class=" collapse-item" href="<?php echo base_url('instruktur/cms/courses'); ?>"">Pengaturan Kursus</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class=" nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategories" aria-expanded="true" aria-controls="collapseCategories">
                            <i class="fas fa-fw fa-wrench"></i>
                            <span>Pengaturan Profil</span>
                        </a>
                        <div id="collapseCategories" class="collapse" aria-labelledby="collapseCategories" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item" href="utilities-color.html">Data diri</a>
                            </div>
                        </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Manajemen Member
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="far fa-address-book"></i>
                <span>Member</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="login.html">Semua Member</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->