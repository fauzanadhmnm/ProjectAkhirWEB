    <?php
    class Kecamatan extends CI_Controller{
        public function index(){
            $this->load->model('kecamatan_model');
            $kecamatan = $this->kecamatan_model->getAll();
            $data['kecamatan'] = $kecamatan;

            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('kecamatan/index', $data);
            $this->load->view('layouts/footer');
        }
        public function detail($id){
            // akses model mahasiswa
            $this->load->model('kecamatan_model');
            $kecmt = $this->kecamatan_model->getById($id);
            $data['kecmt'] = $kecmt;
            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('kecamatan/detail', $data);
            $this->load->view('layouts/footer');
        }
        public function form(){
            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('kecamatan/form');
            $this->load->view('layouts/footer');
        }
        public function save(){
            $this->load->model('kecamatan_model', 'kecamatan');

            $_nama = $this->input->post('nama');

            $data_kecamatan['nama'] = $_nama;

            if((!empty($_idedit))){ //update
                $data_kecamatan['id'] = $_idedit;
                $this->kecamatan->update($data_kecamatan);
            }else{
                //  data baru
                $this->kecamatan->simpan($data_kecamatan);
            }
            redirect('kecamatan','refresh');
        }
        public function edit($id){
            // akses model faskes   
           
            $this->load->model('kecamatan_model','kecamatan');
            $obj_kecamatan = $this->kecamatan->getById($id);
            $data['obj_kecamatan'] = $obj_kecamatan;
            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('kecamatan/edit', $data);
            $this->load->view('layouts/footer');
        }
        public function delete($id){
            $this->load->model('kecamatan_model','kecamatan');
            // Mengecek data faskes berdasarkan id
            $data_kecamatan['id'] = $id;
            $this->kecamatan->delete($data_kecamatan);
            redirect('kecamatan','refresh');
        }
    }
?>   