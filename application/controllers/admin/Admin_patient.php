<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_patient extends Admin_Controller {
  
  var $data = array();
  var $for_form_user_id = false;

  public function __construct()
  {
    parent::__construct();

    if(!$this->session_data)
    {
      redirect($this->admin_folder.'/login');
    }

    $this->load->model(array('Admin_model', 'Form_model', 'Location_model', 'Setting_model'));

    $this->load->helper(array('Format'));

    $this->data['app_path'] = $this->config->item('app_path');
    $this->data['app_name'] = $this->config->item('app_name');
    $this->data['meta_title'] = $this->config->item('meta_title');
    $this->data['meta_description'] = $this->config->item('meta_description');
    $this->data['meta_keywords'] = $this->config->item('meta_keywords');
    $this->data['success']   = '';
    $this->data['error']     = '';
    $this->data['info']      = '';
    $this->data['warning']   = '';
     $this->load->library('encrypt');
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




public function doctor_degree()

{

  $data = $this->data;
  $data['page_title']='Doctor Degree';
$doctor= array('' => '-----select------' ); 
$doctordegree = $this->Admin_model->doctor_type();
foreach ($doctordegree as $value) {
  $doctor[$value->id]= $value->dr_type;
}
$data['user_option']= $doctor;


$this->form_validation->set_rules('degree', 'Enter Degree', 'required');
                

               

                if ($this->form_validation->run() == FALSE)
                {
                       $this->view('select_doctor_degree',$data);
                }
                else
                { 
                  
                        $save=array();
                        $save['dr_type_id']         = $this->input->post('dr_type_id');
                        $save['degree']  = $this->input->post('degree');
                        
                       
                        $this->Admin_model->get_dr_degree($save);



  
}
}


function new_patient_register_list(){

  $data =$this->data;
  $data['page_title'] = 'New Patient';
  //$data['filter_patient'] = array('')
 $data['day_wise_option'] = array('1'=>'Last Week Patient','2'=>'Last Month Patient');
 $country = $this->Admin_model->get_country(); 
            // echo "<pre>";
            //  print_r($country);exit(); 
            foreach ($country as  $value) {
              
              $country_option[$value->id] = $value->name;
            }
          $data['country_option'] = $country_option;
  $state = $this->Admin_model->get_all_state();
  foreach ($state as $key => $value) {
    $state_option[$value->id] = $value->name;
 }

 $data['state_option']  = $state_option;
 $city = $this->Admin_model->get_all_city();
  foreach ($city as $key => $value) {
    $city_option[$value->id] = $value->name;
 }
 $data['city_option']  = $city_option;
 
  // $data['register_patient_list'] = $this->Admin_model->get_all_register_patient();
 $patient_name = $this->input->get('patient_name');
  $created         = $this->input->get('created');
  $day_wise         = $this->input->get('day_wise');

 $data['register_patient_list'] = $this->Admin_model->search_patient($patient_name,$created,$day_wise);

  $this->view('register_patient',$data);
}



function view_register_patient($profile_id){
  $data = $this->data;
  $data['page_title']  =  'patient Detail';
  $data['view_patient'] = $this->Admin_model->get_patient_detail($profile_id);

  $this->view('view_register_patient',$data);
}

function delete_register_patient($profile_id){

  $this->Admin_model->delete_register_patient($profile_id);
  $this->session->set_flashdata('feedback','Your Patint has been delete successfully');
redirect('admin/Admin_patient/new_patient_register_list');
}








function offline_patient_register_list(){

 
  $data =$this->data;
  $data['page_title'] = 'Offline Patient';


 $country = $this->Admin_model->get_country(); 
            // echo "<pre>";
            //  print_r($country);exit(); 
            foreach ($country as  $value) {
              
              $country_option[$value->id] = $value->name;
            }
          $data['country_option'] = $country_option;
  $state = $this->Admin_model->get_all_state();
  foreach ($state as $key => $value) {
    $state_option[$value->id] = $value->name;
 }

 $data['state_option']  = $state_option;
 $city = $this->Admin_model->get_all_city();
  foreach ($city as $key => $value) {
    $city_option[$value->id] = $value->name;
 }
 $data['city_option']  = $city_option;
 
  // $data['offline_patient'] = $this->Admin_model->offline_patient_register_list();

 $patient_name = $this->input->get('patient_name');
  $created         = $this->input->get('created');
 $data['offline_patient'] = $this->Admin_model->search_offline_patient($patient_name,$created);

  $this->view('offline_register_patient',$data);

}


function delete_offline_register_patient($id){

$this->Admin_model->delete_offline_register_patient($id);
$this->session->set_flashdata('feedback','Your Patint has been delete successfully');
redirect('admin/Admin_patient/offline_patient_register_list');
}

function view_offline_register_patient($id){
  $data = $this->data;
  $data['page_title']  =  'Offline patient Detail';
  $data['view_offline_patient'] = $this->Admin_model->get_offline_patient_detail($id);
  $this->view('view_offline_register_patient',$data);
}


function hospital_booking(){
  $data= $this->data;
  $data['page_title']  = 'Hospital Booking';
  $patient_name        = $this->input->get('patient_name');
  $created             = $this->input->get('created');
  $data['hospital_kooking_list'] = $this->Admin_model->get_hospital_booking_list($patient_name,$created);
  $this->view('hospital_booking',$data);

}


function view_hospital_patient($id){
  $data = $this->data;
  $data['page_title']            =  'Hospital Patint Detail';
  $data['view_hospital_patient'] = $this->Admin_model->view_hospital_patient($id);
 //  echo "<pre>";
 // print_r($data['view_hospital_patient']);exit();
  $this->view('view_hospital_patient',$data);
}


function delete_hospital_patient($id){

 $this->Admin_model->delete_hospital_patient($id);
 $this->session->set_flashdata('feedback','Your Patint has been delete successfully');
 redirect('admin/Admin_patient/hospital_booking');

}


function laboratory_booking(){

  $data= $this->data;
  $data['page_title']  = 'Laboratory Booking';
  $patient_name        = $this->input->get('patient_name');
  $created             = $this->input->get('created');
  $data['laboratory_kooking_list'] = $this->Admin_model->get_laboratory_booking_list($patient_name,$created);
  $this->view('laboratory_booking',$data);

}



function view_laboratory_patient($id){

  $data = $this->data;
  $data['page_title']  =  'Laboratory Patient Detail';
  $id=decode_url($this->uri->segment(4));
  $data['view_laboratory_patient'] = $this->Admin_model->view_laboratory_patient($id);
  $this->view('view_laboratory_patient',$data);
}

function delete_laboratory_patient($id){
  $id = decode_url($this->uri->segment(4));
  $this->Admin_model->delete_laboratory_patient($id);
  $this->session->set_flashdata('feedback','Your Patint has been delete successfully');
  redirect('admin/Admin_patient/laboratory_booking');
}


function doctor_appointment(){
  $data= $this->data;
  $data['page_title']  = 'Doctor Appointment';
  $patient_name        = $this->input->get('patient_name');
  $created             = $this->input->get('created');
  $data['doctor_patient'] = $this->Admin_model->get_doctor_patient($patient_name,$created);
  $this->view('doctor_appointment',$data);

}


function view_doctor_patient($appoint_id){
  $data = $this->data;
  $data['page_title']  =  'Doctor Patient Detail';
  $appoint_id=decode_url($this->uri->segment(4));
  $data['view_doctor_patient'] = $this->Admin_model->view_doctor_patient($appoint_id);
  $this->view('view_doctor_patient',$data);

}


function delete_doctor_patient($appoint_id){
 $appoint_id=decode_url($this->uri->segment(4));
 $this->Admin_model->delete_doctor_patient($appoint_id);
 $this->session->set_flashdata('feedback','Your Patint has been delete successfully');
 redirect('admin/Admin_patient/doctor_appointment');
}


function pharmacy_order_medicine(){
  $data= $this->data;
  $data['page_title']  = 'Pharmacy Order Medicine';

  $data['pharmacy_medicine'] = $this->Admin_model->get_pharmacy_order_medicine();
  $this->view('pharmacy_order_medicine',$data);


}

function view_pharmacy_medicine($id){
   $data = $this->data;
  $data['page_title']  =  'Medicine Detail';
  $id=decode_url($this->uri->segment(4));
  $data['view_medicine'] = $this->Admin_model->view_pharmacy_medicine($id);
  $this->view('view_order_medicine',$data);

}

function delete_pharmacy_medicine($id){
  $id=decode_url($this->uri->segment(4));
 $this->Admin_model->delete_pharmacy_medicine($id);
 $this->session->set_flashdata('feedback','Your Patint has been delete successfully');
 redirect('admin/Admin_patient/pharmacy_order_medicine');

}

function complaint(){

  $data= $this->data;
  $data['page_title']  = 'Complaint';
  $data['complaint'] = $this->Admin_model->get_complaint();
  $this->view('complaint',$data);

}

function delete_complaint($id){

 $this->Admin_model->delete_complaint($id);
 $this->session->set_flashdata('feedback','Your complaint has been delete successfully');
 redirect('admin/Admin_patient/complaint');

}


function all_doctor(){
 $data= $this->data;
  $data['page_title']  = 'Doctor';

  $country = $this->Admin_model->get_country(); 
            // echo "<pre>";
            //  print_r($country);exit(); 
            foreach ($country as  $value) {
              
              $country_option[$value->id] = $value->name;
            }
          $data['country_option'] = $country_option;
  $state = $this->Admin_model->get_all_state();
  foreach ($state as $key => $value) {
    $state_option[$value->id] = $value->name;
 }

 $data['state_option']  = $state_option;
 $city = $this->Admin_model->get_all_city();
  foreach ($city as $key => $value) {
    $city_option[$value->id] = $value->name;
 }
 $data['city_option']  = $city_option;

  $patient_name        = $this->input->get('patient_name');
  $created             = $this->input->get('created');
  $data['doctor'] = $this->Admin_model->get_all_doctor($patient_name,$created);
  $this->view('all_doctor',$data);

}


function view_doctor($profile_id){
  $data = $this->data;
  $data['page_title']  =  'Doctor Detail';
  $profile_id=decode_url($this->uri->segment(4));
  $data['view_doctor'] = $this->Admin_model->view_doctor($profile_id);
  $this->view('view_doctor',$data);

}

function delete_doctor($profile_id){
  $profile_id=decode_url($this->uri->segment(4));
 $this->Admin_model->delete_doctor($profile_id);
 $this->session->set_flashdata('feedback','Your Doctor has been delete successfully');
 redirect('admin/Admin_patient/all_doctor');

}


function patient_order_clinic(){
  $data= $this->data;
  $data['page_title']  = 'Patient Orders';
  $medicine_category = $this->Admin_model->get_medicine_category();
  foreach ($medicine_category as $key => $value) {
     $medicine_category_option[$value->medicine_id] = $value->medicine_category;
  }
  $data['medicine_category_option'] = $medicine_category_option;
  $data['patient_order_clinic'] = $this->Admin_model->patient_order_clinic();
  $this->view('patient_order_clinic',$data);

}

function view_patient_order_clinic($medicine_id){
 $data = $this->data;
  $data['page_title']  =  'Medicine Detail';
   $medicine_category = $this->Admin_model->get_medicine_category();
  foreach ($medicine_category as $key => $value) {
     $medicine_category_option[$value->medicine_id] = $value->medicine_category;
  }
  $data['medicine_category_option'] = $medicine_category_option;
  $medicine_id=decode_url($this->uri->segment(4));
  $data['view_clinic_medicine'] = $this->Admin_model->view_patient_order_clinic($medicine_id);
  $this->view('view_patient_order_clinic',$data);
 
}

 function delete_patient_order_clinic($medicine_id){
   
   $medicine_id=decode_url($this->uri->segment(4));
   $this->Admin_model->delete_patient_order_clinic($medicine_id);
   $this->session->set_flashdata('feedback','Your Medicine has been delete successfully');
   redirect('admin/Admin_patient/patient_order_clinic');
 }

 function order_medicine_to_distributer(){
  $data= $this->data;
  $data['page_title']  = 'Orders to Distributer';
 
  $data['order_to_distributer'] = $this->Admin_model->order_medicine_to_distributer();
  $this->view('order_to_distributer',$data);
 
 }


function delete_order_to_distributer($order_id){
  
 $this->Admin_model->delete_order_to_distributer($order_id);
 $this->session->set_flashdata('feedback','Your Doctor has been delete successfully');
 redirect('admin/Admin_patient/all_doctor');

}
function logout()
  {
    $this->auth->logout();
    
    //when someone logs out, automatically redirect them to the login page.
    $this->session->set_flashdata('success', 'You have been logged out');
    redirect($this->admin_folder.'/login');
  }


}
?>