<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_settings_model extends CI_Model {

	public function siteSettings(){
		return $this->db->GET('site_settings_tbl')->row_array();
	}
	public function generateNonce($length = 17) {
		$characters = '0123456789abcdef';
	    $charactersLength = strlen($characters);
	    $nonce = '';
	    for ($i = 0; $i < $length; $i++) {
	        $nonce .= $characters[rand(0, $charactersLength - 1)];
	    }
	    $this->session->set_userdata('nonce', $nonce);
    	return $nonce;
    }
}