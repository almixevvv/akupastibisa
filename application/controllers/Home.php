<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct(true);
        // $this->output->enable_profiler(TRUE);
        $this->load->model('M_courses', 'courses');
        $this->load->model('M_quotes', 'quotes');
        $this->load->model('M_artikel', 'artikel');
        $this->load->model('M_cms', 'cms');
    }


    public function index()
    {
        $data['topCourses'] = $this->courses->topCourse();
        $data['topTrainer'] = $this->courses->topTrainer();
        $data['randomQuotes'] = $this->quotes->randomQuotes();
        $data['randomQuotes1'] = $this->quotes->randomQuotes();

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

    public function kartu_prakerja()
    {
        $data['randomQuotes'] = $this->quotes->randomQuotes();
        $this->load->view('templates/header');
        $this->load->view('templates/home-navbar');
        $this->load->view('pages/kartu_prakerja',$data);
        $this->load->view('templates/footer');
    }

    public function artikel()
    {
        // $this->output->enable_profiler(TRUE);
        $artikelID = $this->uri->segment(2, 0);
        $data['artikel'] = $this->artikel->artikel($artikelID);
        $data['artikel_all'] = $this->artikel->artikel_all($artikelID);
        $data['randomQuotes'] = $this->quotes->randomQuotes();

        // echo $artikelID;
        $this->load->view('templates/header');
        $this->load->view('templates/home-navbar');
        $this->load->view('pages/artikel',$data);
        $this->load->view('templates/footer');
        // echo "masuk";
    }

    /* Footer Section */
    public function faq()
    {
        $data['content'] = $this->footer->footerDetail('faq');
        $data['randomQuotes'] = $this->quotes->randomQuotes();

        $this->load->view('templates/header');
        $this->load->view('templates/home-navbar');
        $this->load->view('pages/footer/footer_pages', $data);
        $this->load->view('templates/footer');
    }

    public function aboutUs()
    {
        $data['content'] = $this->footer->footerDetail('about-us');
        $data['randomQuotes'] = $this->quotes->randomQuotes();

        $this->load->view('templates/header');
        $this->load->view('templates/home-navbar');
        $this->load->view('pages/footer/footer_pages', $data);
        $this->load->view('templates/footer');
    }

    public function privacy()
    {
        $data['content'] = $this->footer->footerDetail('privacy');
        $data['randomQuotes'] = $this->quotes->randomQuotes();

        $this->load->view('templates/header');
        $this->load->view('templates/home-navbar');
        $this->load->view('pages/footer/footer_pages', $data);
        $this->load->view('templates/footer');
    }

    public function terms()
    {
        $data['content'] = $this->footer->footerDetail('terms');
        $data['randomQuotes'] = $this->quotes->randomQuotes();

        $this->load->view('templates/header');
        $this->load->view('templates/home-navbar');
        $this->load->view('pages/footer/footer_pages', $data);
        $this->load->view('templates/footer');
    }

    public function pencari_kerja()
    {
        $data['content'] = $this->footer->footerDetail('pencari-kerja');
        $data['randomQuotes'] = $this->quotes->randomQuotes();

        $this->load->view('templates/header');
        $this->load->view('templates/home-navbar');
        $this->load->view('pages/footer/footer_pages', $data);
        $this->load->view('templates/footer');
    }

    public function umkm()
    {
        $data['content'] = $this->footer->footerDetail('umkm');
        $data['randomQuotes'] = $this->quotes->randomQuotes();

        $this->load->view('templates/header');
        $this->load->view('templates/home-navbar');
        $this->load->view('pages/footer/footer_pages', $data);
        $this->load->view('templates/footer');
    }

    public function ojek_online()
    {
        $data['content'] = $this->footer->footerDetail('ojek-online');
        $data['randomQuotes'] = $this->quotes->randomQuotes();

        $this->load->view('templates/header');
        $this->load->view('templates/home-navbar');
        $this->load->view('pages/footer/footer_pages', $data);
        $this->load->view('templates/footer');
    }

    public function industri_pariwisata()
    {
        $data['content'] = $this->footer->footerDetail('industri-pariwisata');
        $data['randomQuotes'] = $this->quotes->randomQuotes();

        $this->load->view('templates/header');
        $this->load->view('templates/home-navbar');
        $this->load->view('pages/footer/footer_pages', $data);
        $this->load->view('templates/footer');
    }

    public function addNewsLetter()
    {
        $email = $this->input->post('newsletter_email');

        $data = array(
            'EMAIL' => $email
        );

        $this->cms->insert_newsletter($data);

        // echo "masuk";

        redirect('contact');
    }
    /* END OF FOOTER SECTION */
}
