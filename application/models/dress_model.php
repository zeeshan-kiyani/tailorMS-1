<?php
 class Dress_model extends CI_Model{
     public function __construct()
     {
         parent::__construct();
     }

     public function dress_all_data(){
         //customer
         //tailor
         //dress
        // $this->db->where('type',$customer_type);
         $output=$this->db->query('SELECT * FROM `dress` d INNER JOIN users u on u.id = d.customer_id')->result();
         return $output;
     }
     public function dress_data(){
        //customer
        //tailor
        //dress
       // $this->db->where('type',$customer_type);
        $output=$this->db->query('SELECT * FROM `dress`')->result();
        return $output;
    }
     public function insertDressData($data){
        $this->db->insert('dress',$data);
        return $this->db->insert_id();
     }
     public function getDress($id){
         $this->db->where('id',$id);
         $output=$this->db->get('dress')->result();
         return $output;
     }
    //  public function blockCustomerUser($id)
    //  {
    //     $this->db->where('id',$id);
    //     $result=$this->db->delete('users');
    //     var_dump($result);
    //     return $result;
    //  }
 }