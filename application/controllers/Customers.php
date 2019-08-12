<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends Customers_Controller {

	var $data = array();
	var $form_id = false;

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('customerdetail'))
  		 {
			redirect('login');
   		 }
		
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

		$this->load->model(array('Customer_model', 'Customermodel_model'));
		$this->load->library('form_validation');
		$profile_id = $this->customer_ref->get_profile_id();
    $this->data['user']=$this->customer_ref->get_user_detail($profile_id);
			// print_r($profile_id); exit();
		//$this->load->helper('string');
	}

	public function index()
	{
		$data = $this->data;

		$data['page_title']				=	'Docmed | Doctor';
		$this->data['meta_title'] 			= 'Doctor';

		$this->view('dashboard',$data);

	}

	
  public function Customer_profile(){

      $data = $this->data;
      $profile_id=$this->doctor_ref->get_profile_id();
      $data['user']=$this->Doctor_model->get_doctor_detail($profile_id);
   // print_r($data['user']);exit();
    $this->view('profile',$data);
  }

  


  public function account_setting(){
            $data = $this->data;
          $profile_id=$this->Customer_ref->get_profile_id();
          
          
           $country_option = array(''=>'---select country ---');
            $country = $this->Customermodel_model->get_country(); 
           // echo "<pre>";
            // print_r($country);exit(); 
            foreach ($country as  $value) {
              $country_option[$value->id] = $value->name;
            }
          $data['country_option'] = $country_option;
          // echo "<pre>";
             //print_r($data['country_option']);exit();


$doctor_types = array(''=>'------select----');
$drtype= $this->Customermodel_model->Customer_type();
foreach($drtype as $value)
{

  $doctor_types[$value->id]  = $value->dr_type;
}
  $data['user_option']=$doctor_types;

          
          //print_r($data['user']);
          $data['user']=$this->Customermodel_model->get_doctor_detail($profile_id);
          $this->form_id = $profile_id;
            $this->form_validation->set_rules('fname', 'First Name', 'required');
                $this->form_validation->set_rules('lname', 'Last Name', 'required');
                $this->form_validation->set_rules('username', 'User Name', 'required|callback_username_check');

                $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|callback_email_check');

                if ($this->form_validation->run() == FALSE)
                {
                       $this->view('acount_setting',$data);
                }
                else
                {
                  $save=array();
                  $save['profile_id']    = $profile_id;
                  $save['fname']         = $this->input->post('fname');
                  $save['lname']         = $this->input->post('lname');
                  $save['username']      = $this->input->post('username');
                  $save['email']         = $this->input->post('email');
                  $save['dr_type']      = $this->input->post('dr_type_id');
                  $save['degree']         = $this->input->post('degree');

                  $save['qualification'] = $this->input->post('qualification');
                  $save['address']         = $this->input->post('address');
                  $save['country']         = $this->input->post('country');
                  $save['state']           = $this->input->post('state');
                  $save['cities']           = $this->input->post('cities');
                  $save['pin_code']           = $this->input->post('pin_code');
                  $save['landmark']           = $this->input->post('landmark');
                  $save['longitude']           = $this->input->post('longitude');
                  $save['latitude']           = $this->input->post('latitude');
                  // echo "<pre>";
                  // print_r($save);exit();

                        if($this->Customermodel_model->save_doc_profile($save)){

                           redirect('Doctor/account_setting');
                        }else{
                          
                        }
                }
       }


 public function username_check($username)
        {

                $query=$this->Customermodel_model->check_username($username, $this->form_id);

                if($query){

                $this->form_validation->set_message('username_check','User Name Already Exists');
                  return false;
                }else{
                 
                 return true;

                }
        }

    public function email_check($email)
        {

                $query=$this->Customermodel_model->check_email($email, $this->form_id);

                if($query){

               $this->form_validation->set_message('email_check','Email Address Already Exists');
                  return false;
                }else{
                 
                 return true;

                }
        }


         public function photo_upload()
            {
                $config['upload_path']          = './uploads/user_photo';
                $config['allowed_types']        = 'gif|jpg|png';
                // $config['max_size']             = 100;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('photo'))
                {
                        $error = $this->upload->display_errors();
                       // echo $error;exit();
                        return redirect('Doctor/account_setting');
                }
                else
                { 
                        $save=array();
                        $save['profile_id']=$this->doctor_ref->get_profile_id();
                        $path =  $this->upload->data();
                        //print_r($path);exit();
                        $save['photo']=base_url().'uploads/user_photo/'.$path['raw_name'].$path['file_ext'];
                        //print_r($save['photo']);exit();
                        
                       
                    $this->Customermodel_model->save_user_photo($save);
                    return redirect('Doctor/account_setting');
                      
                        
                }
        }





}
?>
