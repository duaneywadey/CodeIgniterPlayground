<?php 

class CrudModel extends CI_model
{
	public function saveRecord($data)
	{
		$this->db->insert('crud_codeigniter', $data);
		return true;
	}

	public function viewAllRecords()
	{
		return $this->db->query("SELECT * FROM crud_codeigniter")->result();
	}


}

?>