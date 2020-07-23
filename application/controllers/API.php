<?php if (!defined("BASEPATH")) exit("Hack Attempt");

class API extends CI_Controller
{

    function __construct()
    {
        parent::__construct(true);
        $this->load->model('M_profile', 'profile');
        $this->load->model('M_courses', 'courses');
    }

    function checkEmail()
    {
        $this->incube->getSecureKey();

        $email = $this->input->get('email');

        $queryEmail = $this->profile->checkTrainerEmail($email);

        header('Content-Type: application/json');

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
        header('Content-Type: application/json');

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
        header('Content-Type: application/json');

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
                    'text'  => $dt->TYPE_DESC,
                    'value' => $dt->TYPE_NAME
                );
            }

            $encode = json_encode($dtArr);

            echo $encode;
        }
    }
}
