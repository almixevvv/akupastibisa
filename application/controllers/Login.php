<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct(true);
        $this->output->enable_profiler(TRUE);
        $this->load->model('M_profile', 'profile');
    }

    function index()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/account/login');
    }

    function loginProcess()
    {
        //VERIFY CAPTCHA
        // $curlx = curl_init();

        // curl_setopt($curlx, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        // curl_setopt($curlx, CURLOPT_HEADER, 0);
        // curl_setopt($curlx, CURLOPT_RETURNTRANSFER, 1);
        // curl_setopt($curlx, CURLOPT_POST, 1);

        // $post_data =
        //     [
        //         'secret' => '6Ld2qPIUAAAAAF60gKbsB5rWZ7ztCD_2kWRiN6Gc', //<--- your reCaptcha secret key
        //         'response' => $this->input->post('g-recaptcha-response')
        //     ];

        // curl_setopt($curlx, CURLOPT_POSTFIELDS, $post_data);

        // $resp = json_decode(curl_exec($curlx));

        // curl_close($curlx);

        // //Validate captcha first
        // if (!$resp->success) {
        //     $this->session->set_flashdata('error', 'captcha');
        //     redirect(base_url('login'));
        // }

        $email     = $this->input->post('loginEmail');
        $password  = $this->input->post('loginPassword');
        $querySalt = $this->profile->getSalt('g_member', 'HASH', 'EMAIL', $email);

        if ($querySalt->num_rows() < 1) {
            //Ga ada email
            $this->session->set_flashdata('error', 'email');
            redirect('login');
        } else {
            foreach ($querySalt->result() as $salt);

            $hashPassword = hash("sha256", $password . $salt->HASH);

            $queryLogin = $this->profile->getLoginDetail('g_member', 'EMAIL', 'PASSWORD', $email, $hashPassword);

            if ($queryLogin->num_rows() > 0) {
                //Bener semuanya
                foreach ($queryLogin->result() as $data) {
                    $newdata = array(
                        'name'      => $data->NAME,
                        'email'     => $data->EMAIL,
                        'role'      => 'MEMBER',
                        'logged_in' => TRUE
                    );

                    $this->session->set_userdata('user_data', $newdata);
                }
                redirect('home');
            } else {
                //Salah password
                $this->session->set_flashdata('error', 'password');
                redirect('login');
            }
        }
    }

    function logoutProcess()
    {
        $this->session->unset_userdata('user_data');

        redirect('home');
    }

    function registerProcess()
    {
        $name = $this->input->post('registerNama');
        $email = $this->input->post('registerEmail');
        $phone = $this->input->post('registerPhone');
        $password = $this->input->post('registerPassword');
        $date = date("Y-m-d H:i:s");

        $randomSalt = md5(uniqid(rand(), true));
        $salt = substr($randomSalt, 0, MAX_LENGTH);

        $hashPassword = hash('sha256', $password . $salt);

        $dataInsert = array(
            'NAME'          => $name,
            'PHONE'         => $phone,
            'EMAIL'         => $email,
            'PASSWORD'      => $hashPassword,
            'DATE_JOINED'  => $date,
            'HASH'          => $salt
        );

        $query = $this->profile->registerAccount('g_member', $dataInsert);

        if ($query) {
            $newdata = array(
                'name'      => $name,
                'email'     => $email,
                'role'      => 'MEMBER',
                'logged_in' => TRUE
            );

            // $this->session->set_userdata('user_data', $newdata);
            redirect(base_url());
        } else {
            // redirect('login');
        }
    }
}
