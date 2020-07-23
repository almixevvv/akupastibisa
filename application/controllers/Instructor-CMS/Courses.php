<?php if (!defined("BASEPATH")) exit("Hack Attempt");
class Courses extends CI_Controller
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
        if ($this->input->get('id') != null) {
            $data['courseList'] = $this->courses->getInstructorCourse($this->input->get('id'));
        } else {
            $data['courseList'] = $this->courses->getAllCourse();
        }

        $this->load->view('templates-instructor/header');
        $this->load->view('pages-instructor/courseList', $data);
        $this->load->view('templates-instructor/footer');
    }

    function addCourse()
    {
        $this->load->view('templates-instructor/header');
        $this->load->view('pages-instructor/addCourse');
        $this->load->view('templates-instructor/footer');
    }
}
