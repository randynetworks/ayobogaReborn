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
            $this->db->like('ID_menu', 'PC0');
            $query = $this->db->get('table_card_menu');
            return $query->result_array();
        }

        $query = $this->db->get_where('table_card_menu', array('slug' => $slug));
        return $query->row_array();
    }

    public function get_card_belajar_service($slug = false)
    {
        if ($slug === false) {
            $this->db->like('ID_menu', 'SC0');
            $query = $this->db->get('table_card_menu');
            return $query->result_array();
        }

        $query = $this->db->get_where('table_card_menu', array('slug' => $slug));
        return $query->row_array();
    }
    public function getMaterial_product()
    {
        $query = $this->db->get_where('table_data_input');
        return $query->result_array();
    }
}
