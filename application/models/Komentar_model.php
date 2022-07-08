<?php
class Komentar_model extends CI_Model{
    public $id, $tanggal, $isi, $users_id, $faskes_id, $nilai_rating_id;
    
    public function getAll(){
       $query = $this->db->get('komentar');
       return $query->result();
    }
    public function getById($id){
        $this->db->where("id", $id);
        $query = $this->db->get_where('komentar', ['id' => $id]);
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO komentar (tanggal, isi, users_id, faskes_id, nilai_rating_id) VALUES (?,?,?,?,?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE komentar SET tanggal=?, isi=?, users_id=?, faskes_id=?, nilai_rating_id=?  WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus data faskes
        $sql = "DELETE FROM komentar WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function daftar($data_user){
        $sql = "INSERT INTO komentar (tanggal, isi, user_id, faskes_id, nilai_rating_id) VALUES (now(),?,?,?,?)"; 
        $this->db->query($sql, $data_user);
    }
}
?>