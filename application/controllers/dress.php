<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dress extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('customer_model');
		$this->load->model('dress_model');
    }
	public function index()
	{
		// $this->dashboardStats();
	}
    public function addDress(){
        $this->load->view('navbar');
        $resp['customer']=$this->customer_model->getAllCustomer();
		$this->load->view('addDress',$resp);
		if($this->input->post('save'))
		{
			$data['chest']=$this->input->post('chest');
			$data['waist']=$this->input->post('waist');
			$data['hip']=$this->input->post('hip');
			$data['sleeve']=$this->input->post('sleeve');
			$data['insteam']=$this->input->post('insteam');
			$data['customer_id']=$this->input->post('customer_id');
			$data['tag_no']=$this->input->post('tag_no');
            $user=$this->dress_model->insertDressData($data);
			if($user>0){
			        echo "Re";
			}
			else{
					echo "Insert error !";
			}
		}
    }
    public function viewDress(){
        $data['dress']=$this->dress_model->dress_all_data();
        $this->load->view('navbar');
        $this->load->view('manageDress',$data);
    }
	public function deleteDress(){
		$id=$this->input->get('id');
		$resp = $this->dress_model->deleteDress($id);
		$data['dress']=$this->dress_model->dress_all_data();
        $this->load->view('navbar');
        $this->load->view('manageDress',$data);
		echo "Dress Deleted Succesfully";
	}
}
