<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Manila');

class Error404 extends CI_Controller {

	function __construct (){
        parent::__construct();
        $this->load->model('site_settings_model');
    }
    public function index(){
    	$data['siteSetting'] = $this->site_settings_model->siteSettings();
    	$this->load->view('home/error_404', $data);
    }
}