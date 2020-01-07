<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Item extends REST_Controller {

	/**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct()
	{
       parent::__construct();
       $this->load->database();
    }

    /**
     * Get All Data from this method.
     *
     * @return Response
    */

    public function index_post()

	{
		$data = $_FILES;
        //    echo '<pre>';print_r($data);exit;
		$data = base64_encode(file_get_contents($_FILES['files']['tmp_name'][0]));
		$data = base64_encode($data);
		//         echo '<pre>';print_r($data);exit;
		$dat = base64_decode($data);
//		echo '<pre>';echo($data);exit;
		if(file_put_contents('/var/www/html/CodeIgniter/CodeIgniter/img/30.jpg',$dat)){
			echo "file save successfully";
		}

	}


    public function shit_get()
    {
        echo 'get shit is called';
    }

    public function shit_post()
    {
        echo 'post shit is called';
    }

  	public function hello_post()
	{
    	echo 'post';
	}

} 



