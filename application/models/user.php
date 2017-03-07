<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

	public function get_users($userdata)
	{
		$query = 'SELECT * FROM users WHERE email = ?';
		return $this->db->query($query, $userdata['email'])->row_array();
	}

	public function register($userdata)
	{
		$query = "INSERT INTO users (name, alias, email, password, date_of_birth, created_at, updated_at) VALUES (?, ?, ?, ?, ?, NOW(), NOW())";
		$values = array($userdata['name'], $userdata['alias'], $userdata['email'], $userdata['password'], $userdata['date_of_birth']);
		return $this->db->query( $query, $values );
	}

	public function login($loginData)
	{
		$query = "SELECT * FROM users WHERE email = ? AND password = ?";
		$values = array($loginData['email'], $loginData['password']);
		$user = $this->db->query( $query, $values )->row_array();
		return $user;
	}

	public function get_all_users($id)
	{
		$query = "SELECT * FROM users WHERE users.id NOT LIKE ?";
		$users = $this->db->query( $query, array($id) )->result_array();
		return $users;
	}
}

?>