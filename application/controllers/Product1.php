<?php
class Product extends CI_Controller {
    public function index() {
        // Panggil model
        $this->load->model('product_model');

        // Ambil data dari model
        $data['modpod'] = $this->product1_model->get_modpod();
        $data['liquid'] = $this->product1_model->get_liquid();
        $data['aksesoris'] = $this->product1_model->get_aksesoris();

        // Load view
        $this->load->view('mod', $data);
    }
}
?>
