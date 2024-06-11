<?php
class Product1_model extends CI_Model {
    public function get_modpod() {
        return $this->db->where('tipe', 'modpod')->get('product')->result_array();
    }

    public function get_liquid() {
        return $this->db->where('tipe', 'liquid')->get('product')->result_array();
    }

    public function get_aksesoris() {
        return $this->db->where('tipe', 'aksesoris')->get('product')->result_array();
    }
}
?>
