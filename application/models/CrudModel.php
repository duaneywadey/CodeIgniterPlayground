<?php 

class CrudModel extends CI_model
{
	function saveRecord($data)
	{
		$this->db->insert('crud_codeigniter', $data);
		return true;
	}

}

?>