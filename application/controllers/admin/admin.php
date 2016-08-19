<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class admin extends CI_Controller
    {
         function __construct()
    {
         parent::__construct();
         $this->load->model("admin/admin_m");
        }
       public function manage()
    {
           $data['ResAre']=$this->admin_m->get_data();
           $this->load->view('admin/home_view',$data);
    }
       public function index()
    {     
	$this->load->view('admin/dashboard');
    }
       
    public function register()
    {
      if($this->input->post('register'))
      {
       $this->admin_m->insert_data();
       redirect(base_url().'index.php/admin/admin/manage');      
      }
    } 
  
        public function update()
    {
           if(isset($_REQUEST['editid']) && $_REQUEST['editid']!='' && $_REQUEST['editid']!=0)
            { 
          $data['ResAre']=$this->admin_m->update();
              $this->load->view('admin/update',$data);
     }
        }
         public function delete()
    {
            if(isset($_REQUEST['deleteid']) && $_REQUEST['deleteid']!='' && $_REQUEST['deleteid']!=0)
            {
            
             $this->admin_m->delete_data();
             redirect(base_url().'index.php/admin/admin/manage'); 
          
            }
    }
       
       function updated_data()
        {
          if(isset($_POST['update']) && $_POST['update']=='Update')
            {
            
             $this->admin_m->updated_data();
             redirect(base_url().'index.php/admin/admin/manage'); 
          
            }
	}
       
 }
