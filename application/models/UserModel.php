<?php 

class UserModel extends CI_model
{
	public function showAllUsers()
	{
		$this->db->from('users');
		$query = $this->db->get();
		return $query->result();
	}

	public function showAllUsersByLetter()
	{
		$this->db->from('users')->like("username", "t");
		$query = $this->db->get();
		return $query->result();
	}

	public function showChoices()
	{
		$this->db->from('choices')->where('question_id', 8);
		$query = $this->db->get();
		return $query->result();
	}

}

?>