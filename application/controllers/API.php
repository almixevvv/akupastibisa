<?php if (!defined("BASEPATH")) exit("Hack Attempt");

class API extends CI_Controller
{

    function __construct()
    {
        parent::__construct(true);
        // $this->output->enable_profiler(TRUE);
        $this->load->model('M_profile', 'profile');
        $this->load->model('M_courses', 'courses');

        header('Content-Type: application/json');
    }

    function checkEmail()
    {
        $this->incube->getSecureKey();

        $email = $this->input->get('email');

        $queryEmail = $this->profile->checkTrainerEmail($email);



        if ($queryEmail->num_rows() > 0) {
            echo json_encode(array(
                'status'    => 200,
                'message'   => 'data exist',
                'code'      => 200
            ));
        } else {
            echo json_encode(array(
                'status'    => 200,
                'message'   => 'data doesnt exist',
                'code'      => 404
            ));
        }
    }

    function getWYG()
    {


        if ($this->incube->getSecureKey()) {
            echo json_encode(array(
                'status'    => 400,
                'message'   => 'restricted access, please contact system administrator',
                'code'      => 501
            ));
        } else {
            $queryWYG = $this->courses->getWYG();

            $dtArr = array();
            foreach ($queryWYG->result() as $dt) {
                $dtArr[] = array(
                    'text'  => $dt->NAME,
                    'value' => $dt->TAG
                );
            }

            $encode = json_encode($dtArr);

            echo $encode;
        }
    }

    function getCourseType()
    {


        if ($this->incube->getSecureKey()) {
            echo json_encode(array(
                'status'    => 400,
                'message'   => 'restricted access, please contact system administrator',
                'code'      => 501
            ));
        } else {
            $queryWYG = $this->courses->getContentType();

            $dtArr = array();
            foreach ($queryWYG->result() as $dt) {
                $dtArr[] = array(
                    'text'  => $dt->CATEGORY_NAME,
                    'value' => $dt->CATEGORY_URL
                );
            }

            $encode = json_encode($dtArr);

            echo $encode;
        }
    }

    function postIntroFiles()
    {



        $config['upload_path']      = './assets/img/courses/';
        $config['allowed_types']    = '*';
        $config['file_ext_tolower'] = TRUE;
        $config['overwrite']        = TRUE;
        $config['encrypt_name']     = TRUE;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('imgUpload')) {
            $htmlTags = ['<p>', '</p>'];
            $errMsg = str_replace($htmlTags, '', $this->upload->display_errors());
            $error = array('error' => $errMsg);

            echo json_encode($error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            echo json_encode($data);
        }
    }

    function deleteIntroFiles()
    {

        $this->load->helper('file');

        $uploadPath = 'assets/img/intro/' . $this->input->post('images');

        if (unlink($uploadPath)) {
            $msg = array(
                'status'    => 200,
                'message'   => 'file deleted successfully',
                'code'      => 200
            );
        } else {
            $msg = array(
                'status'    => 200,
                'message'   => 'error while deleting files',
                'code'      => 501
            );
        }

        echo json_encode($msg);
    }
}
