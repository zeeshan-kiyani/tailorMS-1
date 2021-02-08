<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dress extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		// $this->load->model('customer_model');
    }
	public function index()
	{
		// $this->dashboardStats();
	}
    public function addDress(){
        $this->load->helper('url');;
        $this->load->view('navbar');
        $this->load->view('addDress');
    }
    public function viewDress(){
        $this->load->helper('url');;
        $this->load->view('navbar');
        $this->load->view('manageDress');
    }
}
