<?

class Belajar_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_card_belajar_product() {
        $this->db->like('ID_menu','PC00');
        $query = $this->db->get('table_card_menu');
        return $query->result_array();
    }

    public function get_card_belajar_service() {
        $this->db->like('ID_menu','SC00');
        $query = $this->db->get('table_card_menu');
        return $query->result_array();
    }
}