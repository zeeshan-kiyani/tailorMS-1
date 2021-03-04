<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('customer_model');
		$this->load->model('tailor_model');
		$this->load->model('dress_model');
    }
	public function index()
	{
		// $this->dashboardStats();
	}
    public function addOrder(){
        $data['customer']=$this->customer_model->getAllCustomer();
        $data['tailor']=$this->tailor_model->getAllTailors();
        $data['dress']=$this->dress_model->dress_data();
        $this->load->view('navbar');
        $this->load->view('addOrder',$data);
    }
    public function viewOrder(){
        $this->load->helper('url');;
        $this->load->view('navbar');
        $this->load->view('manageOrder');
    }
}
