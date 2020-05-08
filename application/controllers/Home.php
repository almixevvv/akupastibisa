<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct(true);
        // $this->output->enable_profiler(TRUE);
        $this->load->model('M_courses', 'courses');
    }


    public function index()
    {
        $data['topCourses'] = $this->courses->topCourse();
        $data['topTrainer'] = $this->courses->topTrainer();

        $this->load->view('templates/header');
        $this->load->view('templates/home-navbar');
        $this->load->view('pages/home/home', $data);
        $this->load->view('templates/footer');
    }

    public function courses()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/main-navbar');
        $this->load->view('pages/courses');
        $this->load->view('templates/footer');
    }

    public function coursesdetail()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/main-navbar');
        $this->load->view('pages/coursesdetail');
        $this->load->view('templates/footer');
    }

    public function elements()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/main-navbar');
        $this->load->view('pages/element');
        $this->load->view('templates/footer');
    }

    public function blog()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/home-navbar');
        $this->load->view('pages/blog');
        $this->load->view('templates/footer');
    }

    public function blogdetail()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/main-navbar');
        $this->load->view('pages/blogdetail');
        $this->load->view('templates/footer');
    }

    /* Footer Section */
    public function faq()
    {
        $data['content'] = $this->footer->footerDetail('faq');

        $this->load->view('templates/header');
        $this->load->view('templates/home-navbar');
        $this->load->view('pages/footer/footer_pages', $data);
        $this->load->view('templates/footer');
    }

    public function aboutUs()
    {
        $data['content'] = $this->footer->footerDetail('about-us');

        $this->load->view('templates/header');
        $this->load->view('templates/home-navbar');
        $this->load->view('pages/footer/footer_pages', $data);
        $this->load->view('templates/footer');
    }

    public function privacy()
    {
        $data['content'] = $this->footer->footerDetail('privacy');

        $this->load->view('templates/header');
        $this->load->view('templates/home-navbar');
        $this->load->view('pages/footer/footer_pages', $data);
        $this->load->view('templates/footer');
    }

    public function terms()
    {
        $data['content'] = $this->footer->footerDetail('terms');

        $this->load->view('templates/header');
        $this->load->view('templates/home-navbar');
        $this->load->view('pages/footer/footer_pages', $data);
        $this->load->view('templates/footer');
    }

    public function pencari_kerja()
    {
        $data['content'] = $this->footer->footerDetail('pencari-kerja');

        $this->load->view('templates/header');
        $this->load->view('templates/home-navbar');
        $this->load->view('pages/footer/footer_pages', $data);
        $this->load->view('templates/footer');
    }

    public function umkm()
    {
        $data['content'] = $this->footer->footerDetail('umkm');

        $this->load->view('templates/header');
        $this->load->view('templates/home-navbar');
        $this->load->view('pages/footer/footer_pages', $data);
        $this->load->view('templates/footer');
    }

    public function ojek_online()
    {
        $data['content'] = $this->footer->footerDetail('ojek-online');

        $this->load->view('templates/header');
        $this->load->view('templates/home-navbar');
        $this->load->view('pages/footer/footer_pages', $data);
        $this->load->view('templates/footer');
    }

    public function industri_pariwisata()
    {
        $data['content'] = $this->footer->footerDetail('industri-pariwisata');

        $this->load->view('templates/header');
        $this->load->view('templates/home-navbar');
        $this->load->view('pages/footer/footer_pages', $data);
        $this->load->view('templates/footer');
    }
    /* END OF FOOTER SECTION */
}
