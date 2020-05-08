<?php if (!defined("BASEPATH")) exit("Hack Attempt");
class AddInstruktur extends CI_Controller
{

	public function addItem()
	{

		$this->output->enable_profiler(TRUE);
		$this->load->helper('form');

		$this->load->model('M_cms', 'cms');

		// $defaultPath = '/templates/images/headshot/'.$_FILES['file_image']['name'];

		$name = $this->input->post('instruktur_name');
		$hp = $this->input->post('instruktur_hp');
		$email = $this->input->post('instruktur_email');
		$cv = $this->input->post('instruktur_cv');
		// $cv = $_FILES['instruktur_cv'];
		$topik = $this->input->post('instruktur_topik');
		$youtube = $this->input->post('instruktur_youtube');
		$instagram = $this->input->post('instruktur_instagram');
		$linkedin = $this->input->post('instruktur_linkedin');
		$facebook = $this->input->post('instruktur_facebook');

		// if($cv == ''){

		// }else{

		// 	$config['upload_path'] 		= './upload/';
		// 	$config['allowed_types'] 	= 'jpeg|png|pdf|doc|docx|jpg';
		// 	$config['file_name'] 		= $cv;

		// 	$this->load->library('upload',$config);

		// 	if(!$this->upload->do_upload('instruktur_cv')){

		// 		$this->upload->display_errors();
		// 		echo 'upload gagal';
		// 		die();
		// 	}else{
		// 		$cv = $this->upload->data('file_name');
		// 	}
		// }

		$data = array(
			'TRAINER_NAME' => $name,
			'TRAINER_HP' => $hp,
			'TRAINER_EMAIL'  => $email,
			'TRAINER_CV'  => $cv,
			'TRAINER_TOPIK'  => $topik,
			'TRAINER_YOUTUBE'  => $youtube,
			'TRAINER_INSTAGRAM'  => $instagram,
			'TRAINER_LINKEDIN_URL'  => $linkedin,
			'TRAINER_FACEBOOK_URL'  => $facebook
		);

		$this->cms->insert_instruktur($data);


		// redirect('home/instruktur');
	}
}
