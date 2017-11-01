<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_Controller extends MY_Controller{

	function __construct (){
    	parent::__construct();
	}

	function mail_config(){
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'mail.ciptanirwana.co.id'; 
        $config['smtp_port'] = '587'; 
        $config['smtp_timeout'] = 30;
        $config['smtp_user'] = 'system@ciptanirwana.co.id';
        $config['smtp_pass'] = '3q1vtChifQES';
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['validate'] = TRUE;
        $config['newline'] = "\r\n";
        return $config;
    }
}