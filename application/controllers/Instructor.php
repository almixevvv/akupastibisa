<?php if (!defined("BASEPATH")) exit("Hack Attempt");
class Instructor extends CI_Controller
{

	function __construct()
	{
		parent::__construct(true);
		// $this->output->enable_profiler(TRUE);
		$this->load->model('M_profile', 'profile');
		$this->load->model('M_cms', 'cms');
	}

	function index()
	{
		$data['topCourses'] = $this->courses->topCourse();
		$data['topTrainer'] = $this->courses->topTrainer_all();

		$this->load->view('templates/header');
		$this->load->view('templates/home-navbar');
		$this->load->view('pages/join_instruktur', $data);
		$this->load->view('templates/footer');
	}

	function addInstruktur()
	{

		$this->load->library('upload');

		$name = $this->input->post('instruktur_name');
		$hp = $this->input->post('instruktur_hp');
		$email = $this->input->post('instruktur_email');
		$cv = $this->input->post('instruktur_cv');
		$topik = $this->input->post('instruktur_topik');
		$youtube = $this->input->post('instruktur_youtube');
		$instagram = $this->input->post('instruktur_instagram');
		$linkedin = $this->input->post('instruktur_linkedin');
		$facebook = $this->input->post('instruktur_facebook');
		$updated = date('Y-m-d H:i:s');
		$created = date('Y-m-d H:i:s');

		// if($cv == ''){

		// }else{

		// 	$config['upload_path'] 		= './assets/img/cv';
		// 	$config['allowed_types'] 	= 'jpeg|png|pdf|jpg';
		// 	$config['file_name'] 		= $cv;

		// 	// $this->load->library('upload',$config);

		// 	// if(!$this->upload->do_upload('instruktur_cv')){

		// 	// 	echo $this->upload->display_errors();
		// 	// 	echo 'upload gagal';
		// 	// 	die();
		// 	// }else{
		// 	// 	$cv = $this->upload->data('file_name');
		// 	// }
		// }





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

		$img = 'file_image';

		if (!$this->upload->do_upload('instruktur_cv')) {
			echo $this->upload->display_errors();
		} else {
			$this->upload->data();
		}

		$data = array(
			'TRAINER_NAME' => $name,
			'TRAINER_HP' => $hp,
			'TRAINER_EMAIL'  => $email,
			'TRAINER_CV'  => $tmpFilename . '.' . $ext,
			'TRAINER_TOPIK'  => $topik,
			'TRAINER_YOUTUBE'  => $youtube,
			'TRAINER_INSTAGRAM'  => $instagram,
			'TRAINER_LINKEDIN_URL'  => $linkedin,
			'TRAINER_FACEBOOK_URL'  => $facebook,
			'TRAINER_STATUS'		=> 'NEW',
			'TRAINER_CREATED'		=> $created,
			'TRAINER_UPDATED'		=> $updated
		);
		$this->cms->insert_instruktur($data);


		redirect('Instructor');


	}
}
