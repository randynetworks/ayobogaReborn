<?php

class Belajar_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	// USER AREA
	public function get_card($table, $kode, $slug = false)
	{
		if ($slug === false) {
			$this->db->like('id_menu', $kode);
			$query = $this->db->get($table);
			return $query->result_array();
		}

		$query = $this->db->get_where($table, array('slug' => $slug));
		return $query->row_array();
	}

	public function get_material($slug = false)
	{
		if ($slug == false) {
			$query = $this->db->get('materials');
			return $query->result_array();
		}

		$this->db->like('slug', $slug);
		$query = $this->db->get('materials');
		return $query->result_array(); 
	}

	// DASHBOARD AREA
	public function get_data($id, $table, $keyword = null)
	{
		if ($keyword) {
			$this->db->like('title', $keyword);
		}
		if ($id === false) {
			$this->db->order_by('id', 'DESC');
			$query = $this->db->get($table);
			return $query->result_array();
		}
		$query = $this->db->get_where($table, array('id' => $id));
		return $query->row_array();
	}

	public function set_data($data, $table)
	{
		return $this->db->insert($table, $data);
	}

	public function destroy_data($id, $table)
	{
		$this->db->where('id', $id);
		return $this->db->delete($table);
	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

}
