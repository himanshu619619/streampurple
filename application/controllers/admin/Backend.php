<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Backend extends Admin_Controller
{

	var $data = array();
	var $for_form_user_id = false;
	public function __construct()
	{
		parent::__construct();
		if (!$this->session_data) {
			redirect($this->admin_folder . '/login');
		}
		$this->load->model(array('User_model', 'Admin_model', 'Location_model', 'Setting_model'));
		$this->load->helper(array('Format'));
		$this->data['app_path'] = $this->config->item('app_path');
		$this->data['app_name'] = $this->config->item('app_name');
		$this->data['meta_title'] = $this->config->item('meta_title');
		$this->data['meta_description'] = $this->config->item('meta_description');
		$this->data['meta_keywords'] = $this->config->item('meta_keywords');
		$this->data['success'] 	 = '';
		$this->data['error'] 		 = '';
		$this->data['info'] 		 = '';
		$this->data['warning'] 	 = '';
		$this->load->library('encrypt');
		//$this->load->library('slug' );
		$this->load->helper('url_encryption');
	}
	public function index()
	{
		$this->lang->load('dashboard');
		// $controller = $this->router->fetch_class();
		// $method = $this->router->fetch_method();
		//var_dump($abc);
		$data = $this->data;
		$this->view('dashboard', $data);
	}
	public function setting_form()
	{
		$data = $this->data;
		$this->lang->load('setting');
		$data['heading_title'] 	= lang('heading_title');
		$data['form_action'] 	= site_url($this->admin_folder . '/setting/');
		$config_data = $this->Setting_model->getSettings('application');
		$data['config']  = $config_data;
		$data['countries_menu'] = $this->Location_model->getCountriesMenu();
		if (!empty($config_data['country_id'])) {
			$data['zones_menu'] = $this->Location_model->getZonesMenu($config_data['country_id']);
		} else {
			$data['zones_menu'] = array();
		}
		$this->form_validation->set_error_delimiters('<span>', '</span>');
		$this->form_validation->set_rules('app_name', 'lang:text_application_name', 'required');
		$this->form_validation->set_rules('phone', 'lang:text_phone', 'required');
		$this->form_validation->set_rules('email', 'lang:text_email', 'required|valid_email');
		$this->form_validation->set_rules('address', 'lang:text_address', 'required');
		$this->form_validation->set_rules('city', 'lang:text_city', 'required');
		$this->form_validation->set_rules('zip', 'lang:text_zip', 'required');
		$this->form_validation->set_rules('country_id', 'lang:text_country', 'required');
		$this->form_validation->set_rules('state_id', 'lang:text_state', 'required');
		$this->form_validation->set_rules('meta_title', 'lang:text_meta_title', 'required');
		if ($this->form_validation->run() == false) {
			if ($this->session->flashdata('success')) {
				$data['success'] = $this->session->flashdata('success');
			}
			if ($this->session->flashdata('error')) {
				$data['error'] = $this->session->flashdata('error');
			}
			if ($this->session->flashdata('info')) {
				$data['info'] = $this->session->flashdata('info');
			}
			if ($this->session->flashdata('warning')) {
				$data['warning'] = $this->session->flashdata('warning');
			}
			if (function_exists('validation_errors') && validation_errors() != '') {
				$data['error'] = validation_errors();
			}

			$this->view('setting_form', $data);
		} else {

			$save = array();
			$save = $this->input->post();

			$country_id = $this->input->post('country_id');
			$state_id 	= $this->input->post('state_id');
			$country = $this->Location_model->getCountry($country_id);
			$state = $this->Location_model->getZone($state_id);
			if ($country) {
				$save['country'] = $country->name;
			}

			if ($state) {
				$save['state'] 	 = $state->name;
			}
			$this->Setting_model->saveSettings('application', $save);

			$this->session->set_flashdata('success', lang('message_save_setting'));
			redirect($this->admin_folder . '/setting');
		}
	}
	public function user_form($user_id = false)
	{
		$data = $this->data;
		if ($this->session_data['group_id'] != 1) {
			$user_id = $this->session_data['id'];
		}

		if ($user_id && !$this->User_model->checkUser($user_id)) {
			$this->view('error', $data);
		} else {
			$data['form_title'] 	= 'Add New User';
			$data['form_action'] 	= site_url($this->admin_folder . '/users/add');
			$data['user_id'] 			= $user_id;
			$data['group_id'] 		= '';
			$data['access_code'] 	= '';
			$data['name'] 				= '';
			$data['username'] 		= '';
			$data['email'] 				= '';
			$data['phone'] 				= '';
			$data['status'] 			= '';
			$group_options = array('' => '-- Select Group --');
			$groups = $this->User_model->getGroups();
			foreach ($groups as $group) {
				$group_options[$group->group_id] = $group->name;
			}
			$data['group_options'] = $group_options;
			$status_options = array('' => '-- Select Status --', '1' => 'Active', '0' => 'Deactive');
			$data['status_options'] = $status_options;
			if ($user_id && $user = $this->User_model->getUser($user_id)) {
				$data['form_title'] 	= 'Edit User';
				$data['form_action'] 	= site_url($this->admin_folder . '/users/edit/' . $user_id);

				$this->for_form_user_id = $user_id;
				$data['user_id']			= $user_id;
				$data['group_id'] 		= $user['group_id'];
				$data['access_code'] 	= $user['access_code'];
				$data['name'] 				= $user['name'];
				$data['username'] 		= $user['username'];
				$data['email'] 				= $user['email'];
				$data['phone'] 				= $user['phone'];
				$data['status'] 			= $user['status'];
			}
			$this->form_validation->set_error_delimiters('<span>', '</span>');
			$this->form_validation->set_rules('group_id', 'Group', 'trim|required|numeric');
			$this->form_validation->set_rules('name', 'Name', 'required|max_length[255]');
			$this->form_validation->set_rules('username', 'User Name', 'trim|required|max_length[15]|callback_check_username');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[255]|valid_email|callback_check_email');
			$this->form_validation->set_rules('phone', 'Phone', 'trim|required|max_length[255]');
			$this->form_validation->set_rules('status', 'Status', 'required|numeric');
			if ($this->input->post('password') != '' || $this->input->post('confirm') != '' || !$user_id) {
				$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
				$this->form_validation->set_rules('rpassword', 'Re-Type Password', 'required|matches[password]');
			}
			if ($this->form_validation->run() == false) {
				if ($this->session->flashdata('success')) {
					$data['success'] = $this->session->flashdata('success');
				}
				if ($this->session->flashdata('error')) {
					$data['error'] = $this->session->flashdata('error');
				}
				if ($this->session->flashdata('info')) {
					$data['info'] = $this->session->flashdata('info');
				}
				if ($this->session->flashdata('warning')) {
					$data['warning'] = $this->session->flashdata('warning');
				}
				if (function_exists('validation_errors') && validation_errors() != '') {
					$data['error'] = validation_errors();
				}

				$this->view('user_form', $data);
			} else {

				$save = array();
				$group_info = $this->User_model->getGroup($this->input->post('group_id'));
				$save['user_id']			= $user_id;
				$save['group_id'] 		= $this->input->post('group_id');
				$save['access_code'] 	= $group_info->code;
				$save['name'] 				= $this->input->post('name');
				$save['username'] 		= $this->input->post('username');
				$save['email'] 				= $this->input->post('email');
				$save['phone'] 				= $this->input->post('phone');
				$save['status'] 			= $this->input->post('status');

				if ($this->input->post('password') != '' || !$user_id) {
					$save['password']	= sha1($this->input->post('password'));
				}
				if ($user_id) {
					$save['modified']	=	date('Y-m-d H:i:s');
				} else {
					$save['created']	=	date('Y-m-d H:i:s');
					$save['modified']	=	date('Y-m-d H:i:s');
				}
				$user_id = $this->User_model->saveUser($save);

				$this->session->set_flashdata('success', 'User has been saved!');
				redirect($this->admin_folder . '/users');
			}
		}
	}
	public function users()
	{
		$data = $this->data;
		$this->lang->load('user');
		$data['page_heading'] = lang('heading_title');
		$data['page_title'] 	= lang('heading_title');

		$data['query'] = '';
		if ($this->input->get_post('query')) {
			$data['query'] = $this->input->get_post('query');
		}
		if ($this->input->get_post('page')) {
			$page = $this->input->get_post('page');
		}
		$data['row'] = 20;
		if ($this->input->get_post('row')) {
			$data['row'] = $this->input->get_post('row');
		}
		$page 			= (isset($page) && ((int)$page > 1)) ? (int)$page : 1;
		$limit 			= $data['row'];
		$offset			= ($page - 1) * $limit;

		$users = $this->User_model->getUsers(array('limit' => $limit, 'offset' => $offset, 'filter' => $data['query']));
		$total_user = $this->User_model->getTotalUsers(array('filter' => $data['query']));
		$data['users'] = $users;
		$this->load->library('pagination');

		$config['base_url']			= site_url($this->admin_folder . '/users/');
		$config['total_rows']		= $total_user;
		$config['per_page']			= $limit;
		$data['pagination_string'] = lang('text_showing') . ' ' . ($offset + 1) . ' - ' . (($total_user < ($page * $limit)) ? $total_user : ($page * $limit)) . ' of ' . $total_user . ' ' . lang('text_items');
		$this->pagination->initialize($config);
		if ($this->session->flashdata('success')) {
			$data['success'] = $this->session->flashdata('success');
		}
		if ($this->session->flashdata('error')) {
			$data['error'] = $this->session->flashdata('error');
		}
		if ($this->session->flashdata('info')) {
			$data['info'] = $this->session->flashdata('info');
		}
		if ($this->session->flashdata('warning')) {
			$data['warning'] = $this->session->flashdata('warning');
		}
		$this->view('users', $data);
	}

	function check_username($str)
	{
		$user = $this->User_model->getUserByUsername($str, $this->for_form_user_id);
		if ($user) {
			$this->form_validation->set_message('check_username', 'User Name is already exist!');
			return false;
		} else {
			return true;
		}
	}
	function check_email($str)
	{
		$user = $this->User_model->getUserByEmail($str, $this->for_form_user_id);
		if ($user) {
			$this->form_validation->set_message('check_email', 'Email is already exist!');
			return false;
		} else {
			return true;
		}
	}
	public function user_groups()
	{
		$data = $this->data;
		$data['page_heading'] = 'User Group';
		$data['page_title'] = 'User Group';

		$user_groups = $this->User_model->getUserGroups();
		$data['user_groups'] = $user_groups;
		if ($this->session->flashdata('success')) {
			$data['success'] = $this->session->flashdata('success');
		}
		if ($this->session->flashdata('error')) {
			$data['error'] = $this->session->flashdata('error');
		}
		if ($this->session->flashdata('info')) {
			$data['info'] = $this->session->flashdata('info');
		}
		if ($this->session->flashdata('warning')) {
			$data['warning'] = $this->session->flashdata('warning');
		}
		$this->view('user_groups', $data);
	}
	public function user_group_form($group_id = false)
	{
		$data = $this->data;
		if ($this->session_data['group_id'] != 1) {
			$group_id = $this->session_data['id'];
		}

		if ($group_id && !$this->User_model->getUserGroup($group_id)) {
			$this->view('error', $data);
		} else {
			$data['form_title'] 	= 'Add New Group';
			$data['form_action'] 	= site_url($this->admin_folder . '/user-group/add');
			$data['all_access'] = $this->controller_list;
			$data['method_names'] = $this->User_model->controllerMethodNames();
			$data['group_id'] 		= $group_id;
			$data['code'] 				= '';
			$data['name'] 				= '';
			$data['permission'] 	= '';
			$data['priority'] 		= '';
			$group_options = array('' => '-- Select Group --');
			$groups = $this->User_model->getGroups();
			foreach ($groups as $group) {
				$group_options[$group->group_id] = $group->name;
			}
			$data['group_options'] = $group_options;
			$status_options = array('' => '-- Select Status --', '1' => 'Active', '0' => 'Deactive');
			$data['status_options'] = $status_options;
			if ($group_id && $group = $this->User_model->getUserGroup($group_id)) {
				$data['form_title'] 	= 'Edit Group';
				$data['form_action'] 	= site_url($this->admin_folder . '/user-group/edit/' . $group_id);
				$data['group_id'] 		= $group_id;
				$data['code'] 				= $group['code'];
				$data['name'] 				= $group['name'];
				$data['permission'] 	= ($group['permission']) ? json_decode($group['permission']) : array();
				$data['priority'] 		= $group['priority'];
			}
			$this->form_validation->set_error_delimiters('<span>', '</span>');
			$this->form_validation->set_rules('group_id', 'Group', 'trim|numeric');
			$this->form_validation->set_rules('name', 'Name', 'required|max_length[255]');
			$this->form_validation->set_rules('code', 'Code', 'trim');
			$this->form_validation->set_rules('priority', 'Priority', 'required|numeric');
			if ($this->form_validation->run() == false) {
				if ($this->session->flashdata('success')) {
					$data['success'] = $this->session->flashdata('success');
				}
				if ($this->session->flashdata('error')) {
					$data['error'] = $this->session->flashdata('error');
				}
				if ($this->session->flashdata('info')) {
					$data['info'] = $this->session->flashdata('info');
				}
				if ($this->session->flashdata('warning')) {
					$data['warning'] = $this->session->flashdata('warning');
				}
				if (function_exists('validation_errors') && validation_errors() != '') {
					$data['error'] = validation_errors();
				}

				$this->view('user_group_form', $data);
			} else {

				$save = array();
				$save['group_id'] 		= $group_id;
				$save['code'] 				= '';
				$save['name'] 				= $this->input->post('name');
				$save['permission'] 	= ($this->input->post('permission')) ? json_encode($this->input->post('permission')) : json_encode(array());
				$save['priority'] 		= $this->input->post('priority');
				$group_id = $this->User_model->saveGroup($save);

				$this->session->set_flashdata('success', 'Group has been saved!');
				redirect($this->admin_folder . '/user-groups');
			}
		}
	}
	function select_category()
	{
		$data = $this->data;
		$data['page_heading'] = 'Medicine';
		$data['page_title'] = 'Medicine ';
		$disease = $this->Admin_model->get_category();
		$disease_option = array('' => '---select---');
		foreach ($disease as $key => $value) {
			$disease_option[$value->medicine_id] = $value->medicine_category;
		}
		$data['disease_option'] = $disease_option;
		$this->form_validation->set_rules('category', 'category', 'required');


		if ($this->form_validation->run() == false) {
			$this->view('select_category', $data);
		} else {
			$save['medicine_category'] = $this->input->post('category');
			$this->Admin_model->add_category($save);
			redirect('admin/Backend/select_category');
		}
	}
	function add_product($product_id = false)
	{
		$data = $this->data;
		$user_id_option = array('' => '---select---');
		$product_type = $this->Admin_model->type_product();
		foreach ($product_type as  $value) {

			$user_id_option[$value->user_id] = $value->user_name;
		}
		$data['user_id_option'] = $user_id_option;

		$sub_id_option = array('' => '---select---');
		$sub_ids = $this->Admin_model->categoriesss();
		foreach ($sub_ids as  $value) {

			$sub_id_option[$value->sub_id] = $value->category_name;
		}
		$data['sub_id_option'] = $sub_id_option;
		$data['sub_id'] = '';
		$data['user_id'] = '';
		$data['product_title'] = '';
		$data['product_desc'] = '';
		$data['product_sub_desc'] = '';
		$data['page_title'] = '';
		$data['meta_description'] = '';
		$data['meta_keywords'] = '';
		$data['availablity'] = '';
		$data['sku'] = '';

		$data['image'] = '';
		$data['image2'] = '';
		$data['image3'] = '';
		if ($product_id) {
			$data['form_action'] = 'admin/Backend/add_product/' . $product_id;
			$data['page_title'] = 'Edit Product';

			$product_detail = $this->Admin_model->get_product($product_id);
			// print_r($product_detail); exit();
			$data['user_id'] = $product_detail->user_id;
			$data['sub_id'] = $product_detail->sub_id;
			$data['product_title'] = $product_detail->product_title;
			$data['product_desc'] = $product_detail->product_desc;
			$data['availablity'] = $product_detail->availablity;
			$data['meta_keywords'] = $product_detail->meta_keywords;
			$data['meta_description'] = $product_detail->meta_description;
			$data['page_title'] = $product_detail->page_title;
			$data['sku'] = $product_detail->sku;
			$data['product_sub_desc'] = $product_detail->product_sub_desc;
			$data['image'] = $product_detail->image;
			$data['image2'] = $product_detail->image2;
			$data['image3'] = $product_detail->image3;
			$new_slug = $this->input->post('product_title');
		} else {
			$data['form_action'] = 'admin/Backend/add_product/';
			// $data['page_title'] = 'add product';
			$new_slug = $this->generate_url_slug($this->input->post('product_title'), 'products');
		}
		$data['productss'] = $this->Admin_model->hello();
		$this->form_validation->set_rules('product_title', 'product_title', 'required');
		//   $this->form_validation->set_rules('product_desc','product_desc','required');

		if ($this->form_validation->run() == false) {
			$this->view('add_product', $data);
		} else {
			//image upload
			$config['upload_path']          = './uploads/product_photo';
			$config['allowed_types']        = 'png|jpeg|jpg';
			// $config['max_size']             = 100;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$this->load->library('upload', $config);


			if (!$this->upload->do_upload('image')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$fileData1 = $this->upload->data();
			}
			if (!$this->upload->do_upload('image2')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$fileData2 = $this->upload->data();
			}
			if (!$this->upload->do_upload('image3')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$fileData3 = $this->upload->data();
			}
			$save = array();
			if ($fileData1['file_name']) {
				$path1 =  $fileData1;
				//                   //print_r($path);exit();
				$save['image'] = base_url() . 'uploads/product_photo/' . $path1['raw_name'] . $path1['file_ext'];
				//print_r($save['photo']);exit();
			}
			if ($fileData2['file_name']) {
				$path2 =  $fileData2;
				// }
				//print_r($path);exit();
				$save['image2'] = base_url() . 'uploads/product_photo/' . $path2['raw_name'] . $path2['file_ext'];
			}
			if ($fileData3['file_name']) {
				$path3 =  $fileData3;
				// }
				//print_r($path);exit();
				$save['image3'] = base_url() . 'uploads/product_photo/' . $path3['raw_name'] . $path3['file_ext'];
			}
			// $path3 =  $this->upload->data();
			// //print_r($path);exit();
			// $save['image3']=base_url().'uploads/product_photo/'.$path3['raw_name'].$path3['file_ext'];
			// //print_r($save['photo']);exit();
			$save['slug'] = $new_slug;
			$save['product_title']  =  $this->input->post('product_title');
			$save['product_desc']  = $this->input->post('product_desc');
			$save['user_id']  =  $this->input->post('user_id');
			$save['product_sub_desc']  = $this->input->post('product_sub_desc');
			$save['sub_id']  = $this->input->post('sub_id');
			$save['meta_keywords'] = $this->input->post('meta_keywords');
			$save['meta_description'] = $this->input->post('meta_description');
			$save['page_title'] = $this->input->post('page_title');
			$save['availablity']  = $this->input->post('availablity');
			$save['sku']  = $this->input->post('sku');
			// 		$save['created']    = date('Y-m-d H:i:s');
			// 		$save['modified']   = date('Y-m-d H:i:s');
			//print_r($save); exit();
			$this->Admin_model->add_productr($save, $product_id);
			$this->session->set_flashdata('feedback', 'Your reminder has been save successullly');
			redirect('admin/Backend/add_product/');
		}
	}
	
		function amc_purchase_offers()
		{
			$data= $this->data;
			$data['page_title'] = 'AMC Purchase Offers';
 		$data['amc_purchase_offers'] = $this->Admin_model->get_amc_purchase_offers();
			$this->view('amc_purchase_offers', $data);
		}

			function view_amc_purchase_offers($service_id)
		{
			$data= $this->data;
		$data['page_title'] = 'Detail Information of AMC';
		$data['form_action'] = 'Backend/view_amc_purchase_offers';
 		$data['view_amc_purchase_offers'] = $this->Admin_model->view_amc_purchase_offers($service_id);
 		 //print_r($data['view_amc_purchase_offers'] ); exit();
			$this->view('view_amc_purchase_offers', $data);
		}


		function edit_amc_purchase_offers($service_id)
		{
			
			$data= $this->data;
		$data['page_title'] = 'Edit Detail Information of AMC';
		$data['form_action'] = 'Admin/Backend/edit_amc_purchase_offers/'.$service_id;
		$service_record = $this->Admin_model->getservicerecord($service_id);
		//print_r($service_record);exit();
		$data['customer_code']=	$service_record->customer_code;
		$data['customer_name']= $service_record->customer_name;
		$data['customer_address']= $service_record->customer_address;
		$data['customer_city']= $service_record->customer_city;
		$data['pin_code']= $service_record->pin_code;
		$data['customer_mobile']= $service_record->customer_mobile;
		$data['product_category']= $service_record->product_category;
		$data['machine_serial']= $service_record->machine_serial;
		$data['model']= $service_record->model;
		$data['brand']= $service_record->brand;
		$data['date_of_purchase']= $service_record->date_of_purchase;
		$data['picture_machine']= $service_record->picture_machine;
		$data['certified']= $service_record->certified;
		$data['machine_status']= $service_record->machine_status;
		$data['technecian']= $service_record->technecian;
		$data['icr_no']= $service_record->icr_no;
		$data['icr_date']= $service_record->icr_date;
		$data['free_cost']= $service_record->free_cost;
		$data['chq_picture']=$service_record->chq_picture;
		$data['amc_Date']= $service_record->amc_Date;
		$data['amc_end_date']= $service_record->amc_end_date;
		$data['payment_mode']= $service_record->payment_mode;
		$data['chq_no']= $service_record->chq_no;
		$data['icr_picture']=$service_record->icr_picture;
		$data['chq_amount']= $service_record->chq_amount;
		$data['technecian_name']= $service_record->technecian_name;
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('customer_name','Customer Name','trim|required');
		 $this->form_validation->set_rules('customer_code', 'Customer Code', 'trim|required|max_length[10]');
			$this->form_validation->set_rules('model', 'Model', 'trim|required');
			$this->form_validation->set_rules('technecian', 'Technecian Mobile No.', 'trim|required');
		
		

		if ($this->form_validation->run() == false) {
			$this->view('edit_amc_purchase_offers', $data);
		} else{
			
            $save['customer_code']=$this->input->post('customer_code');
            $save['customer_name']= $this->input->post('customer_name');
            $save['customer_address']= $this->input->post('customer_address');
            $save['customer_city']= $this->input->post('customer_city');
            $save['pin_code']= $this->input->post('pin_code');
            $save['customer_mobile']= $this->input->post('customer_mobile');
            $save['product_category']= $this->input->post('product_category');
            $save['machine_serial']= $this->input->post('machine_serial');
            $save['model']= $this->input->post('model');
            $save['brand']= $this->input->post('brand');
            $save['date_of_purchase']= $this->input->post('date_of_purchase');
        	$save['picture_machine']= $this->input->post('picture_machine');
            $save['certified']= $this->input->post('certified');
            $save['machine_status']= $this->input->post('machine_status');
            $save['technecian']= $this->input->post('technecian');
            $save['icr_no']= $this->input->post('icr_no');
            $save['icr_date']= $this->input->post('icr_date');
            $save['free_cost']= $this->input->post('free_cost');
             $save['icr_picture']= $this->input->post('icr_picture');
            $save['amc_Date']= $this->input->post('amc_Date');
            $save['amc_end_date']= $this->input->post('amc_end_date');
            $save['payment_mode']= $this->input->post('payment_mode');
            $save['chq_no']= $this->input->post('chq_no');
             $save['chq_picture']= $this->input->post('chq_picture');
            $save['chq_amount']= $this->input->post('chq_amount');
            $save['technecian_name']= $this->input->post('technecian_name');
            $save['service_type'] = 1;

			 //print_r($save); exit();
            $this->Admin_model->edit_amc_purchase_offers($service_id, $save);
    
            redirect('admin/Backend/amc_purchase_offers/');
		}
		
	}

			function delete_amc_purchase_offers($service_id)
		{
			$data= $this->data;
 		$data['amc_purchase_offers'] = $this->Admin_model->delete_amc_purchase_offers($service_id);
			$this->view('amc_purchase_offers', $data);
		}

		function search_customer()
		{
			$data= $this->data;	
			$data['page_title'] = 'Search Service Record';
			$save['customer_name'] = $this->input->post('customer_name');
			$save['service_type'] = 1;					
			$data['amc_purchase_offers'] = $this->Admin_model->search_customer($save);
			//print_r($data['amc_purchase_offers']); exit();
			
			$this->view('amc_purchase_offers', $data);
		}


}