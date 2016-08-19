<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class home extends CI_Controller
{
    public function __construct()
    {
         parent::__construct();
         $this->load->library('session');
         $this->load->model("admin/user");
         $this->load->model("admin/admin_m");
        }
  
        public function dash()
        {
          $sart=array(); 
          $sart=$this->session->all_userdata();
                
          if(array_key_exists("username",$sart))
          { $data['name']=$sart['username'];
          $data['ResAre']=$this->admin_m->get_data();
          $this->load->view('admin/home_view',$data);
          }else {
          redirect( base_url().'index.php/admin/login/index');
          }
        } 
        
        public function logout()
     {
        $this->session->sess_destroy();
        redirect( base_url().'index.php/admin/login/index');
        //redirect('home','refresh');
    }
}

?>
