<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_settings_model extends CI_Model {

	public function siteSettings(){
		return $this->db->GET('site_settings_tbl')->row_array();
	}
}