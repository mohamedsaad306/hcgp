 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 class Splash extends CI_Controller{
     function index(){
         $this->load->view("splash_view");
     }
 }