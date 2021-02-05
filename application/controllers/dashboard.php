<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
	public function __construct() {
        parent::__construct();
    }
	public function index()
	{
		$this->dashboardStats();	
		// $data['dashboard'] = $this->load->view('dashboard', '', TRUE);
		// $this->data['dashboard'] = 'dashboard';
        // $this->load->view('layouts/layout', $this->data);
		// $data['controller']="dashboard"
		// $this->load->helper('url');;
		// $this->load->view('navbar');
		// $this->load->view('dashboard');
	}
	public function dashboardStats(){
		$this->load->helper('url');;
		$this->load->view('navbar');
		$this->load->view('dashboard');
	}
	public function addTailor(){
		$this->load->helper('url');;
		$this->load->view('navbar');
		$this->load->view('tailor');
	}
	public function getTailor(){
		$method=$_SERVER['REQUEST_METHOD'];
        if($method != 'GET'){
            echo json_encode(400,array('status' => 400,'message' => 'Bad request.'));
        } else {
            $this->load->model('tailor_model');
            $resp = $this->tailor_model->tailor_all_data();
          echo json_encode($resp);
        }
	}
}
