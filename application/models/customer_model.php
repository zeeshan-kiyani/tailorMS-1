<?php
 class Customer_model extends CI_Model{
     public function __construct()
     {
         parent::__construct();
     }

     public function customer_all_data(){
        $customer_type=2;
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
        $this->db->where('type','2');
        $this->db->where('is_enable','1');
        $output=$this->db->get('users')->result();
        return $output;
     }
     public function blockCustomerUser($id)
     {
        $this->db->where('id',$id);
        $result=$this->db->delete('users');
        var_dump($result);
        return $result;
     }
     public function customerCount(){
        $this->db->where('type','2');
        $tailor_count = $this->db->count_all('users');
        return $tailor_count;
     }

 }