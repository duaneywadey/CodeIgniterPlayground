<?php 

class UserModel extends CI_model
{
	public function showAllUsers()
	{
		return $this->db->query("SELECT * FROM users")->result();

	}

	public function showAllUsersByLetter()
	{
		return $this->db->query("SELECT * FROM users WHERE username LIKE 'a%'")->result();
	}

	public function showChoices()
	{
		return $this->db->query("SELECT * FROM choices WHERE question_id = 8")->result();
	}

	public function showCandidatesByCategory()
	{
		return $this->db->query("SELECT * FROM candidates WHERE category_id = 3")->result();
	}


}

?>