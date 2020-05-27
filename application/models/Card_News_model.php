<?php

class Card_News_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_news()
	{
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get('card_news', 5);
		return $query->result_array();
	}
}
