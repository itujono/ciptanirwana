<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Frontend_Controller {

	public function __construct (){
        parent::__construct();
    }

	public function index() {
		$data=NULL;
		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }
		$this->load->view('cipta_nirwana',$data);
	}

	public function not_found() {
		$this->load->view('not_found');
	}

	public function sendemail(){
        //set validation rules
        $this->form_validation->set_rules('name', 'name', 'trim|required|callback_alpha_space_only');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('message', 'message', 'trim|required');

        if($this->form_validation->run() == FALSE) 
        {
            $data = array(
                    'text' => 'Maaf, Pesan anda tidak berhasil dikirim, mohon masukkan inputan dengan benar.'
	          	);
            $this->session->set_flashdata('message', $data);
	  		redirect('home#contact');
        }
        else
        {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $message = $this->input->post('message');

            $subject = 'Pesan dari pengunjung ciptanirwana.co.id.';
            $to_email = 'ciptanirwana@gmail.com';

            $config = $this->mail_config();
            $this->email->initialize($config);

            //send mail
            $this->email->from($email);
            $this->email->to($to_email);
            $this->email->bcc($email);
            $this->email->subject($subject);
            $this->email->message($message);

            if($this->email->send())
            {   
                $data = array(
                    'text' => 'Pesan anda telah berhasil dikirim.'
	          	);
	          	$this->session->set_flashdata('message', $data);
	  			redirect('home#contact');
            }
            else
            {
                $data = array(
                    'text' => 'Maaf, Pesan anda tidak berhasil dikirim, mohon untuk mencoba kembali.'
	          	);
	            $this->session->set_flashdata('message', $data);
		  		redirect('home#contact');
            }
        }
    }

    public function alpha_space_only($str)
    {
        if (!preg_match("/^[a-zA-Z ]+$/",$str))
        {
            $this->form_validation->set_message('alpha_space_only', $this->lang('alpha_space_only'));
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
}
