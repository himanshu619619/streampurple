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


	function get_amc_purchase_offers()
	{

		$service_type = 1;
		return $this->db->select('*')->where('service_type',$service_type)->get('service_record')->result();

	}

	function view_amc_purchase_offers($service_id)
	{

		return $this->db->select('*')->where('service_id',$service_id)->get('service_record')->row();

	}

		function  delete_amc_purchase_offers($service_id)
	{

		return $this->db->where('service_id',$service_id)->delete('service_record');

	}
	function edit_amc_purchase_offers($service_id, $save)
	{
	
		
			$this->db->where('service_id',$service_id)->update('service_record',$save);
	
	}
	function getservicerecord($service_id)
	{

		return $this->db->select('*')->where('service_id',$service_id)->get('service_record')->row();

	}

	function search_customer($save)
	{

		return $this->db->select('*')->where('service_type',$save['service_type'])->like('customer_name',$save['customer_name'])->get('service_record')->result();

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
	

}
 