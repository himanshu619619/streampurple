<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer_model extends CI_Model
{


  function get_user_type($id = false)
  {
    if ($id) {
      # code...
    } else {
      return $this->db->select('*')->get('user_type')->result();
    }
  }

  function  add_patient($data)
  {
    return $this->db->insert('wp_patient', $data);
  }


  function save_user($data)
  {
    if (@$data['id']) {
      $this->db->where('id', $data['id']);
      $this->db->update('users', $data);
      return $data['id'];
    } else {
      $this->db->insert('users', $data);
      $id = $this->db->insert_id();
      $this->update_profile_id($id);
      return $id;
    }
  }

  function update_profile_id($id)
  {
    if ($id) {
      $con = "DM";
      $num = rand(10, 99);
      $profile_id = $con . $id . $num;
      return  $this->db->where('id', $id)->set('profile_id', $profile_id)->update('users');
    }
  }

  function save_personal_info($data = array())
  {
    if ($data) {
      return    $this->db->where('profile_id', $data['profile_id'])->update('users', $data);
    }
  }

  function get_user_type_email($email)
  {
    $rr =  $this->db->where('email', $email)->get('users')->row();

    return $rr->user_type;
  }

  function login($username, $password, $remember = false)
  {

    $this->db->select('*');
    $this->db->or_where('email', $username);
    // $this->db->or_where('mobile',$username);
     $this->db->or_where('username',$username);
    $this->db->where('status', 1);
    $this->db->where('password',  $password); // here is change sha1
    $this->db->limit(1);
    $result   = $this->db->get('users');
    $user = $result->row_array();
    //print_r($user); exit();
    if ($user) {

      $user_type = $user['user_type'];
      switch ($user_type) {
        case '1':
          $this->session->set_userdata('customerdetail', $user);
          break;
        case '2':
          $this->session->set_userdata('dealerdetail', $user);
          break;
        case '4':
          $this->session->set_userdata('serviceagentdetail', $user);
          break;
        case '3':
          $this->session->set_userdata('sellerdetail', $user);
          break;
       
        default:
          $this->session->set_userdata('sellerdetail', $user);

          break;
      }



      return $user_type;
    } else {
      return false;
    }
  }


  function get_category()
  {

    return  $this->db->select('*')
      ->get('user_type')
      ->result();
  }

  function get_category_detail($data = array())
  {

    //print_r($data['user_id']);exit();
    return $post = $this->db->select('*')
      ->where('user_type', $data['user_id'])
      ->get('users')
      ->result();
    //  echo "<pre>";
    // print_r($post);exit();
  }


  public function get_state_list($country_id = false)
  {
    //print_r($country_id);exit();

    if ($country_id) {
      return $state = $this->db->select('*')
        ->where('country_id', $country_id)
        ->from('states')
        ->get()->result();
    } else {
      return $state = $this->db->select('*')

        ->from('states')
        ->get()->result();
    }
  }


  // public function get_cities_list($state_id=false){

  //   if($state_id)
  //   {

  //    return $cities= $this->db->select('*')
  //                           ->where('state_id',$state_id)
  //                           ->get('cities')
  //                           ->result();
  //             //print_r($cities);exit();

  //   }else{

  //   return $cities= $this->db->select('*')

  //                           ->get('cities')
  //                           ->result();
  //             //print_r($cities);exit();
  //   }


  // }


  function get_services()
  {

    return $post = $this->db->select('*')
      ->get('doctor_services')
      ->result();
  }

  // function view_detail(){

  // }
  function get_all_doctor($limit, $offset)
  {
    $dr = 1;
    return $this->db->select('*')
      ->where('user_type', $dr)
      // ->join('users','users.profile_id = add_clinic.doctor_id')
      ->limit($limit, $offset)
      ->get('users')
      ->result();
  }

  function searchresult($save)
  {
    // print_r($save); exit;
    return $this->db->select('name')
      ->like('name', $save, 'after')
      ->get('country')
      ->result();
  }

  public function dr_type()
  {

    return $this->db->select('*')
      ->get('dr_type')
      ->result();
  }


  public function select_doctor($save)
  {
    if (@$save['dr_type']) {

      $this->db->or_where('dr_type', $save['dr_type']);
    }
    if (@$save['location']) {
      $this->db->like('address', $save['location']);
    }
    if (@$save['name']) {
      $this->db->like('fname', $save['name']);
    }

    return $this->db->get('users')->result();
  }

  function get_all_product()
  {
    $idcard = 1;
    return $this->db->select('*')
      ->where('user_id', $idcard)
      ->get('products')
      ->result();
  }


  function get_all_idcard()
  {
    $idcard = 3;
    return $this->db->select('*')
      ->where('user_id', $idcard)
      ->get('products')
      ->result();
  }

  function get_all_calender()
  {

    $calender = 2;
    return $this->db->select('*')
      ->where('user_id', $calender)
      ->get('products')
      ->result();
  }


  function medicine_category($medicine_category)
  {
    // print_r($medicine_category); exit;
    $result =  $this->db->select('*')->like('medicine_category', $medicine_category, 'after')->get('medicine_category')->result();

    return $result;
  }


  function sub_med_category($medicine_id)
  {

    $this->db->select('*');
    $this->db->where('medicine_name', $medicine_id);
    return $this->db->get('sub_med_category')->result();
  }


  function getmedicine($sub_med_name)
  {
    // print_r($sub_med_name);
    $result =  $this->db->select('*')->where('sub_med_name', $sub_med_name)->get('medicine_list')->result();

    return $result;
  }

  function view_all_product($product_id)
  {


    return $this->db->select('*')
      ->where('product_id', $product_id)
      ->get('products')
      ->row();
  }


  public function get_total()
  {
    $dr = 1;
    return $this->db->select('*')
      ->where('user_type', $dr)
      // ->join('users','users.profile_id = add_clinic.doctor_id')
      ->get('users')
      ->num_rows();
  }

  public function vist_count($data)
  {

    return $this->db->insert('login_detail', $data);
  }


  // public function get_categorys($rahul=false)
  // {



  // // $p=$save['user_id'];
  // $r= $this->db->select('*')->where('user_id',$rahul['user_id'])->get('products')->result();
  //  print_r($r); exit();

  // }

  function get_products($data)
  {

    return $this->db->select('*')->where('user_id', $data->user_id)->get('products')->result();
  }

  function get_sub_category()
  {


    return $this->db->select('*')->where('user_id', $data->user_id)->get('products')->result();
  }


  function get_all_sub_category($user_id)
  {

    return $this->db->select('*')->where('user_id', $user_id)->get('sub_category')->result();
  }

  function user_idd($slug)
  {
    $user_id = $this->db->select('user_id')->where('slug', $slug)->get('user_type')->row();
    return $user_id->user_id;
  }

  function user_iddp($slug)
  {

    $sub_id = $this->db->select('*')->where('slug', $slug)->get('sub_category')->row();

    return $sub_id->sub_id;
  }

  function user_iddps($slug)
  {
    $user_id = $this->db->select('user_id')->where('slug', $slug)->get('products')->row();
    return $user_id->user_id;
  }

  function user_iddpp($slug1)
  {
    $slug1 = $this->db->select('category_name')->where('slug1', $slug1)->get('sub_category')->row();
    return $slug1->slug1;
  }

  function sub_cat_get($slug)
  {
    $slug = $this->db->select('*')->where('slug', $slug)->get('sub_category')->row();
    return $slug->slug;
  }


  function user_iddss($slug)
  {
    $product_id = $this->db->select('product_id')->where('slug', $slug)->get('products')->row();
    return $product_id->product_id;
  }


  function user_iddsss($slug)
  {
    $user_name = $this->db->select('*')->where('slug', $slug)->get('user_type')->row();
    return $user_name->slug;
  }


  function get_all_sub_categories($sub_id)
  {

    return $this->db->select('*')->where('sub_id', $sub_id)->get('products')->result();
  }

  function get_category_name($category_id)
  {
    $r = $this->db->select('*')->where('user_id', $category_id)->get('user_type')->row();
    return $r->user_name;
  }



  function get_tshirt()
  {
    $user_id = 1;
    return $this->db->select('*')->where('user_id', $user_id)->get('sub_category')->result();
  }




  function get_banner_home()
  {

    return $this->db->select('*')->get('banner_home')->result();
  }

  function get_marketing($user_id)
  {

    return $this->db->select('*')->where('user_id', $user_id)->get('sub_category')->result();
  }
  function get_clients()
  {
    return $this->db->select('*')->get('clients')->result();
  }


  function get_meta($sub_id)
  {

    return $this->db->select('*')->where('sub_id', $sub_id)->get('sub_category')->row();
  }
  function get_metas($user_id)
  {

    return $this->db->select('*')->where('user_id', $user_id)->get('user_type')->row();
  }

  function get_metap($product_id)
  {

    return $this->db->select('*')->where('product_id', $product_id)->get('products')->row();
  }

  function hiddentext($slug)
  {

    return $this->db->select('*')->where('slug', $slug)->get('user_type')->row();
  }

  function hiddentext2()
  {

    return $this->db->select('*')->where('id', 1)->get('hidden_text')->row();
  }
}