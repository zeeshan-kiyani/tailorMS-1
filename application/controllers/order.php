<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		// $this->load->model('customer_model');
    }
	public function index()
	{
		// $this->dashboardStats();
	}
    public function addOrder(){
        $this->load->helper('url');;
        $this->load->view('navbar');
        $this->load->view('addOrder');
    }
    public function viewOrder(){
        $this->load->helper('url');;
        $this->load->view('navbar');
        $this->load->view('manageOrder');
    }
}
