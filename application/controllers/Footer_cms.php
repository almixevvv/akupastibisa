<?php if(!defined("BASEPATH")) exit("Hack Attempt");

class Footer_cms extends CI_Controller {

    public function index(){
        // $this->output->enable_profiler(TRUE);
        $this->load->model('M_cms', 'cms');

        $data['page'] = 'Footer List';

        $data['content'] = $this->cms->select_footer();

        $this->load->view('templates-cms/cms-header', $data);
        $this->load->view('pages-cms/navbar');
        $this->load->view('pages-cms/footer');
        $this->load->view('templates-cms/cms-footer');

    }
}

?>