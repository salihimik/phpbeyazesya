<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
			
	}	

    public function index()
    { 
        $query= $this->db->query('SELECT * FROM company_about');
		$data2["veri"]=$query->result();

    	$query=$this->db->get("settings");
    	$veri["veri"]=$query->result();
		$veri["page"]="home";
		$veri["title2"]="Ana Sayfa";
		$query= $this->db->query('SELECT * FROM products WHERE p_slider="Evet"');
		$data["slider"]=$query->result();
		$query= $this->db->query('SELECT * FROM newscast order by nc_date desc limit 0,1');
		$data2["haber"]=$query->result();
		$query= $this->db->query('SELECT * FROM products WHERE p_screen="Evet" order by p_date desc limit 0,5'); 
		$data2["urun"]=$query->result();
		$this->load->view('header',$veri);
		$this->load->view('slider',$data);
		$this->load->view('content',$data2);
		$this->load->view('footer');
		
	}

	public function contact()
	{
		$query=$this->db->get("settings");
    	$veri["veri"]=$query->result();
		$veri["page"]="contact";
		$veri["title2"]="İletişim";
		$query=$this->db->get("company_about"); 
		$data["veri"]=$query->result(); 
		$this->load->view('header',$veri);		
		$this->load->view('contact',$data);
		$this->load->view('footer');
	}	
	
	public function forgotpass()
	{
		$query=$this->db->get("settings");
    	$veri["veri"]=$query->result();
		$veri["page"]="bos";
		$veri["title2"]="Parolamı Unuttum";
		$this->load->view('header',$veri);		
		$this->load->view('forgotpass');
		$this->load->view('footer');
	}
	

    //-------------------------------------------------- USER ---------------------------------------
     
     public function insert_user() 
	{
		$this->load->model('User_Model');
		$data=array(
		'uname_surname' => $this->input->post('uname_surname'),
		'user_email' => $this->input->post('user_email'),
		'user_gender' => $this->input->post('user_gender'),
		'user_password' => $this->input->post('user_password')		
		);
		$this->User_Model->users_insert($data);		 
		
		$this->login();
		
	}


	public function users_insert() // yeniuye
	{		 
		
		$query=$this->db->get("settings");
    	$veri["veri"]=$query->result();
		$veri["page"]="users_insert";
		$veri["title2"]="Kayıt Ol";
	
		$this->load->view('header',$veri);		
		$this->load->view('users_insert');
		$this->load->view('footer');		
				
	}

	public function users_edit() // yeniuye
	{		 
		if(!$this->session->userdata('logged_inh')) 
        {
			$this->login();
		}
		else
		{
			$query=$this->db->get("settings");
			$veri["veri"]=$query->result();
			$veri["page"]="users_edit";
			$veri["title2"]="Bilgilerim";
			
			$this->load->view('header',$veri);		
			$this->load->view('users_edit');
			$this->load->view('footer');
		}		
				
	}

	public function user_update($user_id) // uye_guncelle
	{  		
		$this->load->model('User_Model'); 
		$data=array(
		'uname_surname' => $this->input->post('uname_surname'),
		'user_email' => $this->input->post('user_email'),
		'user_gender' => $this->input->post('user_gender'),
		'user_password' => $this->input->post('user_password')		
		);		
		$this->User_Model->users_update($data,$user_id); 
		redirect("home");
		 
	}

	//-------------------------------------------------- PRODUCTS ------------------------------------
     
     public function products_washer()  // Çamaşır Makinesi
	{
		$query=$this->db->get("settings");
    	$veri["veri"]=$query->result();
		$veri["page"]="products_washer";
		$veri["title2"]="Çamaşır Makinesi";
		$query= $this->db->query('SELECT * FROM products WHERE p_type="camasir"'); 
		$data["veri"]=$query->result();
		$this->load->view('header',$veri);				
		$this->load->view('products_washer',$data);
		$this->load->view('footer');
	}
	public function products_bakery()  // Fırın
	{
		$query=$this->db->get("settings");
    	$veri["veri"]=$query->result();
		$veri["page"]="products_bakery";
		$veri["title2"]="Fırınlar";
		$query= $this->db->query('SELECT * FROM products WHERE p_type="firin"'); 
		$data["veri"]=$query->result();
		$this->load->view('header',$veri);				
		$this->load->view('products_bakery',$data);
		$this->load->view('footer');
	}
	public function products_dishwasher() //products_dishwasher 
	{
		$query=$this->db->get("settings");
    	$veri["veri"]=$query->result();
		$veri["page"]="products_dishwasher";
		$veri["title2"]="Bulaşık Makinesi";
		$query= $this->db->query('SELECT * FROM products WHERE p_type="bulasik"'); 
		$data["veri"]=$query->result();
		$this->load->view('header',$veri);				
		$this->load->view('products_dishwasher',$data);
		$this->load->view('footer');
	}
	
	public function products_fridge() //products_fridge 
	{
		$query=$this->db->get("settings");
    	$veri["veri"]=$query->result();
		$veri["page"]="products_fridge";
		$veri["title2"]="Buzdolabı";
		$query= $this->db->query('SELECT * FROM products WHERE p_type="buzdolabi"'); 
		$data["veri"]=$query->result();
		$this->load->view('header',$veri);				
		$this->load->view('products_fridge',$data);
		$this->load->view('footer');
	}
	
	public function product_detail($id) // detay             
	{
		$query=$this->db->get("settings");
    	$veri["veri"]=$query->result();
		$veri["page"]="bos";
		$veri["title2"]="Ürün Detayı";
		$query = $this->db->get_where("products",array("p_id"=>$id)); 
        $data['veri'] = $query->result(); 
	
		$this->load->view('header',$veri);		
		$this->load->view('product_detail',$data);
		$this->load->view('footer');
	}


	//-------------------------------------------------- NEWSCAST ------------------------------------

     public function newscast() // haberler
	{
		$query=$this->db->get("settings");
    	$veri["veri"]=$query->result();
        $veri["page"]="bos";
		$veri["title2"]="Haberler";
		$query= $this->db->query('SELECT * FROM newscast order by nc_date desc'); 
		$data["newscast"]=$query->result();
		$this->load->view('header',$veri);		
		$this->load->view('newscast',$data);
		$this->load->view('footer');
	}


	//-------------------------------------------------- MESSAGE---------------------------------------

    public function sendToMessage() // mesaj_kaydet
	{
		if(!$this->session->userdata('logged_inh')) 
        {
			$this->login();
		}
		else
		{
			$this->load->model('User_Model');
			$data=array(
                'mes_sender' => $this->input->post('adsoy'),
                'mes_email' => $this->input->post('email'),
                'mes_detail' => $this->input->post('mesaj')	
             );
            $this->User_Model->message_insert($data); 
			$this->session->set_flashdata("mesaj_sent","<script>alert('Mesajınınz  başarı ile alındı.Teşekkür ederiz')</script>");
	        $query=$this->db->get("settings"); 
	        $data["veri"]=$query->result(); 
	       
	        $config = Array(
	        	'protocol' => 'smtp',
	        	'smtp_host' => $data["veri"][0]->smtpserver,
	        	'smtp_port' => $data["veri"][0]->smtpport,
	        	'smtp_user' => $data["veri"][0]->smtpemail, 
	        	'smtp_pass' => $data["veri"][0]->password, 
	        	'mailtype' => 'html',
	        	'charset' => 'utf-8',
	        	'wordwrap' => TRUE
	        );
	        $adsoy=$this->input->post('adsoy');
	        $email=$this->input->post('email');
	        $mesaj="Sayın : ".$adsoy."<br> Göndermiş olduğunuz mesaj tarafımızca alınmıştır.<br>İlginiz için Teşekkür ederiz<br>";
		    $mesaj.=$data["veri"][0]->name."<br>";
		    $mesaj.=$data["veri"][0]->adres."<br>";
		    $mesaj.=$data["veri"][0]->sehir."<br>";
		    $mesaj.=$data["veri"][0]->tel."<br>";
		    $mesaj.=$data["veri"][0]->fax."<br>";
		    $mesaj.=$data["veri"][0]->email."<br>";
		    $mesaj.="Gönderdiğiniz Mesaj Aşğıdaki gibidir<br>";
		    $mesaj.=$this->input->post('mesaj');

		    $this->load->library('email', $config);
		    $this->email->set_newline("\r\n");
		    $this->email->from($data["veri"][0]->smtpemail); 
		    $this->email->to($email); 
		    $this->email->subject('SLH Beyaz Eşya Bilgilendirme Mesajı');
		    $this->email->message($mesaj);

		    if($this->email->send()) 
		    	$this->session->set_flashdata("email_sent","Email başarı ile gönderildi."); 
		   else 
		   {
		       $this->session->set_flashdata("email_sent","Email Gondermede Hata Oluştu."); 
           }	  
		}	
		$this->contact();
	}  
 
	//--------------------------------------------------- ABOUT ---------------------------------------
     public function about_us()// about
	{
		$query=$this->db->get("settings");
    	$veri["veri"]=$query->result();
		$veri["page"]="about_us";
		$veri["title2"]="Hakkımızda";
		$query=$this->db->get("company_about"); 
		$data["veri"]=$query->result(); 
		$this->load->view('header',$veri);		
		$this->load->view('about_us',$data);
		$this->load->view('footer');
	}
	//------------------------------------------------------IMAGE---------------------------------------  

	//------------------------------------------------------LOGIN---------------------------------------


	public function login()
	{ 
		$query=$this->db->get("settings");
    	$veri["veri"]=$query->result();
		$veri["page"]="login";
		$veri["title2"]="LOGIN";
		$user=$this->input->post('email');
		$sifre=$this->input->post('sifre');
		
		$this->load->model('User_Model');
		$result = $this->User_Model->login($user,$sifre);
		
		if($result) {
             $sess_array = array();
             foreach($result as $row) {
                 $sess_array = array(
				 'user_id' => $row->user_id,
				 'user_authority' => $row->user_authority,
				 'user_email' => $row->user_email,
				 'uname_surname' => $row->uname_surname
				 );
                
                 $this->session->set_userdata('logged_inh', $sess_array);
				$this->load->view('header',$veri);				
				redirect(base_url().'home');
				$this->load->view('footer');
                 }
				 
          		return TRUE;
          } 
		  else 
		  {
              
            $hata= 'Invalid username or password';
            
			$this->load->view('header',$veri);
			$this->load->view('login');
			$this->load->view('footer');
		   }
            return FALSE;
    }
	
	 function logout() {
         $this->session->unset_userdata('logged_inh');
         $this->session->sess_destroy();
         $this->login();
     }
}
?>