<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function index()
	{
        $this->loadlogin();
		// $this->dashboardStats();	
		// $data['dashboard'] = $this->load->view('dashboard', '', TRUE);
		// $this->data['dashboard'] = 'dashboard';
        // $this->load->view('layouts/layout', $this->data);
		// $data['controller']="dashboard"
		// $this->load->helper('url');;
		// $this->load->view('navbar');
		// $this->load->view('dashboard');
    }
    public function loadlogin(){
		$this->load->helper('url');
        $this->load->view('login');
    }
}
