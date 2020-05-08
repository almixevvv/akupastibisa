<?php if (!defined("BASEPATH")) exit("Hack Attempt");

class Footer extends CI_Controller

{
    function __construct()
    {
        parent::__construct(true);
        $this->load->model('M_cms', 'cms');
    }

    function faq()
    {
        $data['pageTitle'] = 'asd';
        $data['faq'] = $this->cms->select_footer_faq();

        $this->load->view('templates/header');
        $this->load->view('templates/main-navbar');
        $this->load->view('pages/footer/faq', $data);
        $this->load->view('templates/footer');
    }

    function aboutus()
    {
        $data['pageTitle'] = 'asd';
        $data['about_footer'] = $this->cms->select_footer_about();

        $this->load->view('templates/header');
        $this->load->view('templates/home-navbar');
        $this->load->view('pages/footer/aboutus', $data);
        $this->load->view('templates/footer');
    }

    function privacy()
    {
        $data['pageTitle'] = 'asd';
        $data['privacy'] = $this->cms->select_footer_privacy();

        $this->load->view('templates/header');
        $this->load->view('templates/main-navbar');
        $this->load->view('pages/footer/privacy', $data);
        $this->load->view('templates/footer');
    }

    function terms()
    {
        $data['pageTitle'] = 'asd';
        $data['terms'] = $this->cms->select_footer_terms();

        $this->load->view('templates/header');
        $this->load->view('templates/main-navbar');
        $this->load->view('pages/footer/terms', $data);
        $this->load->view('templates/footer');
    }
}
