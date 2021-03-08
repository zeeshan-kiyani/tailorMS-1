<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order extends CI_Controller {
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
		// $this->dashboardStats();
	}
    public function addOrder(){
        $response['customer']=$this->customer_model->getAllCustomer();
        $response['tailor']=$this->tailor_model->getAllTailors();
        $response['dress']=$this->dress_model->dress_data();
        $this->load->view('navbar');
        $this->load->view('addOrder',$response);
        if($this->input->post('save'))
		{
			$data['dress_id']=$this->input->post('dress');
			$data['customer_id']=$this->input->post('customer');
			$data['tailor_id']=$this->input->post('tailor');
			$data['date']=$this->input->post('date');
			$data['cost']=$this->input->post('cost');
            $user=$this->order_model->insertOrderData($data);
			if($user>0){
			        echo "Records Saved Successfully";
			}
			else{
					echo "Insert error !";
			}
		}
    }
    public function viewOrder(){
		$data['usertype'] = $this->session->userdata('userType');
        $data['orderData']  = $this->order_model->dress_order_data();
        $this->load->view('navbar');
        $this->load->view('manageOrder',$data);
    }
	public function completeOrder(){
			$id=$this->input->get('id');
			$resp = $this->order_model->markOrderComplete($id);
			$data['orderData']  = $this->order_model->dress_order_data();
			$data['usertype'] = $this->session->userdata('userType');
			$data['order_update_msg'] = "Order Completed Succesfully";
			$this->load->view('navbar');	
			$this->load->view('manageOrder',$data);			
    }
	
}
