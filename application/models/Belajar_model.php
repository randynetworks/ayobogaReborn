<?

class Belajar_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_card_belajar_product($slug = FALSE) {

        if ($slug === FALSE) {
            $this->db->like('ID_menu','PC00');
            $query = $this->db->get('table_card_menu');
            return $query->result_array();
        }

        
        $query = $this->db->get_where('table_card_menu', array('slug' => $slug));
        return $query->row_array();        
        
    }

    public function get_card_belajar_service() {
        $this->db->like('ID_menu','SC00');
        $query = $this->db->get('table_card_menu');
        return $query->result_array();
    }
}