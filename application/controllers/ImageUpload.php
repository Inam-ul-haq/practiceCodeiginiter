<?php
  
class ImageUpload extends CI_Controller {
   
   /**
    * Manage __construct
    *
    * @return Response
   */

  
   /**
    * Manage index
    *
    * @return Response
   */
   public function index() 
   { 
//       if($_POST)
//       {
//
//          $data=json_encode($_FILES);
//            $data=base64_encode($data);
//
//              echo '<pre>';print_r($_FILES);
//       }
      $this->load->view('imageUploadForm'); 
   } 


}
?>
