<?php
 class Tailor_model extends CI_Model{
     public function __construct()
     {
         parent::__construct();
     }

     public function tailor_all_data(){
        //  $tailor_type = 1;
        // $this->db->where('type',$tailor);
         $output=$this->db->get('users')->result();
         return $output;
     }
     public function getuser($id){
         $this->db->where('user_no',$id);
         $output=$this->db->get('users')->result();
         return $output;
     }
     public function deleteuser($id)
     {
        $this->db->where('user_no',$id);
        $result=$this->db->delete('users');
        return $result;
     }
 }