<?php
class Akun_model extends CI_Model {
    public function getAllAkun()
    {
        return $query = $this->db->get('user')->result();
    }

    public function all(){
        $query = $this->db->query("SELECT * from user");
        $data = $query->result();

        return $data;
    }

    function input_data($table,$data){
		$this->db->insert($table,$data);
	}

    function display_row($id){		
		$query = $this->db->query("SELECT * from user WHERE id = '".$id."'");

        foreach ($query->result_array() as $row)
		{
	       return $row;
		}
	}

    public function updateAkun($data, $id){
        $this->db->where("id", $id);
        $this->db->update("user", $data);
    }

    function hapus_data($id){
		$this->db->where('id', $id);
		$this->db->delete('user');
	}
}