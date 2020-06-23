<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php $this->load->view('templates-instructor/sidebar'); ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                <?php $this->load->view('templates-instructor/navbar'); ?>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <hr>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-12">
                            <h5>Selamat datang, <?php echo ($this->session->userdata('user_data')['role'] == 'INSTRUCTOR' ? $this->session->userdata('user_data')['name'] : ' '); ?></h5>
                            <p>Data diri Anda belum lengkap. </br> Silahkan lengkapi data diri Anda terlebih dahulu sebelum menambahkan kursus <a href="#">disini</a> </p>
                        </div>
                    </div>

                </div>
            </div>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Akupastibisa <script type="text/javascript">
                                document.write(new Date().getFullYear());
                            </script></span>
                    </div>
                </div>
            </footer>

        </div>
    </div>