<?php 
class User_model extends CI_Model{
    private $tabel = "user";

    public function getAll(){
        $query = $this->db->get('mobil');
        return $query->result();
    }
    public function getByid($id){
        $query = $this->db->get_where('mobil', ['id' => $id ] );
        return $query->row();
    }
    public function login($uname,$pass){
       $sql = "SELECT * FROM user WHERE username=? and password=MDS(?)";
        $data = [$uname, $pass];
        $query = $this->db->query($sql, $data);
        return $query->row();
    }

}
?>