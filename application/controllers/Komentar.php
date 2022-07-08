<?php
class Komentar extends CI_Controller
{
    public function index()
    {
        $this->load->model('komentar_model');
        $komentar = $this->komentar_model->getAll();
        $data['komentar'] = $komentar;
        $this->load->model('rating_model');
        $nilai_rating = $this->rating_model->getAll();
        $data['nilai_rating'] = $nilai_rating;


        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('komentar/index', $data);
        $this->load->view('layouts/footer');
    }
}
