<?php
    class Jenis_faskes extends CI_Controller{
        public function index(){
            $this->load->model('jenis_model');
            $jenis_faskes = $this->jenis_model->getAll();
            $data['jenis_faskes'] = $jenis_faskes;

            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('jenis_faskes/index', $data);
            $this->load->view('layouts/footer');
        }
        public function detail($id){
            // akses model mahasiswa
            $this->load->model('jenis_model');
            $jnsfks = $this->jenis_model->getById($id);
            $data['jnsfks'] = $jnsfks;
            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('jenis_faskes/detail', $data);
            $this->load->view('layouts/footer');
        }
        public function form(){
            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('jenis_faskes/form');
            $this->load->view('layouts/footer');
        }
        public function save(){
            $this->load->model('jenis_model', 'jenis_faskes');

            $_nama = $this->input->post('nama');

            $data_jenis['nama'] = $_nama;

            if((!empty($_idedit))){ //update
                $data_jenis['id'] = $_idedit;
                $this->jenis_faskes->update($data_jenis);
            }else{
                //  data baru
                $this->jenis_faskes->simpan($data_jenis);
            }
            redirect('jenis_faskes','refresh');
        }
        public function edit($id){
            // akses model faskes   
           
            $this->load->model('jenis_model','jenis_faskes');
            $obj_jenis = $this->jenis_faskes->getById($id);
            $data['obj_jenis'] = $obj_jenis;
            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('jenis_faskes/edit', $data);
            $this->load->view('layouts/footer');
        }
        public function delete($id){
            $this->load->model('jenis_model','jenis_faskes');
            // Mengecek data faskes berdasarkan id
            $data_jenis['id'] = $id;
            $this->jenis_faskes->delete($data_jenis);
            redirect('jenis_faskes','refresh');
        }
    }
?>    