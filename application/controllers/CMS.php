<?php if(!defined("BASEPATH")) exit("Hack Attempt");
	class CMS extends CI_Controller{

    function __construct() {

			parent::__construct(true);
      $this->load->helper('form');
      $this->load->library("session");
      $this->load->model('M_cms', 'cms');
		}


		function index() {
      

			$data['page'] = 'LOGIN';

      $this->load->view('templates-cms/cms-header', $data);
      $this->load->view('pages-cms/login');
      $this->load->view('templates-cms/cms-footer');
    }

    function login_process() {

      $this->load->library('session');

      $this->load->model('M_cms', 'cms');

      $username = $this->input->post('txt-username');
      $password = $this->input->post('txt-password');

      $hashPassword = sha1($password);
      // $login = $this->cms->login_cms($username, $hashPassword);
      // $userData = array();

      $checkUsername = $this->cms->checkUsername($username);

      //Check if username exist
      if($checkUsername->num_rows() > 0) {
        //Check if password match
        $query = $this->cms->login_cms($username, $hashPassword);
        if($query->num_rows() > 0) {
          foreach($query->result() as $data) {
            $session = array(
              'ID' => $data->ID,
              'NAME' => $data->NAME,
              'GROUP_ID' => $data->GROUP_ID
            );
            $this->session->set_userdata($session);
          }
          redirect('cms/dashboard');
        } else {
          redirect(site_url('cms/login?error=1'));
        }
      } else {
        redirect(site_url('cms/login?error=2'));
      }

    //   if($login->num_rows() == 0) {
    //     /*echo 'kosong';*/
    //   } else {
    //     foreach($login->result() as $data) {
    //       $userData = array(
    //         'ID' => $data->ID,
    //         'NAME' => $data->NAME,
    //         'GROUP_ID' => $data->GROUP_ID
    //       );
    //     }
    //     $this->session->set_userdata($userData);
				// redirect('cms/dashboard');
    //   }


    }

    function logout() {
     
      $this->load->library('session');

      $this->session->sess_destroy();

      redirect('cms/login');

    }

		function dashboard() {

      // $this->output->enable_profiler(TRUE);

			$data['page'] = 'DASHBOARD';

			$this->load->view('templates-cms/cms-header', $data);
			$this->load->view('pages-cms/navbar');
      $this->load->view('pages-cms/dashboard');
			$this->load->view('templates-cms/cms-footer');

		}

	}
