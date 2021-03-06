<?php
class Rating_model extends CI_Model{
    public $id, $nama;
    
    public function getAll(){
       $query = $this->db->get('nilai_rating');
       return $query->result();
    }
    public function getById($id){
        $this->db->where("id", $id);
        $query = $this->db->get_where('nilai_rating', ['id' => $id]);
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO nilai_rating (nama) VALUES (?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE nilai_rating SET nama=?  WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus data faskes
        $sql = "DELETE FROM nilai_rating WHERE id=?";
        $this->db->query($sql,$data);
    }
}
?>