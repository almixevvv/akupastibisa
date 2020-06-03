<?php if (!defined("BASEPATH")) exit("Hack Attempt");
class Contact extends CI_Controller
{

    function __construct()
    {
        parent::__construct(true);
        // $this->output->enable_profiler(TRUE);
        $this->load->model('M_cms', 'cms');
        $this->load->model('M_quotes', 'quotes');
    }

    public function index()
    {
        $data['randomQuotes'] = $this->quotes->randomQuotes();
        $this->load->view('templates/header');
        $this->load->view('templates/home-navbar');
        $this->load->view('pages/contact',$data);
        $this->load->view('templates/footer');
    }

    public function addContact()
    {
        $this->load->library('upload');

        // $defaultPath = '/templates/images/headshot/'.$_FILES['file_image']['name'];

        $name = $this->input->post('contact_name');
        $email = $this->input->post('contact_email');
        $subject = $this->input->post('contact_subject');
        $message = $this->input->post('contact_message');

        $data = array(
            'NAME' => $name,
            'EMAIL'  => $email,
            'SUBJECT'  => $subject,
            'MESSAGE'  => $message,
            'HASH' => sha1($email)

        );

        if ($this->cms->insert_contact($data)) {

            // $data['email'] = $email;
            // $data['hash'] = sha1($email);

            $this->load->library('email');
            $this->email->from($email);
            $this->email->to('contact@akupastibisa.com', 'AkuPastiBisa Admin');
            $this->email->set_mailtype('html');

            $this->email->subject('Testing');
            $this->email->message($message);

            $this->email->send();
            // redirect(base_url('register/verification'));
        }

        // $this->cms->insert_contact($data);


        redirect('contact');
    }
}
