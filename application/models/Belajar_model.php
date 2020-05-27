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
            $this->db->like('ID_menu', 'BP');
            $query = $this->db->get('menu');
            return $query->result_array();
        }

        $query = $this->db->get_where('menu', array('slug' => $slug));
        return $query->row_array();
    }

    public function get_card_belajar_service($slug = false)
    {
        if ($slug === false) {
            $this->db->like('ID_menu', 'BS');
            $query = $this->db->get('menu');
            return $query->result_array();
        }

        $query = $this->db->get_where('menu', array('slug' => $slug));
        return $query->row_array();
    }
    public function getMaterial_product($id)
    {
        $this->db->like('ID_menu', $id);
        $query = $this->db->get('input');
        return $query->result_array();
    }
}
