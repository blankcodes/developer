<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Manila');

class Main extends CI_Controller {

	function __construct (){
        parent::__construct();
		$this->load->library('user_agent');
        $this->load->library('form_validation');
        $this->load->model('site_settings_model');
    }
    public function index(){
    	$data['siteSetting'] = $this->site_settings_model->siteSettings();
    	$this->load->view('home/header', $data);
    	$this->load->view('home/navbar');
    	$this->load->view('home/index');
    	$this->load->view('home/footer');
    }
}