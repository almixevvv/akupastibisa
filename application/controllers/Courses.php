<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Courses extends CI_Controller
{
    function __construct()
    {
        parent::__construct(true);
        $this->output->enable_profiler(TRUE);
        $this->load->model('M_courses', 'courses');
    }

    function index()
    {
        $courseID = $this->uri->segment(3, 0);

        $data['courseDetail']  = $this->courses->getSingleCourse($courseID);
        $data['courseContent'] = $this->courses->getCourseContentTitle($courseID);
        $data['courseData']    = $this->courses->getCourseContentTotal($courseID);

        $this->load->view('templates/header');
        $this->load->view('templates/home-navbar');
        $this->load->view('pages/courses/coursesdetail', $data);
        $this->load->view('templates/footer');
    }

    function coursesList()
    {
        $courseID = $this->uri->segment(3, 0);

        // echo 'masuk kesini';
        $data['courseDetail'] = $this->courses->getCoursesList($courseID);
        $data['courseList'] = $this->courses->getCourseFromUrl($courseID);
        $data['topCourse']  = $this->courses->getCurrentTopCourse($courseID);

        $this->load->view('templates/header');
        $this->load->view('templates/home-navbar');
        $this->load->view('pages/courses/courses', $data);
        $this->load->view('templates/footer');
    }

    function searchCourses()
    {

        $searchQuery = $this->input->get('query');

        $data['courseList'] = $this->courses->searchCourse($searchQuery);

        $this->load->view('templates/header');
        $this->load->view('templates/home-navbar');
        $this->load->view('pages/courses/coursesSearch', $data);
        $this->load->view('templates/footer');
    }
}
