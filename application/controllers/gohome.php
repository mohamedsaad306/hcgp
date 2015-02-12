 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 class Gohome extends CI_Controller{
 
     public function  index()
     {
         
         $this->load->view("first_Home");
     }
 }