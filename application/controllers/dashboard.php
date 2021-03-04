<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('customer_model');
		$this->load->model('tailor_model');
		$this->load->model('dress_model');
		$this->load->model('order_model');
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
	public function dashboardStats()
	{
		$data['customer_count'] = $this->customer_model->customerCount();
		$data['tailor_count'] = $this->tailor_model->tailorCount();
		$data['dress_count'] = $this->dress_model->dressCount();
		$data['order_count'] = $this->order_model->orderCount();
		$this->load->view('navbar');
		$this->load->view('dashboard',$data);
	}
	public function addTailor(){
		$this->load->view('navbar');
		$this->load->view('tailor');
		if($this->input->post('save'))
		{
			$data['email']=$this->input->post('email');
			$data['password']=$this->input->post('password');
			$data['address']=$this->input->post('address');
			$data['name']=$this->input->post('name');
			$data['contact']=$this->input->post('contact');
			$data['type']=$this->input->post('type');
			$user=$this->tailor_model->insertTailorData($data);
			if($user>0){
			        echo "Records Saved Successfully";
			}
			else{
					echo "Insert error !";
			}
		}
	}
	public function viewTailor(){
		$resp['data'] = $this->tailor_model->tailor_all_data();
		$this->load->view('navbar');
		$this->load->view('manageTailor', $resp);
	}
	
	public function blockTailor(){
		$id=$this->input->get('id');
		// echo $id;
		$resp = $this->tailor_model->blockTailorUser($id);
		echo "Record Deleted Succesfully";
	}
}
