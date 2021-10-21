 <?php


class cicode extends CI_Controller {



    public function __construct()
	{ 
		parent::__construct();

        $this->load->database();
        $this->load->model('user_form');
   

	public function index()
	{
		 $this->load->view('code');
        // echo"cicode";
	}

    public function mi($one,$two ) 
	{
		 echo "sassdf".$two; 

         echo"cicode".$one;
	}


    public function settings() 
	{
		

         echo"cicode";
	}
	
}
