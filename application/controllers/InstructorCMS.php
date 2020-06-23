<?php if (!defined("BASEPATH")) exit("Hack Attempt");
class InstructorCMS extends CI_Controller
{

    function __construct()
    {
        parent::__construct(true);
        // $this->output->enable_profiler(TRUE);
        $this->load->model('M_profile', 'profile');
        $this->load->model('M_cms', 'cms');
    }

    function index()
    {
        $this->load->view('templates-instructor/header');
        $this->load->view('templates-instructor/navbar');
        $this->load->view('pages-instructor/dashboard');
        $this->load->view('templates-instructor/footer');
    }

    function dashboard()
    {
        $this->load->view('templates-instructor/header');
        $this->load->view('pages-instructor/dashboard');
        $this->load->view('templates-instructor/footer');
        // if (!$this->session->has_userdata('instructor_detail')) {
        //     redirect('instruktur/cms/login');
        // } else {
        //     echo 'dashboard';
        // }
    }

    function login()
    {
        $this->load->view('pages-instructor/login');
    }

    function loginProcess()
    {
        $this->load->view('templates-instructor/header');
        $this->load->view('templates-instructor/navbar');
        $this->load->view('pages-instructor/dashboard');
        $this->load->view('templates-instructor/footer');
    }
}
