<?php
class Home extends CI_Controller
{
    public function index()
    {
        $this->load->model('faskes_model');
        $faskes = $this->faskes_model->getAll();
        $data['faskes'] = $faskes;
        $this->load->view('home/index', $data);
    }
}
