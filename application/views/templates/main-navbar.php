<header class="header_area white-header">
    <div class="main_menu">
        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between" method="" action="#">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here" />
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">

                <a style="width: 55%;" class="navbar-brand" href="<?php echo base_url(); ?>">
                    <img style="width: 50%;" class="logo-2" src="<?php echo base_url('assets/img/logo.png'); ?>" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span> <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url('aboutus'); ?>">About</a>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('courses'); ?>">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('coursesdetail'); ?>">Course Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('elements'); ?>">Elements</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('blog'); ?>">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('blogdetail'); ?>">Blog Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('contact'); ?>">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link search" id="search">
                                <i class="ti-search"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>