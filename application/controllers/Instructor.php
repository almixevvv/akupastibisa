<?php if (!defined("BASEPATH")) exit("Hack Attempt");
class Instructor extends CI_Controller
{

	function __construct()
	{
		parent::__construct(true);
		$this->output->enable_profiler(TRUE);
		$this->load->model('M_profile', 'profile');
		$this->load->model('M_quotes', 'quotes');
		$this->load->model('M_cms', 'cms');
	}

	function index()
	{
		$data['topCourses'] = $this->courses->topCourse();
		$data['topTrainer'] = $this->courses->topTrainer_all();
		$data['randomQuotes'] = $this->quotes->randomQuotes();
		$data['randomQuotes1'] = $this->quotes->randomQuotes();

		$this->load->view('templates/header');
		$this->load->view('templates/home-navbar');
		$this->load->view('pages/instructor/instructor', $data);
		$this->load->view('templates/footer');
	}

	function loginInstruktur()
	{
		$email 		= $this->input->post('loginEmail');
		$password 	= $this->input->post('loginPassword');
		$querySalt = $this->profile->getSalt('g_trainer', 'TRAINER_HASH', 'TRAINER_EMAIL', $email);

		if ($querySalt->num_rows() < 1) {
			//Ga ada email
			$this->session->set_flashdata('error', 'email');
			redirect('instruktur');
		} else {
			foreach ($querySalt->result() as $salt);

			$hashPassword = hash("sha256", $password . $salt->TRAINER_HASH);

			$queryLogin = $this->profile->getLoginDetail('g_trainer', 'TRAINER_EMAIL', 'TRAINER_PASSWORD', $email, $hashPassword);

			if ($queryLogin->num_rows() > 0) {
				//Bener semuanya
				foreach ($queryLogin->result() as $data) {
					$newdata = array(
						'name'      => $data->TRAINER_NAME,
						'email'     => $data->TRAINER_EMAIL,
						'role'		=> 'INSTRUCTOR',
						'id'		=> $data->REC_ID,
						'logged_in' => TRUE
					);

					$this->session->set_userdata('user_data', $newdata);
				}
				redirect('instruktur/cms');
			} else {
				//Salah password
				$this->session->set_flashdata('error', 'password');
				redirect('instruktur');
			}
		}
	}

	function loginCMS()
	{
		$this->load->view('pages-instructor/login');
	}

	function addInstruktur()
	{

		$this->load->library('upload');

		$name 		= $this->input->post('instruktur_name');
		$hp 		= $this->input->post('instruktur_hp');
		$email 		= $this->input->post('instruktur_email');
		$topik 		= $this->input->post('instruktur_topik');
		$youtube 	= $this->input->post('instruktur_youtube');
		$instagram 	= $this->input->post('instruktur_instagram');
		$linkedin 	= $this->input->post('instruktur_linkedin');
		$facebook 	= $this->input->post('instruktur_facebook');
		$updated 	= date('Y-m-d H:i:s');
		$created 	= date('Y-m-d H:i:s');

		$config['upload_path']   = './assets/img/cv/';
		$config['allowed_types'] = 'jpeg|png|pdf|jpg';
		$config['max_size']		 = '1048';
		$config['file_name']	 = $name . '_CV';
		$config['overwrite']	 = TRUE;

		$this->upload->initialize($config);

		if (!$this->upload->do_upload('instruktur_cv')) {
			//upload error
			echo $this->upload->display_errors();
		} else {;

			$dataUpload = $this->upload->data();

			$intermediateSalt = md5(uniqid(rand(), true));
			$salt = substr($intermediateSalt, 0, 8);
			$tmpPassword = 'abc123';

			$password = hash("sha256", $tmpPassword . $salt);

			$data = array(
				'TRAINER_NAME' 			=> $name,
				'TRAINER_HP' 			=> $hp,
				'TRAINER_EMAIL'  		=> $email,
				'TRAINER_PASSWORD'		=> $password,
				'TRAINER_HASH'			=> $salt,
				'TRAINER_CV'  			=> '/assets/img/cv/' . $dataUpload['orig_name'],
				'TRAINER_TOPIK'  		=> $topik,
				'TRAINER_YOUTUBE'  		=> $youtube,
				'TRAINER_INSTAGRAM'  	=> $instagram,
				'TRAINER_LINKEDIN_URL'  => $linkedin,
				'TRAINER_FACEBOOK_URL'  => $facebook,
				'TRAINER_STATUS'		=> 'NEW',
				'TRAINER_JOIN_DATE'		=> $created,
				'TRAINER_UPDATED'		=> $updated
			);

			$this->profile->registerAccount('g_trainer', $data);
			$this->session->set_flashdata('success', true);

			redirect('instructor');
		}
	}
}
