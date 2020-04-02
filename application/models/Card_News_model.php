<?php

class Card_News_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_news() {
        $this->db->limit(5);
        $this->db->order_by('id','DESC');
        $query = $this->db->get('card_news');
        return $query->result_array();
    }
}