<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('customer_model');
    }
	public function index()
	{
		// $this->dashboardStats();
	}
    public function addCustomer(){
        $this->load->view('navbar');
		$this->load->view('addCustomer');
		if($this->input->post('save'))
		{
			$data['email']=$this->input->post('email');
			$data['password']=$this->input->post('password');
			$data['address']=$this->input->post('address');
			$data['name']=$this->input->post('name');
			$data['contact']=$this->input->post('contact');
			$data['type']=$this->input->post('type');
            $user=$this->customer_model->insertCustomerData($data);
			if($user>0){
			        echo "Records Saved Successfully";
			}
			else{
					echo "Insert error !";
			}
		}
    }
    public function viewCustomer(){
        $resp['data'] = $this->customer_model->customer_all_data();
		$this->load->view('navbar');
		$this->load->view('manageCustomer', $resp);
    }
    public function blockCustomer(){
		$id=$this->input->get('id');
		$resp = $this->customer_model->blockCustomerUser($id);
		echo "Record Deleted Succesfully";
	}
    
}
