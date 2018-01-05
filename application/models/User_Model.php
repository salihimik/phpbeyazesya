<?php
class User_Model extends CI_Model {

	function __construct() 
	{ 
         parent::__construct(); 
    }

 //------------------------------------------------------USERS--------------------------------

    public function users_insert($data) 
	{
		if ($this->db->insert("users",$data)) 
		{
		  return true;
		}  
	}

	public function users_delete($user_id)
    {
		if ($this->db->delete("users","user_id=".$user_id)) 
		{
		  return true;
		} 
	}

	public function users_update($data,$user_id)
	{
		$this->db->set($data);
		$this->db->where('user_id', $user_id);
		$this->db->update('users');
	}


 //-----------------------------------------------------PRODUCTS------------------------------


	public function product_insert($data)
	{
		if ($this->db->insert("products",$data)) 
		{
		  return true;
		}  
	}
    
    public function product_delete($p_id)
	{
		if ($this->db->delete("products","p_id=".$p_id)) 
		{
		  return true;
		} 
	}

	public function product_update($data,$p_id)
	{
		$this->db->set($data);
		$this->db->where('p_id', $p_id);
		$this->db->update('products');
	}

 //-----------------------------------------------------NEWSCAST------------------------------


    public function newscast_insert($data)
	{
		if ($this->db->insert("newscast",$data)) 
		{
		  return true;
		}  
	}

	public function newscast_delete($nc_id)
	{
		if ($this->db->delete("newscast","nc_id=".$nc_id)) // ensa_urun tablosundan siler
		{
		  return true;
		}
	} 
     
    public function newscast_update($data,$nc_id)
	{
		$this->db->set($data);
		$this->db->where('nc_id', $nc_id);
		$this->db->update('newscast');
	}



 //-----------------------------------------------------MESSAGE ------------------------------

	public function message_insert($data)
	{
		if ($this->db->insert("message",$data)) 
		{
		  return true;
		}  
	}

	public function message_delete($mes_id)
	{
		if ($this->db->delete("message","mes_id=".$mes_id)) 
		{
		  return true;
		} 
	}


 //------------------------------------------------------ABOUT--------------------------------

	public function about_update($data,$com_id)
	{
		$this->db->set($data);
		$this->db->where('com_id', $com_id);
		$this->db->update('company_about');
	}


 //------------------------------------------------------IMAGE--------------------------------    

    public function product_image_update($data,$p_id)
	{
		$this->db->set($data);
		$this->db->where('p_id', $p_id);
		$this->db->update('products');
	}

 //------------------------------------------------------LOGIN--------------------------------

	function login($username,$password) 
	{
        
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_email', $username);
        $this->db->where('user_password', $password);
        $this->db->limit(1);        
        
        $query = $this->db->get();
        if($query->num_rows() == 1) 
        {
            return $query->result(); 
        } 
        else 
        {
            return false; 
        }
     }
 //------------------------------------------------ END ------------------------------
}