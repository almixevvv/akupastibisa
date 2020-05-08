<body>

    <style>
        .navbar-categories h2 {
            font-size: 1rem;
            color: white;
        }

        .akb-navbar {
            margin-left: 3.5em;
            margin-right: 3.5em;
        }

        #header-shopping-cart {
            padding-top: 1.8em;
        }

        #header-categories>a {
            color: #fff;
        }

        #header-articles>a {
            color: #fff;
        }

        #header-prakerja>a {
            color: #fff;
        }

        #header-shopping-cart>a {
            color: #fff;
            border-left: white solid 1px;
            padding-left: 1em;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #header-search-box {
            width: 44%;
        }

        #header-signup>a {
            color: #00c5dd;
        }

        #category-image {
            width: 11%;
            margin-right: 0.3rem;
            padding-bottom: 3px;
        }

        #navbar-flag {
            width: 2rem;
            margin-right: 5rem;
            padding-top: 0.5rem;
        }

        .main_menu {
            margin-top: -2rem;
        }

        #categoryDropdown {
            color: white;
        }
    </style>

    <header class="header_area">
        <div class="upper-menu">
            <div class="d-flex justify-content-end">
                <img src="<?php echo base_url('assets/img/indo-flag.png'); ?>" alt="Indonesian Flag" id="navbar-flag">
            </div>
        </div>
        <div class="main_menu">
            <nav class="akb-navbar navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand logo_h mr-0" href="<?php echo base_url(); ?>">
                    <img id="navbar-images" src="<?php echo base_url('assets/img/logo.png'); ?>" alt="Akupastibisa Logo" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav w-100">
                        <li class="nav-item" id="header-search-box">
                            <div class="input-group pt-4">
                                <input type="text" class="form-control" id="searchBox" placeholder="Mau bisa apa Anda hari ini?" aria-describedby="searchBox">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="searchBox">
                                        <i class="ti-search"></i>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item mr-0" id="header-categories">
                            <div class="dropdown">
                                <a id="categoryDropdown" class="nav-link text-uppercase dropdown-toggle" href="<?php echo base_url('home'); ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,0">
                                    <img id="category-image" src="<?php echo base_url('assets/img/ico-resiet.png'); ?>" alt="Category Icon">
                                    Kategori
                                </a>
                                <div class="dropdown-menu" aria-labelledby="categoryDropdown">
                                    <?php
                                    $categoryQuery = $this->courses->navbarCategory();
                                    foreach ($categoryQuery->result() as $categories) {
                                    ?>
                                        <a class="dropdown-item" href="<?php echo base_url('courses/list/' . $categories->CATEGORY_URL); ?>">
                                            <div class="d-flex justify-content-between"><?php echo $categories->CATEGORY_NAME; ?> <i class="pt-1 ml-3 ti-angle-right"></i></div>
                                        </a>
                                    <?php  } ?>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item mr-4" id="header-prakerja">
                            <a class="nav-link text-uppercase" href="<?php echo base_url('home'); ?>">Kartu Prakerja</a>
                        </li>
                        <li class="nav-item mr-4" id="header-articles">
                            <a class="nav-link text-uppercase" href="<?php echo base_url('home'); ?>">Artikel</a>
                        </li>
                        <li class="nav-item" id="header-shopping-cart">
                            <a href="#" id="shopping-cart-separator">
                                <span class="mr-2">0</span>
                                <i class="ti-shopping-cart"></i>
                            </a>
                        </li>
                        <?php
                        $loginStatus = $this->session->userdata('user_data');
                        $firstName = explode(" ", $loginStatus['name']);
                        ?>
                        <?php if ($loginStatus['logged_in'] == true) { ?>
                            <li class="nav-item" id="header-signup">
                                <a class="nav-link text-uppercase" href="#">Hi, <?php echo $firstName[0]; ?></a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item" id="header-signup">
                                <a class="nav-link text-uppercase" href="<?php echo base_url('login'); ?>">LOGIN</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
        </div>
        </nav>
        </div>
    </header>