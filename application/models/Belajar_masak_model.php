<?

class Belajar_masak_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_card_belajar() {
        $this->db->like('ID_menu','PC00');
        $query = $this->db->get('table_card_menu');
        return $query->result_array();
    }
}