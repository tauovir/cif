<?php


class form extends CI_Controller {


    public function __construct()
	{ 
		parent::__construct();

        $this->load->database();
        $this->load->model('user_form');

    }

public function frm(){



    $this->load->view('from');
}


public function ins(){


$n=$this->input->post("name");
$last=$this->input->post("last");

$w=array(
    'frist_name'=>$n,
    'last_name'=>$last 

);

$this->user_form->ins_user($w) ;
$this->load->view('from');

   
}

 
public function env(){


    $n=$this->input->post("name");
    $last=$this->input->post("last");
    
    $w=array(
        'frist_name'=>$n,
        'last_name'=>$last 
    
    );
    
    $this->user_form->ins_user($w) ;
    $this->load->view('from');
    
       
    }
    

}