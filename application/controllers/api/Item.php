<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Item extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->database();
    }
       

      
    /**
     * Get All Data from this method.
     *
     * @return Response
    */

   //  public function index() { 
   //    $this->load->view('imageUploadForm'); 
   // } 


    public function index_post()
    
   {

    $data=$_FILES;
     echo '<pre>';print_r($data);exit;

     $data=base64_encode(file_get_contents($_FILES['files']['tmp_name'][0]));
     $data=base64_encode($data);

          // echo '<pre>';print_r($data);exit;
    $data = base64_decode($_POST['file']); 
    // echo '<pre>';echo($data);exit;
    // $decoded=base64_decode($data);

     if(file_put_contents('/var/www/html/CodeIgniter/CodeIgniter/img/23.png',$data))
     {
        echo 'File saved successfully';
     }

//     $this->load->helper(array('form', 'url'));

//     $config = array(
//         'upload_path' => "./uploads/",
//         'allowed_types' => "gif|jpg|png|jpeg|pdf",
//         'overwrite' => TRUE,
//         'max_size' => "2048000",
//         'max_height' => "768",
//         'max_width' => "1024"
//     );

//     $this->load->library('upload',$config);

//     if($this->upload->do_upload())
//     {
//         $data = array('upload_data' => $this->upload->data());
//         $this->set_response($data, REST_Controller::HTTP_CREATED);
//     }
//     else
//     {
//         $error = array('error' => $this->upload->display_errors());
//         $this->response($error, REST_Controller::HTTP_BAD_REQUEST);
//     }

// }
      // $this->load->view('imageUploadForm', $data); 
   }
        // $input = $this->input->post();
        // $this->db->insert('items',$input);
     
        // $this->response(['Item created successfully.'], REST_Controller::HTTP_OK);
    public function index_get()
    {
        
      // $data=$_FILES;
     $data= file_get_contents('https://attechnology.com/wp-content/uploads/2018/12/new-logo.png');

     echo '<pre>';print_r($data);exit;

     $data=base64_encode(file_get_contents($_FILES['files']['tmp_name'][0]));
     $data=base64_encode($data);

          // echo '<pre>';print_r($data);exit;
    $data = base64_decode($_POST['file']); 
    // echo '<pre>';echo($data);exit;
    // $decoded=base64_decode($data);

     if(file_put_contents('/var/www/html/CodeIgniter/CodeIgniter/img/23.png',$data))
     {
        echo 'File saved successfully';
     }
        $this->response(['get is called'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id)
    {
        $input = $this->put();
        $this->db->update('items', $input, array('id'=>$id));
     
        $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id)
    {
        $this->db->delete('items', array('id'=>$id));
       
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }
    	
    public function shit_get()
    {
        echo 'get shit is called';

    }

    public function shit_post()
    {
        echo 'post shit is called';

    }

  public function hello_post(){
echo 'post';

  }
   //  public function uploadImage()
   //  { 
        
   //      echo "API index";

   //    $data = [];
   
   //    $count = count($_FILES['files']['name']);
    
   //    for($i=0;$i<$count;$i++){
    
   //      if(!empty($_FILES['files']['name'][$i])){
    
   //        $_FILES['file']['name'] = $_FILES['files']['name'][$i];
   //        $_FILES['file']['type'] = $_FILES['files']['type'][$i];
   //        $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
   //        $_FILES['file']['error'] = $_FILES['files']['error'][$i];
   //        $_FILES['file']['size'] = $_FILES['files']['size'][$i];
  
   //        $config['upload_path'] = 'uploads/'; 
   //        $config['allowed_types'] = 'jpg|jpeg|png|gif';
   //        $config['max_size'] = '5000';
   //        $config['file_name'] = $_FILES['files']['name'][$i];
   
   //        $this->load->library('upload',$config); 
    
   //        if($this->upload->do_upload('file')){
   //          $uploadData = $this->upload->data();
   //          $filename = $uploadData['file_name'];
   
   //          $data['totalFiles'][] = $filename;
   //        }
   //      }
   
   //    }
   
   //    // $this->load->view('imageUploadForm', $data); 
   // }
  
} 



