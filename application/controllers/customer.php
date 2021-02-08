<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		// $this->load->model('customer_model');
    }
	public function index()
	{
		// $this->dashboardStats();
	}
    public function addCustomer(){
        $this->load->helper('url');;
        $this->load->view('navbar');
        $this->load->view('addCustomer');
    }
    public function viewCustomer(){
        $this->load->helper('url');;
        $this->load->view('navbar');
        $this->load->view('manageCustomer');
    }
}
