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
	
	function get_ppt_active()
	{

		return $this->db->select('*')->where('status', 1)->get('ppt_upload')->row();
	}


	function get_user_details()
	{

		
		return $this->db->select('*')->get('users')->result();

	}

	function view_user_details($id)
	{

		return $this->db->select('*')->where('id',$id)->get('users')->row();

	}

		function  delete_user_details($id)
	{

		return $this->db->where('id',$id)->delete('users');

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

	function hide_PPT()
	{
		return $this->db->select('*')->where('vote_status_id', 3)->get('vote_status')->row();
	}

		function hide_result()
	{
		return $this->db->select('*')->where('vote_status_id', 2)->get('vote_status')->row();
	}

	function status_votess($vote_result)
	{
		if($vote_result == 1){
			$this->db->where('vote_status_id', 1)->set('vote_status', 0)->update('vote_status');
			return 0;
		} else {
			$this->db->where('vote_status_id', 1)->set('vote_status', 1)->update('vote_status');
			return 1;
		}
	}


	function status_votesss($vote_result)
	{

		if($vote_result == 1){

			$this->db->where('vote_status_id', 2)->set('vote_status', 0)->update('vote_status');
			return 0;
		} else {
			$this->db->where('vote_status_id', 2)->set('vote_status', 1)->update('vote_status');
			return 1;
		}
	}


	function status_ppt($ppt_result)
	{

		if($ppt_result == 1){

			$this->db->where('vote_status_id', 3)->set('vote_status', 0)->update('vote_status');
			return 0;
		} else {
			$this->db->where('vote_status_id', 3)->set('vote_status', 1)->update('vote_status');
			return 1;
		}
	}


	function get_answer_result()
	{

		

		return $this->db->select('*')->where('vote_id', $vote_id->vote_id)->get('questions')->result();
	}	



	function get_mcq_percentage()

	{

		$vote_id =  $this->db->select('vote_id')->where('status', 1)->get('vote_name')->row();


			$query =  $this->db->query("SELECT *, 
IFNULL((SELECT COUNT(op1_ans.answers_id) from `wr_answers` op1_ans where op1_ans.question_id = wrq.question_id AND op1_ans.answers = wrq.option1) * 100 / (SELECT COUNT(op1_tot.answers_id) from `wr_answers` op1_tot where op1_tot.question_id = wrq.question_id), 0) as pct1,
IFNULL((SELECT COUNT(op2_ans.answers_id) from `wr_answers` op2_ans where op2_ans.question_id = wrq.question_id AND op2_ans.answers = wrq.option2) * 100 / (SELECT COUNT(op2_tot.answers_id) from `wr_answers` op2_tot where op2_tot.question_id = wrq.question_id), 0) as pct2,
IFNULL((SELECT COUNT(op3_ans.answers_id) from `wr_answers` op3_ans where op3_ans.question_id = wrq.question_id AND op3_ans.answers = wrq.option3) * 100 / (SELECT COUNT(op3_tot.answers_id) from `wr_answers` op3_tot where op3_tot.question_id = wrq.question_id), 0) as pct3,
IFNULL((SELECT COUNT(op4_ans.answers_id) from `wr_answers` op4_ans where op4_ans.question_id = wrq.question_id AND op4_ans.answers = wrq.option4) * 100 / (SELECT COUNT(op4_tot.answers_id) from `wr_answers` op4_tot where op4_tot.question_id = wrq.question_id), 0) as pct4 
FROM `wr_questions` wrq where wrq.vote_id = '".$vote_id->vote_id."' AND wrq.status = 1" );

		return $query->result(); 


	}


	function add_announcement($save)
	{
		$this->db->where('announcement_id', 1)->update('announcement', $save);
	}

	function get_announcement()
	{
		return $this->db->select('*')->where('announcement_id', 1)->get('announcement')->row();
	}

	function get_pending_question()
	{
		return $this->db->select('*')->get('message')->result();
	}


	function  pending_question_delete($message_id)
	{

		return $this->db->where('message_id',$message_id)->delete('message');

	}

	function  ppt_delete($ppt_id)
	{

		return $this->db->where('ppt_id',$ppt_id)->delete('ppt_upload');

	}

	function pending_question_status($status, $message_id)
	{
		if($status == 1 ){
		$this->db->select('*')->where('message_id', $message_id)->set('status', 0)->update('message');
	    }else{
			$this->db->select('*')->where('message_id', $message_id)->set('status', 1)->update('message');
		}
	}

	function ppt_status($status, $ppt_id)
	{
		if($status == 1 ){
		$this->db->select('*')->where('status', 0)->set('status', 1)->update('ppt_upload');
		$this->db->select('*')->where('ppt_id', $ppt_id)->set('status', 0)->update('ppt_upload');
	    }else{
			$this->db->select('*')->where('status', 1)->set('status', 0)->update('ppt_upload');
			$this->db->select('*')->where('ppt_id', $ppt_id)->set('status', 1)->update('ppt_upload');
		}
	}

	function  get_banner_uploads()
	{

		return $this->db->where('banner_id',1)->get('banners')->row();

	}

	function  get_banner_uploads_2()
	{

		return $this->db->where('banner_id',2)->get('banners')->row();

	}

	function update_banner($save)
	{
		
			$this->db->select('*')->where('banner_id', 1)->set('banner_name', $save['banner_name'])->update('banners');
	
	}

	function update_banner2($save)
	{
		
			$this->db->select('*')->where('banner_id', 2)->set('banner_name', $save['banner_name'])->update('banners');
	
	}

	function get_ppt()
	{
		
			return $this->db->select('*')->get('ppt_upload')->result();
	
	}

	function save_ppt($save)
	{

		
		{
			return $this->db->insert('ppt_upload', $save);
		
		}

	}

	

	function get_vote_active(){
		return $this->db->select("vote_name")->where("status", 1)->get("vote_name")->row();
	}

	function get_user_results($save)
	{
		//return $save;
		 $vote_id = $this->db->select("vote_id")->where("status", 1)->get("vote_name")->row();
		//print_r($vote_name); exit();
		return $this->db->select("*")->where("vote_id", $vote_id->vote_id)->where('profile_id', $save)->get("answers")->result();
	}

	function get_user_resultsss(){
		 $vote_id = $this->db->select("vote_id")->where("status", 1)->get("vote_name")->row();
		//print_r($vote_name); exit();
		return $this->db->select("*")->where("vote_id", $vote_id->vote_id)->get("answers")->result();
	}
<<<<<<< HEAD
	
	function table_emp(){
		
		$this->db->empty_table('pdf_image'); 	
        }
	function save_pdf_image($save)
	{

		
		{
			
			$this->db->insert('pdf_image', $save);
		
		}

	}
=======


	function table_emp(){
		
		$this->db->empty_table('pdf_image'); 	
}

	function save_pdf_image($save){
		
		
            $this->db->insert('pdf_image', $save);
        
	}

	function get_ppt_active()
	{

		return $this->db->select('*')->where('status', 1)->get('ppt_upload')->row();
	}

>>>>>>> acffbb19d83beea1a5bc28fe435ea612c47d05b1
	function insert_pdf($pdf_image_name){

		$this->db->where('pdf_image_id', 1)->set('pdf_image_name', $pdf_image_name)->update('pdf_image');
	
		}

<<<<<<< HEAD
=======

>>>>>>> acffbb19d83beea1a5bc28fe435ea612c47d05b1
}
 