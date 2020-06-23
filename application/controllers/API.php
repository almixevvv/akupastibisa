<?php if (!defined("BASEPATH")) exit("Hack Attempt");

class API extends CI_Controller
{

    function __construct()
    {
        parent::__construct(true);
        $this->load->model('M_profile', 'profile');
    }

    function checkEmail()
    {
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
}
