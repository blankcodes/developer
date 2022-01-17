<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_model extends CI_Model {

	public function siteSettings(){
		return $this->db->GET('site_settings_tbl')->row_array();
	}
	
    public function sendEmailNotification(){
    	$data['siteSettings'] = $this->siteSettings();
		$config = array (
			'mailtype' => 'html',
			'charset'  => 'utf-8',
			'priority' => '1'
		);
        $data['name'] = 'Admin';

		$this->email->initialize($config);
		$this->email->from('hello@dev.kenkarlo.com', $data['siteSettings']['website_name']);
		$this->email->to('codesblank@gmail.com');
		$this->email->subject('New Notification');
		$body = $this->load->view('email/email_notification', $data, TRUE);
		$this->email->message($body);
		$this->email->send();
    }
}