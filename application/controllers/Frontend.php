<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends Front_Controller
{

	var $data = array();

	function __construct()
	{
		parent::__construct();

		$this->data['app_path'] = $this->config->item('app_path');
		$this->data['app_name'] = $this->config->item('app_name');
		$this->data['meta_title'] = $this->config->item('meta_title');
		$this->data['meta_description'] = $this->config->item('meta_description');
		$this->data['meta_keywords'] = $this->config->item('meta_keywords');

		$this->data['success'] 	 = '';
		$this->data['error'] 		 = '';
		$this->data['info'] 		 = '';
		$this->data['warning'] 	 = '';

		$this->data['app_email'] = $this->config->item('email');
		$this->data['app_phone'] = $this->config->item('phone');
		$this->data['app_address'] = $this->config->item('address');
		$this->data['app_city'] = $this->config->item('city');
		$this->data['app_state'] = $this->config->item('state');
		$this->data['app_country'] = $this->config->item('country');

		$this->data['app_latitude'] = $this->config->item('latitude');
		$this->data['app_longitude'] = $this->config->item('longitude');

		$this->load->model(array('Customer_model'));
		$this->load->library(array('ref_id'));
		$this->load->helper('string', 'form', 'url');

	}

	public function index()
	{

		$data = $this->data;



		//       echo "<pre>";
		// print_r($data['category_option']);exit();

		$data['page_title']				= 'Amass';
		$data['meta_title'] 			= 'Amass';
		$data['meta_description'] = '';
		$data['meta_keywords'] 		= '';
		$data['menu_active'] = 'home';

		


		$this->view('home', $data);
	}

	public function amc_purchase_offers()
	{

		
		$data = $this->data;
		$data['page_title'] = "amc_purchase_offers";

		$this->view('amc_purchase_offers', $data);

	}

		

	

	function register($ajax = false)
	{

		$data = $this->data;
		$data['page_title'] = "Registration";
		$user_option = array('' => '--- Select ----- ');
		$user_type = $this->Customer_model->get_user_type();

		foreach ($user_type as  $value) {

			$user_option[$value->user_id] = $value->user_name;
		}
		$data['user_option'] = $user_option;
		$data['form_action'] = "Frontend/register";
		$state = $this->Customer_model->get_state_list();
		foreach ($state as  $value) {

			$state_option[$value->id] = $value->name;
		}

		$data['state_option'] = $state_option;

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		// $this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[32]|is_unique[users.username]',array('is_unique' => 'User Name Already Exist'));
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[128]|is_unique[users.email]', array('is_unique' => 'Email Address Already Exist'));
		
		if ($this->input->post('user_type')) {
			$this->form_validation->set_rules('user_type', 'user type', 'trim|required');
		}
		if ($this->form_validation->run() == false) {

				$this->view('register', $data);
			} else {

				$password = $this->input->post('password');
				$cpassword = $this->input->post('cpassword');
				if ($password != $cpassword) {
					$this->session->set_flashdata('error', 'Password does not Password ');
					redirect('register');
				}

				if ($this->input->post('user_type')) {
					$save['user_type']				        = $this->input->post('user_type');
				}
				$save['fname']					    = $this->input->post('fname');
				$save['lname']					    = $this->input->post('lname');
				$save['username']					= $this->input->post('username');
				$save['email']						= $this->input->post('email');
				
				$save['password']					= $this->input->post('password');
				
				$save['status']						= 1;
				$save['confirm_code']				= "DM".$id.rand(10, 99);
				$save['created']					= date('Y-m-d H:i:s');
				$save['modified']					= date('Y-m-d H:i:s');

				// save the user info and get their new id
				//print_r($save);exit();
				$id = $this->Customer_model->save_user($save);
				/* send an email */

				$this->load->library('email');
				$config['mailtype'] = 'html';
				$this->email->initialize($config);
				$this->email->from($this->config->item('email'), $this->config->item('company_name'));
				$this->email->to($save['email']);
				// $this->email->bcc($this->config->item('email'));
				$welcome = "Your Resigration successfully done After verified this code. <br> <h4>Confirmation code: '".$save['confirm_code']."'";
				$this->email->subject('Welcome to Amass');
				$this->email->message($welcome);

				$this->email->send();
 					$this->session->set_flashdata('error','Your Resigration successfully done!');
				$this->Customer_model->login($save['email'], $this->input->post('password'));

							redirect('Frontend/login');
			}
	}



	// 	function success()

	//       {

	// 	$profile_id = $this->ref_id->get_profile_id();
	// 	$data = $this->data;
	// 	$data['page_title'] = "Confirm";
	// 	$data['form_action']  = "Frontend/success";
	// 	$data['profile_id'] = $profile_id;

	// 	$this->load->library('form_validation');
	// 	$this->form_validation->set_error_delimiters('<div class="no">', '</div>');
	// 	$this->form_validation->set_rules('fname', 'First Name', 'trim|required|max_length[32]');
	// 	$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|max_length[32]');


	// 	if($this->form_validation->run() == FALSE)
	// 	{
	// 		$this->view('register2',$data);
	// 	}
	// 	else
	// 	{
	// 		$save = array();
	// 		$save['fname'] = $this->input->post('fname');
	// 		$save['lname'] = $this->input->post('lname');
	// 		$save['profile_id'] = $profile_id;

	// 		$this->Customer_model->save_personal_info($save);
	// 		$user_type = $this->ref_id->get_user_type();

	// 		switch ($user_type) {
	// 			case '1':
	// 				redirect('Doctor');
	// 				break;
	// 			case '3':
	// 				redirect('Pharmacy');
	// 				break;


	// 			default:
	// 				redirect('Patient');
	// 				break;
	// 		}

	// 	}

	// }



	function login($ajax = false)
	{
		$data = $this->data;
		$data['page_title'] = "amass | amass";
		$data['meta_title'] = "login";
		$data['form_action'] = "login";


		$this->form_validation->set_error_delimiters('<div>', '</div>');
		$this->form_validation->set_rules('username', 'username', 'trim|required|max_length[128]');
		$this->form_validation->set_rules('password', 'password', 'required');
		if ($this->form_validation->run() == false) {

				$this->view('login', $data);
			} else {
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$result = $this->Customer_model->login($username, $password);
				//echo $result; exit();
				if ($result) {

					switch ($result) {
						case '1':
							redirect('customers');
							break;
						case '2':
							redirect('Dealer');
							break;
						case '4':
							redirect('serviceagent');
							break;
						case '3':
							redirect('Seller');
							break;					

						default:
							redirect('Seller');
							break;
					}
				} else {
						$this->session->set_flashdata('error', 'Invalid Credentails !');
						redirect('login');
					}
			}
	}







	function view_detail()
	{

		$data = $this->data;
		$data['page_title'] = 'View Detail';

		$this->Customer_model->view_detail();
		$this->view('listing_detail', $data);
	}

	function contact()
	{
		$data = $this->data;
		$data['page_title'] = "contact";
		$this->view('contact', $data);
	}








	function send()
	{

		$save = array();
		$sendemail = "sm@accuprints.in";
		$save['name'] = $this->input->post('name');
		$save['email'] = $this->input->post('email');
		$save['phone'] = $this->input->post('phone');
		$save['message'] = $this->input->post('message');
		$save['subject'] = 'Contact detail filled by website';


		//Load email library
		date_default_timezone_set("Asia/Kolkata");

		$this->load->library('email');
		$this->email->from($save['email'], $save['name']);
		$this->email->to($sendemail);
		$this->email->subject($save['subject']);
		$all = 'Name:' . set_value('name') . "\n<br>" . 'Email :' . ' ' . set_value('email') . "\n<br>" . 'Phone :' . ' ' . set_value('phone') . "\n<br>" . 'Message :' . ' ' . set_value('message');
		$this->email->message($all);

		// $this->email->message($save['message']);
		//Send mail
		if ($this->email->send()) {

				$this->session->set_flashdata("email_sent", "Congragulation Email Send Successfully.");
			} else {
				echo $this->email->print_debugger();
				exit();
				$this->session->set_flashdata("email_sent", "You have encountered an error");
			}

		redirect('Frontend/contact');
	}










	function reset_forgate_password()
	{
		$data = $this->data;

		$this->view('reset_forgate_password', $data);
	}



	function change_password()
	{
		$data = $this->data;
		$email = $this->input->post('email');
		$this->load->helper('url_encryption_helper');
		$user = $this->ref_id->get_forget_user_detail($email);
		// print_r($user);exit();
		// echo $user->email; exit();
		if ($user) {

			$url = base_url('Frontend/reset_forgate_password') . '/' . encode_url($email);


			// echo $url;
			// exit;
			// email
			$this->load->library('email');
			//            $config = Array(
			//     'protocol' => 'smtp',
			//     'smtp_host' => 'ssl://smtp.googlemail.com',
			//     'smtp_port' => 465,
			//     'smtp_user' => 'rakeshmaurya79@gmail.com',
			//     'smtp_pass' => 'unfvmfgybnvfwwbr',
			//     'mailtype'  => 'html', 
			//     'charset'   => 'iso-8859-1'

			// );


			$welcomemsg = "<h4><img src='" . base_url('assets/images/rozpaisakamaologo1.png') . "' width='67px'> </h4>";
			$welcomemsg .= "<h1>Hi " . $user->fname . "/,</h1> <br> Reset your password, and we'll get you on your way. <br> To change your Rozpaisakamao password, <a href=" . $url . ">click here </a> or paste the following link into your browser:   <br> <h4>" . $url . " </h4> <br>This link will expire in 24 hours, so be sure to use it right away.<br>Thank you for using Rozpaisakamao!<br>The Rozpaisakamao Team ";

			//$this->email->initialize($config);
			//  $this->email->from('info@rozpaisakamao.com','rozpaisakamao.com');
			//  $this->email->to($email);
			//  $this->email->bcc($this->config->item('email'));
			//  $this->email->subject('Forget Password');
			//  $this->email->message($welcomemsg);
			// if ($this->email->send()) {
			// 	echo "<pre>";
			// 	echo $this->email->print_debugger();
			//  	echo 1 ;
			//  }else{
			//  	echo "<pre>";
			//  	echo $this->email->print_debugger();
			//  	echo 2 ;
			//  }
		}


		$this->view('change_password', $data);
	}









	// function sub_category()
	// {
	// $save['medicine_name']= $this->input->post('value');
	//  // print_r($save['medicine_category']); exit;
	// $result=$this->Customer_model->sub_med_category($save);
	//  $rr = array();
	// 			$rr = '  <ul class="list-group list-group-header collapse in" id="coolpan" >';
	// 			foreach($result as $result){
	// 			 $rr .= ' <li  class="list-group-item list-group-body text-left">'.$result->sub_med_name.'</a></li> ' ;
	// 			}


	// 			$rr .= '</ul>';
	// 				 print_r($rr);	 

	// }


	function sub_category()
	{
		$data = $this->data;
		$data['page_title'] = "Sub-Category";
		$data['products'] = $this->Customer_model->get_sub_category();
		// print_r($data['products']); exit();
		$this->view('sub_category', $data);
	}


	function visiting()
	{
		$data = $this->data;
		$data['page_title'] = "visiting";
		$data['products'] = $this->Customer_model->get_all_product();
		// print_r($data['products']); exit();
		$this->view('visiting', $data);
	}



	function idcard()
	{
		$data = $this->data;
		$data['page_title'] = "idcard";
		$data['products'] = $this->Customer_model->get_all_idcard();
		// print_r($data['products']); exit();
		$this->view('idcard', $data);
	}


	function calender()
	{
		$data = $this->data;
		$data['page_title'] = "calender";
		$data['products'] = $this->Customer_model->get_all_calender();
		// print_r($data['products']); exit();
		$this->view('calender', $data);
	}



	function singleproduct($category_name=false, $slug=false)
	{

		$product_id;
		$data = $this->data;

		$product_id=  $this->Customer_model->user_iddss($slug);
		//print_r($product_id); exit();
		$data['metas'] = $this->Customer_model->get_metap($product_id);
		// print_r($data['metas']); exit();
		@$data['page_title'] = $data['metas']->page_title;
		@$data['meta_description'] = $data['metas']->meta_description;
		@$data['meta_keywords'] = $data['metas']->meta_keywords;



		$data['products'] = $this->Customer_model->view_all_product($product_id);
		// print_r($data['products'] ); exit();


		// print_r($save ); exit();
		$data['related'] = $this->Customer_model->get_products($data['products']);





		$this->view('singleproduct', $data);
	}

	// function getcategory($category_id)
	// {



	// }

	function sub_sub_category($slug=false)
	{
		
		$data = $this->data;
		//print_r($slug); exit();

		$data['category_name']=  $this->Customer_model->user_iddsss($slug);
         //print_r($data['category_name']); exit();

		$user_id=  $this->Customer_model->user_idd($slug);
	    
		$data['metas'] = $this->Customer_model->get_metas($user_id);
		// print_r($data['metas']); exit();
		@$data['page_title'] = $data['metas']->page_title;
		@$data['meta_description'] = $data['metas']->meta_description;
		@$data['meta_keywords'] = $data['metas']->meta_keywords;
		$data['hidden_text']=$this->Customer_model->hiddentext($slug);
		
		$data['sub_sub_category'] = $this->Customer_model->get_all_sub_category($user_id);
		
			//$allinfo = $data['sub_sub_category'];
			//$category_id = $allinfo[0]->user_id;
			//print_r($category_id); exit();		
			//$category_name=$this->Customer_model->get_category_name($category_id);
			//$data['category_name'] =$category_name;
				//print_r($data['category_name']); exit();//


		//print_r($data['sub_sub_category']); exit();
		$this->view('sub_sub_category', $data);
	}

	function allproducts($category_name=false, $slug=false)
	{

		$data = $this->data;
		//print_r($slug); exit();
		$data['category_name']=  $this->Customer_model->sub_cat_get($slug);
			//print_r($data['category_names']); exit();
		$sub_id=$this->Customer_model->user_iddp($slug);
		//print_r($sub_id); exit();

		$data['metas'] = $this->Customer_model->get_meta($sub_id);
		// print_r($data['metas']); exit();
		@$data['page_title'] = $data['metas']->page_title;
		@$data['meta_description'] = $data['metas']->meta_description;
		@$data['meta_keywords'] = $data['metas']->meta_keywords;
		$data['sub_sub_categories'] = $this->Customer_model->get_all_sub_categories($sub_id);

		
		//print_r($sub_sub_categories); exit();
		$this->view('allproducts', $data);
	}


	function aboutus()
	{

		$data = $this->data;
		@$data['page_title'] = "AccuPrints | Printing Gift, Printing Services in Gurgaon, Printing vendors in Gurgaon";
		@$data['meta_description'] = "AccuPrints is the printers in Gurgaon, T-shirt printer in Gurgaon, Bag printer in Gurgaon, Digital Printing Service in Gurgaon, Identity cards Printers Company based in Gurgaon, India. Call now for your Printing Services needs";
		@$data['meta_keywords'] = "printers in Gurgaon, T-shirt  printer in Gurgaon, Printing Gift , Bag  printer in Gurgaon, Digital Printing Service in Gurgaon, Identity cards printers in Gurgaon, Lanyard printer in Gurgaon , Sticker  printer in Gurgaon, Printers for Digital Lanyard in Gurgaon, Printers for Mug";

		// print_r($data['products']); exit();
		$this->view('aboutus', $data);
	}

	function clients()
	{

		$data = $this->data;
		@$data['page_title'] = "About Us";
		@$data['meta_description'] = "Description";
		$data['meta_keywords'] = "keywords";

		$data['clients'] = $this->Customer_model->get_clients();
		$this->view('clients', $data);
	}
}
