<?php
class Admin_model extends CI_model
{

	


	function get_all_state()
	{

		return $this->db->get('states')->result();
	}

	function get_all_city()
	{

		return $this->db->get('cities')->result();
	}

	function get_country()
	{

		return $this->db->get('countries')->result();
	}


	function get_user_details()
	{

		
		return $this->db->select('*')->get('users')->result();

	}

	function view_user_details($id)
	{

		return $this->db->select('*')->where('id',$id)->get('users')->row();

	}

		function  delete_amc_purchase_offers($service_id)
	{

		return $this->db->where('service_id',$service_id)->delete('service_record');

	}
	function edit_user_details($id, $save)
	{
	
		
			$this->db->where('id',$id)->update('users',$save);
	
	}
	function getservicerecord($service_id)
	{

		return $this->db->select('*')->where('service_id',$service_id)->get('service_record')->row();

	}

	function search_customer($save)
	{

		//$save['date'] = $save['created'];
		//print_r($save['date']); exit();  //1591048800

		return $this->db->select('*')->like('created',$save['created'])->like('fname',$save['fname'])->get('users')->result();

	}
	function extend_warranty_purchase()
	{

		$service_type = 2;
		return $this->db->select('*')->where('service_type',$service_type)->get('service_record')->result();

	}
	function already_under_amc($save)
	{
		
		return $this->db->select('*')->where('service_type',$save)->get('service_record')->result();

	}

	function get_voting_name()
	{
			return $this->db->select('*')->get('vote_name')->result();

	}

	function get_voting_name_single($vote_id)
	{
			return $this->db->select('*')->where('vote_id', $vote_id)->get('vote_name')->row();

	}

	function get_question($question_id)
	{
			return $this->db->select('*')->where('question_id', $question_id)->get('questions')->row();

	}

	function vote_delete($vote_id)
	{
			return $this->db->where('vote_id', $vote_id)->delete('vote_name');

	}

	function question_delete($question_id)
	{
			return $this->db->where('question_id', $question_id)->delete('questions');

	}
	

	function add_voting($save, $vote_id)
	{

		if($vote_id)
		{
			$this->db->where('vote_id', $vote_id)->update('vote_name', $save);

		}else
		{
			return $this->db->insert('vote_name', $save);
		
		}

	}

		function add_question($save, $question_id)
	{

		if($question_id)
		{

			//print_r($question_id); exit();
			$this->db->where('question_id', $question_id)->update('questions', $save);

		}else
		{
			return $this->db->insert('questions', $save);
		
		}

	}

function get_questions($vote_id)
	{
			return $this->db->select('*')->where('vote_id', $vote_id)->get('questions')->result();

	}

	function vote_status($vote_id, $status)
	{
		if($status == 1 ){
			$this->db->select('*')->where('status', 0)->set('status', 1)->update('vote_name');
		$this->db->select('*')->where('vote_id', $vote_id)->set('status', 0)->update('vote_name');
		

	    }else{
	    	$this->db->select('*')->where('status', 1)->set('status', 0)->update('vote_name');
			$this->db->select('*')->where('vote_id', $vote_id)->set('status', 1)->update('vote_name');
			
		}
	}

	function question_status($question_id, $status)
	{
		if($status == 1 ){
		$this->db->select('*')->where('question_id', $question_id)->set('status', 0)->update('questions');
	    }else{
			$this->db->select('*')->where('question_id', $question_id)->set('status', 1)->update('questions');
		}
	}

 function hide_vote()
 {
 	return $this->db->select('*')->where('vote_status_id', 1)->get('vote_status')->row();
 }

 function status_votess($vote_result)
 {
if($vote_result == 1){
$this->db->where->where('vote_status_id', 1)->set('vote_status', 0)->update('vote_status', $save);
}else
{
$this->db->where('vote_status_id', 1)->set('vote_status', 1)->update('vote_status', $save);
}


 }



}
 