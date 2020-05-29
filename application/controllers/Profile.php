<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    function __construct()
    {
        parent::__construct(true);
        // $this->output->enable_profiler(TRUE);
        $this->load->model('M_profile', 'profile');
    }

    function index()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/account/login');
    }

    function editProfile()
    {
        echo 'masuk ke edit';
    }

    function editClass()
    {
        echo 'masuk ke kelas';
    }

    function helpDesk()
    {
        echo 'masuk ke help desk';
    }
}
