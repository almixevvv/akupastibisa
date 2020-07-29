<?php if (!defined("BASEPATH")) exit("Hack Attempt");
class Courses extends CI_Controller
{

    function __construct()
    {
        parent::__construct(true);
        // $this->output->enable_profiler(TRUE);
    }

    function index()
    {
        if ($this->input->get('id') != null) {
            $data['courseList'] = $this->courses->getInstructorCourse($this->input->get('id'));
        } else {
            $data['courseList'] = $this->courses->getAllCourse();
        }

        $data['recNo'] = 1;

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

    function addNewCourse()
    {
        header('Content-Type: application/json');

        $formatName = strtolower($this->input->post('courseName'));
        $formatName = str_replace(' ', '-', $formatName);;

        $formatPrice = str_replace(',', '', $this->input->post('coursePrice'));

        $wygArray = explode(',', $this->input->post('courseWYG'));
        $categoryArray = explode(',', $this->input->post('courseCategory'));

        $data = array(
            'COURSE_ID'             => $formatName,
            'COURSE_NAME'           => $this->input->post('courseName'),
            'COURSE_DESCRIPTION'    => $this->input->post('courseDesc'),
            'COURSE_PRICE'          => $formatPrice,
            'COURSE_IMAGE'          => 'assets/img/courses/' . $this->input->post('fileName'),
            'COURSE_REQUIREMENT'    => $this->input->post('courseReq'),
            'COURSE_TRAINER_ID'     => $this->session->userdata('user_data')['id'],
            'COURSE_CATEGORY_ID'    => $categoryArray[0],
            'COURSE_STATUS'         => 'INACTIVE'
        );

        $queryCourse = $this->courses->postCourses($data);

        foreach ($wygArray as $key => $value) {
            $wygData = array(
                'COURSE_ID' => $formatName,
                'TAG'       => $value
            );

            $queryWYG = $this->courses->postCourseWYG($wygData);
        }

        foreach ($categoryArray as $key => $value) {
            $ctgData = array(
                'COURSE_ID'     => $formatName,
                'RELATED_TAG'   => $value
            );

            $queryCTG = $this->courses->postCourseRelated($ctgData);
        }

        if ($queryCourse && $queryCTG && $queryWYG) {
            $msg = array(
                'status'    => 200,
                'message'   => 'course created',
                'code'      => 200
            );
        } else {
            $msg = array(
                'status'    => 200,
                'message'   => 'error while creating course',
                'code'      => 501
            );
        }

        echo json_encode($msg);
    }
}
