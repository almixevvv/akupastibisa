<?php if (!defined("BASEPATH")) exit("Hack Attempt");
class Instructor extends CI_Controller
{

	function __construct()
	{
		parent::__construct(true);
		$this->output->enable_profiler(TRUE);
		$this->load->model('M_profile', 'profile');
		$this->load->model('M_cms', 'cms');
	}

	function index()
	{
		$data['topCourses'] = $this->courses->topCourse();
		$data['topTrainer'] = $this->courses->topTrainer_all();

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
						'logged_in' => TRUE
					);

					$this->session->set_userdata('user_data', $newdata);
				}
				redirect('home');
			} else {
				//Salah password
				$this->session->set_flashdata('error', 'password');
				redirect('instruktur');
			}
		}
	}

	function addInstruktur()
	{

		$this->load->library('upload');

		$name = $this->input->post('instruktur_name');
		$hp = $this->input->post('instruktur_hp');
		$email = $this->input->post('instruktur_email');
		$topik = $this->input->post('instruktur_topik');
		$youtube = $this->input->post('instruktur_youtube');
		$instagram = $this->input->post('instruktur_instagram');
		$linkedin = $this->input->post('instruktur_linkedin');
		$facebook = $this->input->post('instruktur_facebook');
		$updated = date('Y-m-d H:i:s');
		$created = date('Y-m-d H:i:s');

		$defaultPath = '/assets/img/cv/' . $_FILES['instruktur_cv']['name'];
		$ext = end((explode(".", $_FILES['instruktur_cv']['name'])));
		// echo $defaultPath;


		$config['upload_path']   = './assets/img/cv/';
		$config['allowed_types'] = 'jpeg|png|pdf|jpg';
		$config['max_size']		 = '1048';
		$config['file_name']	 = $name . '_CV';
		$config['overwrite']	 = TRUE;

		$tmpFilename = $config['file_name'];

		$this->upload->initialize($config);

		if (!$this->upload->do_upload('instruktur_cv')) {
			// echo $this->upload->display_errors();
			//upload error
		} else {
			$this->upload->data();
		}

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
			'TRAINER_CV'  			=> $tmpFilename . '.' . $ext,
			'TRAINER_TOPIK'  		=> $topik,
			'TRAINER_YOUTUBE'  		=> $youtube,
			'TRAINER_INSTAGRAM'  	=> $instagram,
			'TRAINER_LINKEDIN_URL'  => $linkedin,
			'TRAINER_FACEBOOK_URL'  => $facebook,
			'TRAINER_STATUS'		=> 'NEW',
			'TRAINER_CREATED'		=> $created,
			'TRAINER_UPDATED'		=> $updated
		);

		$this->profile->registerAccount('g_trainer', $data);

		redirect('Instructor');
	}
}
