<?php
    class Nilai_rating extends CI_Controller{
        public function index(){
            $this->load->model('rating_model');
            $nilai_rating= $this->rating_model->getAll();
            $data['nilai_rating'] = $nilai_rating;

            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('nilai_rating/index', $data);
            $this->load->view('layouts/footer');
        }   
        public function detail($id){
            // akses model mahasiswa
            $this->load->model('rating_model');
            $rtng = $this->rating_model->getById($id);
            $data['rtng'] = $rtng;
            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('nilai_rating/detail', $data);
            $this->load->view('layouts/footer');
        }
        public function form(){
            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('nilai_rating/form');
            $this->load->view('layouts/footer');
        }
        public function save(){
            $this->load->model('rating_model', 'nilai_rating');

            $_nama = $this->input->post('nama');

            $data_rating['nama'] = $_nama;

            if((!empty($_idedit))){ //update
                $data_rating['id'] = $_idedit;
                $this->nilai_rating->update($data_rating);
            }else{
                //  data baru
                $this->nilai_rating->simpan($data_rating);
            }
            redirect('nilai_rating','refresh');
        }
        public function edit($id){
            // akses model faskes   
           
            $this->load->model('rating_model','nilai_rating');
            $obj_rating = $this->nilai_rating->getById($id);
            $data['obj_rating'] = $obj_rating;
            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('nilai_rating/edit', $data);
            $this->load->view('layouts/footer');
        }
        public function delete($id){
            $this->load->model('rating_model','nilai_rating');
            // Mengecek data faskes berdasarkan id
            $data_rating['id'] = $id;
            $this->nilai_rating->delete($data_rating);
            redirect('nilai_rating','refresh');
        }
    }
?>  