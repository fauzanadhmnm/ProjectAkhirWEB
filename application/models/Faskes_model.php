 <?php
class Faskes_model extends CI_Model{
        public $id, $nama, $alamat, $latlong, $jenis_id, $deskripsi, $skor_rating, $foto1, $foto2, $foto3, $kecamatan_id, $website, $jumlah_dokter, $jumlah_pegawai;
        public function getAll(){
            $query = $this->db->get('faskes');
            return $query->result();
        }
         public function getById($id){ 
            $query = $this->db->get_where('faskes', ['id' => $id]);
            return $query->row();
        }
        public function simpan($data){
            $sql = "INSERT INTO faskes (nama, alamat, latlong, jenis_id, deskripsi, skor_rating, foto1, foto2, foto3, kecamatan_id, website, jumlah_dokter, jumlah_pegawai) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
    
            $this->db->query($sql, $data);
            $insert_id = $this->db->insert_id();
            return $this->getById($insert_id);
        }

        public function simpan_foto1($foto, $fakses_id)
        {
            return $this->db->update('faskes', ['foto1' => $foto], ['id' => $fakses_id]);
        }

        public function simpan_foto2($foto, $fakses_id)
        {
            return $this->db->update('faskes', ['foto2' => $foto], ['id' => $fakses_id]);
        }

        public function simpan_foto3($foto, $fakses_id)
        {
            return $this->db->update('faskes', ['foto3' => $foto], ['id' => $fakses_id]);
        }

        public function update($data){
            $sql = "UPDATE faskes SET nama=?,alamat=?,latlong=?,jenis_id=?,deskripsi=?,skor_rating=?,foto1=?,foto2=?,foto3=?,kecamatan_id=?,website=?,jumlah_dokter=?,jumlah_pegawai=?  WHERE id=?";
            $this->db->query($sql,$data);
        }
        public function delete($data){
            // hapus data faskes
            $sql = "DELETE FROM faskes WHERE id=?";
            $this->db->query($sql,$data);
        }
    }
?>