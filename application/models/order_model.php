<?php
 class Order_model extends CI_Model{
     public function __construct()
     {
         parent::__construct();
     }

     public function dress_order_data(){
         //customer
         //tailor
         //dress
        // $this->db->where('type',$customer_type);
         $output=$this->db->query('SELECT * FROM `dress_order` o INNER JOIN dress d on d.id=o.dress_id INNER JOIN users t on t.id=o.tailor_id')->result();
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
     public function insertOrderData($data){
        $this->db->insert('dress_order',$data);
        return $this->db->insert_id();
     }
     public function getDress($id){
         $this->db->where('id',$id);
         $output=$this->db->get('dress_order')->result();
         return $output;
     }
     public function orderCount(){
        $order_count = $this->db->count_all('dress_order');
        return $order_count;
     }
 }