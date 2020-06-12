<?php
class MemberModel extends Model{

	public function Index(){
		$this->query('SELECT * FROM member ORDER BY create_date DESC');
		$rows = $this->resultSet();
		return $rows;
	}


	public function add(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['name'] == '' || $post['email'] == '' || $post['contact_no'] == '' || $post['password'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
			// Insert into MySQL
			$this->query('INSERT INTO member (name, email, contact_no, password) VALUES(:name, :email, :contact_no, :password)');
			$this->bind(':name', $post['name']);
			$this->bind(':email', $post['email']);
			$this->bind(':contact_no', $post['contact_no']);
			$this->bind(':password', $post['password']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'member');
			}
		}
		return;
	}
}