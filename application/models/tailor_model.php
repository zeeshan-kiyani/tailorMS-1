<?php
 class Tailor_model extends CI_Model{
     public function __construct()
     {
         parent::__construct();
     }

     public function tailor_all_data(){
         $tailor_type = 1;
        $this->db->where('type',$tailor_type);
         $output=$this->db->get('users')->result();
         return $output;
     }
     public function insertTailorData($data){
        $this->db->insert('users',$data);
        return $this->db->insert_id();
     }
     public function getuser($id){
         $this->db->where('id',$id);
         $output=$this->db->get('users')->result();
         return $output;
     }
     public function blockTailorUser($id)
     {
        $this->db->where('id',$id);
        $result=$this->db->delete('users');
        return $result;
     }
 }