<?php
class Jenis_model extends CI_Model{
    public $id, $nama;
    
    public function getAll(){
       $query = $this->db->get('jenis_faskes');
       return $query->result();
    }
    public function getById($id){
        $this->db->where("id", $id);
        $query = $this->db->get_where('jenis_faskes', ['id' => $id]);
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO jenis_faskes (nama) VALUES (?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE jenis_faskes SET nama=?  WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus data faskes
        $sql = "DELETE FROM jenis_faskes WHERE id=?";
        $this->db->query($sql,$data);
    }
}
?>