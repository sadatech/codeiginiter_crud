<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class admin_m extends CI_Model
    {
      function __construct()
        {
         parent::__construct();
        }   
        function insert_data()
        {
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $mobile=$this->input->post('mobile');
               $this->db->select('*');
               $this->db->from('entries_new');
               $this->db->where('email',$email);
               $query=$this->db->get();
               if ($query->num_rows() > 0)
               {
                 return true;
               } 
             $data=array('name'=>$name,
                         'email'=>$email, 
                         'password'=>$password, 
                         'mobile'=>$mobile  
                         );
	     $this->db->insert('entries_new',$data);    
        }
	  function get_data()
    {
        $this->db->select('*');
        $this->db->from('entries_new');
        $query = $this->db->get();
        return $result = $query->result();
       }
        function delete_data()
    {
        $id=$_REQUEST['deleteid'];
           $this->db->where('id', $id);
        $this->db->delete('entries_new');
          
    }
    function update()
     {
            $id=$_REQUEST['editid'];
                $this->db->select('*');
                $this->db->from('entries_new');
                $this->db->where('id', $id);
                $query = $this->db->get();
                return $result = $query->result();
                
           }
           function updated_data()
          {
            $id=$this->input->post('upid');
            $name=$this->input->post('name');
            $email=$this->input->post('email');
            $password=$this->input->post('password');
            $mobile=$this->input->post('mobile');
        
            $data=array('name'=>$name,
                            'email'=>$email,
                            'password'=>$password,
                            'mobile'=>$mobile);
                 $this->db->where('id',$id);
                 $this->db->update('entries_new',$data);
                 return true;    
           }
         }
                
