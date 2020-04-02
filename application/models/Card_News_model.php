<?php

class Card_News_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_news() {
        $query = $this->db->get('card_news');
        return $query->result_array();
    }
}