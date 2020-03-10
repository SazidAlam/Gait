<?php
class CategoryModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM category ORDER BY create_date DESC');
		$rows = $this->resultSet();
		return $rows;
	}

	public function adds(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['name'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
			// Insert into MySQL
			$this->query('INSERT INTO category (name) VALUES(:name)');
			$this->bind(':name', $post['name']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'category');
			}
		}
		return;
	}
}