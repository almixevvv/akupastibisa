<?php if (!defined("BASEPATH")) exit("Hack Attempt");
class EditFooter extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->output->enable_profiler(TRUE);
        $this->load->model('M_cms', 'cms');
        // $this->load->model('M_penimbangan', 'penimbangan');
        $this->load->helper('form');
        $this->load->helper('date');
        $this->load->helper('url');
    }

    public function index()
    {
        // $this->output->enable_profiler(TRUE);
        $data['title']   = 'Edit Weighing';
        $data['page']    = 'Edit Weighing';

        $dataEdit = $this->cms->select_edit_footer($this->input->get('id'));

        foreach($dataEdit->result() as $details) {
            $data['REC_ID'] = $details->REC_ID;
            $data['DOCUMENT_ID'] = $details->DOCUMENT_ID;
            $data['TITLE'] = $details->TITLE;
            $data['DESCRIPTION'] = $details->DESCRIPTION;
            
        }

        $this->load->view('templates-cms/cms-header', $data);
        $this->load->view('pages-cms/navbar');
        $this->load->view('pages-cms/editFooter');
        $this->load->view('templates-cms/cms-footer');
    }

    public function editFooter(){
// $this->output->enable_profiler(TRUE);
    
        $data = array(
            'DOCUMENT_ID' => $this->input->post('footer_id'),
            'TITLE' => $this->input->post('footer_title'),
            'DESCRIPTION' => $this->input->post('footer_desc')
        );

        // echo $data;
        // die();
        $query = $this->cms->editFooter_cms($this->input->post('hiddenBatch'),$data);

        // return $query;
        
        redirect('cms/footer');
    }
}
