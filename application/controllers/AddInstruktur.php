<?php if (!defined("BASEPATH")) exit("Hack Attempt");
class AddInstruktur extends CI_Controller
{

	public function addItem()
	{

		$this->output->enable_profiler(TRUE);
		$this->load->helper('form');

		// redirect('home/instruktur');
	}
}
