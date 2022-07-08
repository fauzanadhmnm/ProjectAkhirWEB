<?php
class Faskes extends CI_Controller
{
    public function index()
    {

        $this->load->model('faskes_model');
        $faskes = $this->faskes_model->getAll();
        $data['faskes'] = $faskes;

        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('faskes/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id)
    {
        // akses model mahasiswa
        $this->load->model('faskes_model');
        $fkes = $this->faskes_model->getById($id);
        $data['fkes'] = $fkes;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('faskes/detail', $data);
        $this->load->view('layouts/footer');
    }
    public function form()
    {
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('faskes/form');
        $this->load->view('layouts/footer');
    }
    public function save()
    {
        $this->load->model('faskes_model', 'faskes');

        $_nama = $this->input->post('nama');
        $_alamat = $this->input->post('alamat');
        $_latlong = $this->input->post('latlong');
        $_jenis_id = $this->input->post('jenis_id');
        $_deskripsi = $this->input->post('deskripsi');
        $_skor_rating = $this->input->post('skor_rating');
        $_foto1 = $this->input->post('foto1');
        $_foto2 = $this->input->post('foto2');
        $_foto3 = $this->input->post('foto3');
        $_kecamatan_id = $this->input->post('kecamatan_id');
        $_website = $this->input->post('website');
        $_jumlah_dokter = $this->input->post('jumlah_dokter');
        $_jumlah_pegawai = $this->input->post('jumlah_pegawai');

        $data_faskes['nama'] = $_nama;
        $data_faskes['alamat'] = $_alamat;
        $data_faskes['latlong'] = $_latlong;
        $data_faskes['jenis_id'] = $_jenis_id;
        $data_faskes['deskripsi'] = $_deskripsi;
        $data_faskes['skor_rating'] = $_skor_rating;
        $data_faskes['foto1'] = $_foto1;
        $data_faskes['foto2'] = $_foto2;
        $data_faskes['foto3'] = $_foto3;
        $data_faskes['kecamatan_id'] = $_kecamatan_id;
        $data_faskes['website'] = $_website;
        $data_faskes['jumlah_dokter'] = $_jumlah_dokter;
        $data_faskes['jumlah_pegawai'] = $_jumlah_pegawai;

        if ((!empty($_idedit))) { //update
            $data_faskes['id'] = $_idedit;
            $this->faskes->update($data_faskes);
        } else {
            //  data baru
            $this->faskes->simpan($data_faskes);
        }
        redirect('faskes', 'refresh');
    }
    public function edit($id)
    {
        // akses model faskes   

        $this->load->model('faskes_model', 'faskes');
        $obj_faskes = $this->faskes->getById($id);
        $data['obj_faskes'] = $obj_faskes;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('faskes/edit', $data);
        $this->load->view('layouts/footer');
    }
    public function delete($id)
    {
        $this->load->model('faskes_model', 'faskes');
        // Mengecek data faskes berdasarkan id
        $data_faskes['id'] = $id;
        $this->faskes->delete($data_faskes);
        redirect('faskes', 'refresh');
    }

    public function upload1()
    {

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 3000;
        $config['max_width']            = 3000;
        $config['max_height']           = 3000;

        $_nama = $this->input->post('nama');

        $array = explode('.', $_FILES['fotofks']['name']);
        $extension = end($array);
        $new_name = $_nama . ' f_1 ' . '.' . $extension;
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);

        //var_dump($this->upload->do_upload('fotofks'));

        if (!$this->upload->do_upload('fotofks')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            var_dump($this->faskes_model->simpan_foto1(implode('_', explode(' ', $new_name)), $this->input->post('id_faskes')));
        }
        return redirect('tampil/faskes');
    }
    public function upload2()
    {

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 3000;
        $config['max_width']            = 3000;
        $config['max_height']           = 3000;

        $_nama = $this->input->post('nama');

        $array = explode('.', $_FILES['fotofks']['name']);
        $extension = end($array);
        $new_name = $_nama . ' f_2 ' . '.' . $extension;
        $config['file_name'] = $new_name;
        $config['width'] = 600;
        $config['height'] = 400;

        $this->load->library('upload', $config);

        //var_dump($this->upload->do_upload('fotofks'));

        if (!$this->upload->do_upload('fotofks')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            var_dump($this->faskes_model->simpan_foto2(implode('_', explode(' ', $new_name)), $this->input->post('id_faskes')));
        }
        return redirect('tampil/faskes');
    }
    public function upload3()
    {

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 3000;
        $config['max_width']            = 3000;
        $config['max_height']           = 3000;

        $_nama = $this->input->post('nama');

        $array = explode('.', $_FILES['fotofks']['name']);
        $extension = end($array);
        $new_name = $_nama . ' f_3 ' . '.' . $extension;
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);

        // var_dump($this->upload->do_upload('fotofks'));

        if (!$this->upload->do_upload('fotofks')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            var_dump($this->faskes_model->simpan_foto3(implode('_', explode(' ', $new_name)), $this->input->post('id_faskes')));
        }
        return redirect('tampil/faskes');
    }
}
