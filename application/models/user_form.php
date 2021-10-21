<?php 

Class user_form extends CI_Model {


    public function ins_user($data){

        $this->db->insert("user_form",$data);


    }
}
 