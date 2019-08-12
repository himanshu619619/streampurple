<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital_ref_id {
  var $CI;

  function __construct()
  {
    $this->CI =& get_instance();
    $this->CI->load->database();
    $this->CI->load->helper('url');
  }

  function get_hospital_profile_id()
  {
    $email = $this->CI->session->userdata['hospitaldetail']['email'];
    $rr = $this->CI->db->select('*')->where('email',$email)->get('users')->row();
    return $rr->profile_id; 
  }

    function get_user_type()
  {
    $email = $this->CI->session->userdata['hospitaldetail']['email'];
    $rr = $this->CI->db->select('*')->where('email',$email)->get('users')->row();
    return $rr->user_type;
  }

  function get_hospital_detail()
  {
   $profile_id=$this->get_hospital_profile_id();
    return $rr = $this->CI->db->select('*')->where('profile_id',$profile_id)->get('users')->row();
   
  }

  
   function get_forget_user_detail()
   {
    $profile_id=$this->get_profile_id();
   return $rr = $this->CI->db->select('*')->where('profile_id',$profile_id)->get('users')->row();
   } 


   function get_today_patient()
{
  $today = strtotime(date('Y-m-d'));
   $rr =  $this->CI->db->select('*')->from('patient_appointment');
        $this->CI->db->where('patient_appointment.appointment_date',$today);
        $this->CI->db->join('users','users.profile_id = patient_appointment.patient_id');
      $rr =  $this->CI->db->get()->result();

  array_unshift($rr, "ok");
  return $rr;
  // echo "<pre>";
  // print_r($rr); exit();
}
  
}
