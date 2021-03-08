<?php
 class Dress_model extends CI_Model{
     public function __construct()
     {
         parent::__construct();
     }

     public function dress_all_data(){
         $output=$this->db->query('SELECT d.tag_no,d.waist,d.hip,d.insteam,d.sleeve,d.id,d.chest,u.name,u.contact FROM `dress` d INNER JOIN users u on u.id = d.customer_id')->result();
         return $output;
     }
     public function dress_data(){
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
     public function dressCount(){
        $dress_count = $this->db->count_all('dress');
        return $dress_count;
     }
     public function deleteDress($id){
        $this->db->where('id',$id);
        $result=$this->db->delete('dress');
        return $result;
     }
 }