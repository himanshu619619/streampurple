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
}
 