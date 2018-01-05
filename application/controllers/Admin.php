<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->model('User_Model');
			
	}
    public function index()
	{
		if(!$this->session->userdata('logged_in')) 
        {
			$this->login();
		}
		else
		{
			$query=$this->db->get("users");
			$data["veri"]=$query->result(); 
			$query= $this->db->query('SELECT * FROM message order by mes_detail desc limit 0,5');
			$data2["mesaj"]=$query->result();
			$query= $this->db->query('SELECT * FROM users order by user_date desc limit 0,5');
			$data2["uye"]=$query->result();
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/content',$data2);
		}		
	}


	//-------------------------------------------------- USER ---------------------------------------

	public function users_new_list() // yeniuye
	{		 
		if(!$this->session->userdata('logged_in'))
        {
			$this->login();
		}
		else
		{
			$this->load->helper('form');
			$this->load->view('admin/header');		
			$this->load->view('admin/sidebar');
			$this->load->view('admin/users_new');		
		}		
	}

	public function users_select() //uyeliste
	{
		if(!$this->session->userdata('logged_in')) 
        {
			$this->login();
		}
		else
		{
			$query=$this->db->get("users"); 
			$data["veri"]=$query->result(); 
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/users_select',$data); 		
		}
	}
	
	public function users_new() // kayit_ekle
	{   
	   $this->load->model('User_Model'); 
		$kont=0;
		if ($this->input->post('uname_surname')==NULL )
			$kont=10;
		if ($this->input->post('user_email')==NULL)
			$kont=10;
		if ($this->input->post('user_password')==NULL)
			$kont=10;
		if ($this->input->post('user_gender')==NULL)
			$kont=10;
		if ($kont==0)
		{
			$data=array(
				'uname_surname' => $this->input->post('uname_surname'),
				'user_email' => $this->input->post('user_email'),
				'user_password' => $this->input->post('user_password'),
				'user_gender' => $this->input->post('user_gender')	
			);		
			$this->User_Model->users_insert($data);		
			redirect("/admin/users_new_list");
		}
		else
		{			
			redirect("/admin");
		}
	}		

	public function users_edit($user_id) //uyeduzenle
	{ 
        $query = $this->db->get_where("users",array("user_id"=>$user_id)); 
        $data['veri'] = $query->result(); 	
		$this->load->helper('form'); 
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
	    $this->load->view('admin/users_edit',$data); 		
	}

	public function user_update($user_id) // uye_guncelle
	{  		
		$this->load->model('User_Model'); 
		$data=array(
			'uname_surname' => $this->input->post('uname_surname'),
			'user_email' => $this->input->post('user_email'),
			'user_gender' => $this->input->post('user_gender'),
			'user_password' => $this->input->post('user_password'),
			'user_authority' => $this->input->post('user_authority')
		);		
		$this->User_Model->users_update($data,$user_id); 
		redirect("admin/users_select"); 
	}


	public function users_delete($user_id) // uyesil
	{
		$this->load->model('User_Model'); 
        $this->User_Model->users_delete($user_id);
		redirect(base_url().'index.php/admin/users_select');		
	}


	//-------------------------------------------------- PRODUCTS ---------------------------------------


	public function product_delete($p_id)  //urunsil
	{
		$this->load->model('User_Model'); 
        $this->User_Model->product_delete($p_id);
		redirect(base_url().'index.php/admin/product_select');		
	}

	public function product_insert_list() // urunekle
	{		 
		if(!$this->session->userdata('logged_in')) 
        {
			$this->login();
		}
		else
		{
			$this->load->helper('form');
			$this->load->view('admin/header');		
			$this->load->view('admin/sidebar');
			$this->load->view('admin/product_insert');		
		}		
	}


	public function product_insert() //urun_ekle
	{   
	   $this->load->model('User_Model');
	   $data=array( 
	   	   	'p_brand' => $this->input->post('p_brand'),
	   	   	'p_model' => $this->input->post('p_model'),
		    'p_date_produc' => $this->input->post('p_date_produc'),
		    'p_price' => $this->input->post('p_price'),
		    'p_detail_exp' => $this->input->post('p_detail_exp'),
		    'p_slider' => $this->input->post('p_slider'),
		    'p_type' => $this->input->post('p_type'),			
		    'p_slider2' => $this->input->post('p_slider2'),
		    'p_screen' => $this->input->post('p_screen'),
		);		
		$this->User_Model->product_insert($data);		
		redirect("/admin/product_insert_list");
	}

	public function product_select() // urunlistele
	{
		if(!$this->session->userdata('logged_in')) 
        {
			$this->login();
		}
		else
		{
			$query=$this->db->get("products"); 
			$data["veri"]=$query->result();
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/product_select',$data); 		
		}
	}

	public function product_image_update() // urunresimguncelle
	{
		if(!$this->session->userdata('logged_in')) 
        {
			$this->login();
		}
		else
		{
			$query=$this->db->get("products"); 
			$data["veri"]=$query->result(); 
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/product_image_update',$data);		
		}
	}


	public function product_edit($p_id) // urunduzenle
	{ 
        $query = $this->db->get_where("products",array("p_id"=>$p_id)); 
        $data['veri'] = $query->result();	
		$this->load->helper('form'); 
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
	    $this->load->view('admin/product_edit',$data);		
	}


	public function product_update($p_id) // urun_guncelle
	{  
		$this->load->model('User_Model'); 
		$data=array(
			'p_brand' => $this->input->post('p_brand'),
			'p_model' => $this->input->post('p_model'),
			'p_date_produc' => $this->input->post('p_date_produc'),
			'p_price' => $this->input->post('p_price'),
			'p_detail_exp' => $this->input->post('p_detail_exp'),
			'p_slider' => $this->input->post('p_slider'),
			'p_type' => $this->input->post('p_type'),
			'p_slider2' => $this->input->post('p_slider2'),
			'p_screen' => $this->input->post('p_screen')
		);		
		$this->User_Model->product_update($data,$p_id); 
		redirect("admin/product_select"); 	
	}



	//-------------------------------------------------- NEWSCAST ---------------------------------------

	public function newscast_insert_list() //haberekle
	{		 
		if(!$this->session->userdata('logged_in')) 
        {
			$this->login();
		}
		else
		{
			$this->load->helper('form');
			$this->load->view('admin/header');	
			$this->load->view('admin/sidebar');
			$this->load->view('admin/newscast_insert');		
		}		
	}

	public function newscast_delete($nc_id) // habersil
	{
		$this->load->model('User_Model');           
        $this->User_Model->newscast_delete($nc_id);
		redirect(base_url().'index.php/admin/newscast_select');		
	}
	
	public function newscast_insert() // yeni_haberekle
	{		 		
		$this->load->model('User_Model');
		$data=array(
			'nc_title' => $this->input->post('nc_title'),
			'nc_detail' => $this->input->post('nc_detail'),			
		);		
		$this->User_Model->newscast_insert($data);		
		redirect("/admin/newscast_insert_list");
	}
		
	public function newscast_select() //haberlistele
	{		 
		if(!$this->session->userdata('logged_in'))
        {
			$this->login();
		}
		else
		{
			$query=$this->db->get("newscast"); 
			$data["veri"]=$query->result(); 
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/newscast',$data); 
		}		
	}	



	public function newscast_edit($nc_id) //haberduzenle
	{ 
        $query = $this->db->get_where("newscast",array("nc_id"=>$nc_id)); 
        $data['veri'] = $query->result();
	    $this->load->helper('form'); 
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
	    $this->load->view('admin/newscast_edit',$data); 		
	}
	
	public function newscast_update($nc_id) // haber_guncelle
	{  
		$this->load->model('User_Model');
		$tarih= date("d-m-Y H:i:s");
		$data=array(
			'nc_detail' => $this->input->post('nc_detail'),
			'nc_title' => $this->input->post('nc_title'),
		);		
		$this->User_Model->newscast_update($data,$nc_id); 		
		redirect("admin/newscast_select");
	}



	//-------------------------------------------------- MESSAGE---------------------------------------

     public function message_select() // mesajlistele
	{		 
		if(!$this->session->userdata('logged_in')) 
        {
			$this->login();
		}
		else
		{
			$query=$this->db->get("message"); 
			$data["message"]=$query->result(); 
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/message',$data); 
		
		}		
	}
		

	
	public function message_delete($mes_id) // mesajsil
	{
		$this->load->model('User_Model');           
        $this->User_Model->message_delete($mes_id);
		redirect(base_url().'index.php/admin/message_select');		
	}

	//-------------------------------------------------- ABOUT ---------------------------------------

	public function about() //about
	{		 
		if(!$this->session->userdata('logged_in')) 
        {
			$this->login();
		}
		else
		{
			$this->load->helper('form');
			$query=$this->db->get("company_about"); 
			$data["company"]=$query->result();
			$this->load->view('admin/header');		
			$this->load->view('admin/sidebar');
			$this->load->view('admin/about_us',$data);	
		}		
	}

	public function about_edit($com_id) //aboutedit
	{		 
		$query = $this->db->get_where("company_about",array("com_id"=>$com_id)); 
        $data['veri'] = $query->result();	
	    $this->load->helper('form'); 
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
	    $this->load->view('admin/about_edit',$data); 
	}

	 public function about_update($com_id) //about_guncelle
	{  		
		$this->load->model('User_Model'); 
		$data=array(
			'com_name' => $this->input->post('com_name'),
			'com_email' => $this->input->post('com_email'),
			'com_phone' => $this->input->post('com_phone'),
			'com_fax' => $this->input->post('com_fax'),
			'com_adress' => $this->input->post('com_adress'),
			'com_mission' => $this->input->post('com_mission'),
			'com_vision' => $this->input->post('com_vision'),
			'com_symbol' => $this->input->post('com_symbol'),
			);
		$this->User_Model->about_update($data,$com_id); 		
		redirect("admin/about"); 
	
	}

	//------------------------------------------------------IMAGE--------------------------------  

	public function image_insert($p_id)  //  resimyukle
	{    
		$data["p_id"] = $p_id; 		
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/image_update',$data);
	}	

		
	
	public function image_upload($p_id) //resim_upload
	{
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
        $config['max_size']             = 6000;
        $config['max_width']            = 2500;
        $config['max_height']           = 1000;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('image_update', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
    		$resimdata=$this->upload->data();
			$file_name=$upload_data['file_name'];
			$data=array(
				'p_image' => $resimdata["file_name"]
				);
            $this->User_Model->product_image_update($data,$p_id); 
			redirect("admin/product_select");   
        }
	}

	//------------------------------------------------------LOGIN--------------------------------


	public function login()
	{ 
		$this->load->view('admin/login');
	}
		
	public function login_control() //login_control
	{
		$username= $this->input->post('user_email');
		$password=$this->input->post('user_password');
		$this->load->model('User_Model'); 
		$result = $this->User_Model->login($username, $password);
		if($result) 
		{
			$sess_array = array();
		 	foreach($result as $row) 
		 	{
		 		$sess_array = array('uname_surname' => $row->uname_surname,'user_id' => $row->user_id,'user_email' => $row->user_email,'user_authority' => $row->user_authority);
			    $this->session->set_userdata('logged_in', $sess_array);
			    if($row->user_authority=="admin")
			    {
			    	$this->session->set_userdata('logged_in', $sess_array);
				    $this->index();
			    }  
			    else
			    {
			    	$this->load->view('admin/login');
				    return FALSE;
			    }			 
		    }
		    $this->index();  
		    return TRUE;
		} 
		else 
		{
			$mesaj='Invalid username or password';
			$this->load->view('admin/login', $mesaj);
		  return FALSE;
		}	
    }

    function logout()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        $this->index();
    }


}
?>