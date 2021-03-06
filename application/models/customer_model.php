<?php
 class Customer_model extends CI_Model{
     public function __construct()
     {
         parent::__construct();
     }

     public function customer_all_data(){
        $customer_type=3;
        $this->db->where('type',$customer_type);
         $output=$this->db->get('users')->result();
         return $output;
     }
     public function insertCustomerData($data){
        $this->db->insert('users',$data);
        return $this->db->insert_id();
     }
     public function getuser($id){
         $this->db->where('id',$id);
         $output=$this->db->get('users')->result();
         return $output;
     }
     public function getAllCustomer(){
        $this->db->where('type','3');
        $this->db->where('is_enable','1');
        $output=$this->db->get('users')->result();
        return $output;
     }
     public function customer_data($id){
      $this->db->where('id',$id);
      $this->db->where('type','3');
      $this->db->where('is_enable','1');
      $output=$this->db->get('users')->row();
      return $output;
   }
     
     public function blockCustomerUser($id)
     {
        $this->db->where('id',$id);
        $result=$this->db->delete('users');
        return $result;
     }
     public function customerCount(){
        $this->db->where('type','3');
        $tailor_count = $this->db->count_all('users');
        return $tailor_count;
     }
     public function updateCustomerData($data){
      $this->db->set('name',$data['name']);
      $this->db->set('email',$data['email'] );
      $this->db->set('contact',$data['contact'] );
      $this->db->set('address',$data['address'] );
      $this->db->set('password',$data['password'] );
      $this->db->where('id', $data['id']);
      $res = $this->db->update('users'); 
      return $res;
   }
     

 }