<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Serviceagent_ref {
  var $CI;

  function __construct()
  {
    $this->CI =& get_instance();
    $this->CI->load->database();
    $this->CI->load->helper('url');
  }

 function get_profile_id()
  {

    $email = $this->CI->session->userdata['serviceagentdetail']['email'];
  
    $rr = $this->CI->db->select('*')->where('email',$email)->get('users')->row();

    return $rr->profile_id;
  }

    function get_user_type()
  {
    $email = $this->CI->session->userdata['serviceagentdetail']['email'];
    $rr = $this->CI->db->select('*')->where('email',$email)->get('users')->row();
    return $rr->user_type;
  }

  function get_user_detail($profile_id)
  {

    // print_r($profile_id);exit();
    // $profile_id = $this->CI->session->userdata['serviceagentdetail']['profile_id'];

    $rr = $this->CI->db->select('*')->where('profile_id',$profile_id)->get('users')->row();
    return $rr;
  }
function email_verify()
{
   $profile_id = $this->get_profile_id();
//   print_r($this->CI->session->userdata('userdetails'));
// exit;
  return $this->CI->db->where(array('profile_id'=>$profile_id,'email_verify'=>'1'))->get('users')->row();

}

}
?>