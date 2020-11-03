<?php

class Belajar_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_card_belajar_product($slug = false)
	{
		if ($slug === false) {
			$this->db->like('id_menu', 'BP');
			$query = $this->db->get('menus');
			return $query->result_array();
		}

		$query = $this->db->get_where('menus', array('slug' => $slug));
		return $query->row_array();
	}

	public function get_card_belajar_service($slug = false)
	{
		if ($slug === false) {
			$this->db->like('id_menu', 'BS');
			$query = $this->db->get('menus');
			return $query->result_array();
		}

		$query = $this->db->get_where('menus', array('slug' => $slug));
		return $query->row_array();
	}
	public function getMaterial_product($slug_menu)
	{
		$this->db->like('slug', $slug_menu);
		$query = $this->db->get('materials');
		return $query->result_array();
	}
}
