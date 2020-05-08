<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
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

    function loginProcess()
    {
        $email     = $this->input->post('loginEmail');
        $password  = $this->input->post('loginPassword');

        $hashPassword = sha1($password);

        $queryEmail = $this->profile->loginEmail($email);

        if ($queryEmail->num_rows() > 0) {
            $queryPassword = $this->profile->loginPassword($hashPassword);

            if ($queryPassword->num_rows() > 0) {

                foreach ($queryPassword->result() as $data) {
                    $newdata = array(
                        'name'      => $data->NAME,
                        'email'     => $data->EMAIL,
                        'logged_in' => TRUE
                    );

                    $this->session->set_userdata('user_data', $newdata);

                    redirect(base_url());
                }
            } else {
                redirect(base_url('login'));
            }
        } else {
            redirect(base_url('login'));
        }
    }

    function registerProcess()
    {

        $name = $this->input->post('registerNama');
        $email = $this->input->post('registerEmail');
        $phone = $this->input->post('registerPhone');
        $password = $this->input->post('registerPassword');
        $date = date("Y-m-d H:i:s");

        $hashPassword = sha1($password);

        $dataInsert = array(
            'NAME'          => $name,
            'PHONE'         => $phone,
            'EMAIL'         => $email,
            'PASSWORD'      => $hashPassword,
            'DATE_JOINNED'  => $date
        );

        $query = $this->profile->accountRegister($dataInsert);

        if ($query) {
            $newdata = array(
                'name'      => $name,
                'email'     => $email,
                'logged_in' => TRUE
            );

            $this->session->set_userdata('user_data', $newdata);

            redirect(base_url());
        } else {
            redirect('login');
        }
    }
}
