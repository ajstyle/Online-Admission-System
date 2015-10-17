<?php
class User_model extends CI_Model
{
   /** 
    usage::
    
    $data =  $this->user_model->get('admin_login','admin');
        print_r($data); 
    **/
    public function get($table = NULL ,$user_id = NULL)
    {
        if($user_id === NULL)
        {
           $q = $this->db->get($table) ; 
        }
        else
        {
            $q = $this->db->get_where($table,['user_id'=>$user_id]);
        }
        return $q->result_array() ; 
    }
    
   /**
    usage::
    $result = $this->user_model->insert(['user_id' =>'amit']); 
        print_r($result) ; 
    **/
   
    
    public function insert($table , $data)
    {
        $this->db->insert($table , $data) ; 
        return $this->db->insert_id() ; 
        
    }
            
  /**
   usage::
    $result = $this->user_model->update(['user_id' =>'peggy'],3);
        print_r($result) ; 
    **/
    public function update($table ,$data , $user_id)
    {
        $this->db->where(['user_id'=> $user_id]);
        $this->db->update($table,$data) ;
        
        return $this->db->affected_rows() ; 
        
    }
    
    /**
   usage::
     $result = $this->user_model->delete(6);
    **/
    public function delete($table,$user_id)
            
    {
         $this->db->delete($table,['user_id'=> $user_id]) ; 
         return $this->db->affected_rows() ; 
         
    }
    
    
    
    
    }


?>








