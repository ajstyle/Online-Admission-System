<?php
class Dashboard extends CI_Controller
{

    public function __construct() {
        parent::__construct();
    
        $user_id = $this->session->userdata('user_id');
        print_r($user_id);
        if(!$user_id)
        {
        
            $this->logout() ; 
        }
      
     
    }

        public function index()
              
      {
           
          
          $this->load->view('admin/include/header_view');
          $this->load->view('admin/dashboard_view');
          
          
      }
    
    
      public function logout()
      {
          $this->session->sess_destroy(); 
          redirect('Admin/login');
      }

      
      public function test()
      {
          $q = $this->db->get('admin_login') ; 
          print_r($q->result()) ; 
      }
      
      
      
      
      }